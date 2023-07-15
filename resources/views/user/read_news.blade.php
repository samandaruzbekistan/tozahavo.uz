
<!doctype html>
<html lang="en">

<head>
    <title>Tozahavo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">

                <div class="col-1 ">
                    <div class="site-logo">
                        <a href="/"><img src="{{ asset('logo.png') }}" class="img-fluid"></a>
                    </div>
                </div>

                <div class="col-9  text-right">


                    <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="active"><a href="/" class="nav-link">{{ $texts[1][$lang] }}</a></li>
                            <li><a href="{{ route('home') }}#about" class="nav-link">{{ $texts[2][$lang] }}</a></li>
                            <li><a href="{{ route('home') }}#services" class="nav-link">{{ $texts[3][$lang] }}</a></li>
                            <li><a href="{{ route('home') }}#projects" class="nav-link">{{ $texts[4][$lang] }}</a></li>
                            <li><a href="{{ route('home') }}#contact" class="nav-link">{{ $texts[5][$lang] }}</a></li>
                            <li>
                                <a href="{{ route('set_lang', ['lang' => 'uz']) }}" style="margin-left: 0px; margin-right: 0px">Uz</a>
                                <a href="{{ route('set_lang', ['lang' => 'ru']) }}" style="margin-left: 0px; margin-right: 0px">Ru</a>
                                <a href="{{ route('set_lang', ['lang' => 'en']) }}" style="margin-left: 0px; margin-right: 0px">En</a>
                            </li>

                        </ul>
                    </nav>
                </div>


            </div>
        </div>

    </header>


    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 innerpage overlay" style="background-image: url({{ asset('images/'.$news->photo) }})">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center">
                        <span class="d-block mb-3 text-white" data-aos="fade-up">{{ $news->created_at }} <span class="mx-2 text-primary">&bullet;</span> by Admin</span>
                        <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{ $news[$title_lang] }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pr-md-5 mr-auto">
                    <p>{{ $news[$body_lang] }}</p>
                </div>
            </div>
        </div>
    </div>




    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="footer-heading mb-4">{{ $texts[2][$lang] }}</h2>
                    <p>{{ $texts[20][$lang] }}</p>
                </div>
                <div class="col-lg-8 ml-auto">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="footer-heading mb-4">{{ $texts[21][$lang] }}</h2>
                            <ul class="list-unstyled">
                                <li><a href="#home-section">{{ $texts[1][$lang] }}</a></li>
                                <li><a href="#about">{{ $texts[2][$lang] }}</a></li>
                                <li><a href="#services">{{ $texts[3][$lang] }}</a></li>
                                <li><a href="#">{{ $texts[4][$lang] }}</a></li>
                                <li><a href="#contact-section">{{ $texts[5][$lang] }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with by <a href="https://t.me/Samandar_developer" target="_blank" >Gold Apps</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

