

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eBusiness Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('tema/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('tema/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('tema/lib/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{ asset('tema/css/nivo-slider-theme.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('tema/css/style.css') }}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{ asset('tema/css/responsive.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <img src="{{ asset('tema/img/slider/1.png') }}" alt="">
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Inicio</a>
                  </li>
                  
                  
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>

                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href=# >Drop Down 1</a></li>
                      <li><a href=# >Drop Down 2</a></li>
                    </ul> 
                  </li>

                  <li>
                    <a class="page-scroll" href="#blog">Cursos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contáctanos</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>



  <!-- header end -->

  @yield('content')

  <!-- Start Footer bottom Area -->
 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('tema/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('tema/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('tema/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('tema/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('tema/lib/knob/jquery.knob.js') }}"></script>
  <script src="{{ asset('tema/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('tema/lib/parallax/parallax.js') }}"></script>
  <script src="{{ asset('tema/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('tema/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('tema/lib/appear/jquery.appear.js') }}"></script>
  <script src="{{ asset('tema/lib/isotope/isotope.pkgd.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('tema/contactform/contactform.js') }}"></script>

  <script src="{{ asset('tema/js/main.js') }}"></script>
</body>

</html>
