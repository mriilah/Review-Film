<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Property Listing by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/template/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/assets/css/animate.css') }}">
    <link rel="stylesheet"href="{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}"/>

    @stack('styles')
<!--a

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->
  
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
        </div>
{{-- logout --}}
    @auth
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <div class="">
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
    @endauth

    @guest
        <li class="nav-item" >
          <a href="/login" class="nav-link">
          <p>
            Login
          </p>
        </li>
      </a>
    @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <h1>ReviewFilm</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/">Home</a></li>
                      <li><a href="/genre">Genre</a></li>
                      <li><a href="/tambah">Tambah Film</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')
  
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Kelompok 7
        
        {{-- Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a --}}
        </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/template/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/template/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('/template/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('/template/assets/js/counter.js') }}"></script>
  <script src="{{ asset('/template/assets/js/custom.js') }}"></script>
  @stack('scripts')
  </body>
</html>