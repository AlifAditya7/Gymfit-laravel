<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

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
                    <li><a href="#">BMI Calculate</a></li>
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
                        <a href="./index.html">
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
                            <li><a href="./team.html">Profile</a></li>
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
                        <h2>BMI calculator</h2>
                        <div class="bt-option">
                            <a href="{{ url('/') }}">Home</a>
                            <span href="#">BMI calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class="point">18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td class="point">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class="point">30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Height / cm">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Weight / kg">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Age">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Sex">
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->

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