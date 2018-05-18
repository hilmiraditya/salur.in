@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                    <div class="col">
                        <div class="card bg-light">
                            <div class="card-header" align="center"><b>Ubah Biodata</b></div>
                            <div class="card-body">
                                <br>
                                <div align="center">
                                    <img src="https://cdn.vox-cdn.com/thumbor/BM55UJjqHwPOiSuHLts0zDn2lm8=/0x0:657x411/920x613/filters:focal(250x83:354x187)/cdn.vox-cdn.com/uploads/chorus_image/image/57340827/Screen_Shot_2017_10_25_at_4.01.47_PM.0.png" class="img-circle" width="300" height="300">
                                </div>
                                <br>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2" for="email">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <br> 
                                <div class="col-sm-12" align="center">
                                    <a href="{{url('pekerja/editprofil/'.Auth::user()->id)}}" type="button" class="btn btn-warning">Ganti Foto</a>
                                    <a href="{{url('pekerja/editprofil/'.Auth::user()->id)}}" type="button" class="btn btn-primary">Ubah Data</a>
                                </div>
                            </div>
                        </div>                    
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
