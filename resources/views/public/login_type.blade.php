
@extends('public.layouts.master')
@section('title','About')
@section('masuk','active')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <!-- Page Content -->
    <h3 align="center" id="login_title">Login Sebagai?</h3>
    <div class="container" id="login_type">

      <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-lg-12">
            
          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 role_card">
              <div class="card h-100">
                <a href="/pekerja/login"><img class="card-img-top" src="{{ url('images/foto1.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">Pekerja</h4>
                  <a>Temukan Agency yang sesuai dengan tunjangan kerja yang baik</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 role_card">
              <div class="card h-100">
                <a href="/agency/login"><img class="card-img-top" src="{{ url('images/foto4.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">Agency</h4>
                  <a>Temukan pekerja yang cocok untuk direkrut dan salurkan pekerja kepada majikan.</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 role_card">
              <div class="card h-100">
                <a href="/majikan/login"><img class="card-img-top" src="{{ url('images/foto5.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title ">Majikan</h4>
                  <a>Temukan Pekerja dari Agency yang baik dan terpercaya.</a>
                </div>
              </div>
            </div>                        
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection