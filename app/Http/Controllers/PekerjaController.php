<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
    public function gantifoto(Request $request)
    {
        $id = Auth::id();
        // dd($user);

        $berkas = $request->file('foto-profil');
        $namafile= time().'.'.$berkas->getClientOriginalExtension();
        $path = public_path('/fotoprofil');
        $berkas->move($path,$namafile);

        $query = DB::table('users')->where('id',$id)->first();

        //dd ($file_foto);

        if ($query->foto != NULL)
        {
            //File::delete('/fotoprofil/'.$file_foto->foto);
            File::delete(public_path('/fotoprofil/'.$query->foto));
        }

        $foto = array(
            'foto' => $namafile
        );

        User::find($id)->update($foto);

        return redirect('/home');
    }

    public function update(Request $request)
    {
        $id = Auth::id();

        $tahun_lahir = DB::table('users')->select('tgllahir')->where('id',$id)->first()->tgllahir;
        $today = date("Y-m-d");
        $diff = date_diff(date_create($tahun_lahir), date_create($today));
        $umur =  $diff->format('%y');

        $berkas = $request->file('foto-profil');
        $namafile= time().'.'.$berkas->getClientOriginalExtension();
        $path = public_path('/fotoprofil');
        $berkas->move($path,$namafile);

        $query = DB::table('users')->where('id',$id)->first();


        if ($query->foto != NULL)
        {
            File::delete(public_path('/fotoprofil/'.$query->foto));
        }

        $DataPekerja = array(
            'foto' => $namafile,
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
            'wilayah' => $request->input('wilayah'),
            'alamat' => $request->input('alamat'),
            'tgllahir' => $request->input('tanggal_lahir'),
            'wilayah' => $request->input('wilayah'),
            'P_usia' => $umur,
            'P_kelahiran' => $request->input('kota_asal'),
            'P_agama' => $request->input('agama'),
            'P_tinggi' => $request->input('tinggi_badan'),
            'P_berat' => $request->input('berat_badan'),
            'P_pekerjaan' => $request->input('customRadio')
        );


        User::find($id)->update($DataPekerja);
  
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
        $namafile= time().'.'.$berkas->getClientOriginalExtension();
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
        $query = DB::table('users')->where('id',$id)->first();

        
        $DataPekerja = array(
            'P_nama_file' => NULL
        );

        //File::delete($namafile);
        File::delete(public_path('/berkas/'.$query->P_nama_file));


        User::find($id)->update($DataPekerja);
        echo "berhasil";   

        return redirect()->back()->with("success","Berkas berhasil dihapus !");
    }
}
