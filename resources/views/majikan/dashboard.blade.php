@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">

    <h3 align="center">Selamat Datang, {{Auth::user()->name}}!</h3>
    <br>
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
                      <p class="lead ml-3">{{Auth::user()->alamat}}</p>
                      <p class="lead ml-3">{{Auth::user()->telepon}}</p>
                </div>
                <hr>
                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#basicModal">Edit Data</a>
              </div>
            </div>            
        </div>
        <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <div class="card-header">Pekerja</div>
              <div class="card-body">
                <h4 class="card-title">Light card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>            
        </div>
        <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <div class="card-header">Status</div>
              <div class="card-body">
                <h4 class="card-title">Light card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
        <form method="POST" action="{{ url('/DataMajikan') }}">
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
          </div>
          <button type="submit" class="btn btn-md btn-primary">Save changes</button>
        </form>
        
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

@endsection
