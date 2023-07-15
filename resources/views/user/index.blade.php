
<!doctype html>
<html lang="en">

<head>
    <title>Tozahavo</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <li><a href="#about" class="nav-link">{{ $texts[2][$lang] }}</a></li>
                            <li><a href="#services" class="nav-link">{{ $texts[3][$lang] }}</a></li>
                            <li><a href="#projects" class="nav-link">{{ $texts[4][$lang] }}</a></li>
                            <li><a href="#contact" class="nav-link">{{ $texts[5][$lang] }}</a></li>
                            <li>                </li>
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
        <div class="ftco-cover-1 overlay" style="background-image: url({{ asset('images/'.$photos[0]["name"])  }})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h1 class="line-bottom">{{ $texts[0][$lang] }}</h1>
                    </div>
                    <div class="col-lg-5 ml-auto">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pr-md-5 mr-auto">
                    <h2 class="line-bottom">{{ $texts[2][$lang] }}</h2>
                    <p>{{ $texts[6][$lang] }}</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('images/'.$photos[1]["name"])  }}">
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('images/'.$photos[2]["name"])  }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('images/'.$photos[3]["name"])  }}">
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('images/'.$photos[4]["name"])  }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section" style="background-color: #dedffe;" id="services">
        <div class="wrapper" id="wrapper">
            <!-- Setting background-image on the STYLE attribute -->
            <div class="cardd has-bg-img">
                <figure class="card__thumbnail">
                    <img style="filter: brightness(75%);" src="{{ asset('images/'.$photos[5]["name"]) }}">
                    <span class="card__title">{{ $texts[27][$lang] }}</span>
                </figure>
            </div>

            <div class="cardd has-bg-img">
                <figure class="card__thumbnail">
                    <img style="filter: brightness(75%);" src="{{ asset('images/'.$photos[6]["name"]) }}">
                    <span class="card__title">{{ $texts[28][$lang] }}</span>
                </figure>
            </div>

            <div class="cardd has-bg-img">
                <figure class="card__thumbnail">
                    <img style="filter: brightness(75%);" src="{{ asset('images/'.$photos[7]["name"]) }}">
                    <span class="card__title">{{ $texts[29][$lang] }}</span>
                </figure>
            </div>
        </div>

        <div class="wrapper" id="wrapper">
            <!-- Setting background-image on the STYLE attribute -->
            <div class="cardd has-bg-img">
                <figure class="card__thumbnail">
                    <img style="filter: brightness(75%);" src="{{ asset('images/'.$photos[8]["name"]) }}">
                    <span class="card__title">{{ $texts[30][$lang] }}</span>
                </figure>
            </div>

            <div class="cardd has-bg-img">
                <figure class="card__thumbnail">
                    <img style="filter: brightness(75%);" src="{{ asset('images/'.$photos[9]["name"]) }}">
                    <span class="card__title">{{ $texts[31][$lang] }}</span>
                </figure>
            </div>

            <div class="cardd has-bg-img">
                <figure class="card__thumbnail">
                    <img style="filter: brightness(75%);" src="{{ asset('images/'.$photos[10]["name"]) }}">
                    <span class="card__title">{{ $texts[32][$lang] }}</span>
                </figure>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row mb-4">

                <div class="col-md-4 mx-auto">
                    <h2 class="line-bottom text-center">{{ $texts[19][$lang] }}</h2>
                </div>

            </div>

            <div class="row">
                @foreach($news as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="post-entry-1 h-100">
                            <a href="{{ route('read_news', ['id' => $item->id]) }}">
                                <img src="{{ asset('images/'.$item->photo) }}" alt="Image"
                                     class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">

                                <h2><a href="{{ route('read_news', ['id' => $item->id]) }}">{{ $item[$title_lang] }}</a></h2>
                                <span class="meta d-inline-block mb-3">{{ $item->created_at }} <span class="mx-2">by</span> <a href="#">Admin</a></span>
                                <p>{{  \Illuminate\Support\Str::limit($item[$body_lang], 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {!! $news->links() !!}
            </div>
        </div>
    </div>


    <div class="site-section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>{{ $texts[5][$lang] }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d5992.808514326619!2d69.326592!3d41.321822!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzE4LjYiTiA2OcKwMTknMzUuNyJF!5e0!3m2!1sru!2s!4v1689446759052!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">{{ $texts[5][$lang] }}</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block mb-3">
                                <span class="d-block text-black">{{ $texts[22][$lang] }}</span>
                                <span>{{ $texts[23][$lang] }}</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Tel:</span><span>{{ $texts[24][$lang] }}</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>{{ $texts[25][$lang] }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brands pt-5 pb-5">
        <div class="container text-center ">
            <h2 class="mb-5">{{ $texts[33][$lang] }}</h2>
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container d-flex justify-content-between">
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="owl-carousel owl-theme brands_slider">
                            @foreach ($partners as $partner)
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/'.$partner->name) }}" style="width: 100px" alt=""></div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Brands Slider Navigation -->

                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <footer class="site-footer">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('logo2.png') }}" alt="" class="img-fluid col-8">
                    <hr class="text-white">
                    <div class="d-flex justify-content-around border-top pt-2">
                        <!-- Facebook -->
                        <i class="fab fa-facebook-f"></i>

                        <!-- Twitter -->
                        <i class="fab fa-twitter"></i>

                        <!-- Google -->
                        <i class="fab fa-google"></i>

                        <!-- Instagram -->
                        <i class="fab fa-instagram"></i>

                        <!-- Vkontakte -->
                        <i class="fab fa-vk"></i>

                        <!-- Stack overflow -->
                        <i class="fab fa-stack-overflow"></i>

                    </div>
                </div>
                <div class="col-lg-3">
                    <h2 class="footer-heading mb-4">{{ $texts[2][$lang] }}</h2>
                    <p>{{ $texts[20][$lang] }}</p>
                </div>
                <div class="col-lg-3 text-center">
                    <h2 class="footer-heading mb-4">{{ $texts[21][$lang] }}</h2>
                    <ul class="list-unstyled">
                        <li><a href="#home-section">{{ $texts[1][$lang] }}</a></li>
                        <li><a href="#about">{{ $texts[2][$lang] }}</a></li>
                        <li><a href="#services">{{ $texts[3][$lang] }}</a></li>
                        <li><a href="#">{{ $texts[4][$lang] }}</a></li>
                        <li><a href="#contact-section">{{ $texts[5][$lang] }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h2 class="footer-heading mb-4">{{ $texts[5][$lang] }}</h2>
                    <ul class="list-unstyled">
                        <li><a href="#">{{ $texts[24][$lang] }}</a></li>
                        <li><a href="#">{{ $texts[25][$lang] }}</a></li>
                        <li><a href="#">{{ $texts[23][$lang] }}</a></li>
                    </ul>
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
<script type="text/javascript" src="https://popupsmart.com/freechat.js"></script><script> window.start.init({ title: "Assalomu aleykum ✌️", message: "Salom! Sizga qanday yordam bera olamiz?", color: "#fb7400", position: "right", placeholder: "Enter your message", withText: "Write with", viaWhatsapp: "Or write us directly via Whatsapp", gty: "Go to your", awu: "and write us", connect: "Connect now", button: "Write us", device: "everywhere", logo: "https://d2r80wdbkwti6l.cloudfront.net/0aVFjJ3a3GGM190LmXhDh8nlZC7UmtQM.jpg", services: [{"name":"telegram","content":"shumer"},{"name":"phone","content":"+998901890875"},{"name":"sms","content":"+998901890875"}]})</script>

<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".cardd").click(function(){
            console.log(5)
            $("#freechat-icon").click();
        });
    });

    $(document).ready(function(){

        if($('.brands_slider').length)
        {
            var brandsSlider = $('.brands_slider');

            brandsSlider.owlCarousel(
                {
                    loop:true,
                    autoplay:true,
                    autoplayTimeout:5000,
                    nav:false,
                    dots:false,
                    autoWidth:true,
                    items:8,
                    margin:42
                });

            if($('.brands_prev').length)
            {
                var prev = $('.brands_prev');
                prev.on('click', function()
                {
                    brandsSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.brands_next').length)
            {
                var next = $('.brands_next');
                next.on('click', function()
                {
                    brandsSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script>
</body>

</html>

