@extends('template.main')

@section('title', 'Layanan TP2DD | Portal Percepatan Digitalisasi Daerah')

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
                                <a href="{!! url('/') !!}"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{!! url('/') !!}">Beranda</a></li>
                                        <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                        <li class="active"><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                                        <li><a href="#">Edukasi</a>
                                            <ul class="submenu">
                                                <li><a href="{!! url('/edukasi') !!}">Materi</a></li>
                                                <li><a href="{!! url('/faq') !!}">FAQ</a></li>
                                                <li><a href="{!! url('/daftaristilah') !!}">Daftar Istilah</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{!! url('/regulasi') !!}">Regulasi</a></li>
                                        <li><a href="#">Kolaborasi</a></li>
                                        <li><a href="{!! url('/kegiatan') !!}">Kegiatan</a></li>
                                        <li><a href="#">Galeri</a>
                                        <ul class="submenu">
                                            <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                            <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-xs-block d-sm-block d-md-block d-lg-none d-xl-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
@endsection

@section('content')
    <!-- navgation link Start-->
    <div class="section-padd4 sky-blue">
        <div class="container nav-bread mt-30">
            <nav>
                <ol class="breadcrumb pl-0 pr-0 sky-blue">
                    <li class="breadcrumb-item"><a href="">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/layanan')}}">Layanan</a></li>
                    @if($detailGovServices != null)
                    <li class="breadcrumb-item active"><a href="">{{$detailGovServices['judul']}}</a>
                    @endif
                </ol>
            </nav>
        </div>
    </div>
    <!-- navigation link End-->
    <!-- Slider Area Start-->
    <div class="section-paddingr background_2">
        <div class="container pt-20">
            <div class="row pemda_desk justify-content-center">
                <div class="col-lg-4 mb-30">
                    <div class="logo_pemda">
                        <img class src="{{$detailGovServices['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="judul_layanan">
                        @if($detailGovServices != null)
                        <h2>{{$detailGovServices['judul']}}</h2>
                        @endif
                        <h5>{{$detailGovServices['dibuat_oleh']}}</h5>
                    </div>
                    <div class="deskripsi_layanan">
                        @if($detailGovServices != null)
                        <p>{!! $detailGovServices['deskripsi'] !!}</p>
                        @endif
                        
                    </div>
                    <div class="icon_layanan">
                        <div class="icon_list_layanan">
                            <i class="fa fa-phone-square" style="transform: rotate(90deg);"></i>
                            <p style="display: inline;">{{$detailGovServices['kontak']}}</p>
                        </div>
                        <div class="icon_list_layanan">
                            <i class="fa fa-map-marker-alt"></i>
                            <p style="display:inline;">{{$detailGovServices['alamat']}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-sm-12 col-md-6">
                            <div class="tombol_download">
                                <a class="btn-pdf" href="#" style="padding: 15px 20px; font-size: 18px;"> <i
                                        class="fa fa-file-pdf"></i> Unduh Tutorial</a>
                            </div>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-6">
                            <div class="tombol_masuk">
                                @if($detailGovServices != null)
                                <a class="btn radius-btn" href="{{$detailGovServices['link_layanan']}}" style="padding: 25px 30px;">Masuk</a>
                                @else
                                <a class="btn radius-btn" href="" style="padding: 25px 30px;">Masuk</a>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Fitur Kami Start -->
    <section id="fiturlayanankami" class="best-features-area section-paddingr sky-blue " style="padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="section-tittle mb-90">
                                <h2>Fitur Layanan</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-info-circle"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>PPID</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-comment"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Kanal Pemkab Ngawi</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Layanan Publik</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-microphone"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Pengaduan Masyarakat</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Portal Data</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-list-alt"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>E-LKHPN</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-paddingr background_2">
        <div class="container">
            <div class="tutorial_vid">
                <div class="vid_judul">
                    <h3>Tutorial Penggunaan fitur fitur {{$detailGovServices['judul']}}</h3>
                </div>
                <div class="vid_layanan">
                    <video controls>
                        <source src="https://www.youtube.com/watch?v=A0IM-2zdNhY.mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
@endsection
