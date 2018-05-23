<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('agency');
    }



    public function index()
    {
        //
        echo "string";

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
        //
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
        $user = Auth::id();
        // dd($user);
        $DataAgency = array(
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
            'A_website' => $request->input('A_website'),
            'A_deskripsi' => $request->input('A_deskripsi'),
            'P_verifikasi_penyalur' => $request->input('verifikasi')
        );

        User::find($user)->update($DataAgency);

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

    public function delete_staff($id)
    {

        $DataPekerja = array(
            'P_penyalur' => NULL,

            'P_pengalaman' => '-',
            'P_status' => '-',
            'P_anak' => '-',
            'P_menginap' => '-', 
            'P_anjing' => '-',
            'P_pendidikan' => '-',
            'P_gaji' => '-',
            'P_bahasa' => '-',
            'P_keahlian' => '-',
            'P_bisabekerjadi' => '-'
        );

        User::find($id)->update($DataPekerja);
        return redirect()->back()->with("success","Anggota Terhapus!");        

    }    


    public function detail_pekerja($id)
    {

        $dataid = User::all()->where('id',$id);
        // dd($dataid);
        return view('agency.detail_pekerja',['dataid' => $dataid]);

    }

    public function save_detail_pekerja(Request $request, $id)
    {
        //echo $id;

        $detail_pekerja = array(

            'P_pengalaman' => $request->input('pengalaman'),
            'P_status' => $request->input('status'),
            'P_anak' => $request->input('anak'),
            'P_menginap' => $request->input('menginap'), 
            'P_anjing' => $request->input('anjing'),
            'P_pendidikan' => $request->input('pendidikan'),
            'P_gaji' => $request->input('gaji'),
            'P_bahasa' => $request->input('bahasa'),
            'P_keahlian' => $request->input('keterampilan'),
            'P_bisabekerjadi' => $request->input('kerjadi')

        );

        //dd($detail_pekerja);
        User::find($id)->update($detail_pekerja);
        return redirect()->back()->with("success","Detail ter Update!");

    }




}
