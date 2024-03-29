<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo url('gymlife'); ?>/css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./about-us.html">Exercise</a></li>
            <li><a href="./class-details.html">Nutrition</a></li>
            <li><a href="./team.html">Profile</a></li>
            <li><a href="#">Other</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/bmi') }}">BMI Calculate</a></li>
                    <li><a href="{{ route('login') }}">Log In</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Log out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form></li>
                </ul>
            </li>
        </ul>
        </nav>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="<?php echo url('gymlife'); ?>/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/exercise') }}">Exercise</a></li>
                            <li><a href="{{ url('/nutrisi') }}">Nutrition</a></li>
                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                            <li><a href="#">Other</a>
                            @if (Route::has('login') || Route::has('register'))
                                <ul class="dropdown">
                                @auth
                                    <li><a href="{{ url('/bmi') }}">BMI Calculate</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                                @else
                                    <li><a href="{{ route('login') }}">Log In</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                                    @endif
                                @endauth
                                </ul>
                            @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo url('gymlife'); ?>/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Exercise</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/exercise') }}">Exercise</a>
                            <span>Detail Exercise</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section id="koleksi">
    <div class="koleksi-container pt-5" data-aos="zoom-in" data-aos-delay="100">
      <center>
        <h1>Detail Buku</h1>
      </center>
    </div>

<?php
include "";
$id = $_GET[''];
$stmt = $koneksi->prepare("SELECT * FROM  WHERE  = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
while($d = $result->fetch_object()) {
?>
        <div class="container-xxl position-absolute text-center pt-3" data-aos="fade-up" data-aos-delay="100">
          <div class="position-relative">
            <div class="row text-center">
                <table class="table table-condensed table-striped table-hover" width="100%">
                  <tbody>
                    <tr>
                      <td class="text-right" style="width:200px;vertical-align:top;">Nama Exercise :</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Kategori :</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">BMI :</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Deskripsi :</td>
                      <td></td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                    <a href="{{ url('/exercise') }}"><button type="button" class="btn btn-primary mx-3 mb-3 col-md-5">Kembali</button></a>
              </div>
              
            </div>
          </div>
        </div>

        

  </section>
  <!-- End Section -->

    

    <!-- **** All JS Files ***** -->
    <script src="<?php echo url('alimie'); ?>/js/jquery.min.js"></script>
    <script src="<?php echo url('alimie'); ?>/js/popper.min.js"></script>
    <script src="<?php echo url('alimie'); ?>/js/alime.bundle.js"></script>
    <script src="<?php echo url('alimie'); ?>/js/default-assets/active.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/jquery.barfiller.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo url('gymlife'); ?>/js/main.js"></script>



</body>

</html>