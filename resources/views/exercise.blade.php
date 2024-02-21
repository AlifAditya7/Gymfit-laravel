<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Title -->
        <title>Exercise</title>

        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png" />

        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css" />
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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active"><a href="{{ url('/exercise') }}">Exercise</a></li>
                    <li><a href="./class-details.html">Nutrition</a></li>
                    <li><a href="./team.html">Profile</a></li>
                    <li><a href="#">Other</a>
                    @if (Route::has('login') || Route::has('register'))
                        <ul class="dropdown">
                        @auth
                            <li><a href="#">BMI Calculate</a></li>
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

        <!-- Breadcrumb Area Start -->
        <section
            class="breadcrumb-area bg-img bg-overlay jarallax"
            style="background-image: url(img/bg-img/38.jpg)"
        >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2 class="page-title">Gallery</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"
                                            ><i class="icon_house_alt"></i>
                                            Home</a
                                        >
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Gallery
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->

        <!-- Gallery Area Start -->
        <div class="alime-portfolio-area section-padding-80 clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Projects Menu -->
                        <div
                            class="alime-projects-menu wow fadeInUp"
                            data-wow-delay="100ms"
                        >
                            <div class="portfolio-menu text-center">
                                <button class="btn active" data-filter="*">
                                    All
                                </button>
                                <button class="btn" data-filter=".human">
                                    Human
                                </button>
                                <button class="btn" data-filter=".nature">
                                    Nature
                                </button>
                                <button class="btn" data-filter=".country">
                                    Country
                                </button>
                                <button class="btn" data-filter=".video">
                                    Video
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row alime-portfolio">
                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                        data-wow-delay="100ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/39.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/39.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp"
                        data-wow-delay="300ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/40.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/40.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                        data-wow-delay="500ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/41.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/41.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                        data-wow-delay="700ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/42.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/42.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                        data-wow-delay="100ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/43.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/43.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp"
                        data-wow-delay="300ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/44.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/44.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                        data-wow-delay="500ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/45.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/45.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                        data-wow-delay="700ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/46.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/46.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp"
                        data-wow-delay="100ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/47.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/47.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                        data-wow-delay="300ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/48.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/48.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                        data-wow-delay="500ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/49.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/49.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Single Gallery Item -->
                    <div
                        class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                        data-wow-delay="700ms"
                    >
                        <div class="single-portfolio-content">
                            <img src="img/bg-img/50.jpg" alt="" />
                            <div class="hover-content">
                                <a
                                    href="img/bg-img/50.jpg"
                                    class="portfolio-img"
                                    >+</a
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div
                        class="col-12 text-center wow fadeInUp"
                        data-wow-delay="800ms"
                    >
                        <a href="#" class="btn alime-btn btn-2 mt-15"
                            >View More</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->

        <!-- Follow Area Start -->
        <div class="follow-area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Follow Instagram</h2>
                            <p>@Alime_photographer</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Feed Area -->
            <div class="instragram-feed-area owl-carousel">
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/11.jpg" alt="" />
                    <div
                        class="instagram-hover-content text-center d-flex align-items-center justify-content-center"
                    >
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/12.jpg" alt="" />
                    <div
                        class="instagram-hover-content text-center d-flex align-items-center justify-content-center"
                    >
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/13.jpg" alt="" />
                    <div
                        class="instagram-hover-content text-center d-flex align-items-center justify-content-center"
                    >
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/14.jpg" alt="" />
                    <div
                        class="instagram-hover-content text-center d-flex align-items-center justify-content-center"
                    >
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/15.jpg" alt="" />
                    <div
                        class="instagram-hover-content text-center d-flex align-items-center justify-content-center"
                    >
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/bg-img/16.jpg" alt="" />
                    <div
                        class="instagram-hover-content text-center d-flex align-items-center justify-content-center"
                    >
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>Alime_photographer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Follow Area End -->

        <!-- Footer Area Start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="footer-content d-flex align-items-center justify-content-between"
                        >
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(
                                            new Date().getFullYear()
                                        );
                                    </script>
                                    All rights reserved | This template is made
                                    with
                                    <i
                                        class="fa fa-heart-o"
                                        aria-hidden="true"
                                    ></i>
                                    by
                                    <a
                                        href="https://colorlib.com"
                                        target="_blank"
                                        >Colorlib</a
                                    >
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="#"
                                    ><img src="img/core-img/logo2.png" alt=""
                                /></a>
                            </div>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"
                                    ><i
                                        class="ti-facebook"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                                <a href="#"
                                    ><i
                                        class="ti-twitter-alt"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                                <a href="#"
                                    ><i
                                        class="ti-linkedin"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                                <a href="#"
                                    ><i
                                        class="ti-pinterest"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/alime.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
    </body>
</html>
