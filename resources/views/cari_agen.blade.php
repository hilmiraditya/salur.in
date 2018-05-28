@section('content')
    <!-- Page Content -->             
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <br><br>
          <div class="list-group">
            <h3 class="text-primary">Cari Agen</h3>
            <form method="post" action="{{url('/CariAgen')}}">
              {{ csrf_field() }}
            <a href="#" class="list-group-item">
              <label>Nama : </label>
              <input type="text" name="nama_lengkap" class="form-control" id="pwd">            
            </a>
            <a href="#" class="list-group-item">
              <label>Wilayah : </label>
              <select name="wilayah" class="form-control" id="exampleFormControlSelect1">
                <option value="surabaya">Surabaya</option>
                <option value="sidoarjo">Sidoarjo</option>
                <option value="malang">Malang</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Alamat : </label>
              <input type="text" name="alamat" class="form-control" id="pwd">            
            </a>
            <a href="#" class="list-group-item" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Cari</button>
            </a>
          </form>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <br>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{ url('images/foto1.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ url('images/foto2.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ url('images/foto3.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>
          <div class="row">

          @if(1)
            @foreach($pekerja as $pekerja)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#">
                  @if($pekerja->foto == NULL)
                    <!--<img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" width="40%" height="auto">-->
                    <img class="card-img-top" src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" alt="">
                  @else
                    <!--<img src="/fotoprofil/" class="foto_profile" alt="Foto Profil" width="40%" height="auto">-->
                    <img class="card-img-top" src="/fotoprofil/{{$pekerja->foto}}" alt="">
                  @endif
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{ $pekerja->nama_lengkap}}</a>
                  </h4>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $pekerja->wilayah}}</li>
                  </ul>                
                </div>
                <div class="card-footer" style="text-align: center;">
                  {{-- @guest --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$pekerja->id}}">Lihat Detil</button>

{{--                   @else
                    @if(Auth::user()->role == 'A')
                    <button type="button" class="btn btn-primary btn-md">Lihat Profil Lengkap</button>
                    <button type="button" class="btn btn-primary btn-md">Rekrut</button>
                    @elseif(Auth::user()->role == 'P')
                    <button type="button" class="btn btn-primary btn-md">Lihat Profil Lengkap</button>           
                  @endif
                  @endguest
 --}}                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal{{$pekerja->id}}" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="text-align: center;">
                    <h5 class="modal-title" id="exampleModalLabel">{{$pekerja->nama_lengkap}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                @if($pekerja->foto == NULL)
                  <img src="https://independentsector.org/wp-content/uploads/2016/12/blankhead.jpg" class="foto_profile" width="40%" height="auto">
                @else
                  <img src="/fotoprofil/{{$pekerja->foto}}" class="foto_profile" alt="Foto Profil" width="40%" height="auto">
                @endif

                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{ $pekerja->telepon}}</li>
                      <li class="list-group-item">{{ $pekerja->alamat}}</li>
                      <li class="list-group-item">{{ $pekerja->A_website}}</li>
                    </ul> 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          @endif


          </div>
          <!-- /.row -->
          <div style="background-color:red;">
          <ul class="next">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </ul>
          </nav>
        </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection