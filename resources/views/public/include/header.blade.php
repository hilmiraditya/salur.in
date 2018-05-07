    <!-- Navigation -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img style="width: 8%;height: 8%;" src="{{url('images/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item @yield('home')">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item @yield('about')">
              <a class="nav-link" href="/tentang">About</a>
            </li>
            <li class="nav-item @yield('masuk')">                
              @if(session()->has('role') == 'pekerja')
                <a class="nav-link" href="/login_type">Profile <i class="fas fa-users"></i></a>
              @elseif(session()->has('role') == 'majikan')
                <a class="nav-link" href="/login_type">Profile <i class="fas fa-users"></i></a>
              @elseif(session()->has('role') == 'agency')
                <a class="nav-link" href="/login_type">Profile <i class="fas fa-users"></i></a>
              @else
                  <a class="nav-link" href="/login_type">Login</a>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>