<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;


class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showall(){
        if (Auth::guest()) {
            $pekerja = User::all()
                ->where('role','P')
                ->where('wilayah', !NULL)
                ->where('P_pekerjaan', !NULL)
                ->where('P_penyalur', NULL);
        }
        elseif (Auth::user()->role == 'M') {
            //$pekerja = User::whereNotNull('P_penyalur')->get();
             $pekerja = User::all()
                ->where('role','P')
                ->where('wilayah', !NULL)
                ->where('P_pekerjaan', !NULL)
                ->where('P_penyalur', NULL);
        }
        elseif (Auth::user()->role == 'P') {
            $pekerja = User::all()->where('role','A');
        }
        elseif (Auth::user()->role == 'A') {

            $pekerja = User::all()
                ->where('role','P')
                ->where('wilayah', !NULL)
                ->where('P_pekerjaan', !NULL)
                ->where('P_penyalur', NULL);
        }                
        return view('welcome',['pekerja'=> $pekerja]);
    }

    public function cariagen(Request $request)
    {
        $pekerja = DB::table('users')
            ->where('role', 'A')
            ->where('nama_lengkap','like','%'.$request->input('nama_lengkap').'%')
            ->whereNotNull('nama_lengkap')
            ->where('wilayah',$request->input('wilayah'))
            ->where('alamat', $request->input('alamat'))
            ->get();
//        dd ($pekerja);
        return view('welcome',['pekerja'=> $pekerja]);
    }

    public function caripekerja(Request $request)
    {
        $pekerja = DB::table('users')
            ->where('role', !'A')
            ->where('nama_lengkap','like','%'.$request->input('nama_lengkap').'%')
            ->whereNotNull('nama_lengkap')
            ->where('wilayah',$request->input('wilayah'))
            ->where('P_pekerjaan', $request->input('pekerjaan'))
            ->get();
        dd ($pekerja);
        return view('welcome',['pekerja'=> $pekerja]);
    }
}
