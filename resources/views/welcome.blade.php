<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Puskesmas Pasirkaliki">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Webpage Title -->
    <title>SIMAPEG</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="{{asset('images/cimahi.png')}}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Alfy</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('images/cimahi.png')}}" alt="Puskesmas" class="brand-logo"></a>

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#video">Data Pegawai</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li>
                </ul>

                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <span class="nav-item">
                        <a class="btn-solid-sm page-scroll" href="{{ url('/home') }}">Dashboard</a>
                    </span>
                    @else
                        <span class="nav-item">
                            <a class="btn-solid-sm page-scroll" href="{{ route('login') }}">Login</a>
                        </span>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif


            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="main-title">SIMAPEG</h1>
                        <p class="p-large">Sistem Informasi Manajemen Administrasi Pegawai</p>

                        <!-- Sign Up Form -->
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="semail" required>
                                <label class="label-control" for="semail">Email address</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Start free trial</button>
                            </div>
                        </form>
                        <!-- end of sign up form -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-bulb-table.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card first">
                        <div class="card-icon">
                            <span class="fas fa-rocket green"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Integrasi</h5>
                            <div class="card-text">Sistem Informasi pengelolaan administrasi kepegawaian dibuat terintegrasi sebagai upaya peningkatan kualitas layanan di Puskesmas Pasirkaliki </div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card second">
                        <div class="card-icon">
                            <span class="far fa-clock green"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ketepatan</h5>
                            <div class="card-text">Pengelolaan Administrasi kepegawaian berbasis sistem informasi bertujuan untuk ketepatan waktu dalam pengelolaan data kepegawaian </div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card third">
                        <div class="card-icon">
                            <span class="far fa-comments green"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Komunikasi</h5>
                            <div class="card-text">memudahkan bagi manajemen untuk berkomunikasi dengan tenaga kesehatan yang terlibat di lingkunagan Puskesmas Pasirkaliki</div>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->

        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="25">1</div>
                        </div>
                    </div>
                    <!-- end of counter -->

                    <p class="p-large">Tenaga kesehatan baik medis maupun non-medis di Puskesmas Pasirkaliki</p>

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('images/cimahi.png')}}" alt="Cimahi">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('images/germas.png')}}" alt="Germas">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('images/kemenkes.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('images/puskesmas.png')}}" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{asset('images/pemrov.png')}}" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->

    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Manage tasks easier and keep track of things</h2>
                        <p>Nor engrossed affection excellent. Dissimilar compliment cultivated preference eat sufficient may. Well next door soon we mr he four. Assistance impression set insipidity now connection off you should arrive sooner</p>
                        <a class="read-more no-line blue" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Integrate Alfy seamlessly in all your business flows</h2>
                        <p>Solicitude under as seems we me stuff those style at. Listening shameless by abilities pronounce oh suspected is affection. Next it draw in draw much bred. Game of as rest time eyes with of this it. Add was music</p>
                        <a class="read-more no-line blue" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    <!-- Details 3 -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Improved communication with friends and colleagues</h2>
                        <p>She amiable all without say spirits shy clothes morning. Frankness in extensive to belonging improving so certainty. Resolution devonshire pianoforte assistance an he particun middletons is of and of course it's true today</p>
                        <a class="read-more no-line blue" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-3.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of details 3 -->


    <!-- Video -->
    <div id="video" class="basic-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Powering communication and team collaboration</h2>
                        <p>Explain ten man uncivil engaged conduct. Am likewise betrayed as declared absolute do. Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it and all right</p>
                        <a class="read-more no-line" href="article.html">Learn more <span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Video Preview -->
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                            <img class="img-fluid" src="images/video-preview.jpg" alt="alternative">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div> <!-- end of video-wrapper -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Dengan adanya sistem informasi ini diharapkan kinerja puskesmas lebih baik lagi untuk tetap dapat melayani kepada masyarakat khususnya pasirkaliki</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{asset('images/users.png')}}" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">ADE</div>
                                                    <div class="occupation">KA TU Puskesmas Pasirkaliki</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="quotes" src="images/quotes.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Aplikasi yang sangat berguna bagi Puskesmas, terutama dalam pengelolaan administrasi kepegawaian kehususnya di lingkungan Puskesmas Pasirkaliki sehingga tidak ada lagi data2 tenaga kesehatan yang tidak update</p>
                                            <div class="details">
                                                <img class="testimonial-image" src="{{asset('images/users.png')}}" alt="alternative">
                                                <div class="text">
                                                    <div class="testimonial-author">dr. Raya</div>
                                                    <div class="occupation">KA Puskesmas Pasirkaliki</div>
                                                </div> <!-- end of text -->
                                            </div> <!-- end of testimonial-details -->
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About SIMAPEG</h6>
                        <p class="p-small">SIMAPEG atau kepanjangan dari Sistem Informasi Administrasi Kepegawaian khusus dilingkungan Puskesmas Pasirkaliki Dinas Kesehatan Kota Cimahi</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links penting</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="https://cimahikota.go.id" target="__blank">Pemerintah Daerah Kota Cimahi</a></li>
                            <li><a href="https://dinkes.cimahikota.go.id" target="__blank">Dinas Kesehatan Kota Cimahi</a></li>
                            <li><a href="https://dinkes.cimahikota.go.id" target="__blank">Kementerian Kesehatan</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="mailto:contact@site.com"><strong>contact@site.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © {{date('Y')}} | <a href="#your-link">PUSKESMAS PASIRKALIKI</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>
