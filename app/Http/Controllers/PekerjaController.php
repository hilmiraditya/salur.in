<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('pekerja');
    }


    public function index()
    {
     
    }


    public function rekrut(Request $request)
    {               
            $kode = $request->input('kodeunik');

            if(User::where('P_verifikasi_penyalur','=',$kode)->exists())
            {
                $user = Auth::id();
                $agen = DB::table('users')->select('name')->where('P_verifikasi_penyalur',$kode)->first();
                
                // dd($agen->name);

                
                // $DataPekerja = array(
                //     'P_penyalur' => $agen
                // );

                //dd($DataPekerja);
                DB::table('users')
                     ->where('id', $user)
                     ->update(['P_penyalur' => $agen->name]);

                return redirect()->back()->with("success","Anda berhasil bergabung!");                
            }else{
                return redirect()->back()->with("error","kode unik tidak cocok");                
            }

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pekerja.editprofile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //
        $user = Auth::id();

        $berkas = $request->file('foto-profil');
        $namafile= time().'.'.$berkas->getClientOriginalExtension();
        $path = public_path('/fotoprofil');
        $berkas->move($path,$namafile);

        $file_foto = DB::table('users')->select('foto')->where('id',$id)->first();

        if (Auth::id->foto != NULL)
        {
            File::delete($file_foto);
        }

        $DataPekerja = array(
            'foto' => '/fotoprofil/'.$namafile,
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
            'tgllahir' => $request->input('tanggal_lahir'),
            'P_kelahiran' => $request->input('kota_asal'),
            'P_agama' => $request->input('agama'),
            'P_tinggi' => $request->input('tinggi_badan'),
            'P_berat' => $request->input('berat_badan'),
            'P_pekerjaan' => $request->input('customRadio')
        );

        //dd($DataPekerja);

        User::find($user)->update($DataPekerja);

        //return redirect('/home');        
        return redirect()->back()->with("success","Data Updated successfully !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function UploadBerkas(Request $request)
    {
        $user = Auth::id();

        $berkas = $request->file('berkas');
        $namafile= '/berkas/'.time().'.'.$berkas->getClientOriginalExtension();
        $path = public_path('/berkas');
        $berkas->move($path,$namafile);

        $input = array(
            'P_nama_file' => $namafile
        );

        User::find($user)->update($input);

        return redirect('/home');
    }

    public function HapusBerkas($id)
    {
        $namafile_tmp = DB::table('users')->select('P_nama_file')->where('id',$id)->first();

        
        $namafile = $namafile_tmp;

        $DataPekerja = array(
            'P_nama_file' => NULL
        );

        File::delete($namafile);

        User::find($id)->update($DataPekerja);
        echo "berhasil";   

        return redirect('/home');
    }
}
