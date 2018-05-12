@extends('layouts.app')
@section('home','active')

@guest
  @include('cari_pekerja')
@else
  @if(Auth::user()->role == 'P')
    @include('cari_agen')
  @endif
  	@include('cari_pekerja')
@endguest