@extends('layouts.app')
@section('masuk','active')
@section('content')


<div class="container">
    <br>
    {{-- alert --}}
    @if (session('error'))
    <div class="alert alert-danger">
    {{ session('error') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
    @endif
    {{-- end - alert --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <div class="card-header">Profil {{Auth::user()->name}}</div>
              <div class="card-body">
                <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                <h5 align="center">{{Auth::user()->name}}</h5>
                    <span class="badge badge-success">Supir</span>
                <table class="table table-borderless mt-2">
                  <tr>
                    <th>Telepon:</th>
                    <td>{{Auth::user()->telepon}}</td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td>{{Auth::user()->email}}</td>
                  </tr>
                  <tr>
                    <th>Alamat:</th>
                    <td>{{Auth::user()->alamat}}</td>
                  </tr>
                  <tr>
                    <th>Tanggal lahir:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Usia:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Kota Asal:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Agama:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Tinggi:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Berat:</th>
                    <td>-</td>
                  </tr>
                </table>                            
                <div class="form-group"> 
                </div>
                <hr>
                <a href="#" class="btn btn-sm btn-primary btn-lg btn-block" data-toggle="modal" data-target="#basicModal">Edit Data</a>
                
              </div>
            </div>            
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">Detail</div>
              <div class="card-body">
                <table class="table table-borderless">
                  <tr>
                    <th>Gaji / Bulan:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Pengalaman:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Status:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Punya Anak:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Menginap:</th>
                    <td>-</td>
                  </tr>                                    
                  <tr>
                    <th>Takut anjing:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Bahasa:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Pendidikan Terakhir:</th>
                    <td>-</td>
                  </tr>                  
                  <tr>
                    <th>Ketrampilan:</th>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th>Bersedia Bekerja di:</th>
                    <td>-</td>

                  </tr>                                   
                </table>                
              </div>
            </div>            
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
              <div class="card-header">Kontrol Akun</div>
              <div class="card-body">
                <table class="table table-borderless">
                  <tr>
                    <th>Penyalur:</th>
                    <td>-</td>
                  </tr>
                </table>                
              </div>
            </div>            
        </div>        
    </div>
</div>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <br><br>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="myModalLabel">Edit Profil</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/DataPekerja') }}">
          <div class="form-group" >
            {{ csrf_field() }}
            <label class="col-form-label" for="inputDefault">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="name" id="inputDefault" value="{{Auth::user()->name}}">
            <label class="col-form-label" for="inputDefault">Email</label>
            <input type="text" class="form-control" placeholder="Email" name="email" id="inputDefault" value="{{Auth::user()->email}}">
            <label class="col-form-label" for="inputDefault">No. Telp</label>
            <input type="text" class="form-control" placeholder="No. Telp" name="telepon" id="inputDefault" value="{{Auth::user()->telepon}}">
            <label class="col-form-label" for="inputDefault">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="inputDefault" value="{{Auth::user()->alamat}}">
            <label class="col-form-label" for="inputDefault">Tanggal Lahir</label>
            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" id="inputDefault" value=" ">
            <label class="col-form-label" for="inputDefault">Kota Asal</label>
            <input type="text" class="form-control" placeholder="" name="kota_asal" id="inputDefault" value=" ">
            <label class="col-form-label" for="inputDefault">Agama</label>
            <input type="text" class="form-control" placeholder="Alamat" name="agama" id="inputDefault" value=" ">
            <label class="col-form-label" for="inputDefault">Tinggi</label>
            <input type="number" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" id="inputDefault" value=" ">
            <label class="col-form-label" for="inputDefault">Berat</label>
            <input type="number" class="form-control" placeholder="Berat Badan" name="berat" id="inputDefault" value=" ">
            <label class="col-form-label" for="inputDefault">Pekerjaan</label>
            <div class="form-group form-inline" style="margin: 2rem auto 2rem 1rem">
                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="PRT" checked="">
                    <label class="custom-control-label" for="customRadio1">PRT</label>
                </div>
                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="SUP">
                    <label class="custom-control-label" for="customRadio2">Supir</label>
                </div>
                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="SAT">
                    <label class="custom-control-label" for="customRadio3">Satpam</label>
                </div>
            </div>            
            </div>
          <hr>
          <button type="submit" class="btn btn-md btn-primary">Save changes</button>
        </form>
        
      </div>
    </div>
  </div>
</div>



@endsection
