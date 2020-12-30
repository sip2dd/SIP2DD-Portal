<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon3.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <x-embed-styles />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('datatables/dataTables.bootstrap4.min.css') }}">
</head>

<body>
    
    @yield('menu')

    @yield('content')

    <footer>
        <!-- Footer Start-->
        <div class="footer-main pt-4">
            <div class="footer-area section-padd-footer">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="single-footer-caption mb-40">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href=""><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                                </div>
                                <div id="icon-footer" class="footer-tittle">
                                    @yield('p2dd_medsos')
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 pl-0">
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Beranda</h4>
                                        <ul>
                                            <li><a href="#">Fitur Kami</a></li>
                                            <li><a href="{!! url('/layanan') !!}">Layanan Terhangat</a></li>
                                            <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                            <li><a href="{!! url('/edukasi') !!}">Materi</a></li>
                                            <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Berita</h4>
                                        <ul>
                                            <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                            <li><a href="{!! url('/beritaterbaru') !!}">Berita Terbaru</a></li>
                                            <li><a href="{!! url('/beritasatgas') !!}">Berita Satgas</a></li>
                                            <li><a href="{!! url('/beritadaerah') !!}">Berita Daerah</a></li>
                                            <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 pl-0">
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Edukasi</h4>
                                        <ul class="list_tiga">
                                            <li><a href="{!! url('/edukasi') !!}">Materi</a></li>
                                            <li><a href="{!! url('/faq') !!}">FAQ</a></li>
                                            <li><a href="{!! url('/daftaristilah') !!}">Daftar Istilah</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>TP2DD</h4>
                                        <ul class="list_tiga">
                                            <li><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Regulasi</h4>
                                        <ul class="list_tiga">
                                            <li><a href="{!! url('/regulasi') !!}">Regulasi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 pl-0">
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Galeri</h4>
                                        <ul>
                                            <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                            <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Kegiatan</h4>
                                        <ul>
                                            <li><a href="{!! url('/dashboardkegiatan') !!}">Webinar Terbaru</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="single-footer-caption mb-40">
                                <div class="footer-tittle">
                                    <h4>Sekretariat Pokjanas P2DD</h4>
                                    @yield('p2dd_info')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copy-Right -->
            <div class="row mr-0 ml-0">
                <div class="col-md-12 footer-copy">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> P2DD
                    </p>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>

    @include('template.footer')

</body>

</html>