    
@extends('layouts.master')
@section('title','Home')
@section('home','active')

@section('content')
    <!-- Page Content -->             
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <br><br>
          <div class="list-group">

            <a href="#" class="list-group-item">
              <label>Pekerjaan : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Supir</option>
                <option>Pembantu</option>
                <option>Satpam</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Domisili : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Domisili</option>
                <option>Surabaya</option>
                <option>Sidoarjo</option>
                <option>Malang</option>
                <option>Gresik</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Kota Asal : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Kota</option>
                <option>Surabaya</option>
                <option>Sidoarjo</option>
                <option>Malang</option>
                <option>Gresik</option>
              </select>              
            </a>
            <a href="#" class="list-group-item">
              <label>Pendidikan Terakhir : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Pendidikan</option>
                <option>Kuliah</option>
                <option>SMA</option>
                <option>SMP</option>
                <option>SD</option>
                <option>Tidak Ada</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Status : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <Option>Semua</Option>
                <option>Menikah</option>
                <option>Lajang</option>
                <option>Janda/Duda</option>
              </select>
            </a>
            <a href="#" class="list-group-item">
              <label>Agama : </label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Semua Agama</option>
                <option>Islam</option>
                <option>Kristen Protestan</option>
                <option>Kristen Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Tidak Beragama</option>
              </select>
            </a>
            <a href="#" class="list-group-item" style="text-align: center;">
                <button type="submit" class="btn btn-primary">Cari</button>
            </a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

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

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Ismail Syarief (22)</a>
                  </h4>
                  <p class="text-muted">Pengalaman Kerja :</p>
                  <h5>10 Tahun</h5>
                  <p class="card-text">Performa kerja yang luar biasa sebagai supir pribadi</p>
                </div>
                <div class="card-footer" style="text-align: center;">
                  <button type="button" class="btn btn-primary btn-md">Lihat Profil Lengkap</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

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