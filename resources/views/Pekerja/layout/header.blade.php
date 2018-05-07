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
              
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item @yield('about')">
              
            </li>
            <li class="nav-item @yield('masuk')">
                @guest
              
                @else
                    <li class="dropdown nav-link" id="user-btn">
                        <a href="#" class="dropdown-toggle nav-item" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-link">
                                <a href="{{ url('/pekerja/logout') }}"
                                    onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/pekerja/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}</form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </li>
          </ul>
        </div>
      </div>
    </nav>