<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tycoon enterprise</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Custom styles for this template -->

  <style>
    .changeColor{
      color: #00CED1;
    }
  </style>

</head>

<body>

  {{-- top-top-nav --}}
  <header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <h6 class="text-light"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
      width="24" height="24"
      viewBox="0 0 172 172"
      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M77.04167,10.75c-1.93842,-0.02741 -3.74144,0.99102 -4.71865,2.66532c-0.97721,1.6743 -0.97721,3.74507 0,5.41937c0.97721,1.6743 2.78023,2.69273 4.71865,2.66532h3.58333v7.43962c-33.04912,2.7468 -59.125,30.48217 -59.125,64.22705c0,35.5587 28.94128,64.5 64.5,64.5c35.55872,0 64.5,-28.9413 64.5,-64.5c0,-15.8483 -5.7706,-30.35739 -15.29215,-41.60026l6.53678,-6.54378c1.58706,-1.54566 2.06336,-3.90666 1.19965,-5.94672c-0.8637,-2.04007 -2.89048,-3.34134 -5.10493,-3.27756c-1.39592,0.04068 -2.72121,0.62301 -3.69531,1.6237l-6.54378,6.53678c-9.95614,-8.43183 -22.48014,-13.87681 -36.22526,-15.01921v-7.43962h3.58333c1.93842,0.02741 3.74144,-0.99102 4.71865,-2.66532c0.97721,-1.6743 0.97721,-3.74507 0,-5.41937c-0.97721,-1.6743 -2.78023,-2.69273 -4.71865,-2.66532zM85.36312,39.45166c0.43232,0.05273 0.86944,0.05273 1.30176,0c14.45708,0.17602 27.51104,6.00346 37.05811,15.40413c0.1746,0.2028 0.36409,0.39229 0.56689,0.56689c9.55847,9.69663 15.46012,23.00896 15.46012,37.74398c0,29.74897 -24.00101,53.75 -53.75,53.75c-29.74899,0 -53.75,-24.00103 -53.75,-53.75c0,-29.53394 23.6626,-53.37149 53.11312,-53.71501zM109.18669,64.45101c-1.39592,0.04068 -2.72121,0.62301 -3.69531,1.6237l-16.71989,16.71989c-0.90343,-0.24614 -1.83514,-0.37319 -2.77149,-0.37793c-5.93706,0 -10.75,4.81294 -10.75,10.75c0,5.93706 4.81294,10.75 10.75,10.75c3.34038,-0.00176 6.49013,-1.55623 8.52341,-4.20649c2.03328,-2.65026 2.71902,-6.09512 1.85566,-9.322l16.71289,-16.71289c1.58706,-1.54566 2.06336,-3.90666 1.19966,-5.94673c-0.8637,-2.04007 -2.89048,-3.34134 -5.10493,-3.27756z"></path></g></g></svg>  Mon-Sat 8.00-18.00.Sunday CLOSED</h6>
      <div class="collapse navbar-collapse" id="navbarNav"></div>
        <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <h6 class="text-light"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="24" height="24"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M134.2675,161.68c-0.05375,0 -0.1075,0 -0.16125,0c-25.85375,-0.84656 -56.14187,-25.9075 -77.01031,-46.78937c-20.89531,-20.88188 -45.95625,-51.18344 -46.7625,-76.91625c-0.29562,-9.03 21.86281,-25.08781 22.09125,-25.24906c5.75125,-4.00438 12.13406,-2.58 14.75438,1.04812c1.77375,2.45906 18.57062,27.90969 20.39812,30.79875c1.89469,2.99656 1.6125,7.45781 -0.7525,11.9325c-1.30344,2.48594 -5.63031,10.09156 -7.65937,13.63906c2.19031,3.1175 7.98187,10.76344 19.94125,22.72281c11.97281,11.95937 19.60531,17.76437 22.73625,19.95469c3.5475,-2.02906 11.15312,-6.35594 13.63906,-7.65937c4.4075,-2.33813 8.84187,-2.63375 11.86531,-0.77938c3.09063,1.89469 28.47406,18.77219 30.81219,20.39813c1.96187,1.38406 3.225,3.74906 3.48031,6.50375c0.24188,2.78156 -0.61812,5.72437 -2.40531,8.29094c-0.14781,0.215 -16.0175,22.10469 -24.96688,22.10469z"></path></g></g></svg> TelNo.(+001)123-456-789</h6>
            </li>
          </ul>
        </div>
      </div>   
  </nav>

  

  <!-- Navigation -->
  <div class="contaier-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">

      <a class="navbar-brand" href="{{ route('index') }}">TYC<span class="changeColor">OO</span>N<sup>®</sup></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}"><span class="changeColor">HOME
              <span class="sr-only">(current)</span>
            </a>
          </li>
        
          <li class="nav-item dropdown active">
          
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ABOUT US
            </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('opportunity') }}">Catalogs</a>
                <a class="dropdown-item" href="{{ route('honourableMentions') }}">Honourable Mentions</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('motive') }}">Our Motive</a>
              </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="{{ route('service') }}">SERVICES</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="{{ route('portfolio') }}">PORTFOLIO</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="{{ route('prices') }}">PRICES</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

  <!-- Page Content -->
  <main>
    <div class="main-content">
      @yield('content')
      <br>
    </div>
  </main>
 
  <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-2 mb-3 ml-5">

        <!-- Content -->
        <p class="m-0 text-left text-dark"><h4>Partner with Buisness Leaders</h4></p>
        <p class="m-0 text-left text-dark"><h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit, est in sequi unde neque architecto dicta similique ducimus rem, eos nihil nulla eveniet! Dolor obcaecati qui accusantium placeat sit.
        </h6> </p>

      </div>
      
      <!-- Grid column -->
      <div class="col-md-5 mb-md-0 mb-3 ml-5 clearfix">

        <ul class="list-unstyled">
          <li>
             <a href="{{ route('read') }}"><button type="button" class="btn btn-outline-dark">Read More</button></a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>

</footer>
<!-- Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
