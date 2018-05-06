
@extends('public.layouts.master')
@section('title','About')
@section('about','active')

@section('content')
<div class="container">
  <br>
  <div style="text-align: center;">
    <img style="width: 15%;height: 15%;" src="{{ url('images/logo2.png')}}">
  </div>
  <h2 style="text-align: center;" class="display-4">Selamat Datang di <b>Salur.in!</b></h2>
  <br>
  <p class="lead"><b>Salur.in</b> adalah sebuah website yang bertujuan sebagai platform untuk mempertemukan Majika, Pekerja, dan Agen penyedia pekerjaan. <b>Salur.in</b> memberikan kemudahan bagi majikan untuk menemukan pekerja yang cocok dengan kriteria yang diminta, selain itu <b>Salur.in</b> juga memudahkan bagi pekerja yang sedang mencari Agen untuk ditempatkan di sebuah lingkungan kerja baru, dan yang terakhir adalah mempermudah Agen untuk mecari sumber daya manusia yang sesuai dengan kriteria yang diminta.</p>
  <hr class="my-4">
  <i class="fas fa-home fa-lg fa-fw"></i> Alamat : Jl. Klampis No. 23 Sukolilo Surabaya<br>
  <i class="fas fa-globe fa-lg fa-fw"></i> Website : www.salur.in<br>
  <i class="fas fa-envelope fa-lg fa-fw"></i> Email : contact@salur.in<br>
  <i class="fas fa-phone fa-lg fa-fw"></i> Telp : 08127355467<br>
  <p class="lead">
  <br>
  <hr>
  </p>
</div>
@endsection