@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">
    <h3 align="center">Selamat Datang, {{Auth::user()->name}} !</h3>
    <br><br>
    <div class="row">
      <div class="col">
            <div class="card bg-light">
              <div class="card-header" align="center"><b>Biodata</b></div>
              <div class="card-body">
                <br>
                <div align="center">
                  <img src="https://cdn.vox-cdn.com/thumbor/BM55UJjqHwPOiSuHLts0zDn2lm8=/0x0:657x411/920x613/filters:focal(250x83:354x187)/cdn.vox-cdn.com/uploads/chorus_image/image/57340827/Screen_Shot_2017_10_25_at_4.01.47_PM.0.png" class="img-circle" width="300" height="300">
                </div>
                <br>
                <div align="center">
                    <a><b>Profil Diri</b></a>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Nama</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->name}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Email</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->email}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>No. Ktp</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->noktp}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>No. Telepon</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->telepon}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Tanggal Lahir</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->tgllahir}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Alamat</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->alamat}}</a>
                    </div>
                </div>
                <br><hr><br>
                <div align="center">
                  <a><b>Pekerjaan</b></a>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Status Pekerjaan</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->P_status}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Domisili</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->P_domisili}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Kelahiran</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->P_kelahiran}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Pengalaman</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->P_pengalaman}} Tahun</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Penyalur</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->P_penyalur}}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6" align="right">
                        <a><b>Ketersediaan</b></a>
                    </div>
                    <div class="col-sm-6">
                        <a>{{Auth::user()->P_ketersediaan}}</a>
                    </div>
                </div>
                <br><hr><br>
                <div class="col-sm-12" align="center">
                    <a href="{{url('pekerja/editprofil/'.Auth::user()->id)}}" type="button" class="btn btn-primary">Ubah Biodata</a>
                </div>
              </div>
            </div>                    
    </div>
  </div>
</div>
@endsection
