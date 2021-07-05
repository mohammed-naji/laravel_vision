
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

<link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('site/css/carousel.css') }}" rel="stylesheet">
  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('site2_home') }}">Carousel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('site2_home')) ? 'active' : '' }} " href="{{ route('site2_home') }}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('site2_about')) ? 'active' : '' }}" href="{{ route('site2_about') }}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('site2_services')) ? 'active' : '' }}" href="{{ route('site2_services') }}">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('site2_team')) ? 'active' : '' }}" href="{{ route('site2_team') }}">Team</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('site2_faq')) ? 'active' : '' }}" href="{{ route('site2_faq') }}">FAQ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ (request()->routeIs('site2_contact')) ? 'active' : '' }}" href="{{ route('site2_contact') }}">Contact</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  @yield('content')

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2020–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>


  </body>
</html>
