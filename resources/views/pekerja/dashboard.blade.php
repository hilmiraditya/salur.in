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
                @if(Auth::user()->foto == NULL)
                  <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" width="40%" height="auto">
                @else
                  <img src="/fotoprofil/{{Auth::user()->foto}}" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                @endif
                <h5 align="center">{{Auth::user()->name}}</h5>
                <div align="center">
                  @if(Auth::user()->P_pekerjaan == 'PRT')
                    <span class="badge badge-success">{{Auth::user()->P_pekerjaan}}</span>                    
                  @elseif(Auth::user()->P_pekerjaan == 'Supir')
                    <span class="badge badge-info">{{Auth::user()->P_pekerjaan}}</span>
                  @elseif(Auth::user()->P_pekerjaan == 'Satpam')
                    <span class="badge badge-danger">{{Auth::user()->P_pekerjaan}}</span>                    
                  @endif
                </div>
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
                    <th>Jenis Kelamin:</th>
                    <td>{{Auth::user()->kelamin}}</td>
                  </tr>
                  <tr>
                    <th>Alamat:</th>
                    <td>{{Auth::user()->alamat}}</td>
                  </tr>
                  <tr>
                    <th>Tanggal lahir:</th>
                    <td>{{Auth::user()->tgllahir}}</td>
                  </tr>
                  <tr>
                    <th>Usia:</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Kota Asal:</th>
                    <td>{{Auth::user()->P_kelahiran}}</td>
                  </tr>
                  <tr>
                    <th>Agama:</th>
                    <td>{{Auth::user()->P_agama}}</td>
                  </tr>
                  <tr>
                    <th>Tinggi:</th>
                    <td>{{Auth::user()->P_tinggi}}</td>
                  </tr>
                  <tr>
                    <th>Berat:</th>
                    <td>{{Auth::user()->P_berat}}</td>
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
                    <td>{{Auth::user()->P_gaji}}</td>
                  </tr>
                  <tr>
                    <th>Tahun Pengalaman:</th>
                    <td>{{Auth::user()->P_pengalaman}}</td>
                  </tr>
                  <tr>
                    <th>Status:</th>
                    <td>{{Auth::user()->P_status}}</td>
                  </tr>
                  <tr>
                    <th>Punya Anak:</th>
                    <td>{{Auth::user()->P_anak}}</td>
                  </tr>
                  <tr>
                    <th>Menginap:</th>
                    <td>{{Auth::user()->P_menginap}}</td>
                  </tr>                                    
                  <tr>
                    <th>Takut anjing:</th>
                    <td>{{Auth::user()->P_anjing}}</td>
                  </tr>
                  <tr>
                    <th>Bahasa:</th>
                    <td>{{Auth::user()->P_bahasa}}</td>
                  </tr>
                  <tr>
                    <th>Pendidikan Terakhir:</th>
                    <td>{{Auth::user()->P_pendidikan}}</td>
                  </tr>                  
                  <tr>
                    <th>Ketrampilan:</th>
                    <td>{{Auth::user()->P_keahlian}}</td>
                  </tr>
                  <tr>
                    <th>Bersedia Bekerja di:</th>
                    <td>{{Auth::user()->P_bisabekerjadi}}</td>

                  </tr>                                   
                </table>                
              </div>
            </div>            
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
              <div class="card-header">input kode Agen</div>
              <div class="card-body">
              
              @if(Auth::user()->P_penyalur == NULL)
              <form method="POST" action="{{ url('/rekrut') }}">
                <div class="form-group">
                  {{ csrf_field() }}
                  <label class="col-form-label" for="inputDefault">Kode Unik Agen</label>
                  <input type="password" class="form-control" placeholder="Kode Unik" name="kodeunik" id="inputDefault">
                <hr>
                <button type="submit" class="btn btn-md btn-primary">Request</button>
              </form>
              @else
                <h3>Selamat & Sukses!</h3>  
                <p>Anda sedang menjalin kontrak kerja dengan Agen <STRONG>{{Auth::user()->P_penyalur}}</STRONG> </p>
              @endif              
              </div>
            </div>            
        </div>


        <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
              <div class="card-header">Upload Berkas</div>
              <div class="card-body">
                <div class="form-group">
                @if(Auth::user()->P_nama_file == NULL)
                 <a>Upload berkas agar Agen dapat melihat berkasmu. (Upload dengan format ZIP)</a>
                 <br>
                  <hr>
                  <form method="post" action="{{url('/UploadBerkas')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="berkas">
                    <hr>
                  <button type="submit" class="btn btn-primary">Upload</button>
                  </form>   
                @else
                  <a>Berkas telah di upload.</a>
                  <hr>
                  <a class="btn btn-primary" href="{{url('/HapusBerkas/'.Auth::user()->id)}}">Ubah Berkas</a>
                @endif      
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
        <form method="post" action="{{ url('/DataPekerja') }}" enctype="multipart/form-data">
          <div class="form-group" >
            {{ csrf_field() }}
                @if(Auth::user()->foto == NULL)
                  <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" width="40%" height="auto">
                @else
                  <img src="{{Auth::user()->foto}}" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                @endif       
            <label class="col-form-label" for="inputDefault">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="name" id="inputDefault" value="{{Auth::user()->name}}">
            <label class="col-form-label" for="inputDefault">Email</label>
            <input type="text" class="form-control" placeholder="Email" name="email" id="inputDefault" value="{{Auth::user()->email}}" readonly="">
            <label class="col-form-label" for="inputDefault">No. Telp</label>
            <input type="text" class="form-control" placeholder="No. Telp" name="telepon" id="inputDefault" value="{{Auth::user()->telepon}}">
            <label class="col-form-label" for="inputDefault">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="inputDefault" value="{{Auth::user()->alamat}}">
            <label class="col-form-label" for="inputDefault">Tanggal Lahir</label>
            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" id="inputDefault" value="{{Auth::user()->tgllahir}}">
            <label class="col-form-label" for="inputDefault">Kota Asal</label>
            <input type="text" class="form-control" placeholder="" name="kota_asal" id="inputDefault" value="{{Auth::user()->P_kelahiran}}">
            <label class="col-form-label" for="inputDefault">Agama</label>
            <input type="text" class="form-control" placeholder="Alamat" name="agama" id="inputDefault" value="{{Auth::user()->P_agama}}">
            <label class="col-form-label" for="inputDefault">Tinggi</label>
            <input type="number" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan" id="inputDefault" value="{{Auth::user()->P_tinggi}}">
            <label class="col-form-label" for="inputDefault">Berat</label>
            <input type="number" class="form-control" placeholder="Berat Badan" name="berat_badan" id="inputDefault" value="{{Auth::user()->P_berat}}">
            <label class="col-form-label" for="inputDefault">Foto profil</label>
          
              <div class="custom-file">
                <input type="file" name="foto-profil" class="form-control-file" id="exampleFormControlFile1">
              </div>
            
            <label class="col-form-label" for="inputDefault">Pekerjaan</label>
            <div class="form-group form-inline" style="margin: 2rem auto 2rem 1rem">
                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem;">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="PRT" required="">
                    <label class="custom-control-label" for="customRadio1">PRT</label>
                </div>
                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="Supir">
                    <label class="custom-control-label" for="customRadio2">Supir</label>
                </div>
                <div class="custom-control custom-radio" style="margin: auto auto auto 1rem">
                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="Satpam">
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
