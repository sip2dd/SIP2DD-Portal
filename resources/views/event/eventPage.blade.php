@extends('template.main')

@section('title', 'Portal Percepatan Digitalisasi Daerah')

@section('menu')
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href=""><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="{!! url('/') !!}">Beranda</a></li>
                                        <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                        <li><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                                        <li><a href="#">Edukasi</a>
                                            <ul class="submenu">
                                                <li><a href="#">Edukasi Artikel</a></li>
                                                <li><a href="{!! url('/faq') !!}">FAQ</a></li>
                                                <li><a href="#">Daftar Istilah</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Regulasi</a></li>
                                        <li><a href="#">Kolaborasi</a></li>
                                        <li><a href="#">Kegiatan</a></li>
                                        <li><a href="{!! url('/galeri') !!}">Galeri</a>
                                        <ul class="submenu">
                                            <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                            <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                        </ul>
                                    
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
@endsection

@section('content')
    <!--Bagian Video-->
    <div id="video_kegiatan" class="section-padd4 webinar-wrapper sky-blue">
        <div class="container webinar-tmp">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-md-12 desk_video">
                    <h2>Webinar Percepatan Perluasan Digitalisasi Daerah</h2>
                    <p>Wireframes are generally created by business analysts, user experience designers, developers,
                        visual designers, and by those with expertise</p>
                    <div class="button_webinar">
                        <ul>
                            <li>
                                <a href="" class="button_card_v">Live Webinar</a>
                            </li>
                            <li>
                                <a href="" class="button_card_d">Selanjutnya</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 video-conf">
                    <video height="330px" style="width: 100%;" controls>
                        <source src="">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!--Galeri Foto Start-->
    <div class="our-customer section-paddingr pt-50 background_2">
        <div class="container">
            <div class="our-customer-wrapper">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-90">
                            <h2>Webinar Terbaru</h2>
                        </div>
                    </div>
                </div>
                @if($eventItems != null)
                <div class="row mx-auto my-auto">
                    <div id="webinarCarousel" class="carousel slide w-100" data-ride="carousel">
                    
                        <div class="carousel-inner w-100" role="listbox">
                        @foreach($eventItems as $index => $item)
                            @if ($index == 0)
                            <div class="carousel-item active">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="{{$item['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        </div>
                                        <div class="what-cap cap_kegiatan">
                                            <h4 class="ds_kegiatan"><a href="Detail_Galeri_foto.html">
                                            {{$item['judul']}}</a></h4>
                                            <h6 class="cap_daerah"> <i class="fa fa-map-marker-alt"
                                                    style="margin-right: .3rem;"></i>Provinsi Jawa Barat</h6>
                                            <p class="desk_kegiatan">28 Oktober 2020</p>
                                            <p class="desk_kegiatan">08.00-10.00 WIB</p>
                                            <h6 class="cap_masuk"><a href="">Daftar</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="{{$item['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        </div>
                                        <div class="what-cap cap_kegiatan">
                                            <h4 class="ds_kegiatan"><a href="Detail_Galeri_foto.html">
                                            {{$item['judul']}}</a></h4>
                                            <h6 class="cap_daerah"> <i class="fa fa-map-marker-alt"
                                                    style="margin-right: .3rem;"></i>Provinsi Jawa Barat</h6>
                                            <p class="desk_kegiatan">28 Oktober 2020 <br> 08.00-17.00 WIB</p>
                                            <h6 class="cap_masuk"><a href="">Daftar</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>


                        <a class="carousel-control-prev w-auto" href="#webinarCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#webinarCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    
                </div>
                <div class="row mt-5 mb-5">
                    <a href="#" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
                @else
                        <div class="container">
                            <div class="row mt-5 mb-5">
                                <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                            </div>
                        </div>

                @endif
            </div>
        </div>
    </div>
    <!--Galeri Foto End-->
@endsection