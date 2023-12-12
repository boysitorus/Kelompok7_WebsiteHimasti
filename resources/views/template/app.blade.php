<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website &mdash; Himasti </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fl-bigmug-line.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div class="site-wrap">

        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">
                        <h1 class="mb-0"><a href="{{ route('dashboard') }}" class="text-white h2 mb-0"><strong>Himasti</strong></a></h1>
                    </div>
                    <div class="col-4 col-md-4 col-lg-8">
                        <nav class="site-navigation text-right text-md-right" role="navigation">

                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Beranda</a></li>
                                <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ route('profile') }}">Profile</a></li>
                                <li class="{{ Str::startsWith(request()->route()->getName(), 'kepengurusan') ? 'active' : '' }}"><a href="{{ route('kepengurusan') }}">Kepengurusan</a></li>
                                <li class="{{ Request::is('kegiatan') ? 'active' : '' }}"><a href="{{ route('kegiatan') }}">Kegiatan</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        @yield('content')

        <div id="sosmed-divider" class="bg-primary" data-aos="fade">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <a target="__blank" href="https://www.instagram.com/himasti_itdel/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="
                        class="col-2 text-center py-4 social-icon d-block">
                        <span class="icon-instagram text-white"></span>
                    </a>
    
                    <a target="__blank" href="https://youtube.com/@himastiitdel6503?si=HBKKhxjzJBBN3iua"
                        class="col-2 text-center py-4 social-icon d-block">
                        <span class="icon-youtube text-white"></span>
                    </a>
                </div>
            </div>
        </div>

        <footer class="site-footer">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-4">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">Lokasi</h3>
                            <p>
                                Institut Teknologi Del
                                Jl. Sisingamangaraja, Sitoluama
                                Laguboti, Toba Samosir
                                Sumatera Utara, Indonesia
                                <br>
                                Kode Pos: 22381
                                <br>
                                Telp: +62 632 331234
                                <br>
                                Fax: +62 632 331116
                                <br>
    
                                Email: itdel.himasti@gmail.com
                            </p>
                        </div>
    
                    </div>
    
                    <div class="col-lg-4">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">Tentang Himasti</h3>
                            <p>
                                HIMASTI adalah salah satu himpunan mahasiswa dari tiga himpunan yang berada di Fakultas
                                Informatika dan Teknik Elektro Institut Teknologi Del. Program studi ini berdiri pada tahun
                                2013 dan saat ini
                                Benhard Yudha merupakan Ketua dari himpunan ini. Saat ini himpunan ini memiliki sekitar 210
                                mahasiswa dan mahasiswi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | 
    
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/circleaudioplayer.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('other-js')
</body>

</html>
