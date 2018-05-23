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
            <div class="card bg-light mb-3" style="max-width: 100%;">
              @foreach($dataid as $dataid)
              <div class="card-header">Profil {{$dataid->name}}</div>
              <div class="card-body">
                <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                <h5 align="center">{{$dataid->name}}</h5>
                  @if($dataid->P_pekerjaan == 'PRT')
                    <span class="badge badge-success">{{$dataid->P_pekerjaan}}</span>                    
                  @elseif($dataid->P_pekerjaan == 'Supir')
                    <span class="badge badge-info">{{$dataid->P_pekerjaan}}</span>
                  @elseif($dataid->P_pekerjaan == 'Satpam')
                    <span class="badge badge-danger">{{$dataid->P_pekerjaan}}</span>                    
                  @endif
                <table class="table table-borderless mt-2">
                  <tr>
                    <th>Telepon:</th>
                    <td>{{$dataid->telepon}}</td>
                  </tr>
                  <tr>
                    <th>Email:</th>
                    <td>{{$dataid->email}}</td>
                  </tr>
                  <tr>
                    <th>Alamat:</th>
                    <td>{{$dataid->alamat}}</td>
                  </tr>
                  <tr>
                    <th>Tanggal lahir:</th>
                    <td>{{$dataid->tgllahir}}</td>
                  </tr>
                  <tr>
                    <th>Usia:</th>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Kota Asal:</th>
                    <td>{{$dataid->P_kelahiran}}</td>
                  </tr>
                  <tr>
                    <th>Agama:</th>
                    <td>{{$dataid->P_agama}}</td>
                  </tr>
                  <tr>
                    <th>Tinggi:</th>
                    <td>{{$dataid->P_tinggi}} Cm</td>
                  </tr>
                  <tr>
                    <th>Berat:</th>
                    <td>{{$dataid->P_berat}} Kg</td>
                  </tr>
                </table>                            
                <div class="form-group"> 
                </div>
                
              </div>
            </div>            
        </div>
        <div class="col-md-8">
            <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
              <div class="card-header">Detail</div>
              <div class="card-body">
                <table class="table table-borderless">
                  <tr>
                    <th>Gaji / Bulan:</th>
                    <td>{{ $dataid->P_gaji }}</td>
                  </tr>
                  <tr>
                    <th>Tahun Pengalaman:</th>
                    <td>{{ $dataid->P_pengalaman }}</td>
                  </tr>
                  <tr>
                    <th>Status:</th>
                    <td>{{ $dataid->P_status }}</td>
                  </tr>
                  <tr>
                    <th>Punya Anak:</th>
                    <td>{{ $dataid->P_anak }}</td>
                  </tr>
                  <tr>
                    <th>Menginap:</th>
                    <td>{{ $dataid->P_menginap }}</td>
                  </tr>                                    
                  <tr>
                    <th>Takut anjing:</th>
                    <td>{{ $dataid->P_anjing }}</td>
                  </tr>
                  <tr>
                    <th>Bahasa:</th>
                    <td>{{ $dataid->P_bahasa }}</td>
                  </tr>
                  <tr>
                    <th>Pendidikan Terakhir:</th>
                    <td>{{ $dataid->P_pendidikan }}</td>
                  </tr>                  
                  <tr>
                    <th>Keahlian:</th>
                    <td>{{ $dataid->P_keahlian }}</td>
                  </tr>
                  <tr>
                    <th>Bersedia Bekerja di:</th>
                    <td>{{ $dataid->P_bisabekerjadi }}</td>

                  </tr>                                   
                </table>       
                                <hr>
                <a href="#" class="btn btn-sm bg-white btn-lg btn-block" data-toggle="modal" data-target="#basicModal">Edit Data</a>
         
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
        <form method="POST" action="/savedetail/{{$dataid->id}}">
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
            <input type="text" class="form-control" placeholder="Gaji/bulan" name="gaji" id="inputDefault" value="{{$dataid->P_gaji}}">
            <label class="col-form-label" for="inputDefault">Bahasa</label>
            <input type="text" class="form-control" placeholder="Tahun Pengalaman" name="bahasa" id="inputDefault" value="{{$dataid->P_bahasa}}">
            <label class="col-form-label" for="inputDefault">Keterampilan</label>
            <input type="text" class="form-control" placeholder="Keterampilan" name="keterampilan" id="inputDefault" value="{{$dataid->P_keahlian}}">        
            <label class="col-form-label" for="inputDefault">Bersedia Bekerja di</label>
            <input type="text" class="form-control" placeholder="Surabaya, Jakarta, Padang, ... ," name="kerjadi" id="inputDefault" value="{{$dataid->P_bisabekerjadi}}">                                                                                                       
          </div>
          <hr>
          <button type="submit" class="btn btn-md btn-primary">Save</button>
        </form>
        

      </div>   </div>
      @endforeach
  </div>
</div>


@endsection

