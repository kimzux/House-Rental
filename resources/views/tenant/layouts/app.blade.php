@include('tenant.layouts.header')
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">House<sub>Rental</sub></a></h1>
      <!-- .navbar -->
       <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Houses</a></li>
          <li><a class="nav-link scrollto" href="#team">Rooms</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
   </div>
  </header>
  <!-- End Header -->
  <main class="main">
            @yield('content')
        </main>


  @include('tenant.layouts.footer')