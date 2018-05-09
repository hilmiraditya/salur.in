@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">
    <h3 align="center">Dashboard {{Auth::user()->name}}</h3>
    <br>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <div class="card-header">Profile</div>
              <div class="card-body">
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
@endsection
