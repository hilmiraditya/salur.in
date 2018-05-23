@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">

    <h3 align="center">Selamat Datang, {{Auth::user()->name}}!</h3>
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

    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <div class="card-header">Profil {{Auth::user()->name}}</div>
              <div class="card-body">
                <div class="form-group">
                <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                <h5 align="center">{{Auth::user()->name}}</h5>
                <hr>
                <table class="table table-borderless">
                  <tr>
                    <th>No. Telepon</th>
                    <td>{{Auth::user()->telepon}}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>{{Auth::user()->email}}</td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td>{{Auth::user()->alamat}}</td>
                  </tr>
                  <tr>
                    <th>Website</th>
                    <td>{{Auth::user()->A_website}}</td>
                  </tr>
                  <tr>
                    <th>Deskripsi</th>
                    <td>{{Auth::user()->A_deskripsi}}</td>
                  </tr>                                    
                </table>                            

                </div>
                <hr>
                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#basicModal">Edit Data</a>
                <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#basicModal2">Ubah Kode Unik</a>
              </div>
            </div>            
        </div>
        <div class="col-md-8">
            <div class="card bg-light mb-3" style="max-width: 100%;">
              <div class="card-header">Daftar Staff</div>
              <div class="card-body">
                <input width="100%" type="text"  class="form-control-plaintext p-3" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                <table id="myTable" class="table table-bordered" width="100%">
                  <tr class="header">
                    <th style="width:50%;">Nama</th>
                    <th style="width:30%;">Role</th>
                    <th style="width:20%;">Action</th>
                  </tr>
                  @foreach($data as $data)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->P_pekerjaan}}</td>
                    <td>
                      <a href="/edit/{{$data->id}}" class="btn btn-sm btn-primary" >Edit</a>
                      <a href="/hapus/{{$data->id}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
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
        <form method="POST" action="{{ url('/DataAgen') }}">
          <div class="form-group" >
            {{ csrf_field() }}
            <label class="col-form-label" for="inputDefault">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="name" id="inputDefault" value="{{Auth::user()->name}}">
            <label class="col-form-label" for="inputDefault">Email</label>
            <input type="text" class="form-control" placeholder="Email" name="email" id="inputDefault" value="{{Auth::user()->email}}"  readonly="">
            <label class="col-form-label" for="inputDefault">No. Telp</label>
            <input type="text" class="form-control" placeholder="No. Telp" name="telepon" id="inputDefault" value="{{Auth::user()->telepon}}">
            <label class="col-form-label" for="inputDefault">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="inputDefault" value="{{Auth::user()->alamat}}">
            <label class="col-form-label" for="inputDefault">Website</label>
            <input type="text" class="form-control" placeholder="Website" name="A_website" id="inputDefault" value="{{Auth::user()->A_website}}">
            <label class="col-form-label" for="inputDefault">Deskripsi</label>
            <input type="text" class="form-control" placeholder="Deskripsi" name="A_deskripsi" id="inputDefault" value="{{Auth::user()->A_deskripsi}}">
          </div>
          <hr>
          <button type="submit" class="btn btn-md btn-primary">Save changes</button>
        </form>
        

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
        <form method="POST" action="{{ url('/DataAgen') }}">
          <div class="form-group" >
            {{ csrf_field() }}
            <input type="hidden" class="form-control" placeholder="Nama" name="name" id="inputDefault" value="{{Auth::user()->name}}">
            <input type="hidden" class="form-control" placeholder="Email" name="email" id="inputDefault" value="{{Auth::user()->email}}">
            <input type="hidden" class="form-control" placeholder="No. Telp" name="telepon" id="inputDefault" value="{{Auth::user()->telepon}}">
            <input type="hidden" class="form-control" placeholder="Alamat" name="alamat" id="inputDefault" value="{{Auth::user()->alamat}}">
            <input type="hidden" class="form-control" placeholder="Website" name="A_website" id="inputDefault" value="{{Auth::user()->A_website}}">
            <input type="hidden" class="form-control" placeholder="Deskripsi" name="A_deskripsi" id="inputDefault" value="{{Auth::user()->A_deskripsi}}">
            <label class="col-form-label" for="inputDefault">Kode Unik</label>
            <input type="text" class="form-control" placeholder="kode unik" name="verifikasi" id="inputDefault" value="{{Auth::user()->P_verifikasi_penyalur}}">
            
          </div>
          <hr>
          <button type="submit" class="btn btn-md btn-primary">Save</button>
        </form>
        

      </div>
    </div>
  </div>
</div>


{{-- <div class="modal fade" id="basicModal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <br><br>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="myModalLabel">Detail Profil</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/DetailPekerja/{{ $data->id }}') }}">
          <div class="form-group" >
            {{ csrf_field() }}
            <label class="col-form-label" for="inputDefault">Tahun Pengalaman</label>
            <div class="form-group">
              <select class="custom-select" name="pengalaman">
                <option selected="">Lama Tahun</option>
                <option value="0 Tahun">0 Tahun</option>
                <option value="1 Tahun">1 Tahun</option>
                <option value="2 Tahun">2 Tahun</option>
                <option value="3 Tahun">3 Tahun</option>
                <option value="4 Tahun">4 Tahun</option>
                <option value="5 Tahun">5 Tahun</option>
                <option value="6 Tahun">6 Tahun</option>
                <option value="7 Tahun">7 Tahun</option>
                <option value="8 Tahun">8 Tahun</option>
                <option value="9 Tahun">9 Tahun</option>
                <option value="10+ Tahun">10+ Tahun</option>
              </select>
            </div>
            <label class="col-form-label" for="inputDefault">Status</label>
            <div class="form-group">
              <select class="custom-select" name="status">
                <option value="Janda/Duda">Janda/Duda</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
              </select>
            </div>
            <label class="col-form-label" for="inputDefault">Punya anak</label>
            <div class="form-group">
              <select class="custom-select" name="anak">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>            
            <label class="col-form-label" for="inputDefault">Menginap</label>
            <div class="form-group">
              <select class="custom-select" name="menginap">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>                        
            <label class="col-form-label" for="inputDefault">Takut Anjing</label>
            <div class="form-group">
              <select class="custom-select" name="anjing">
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>                        
            <label class="col-form-label" for="inputDefault">Pendidikan Terakhir</label>
            <div class="form-group">
              <select class="custom-select" name="pendidikan">
                <option value="Tidak ada">Tidak ada</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="Perguruan Tinggi">Perguruan Tinggi</option>
              </select>
            </div>                        
            <hr>
            <label class="col-form-label" for="inputDefault">Gaji / Bulan</label>
            <input type="text" class="form-control" placeholder="Gaji/bulan" name="gaji" id="inputDefault" value="{{Auth::user()->P_gaji}}">
            <label class="col-form-label" for="inputDefault">Bahasa</label>
            <input type="text" class="form-control" placeholder="Tahun Pengalaman" name="bahasa" id="inputDefault" value="{{Auth::user()->P_pengalaman}}">
            <label class="col-form-label" for="inputDefault">Keterampilan</label>
            <input type="text" class="form-control" placeholder="Keterampilan" name="keterampilan" id="inputDefault" value="{{Auth::user()->P_pengalaman}}">        
            <label class="col-form-label" for="inputDefault">Bersedia Bekerja di</label>
            <input type="text" class="form-control" placeholder="Surabaya, Jakarta, Padang, ... ," name="kerjadi" id="inputDefault" value="{{Auth::user()->P_pengalaman}}">                                                                                                       
          </div>
          <hr>
          <button type="submit" class="btn btn-md btn-primary">Save</button>
        </form>
        

      </div>
    </div>
  </div>
</div> --}}


<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

</script>

@endsection
