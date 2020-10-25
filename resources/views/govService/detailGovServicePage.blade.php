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
                                                <li><a href="#">Edukasi Artikel</a></li>
                                                <li><a href="#">FAQ</a></li>
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
                                    </li>
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
                        <h5>Layanan TP2DD</h5>
                    </div>
                    <div class="deskripsi_layanan">
                        @if($detailGovServices != null)
                        <p>{!! $detailGovServices['deskripsi'] !!}</p>
                        @endif
                        
                    </div>
                    <div class="icon_layanan">
                        <div class="icon_list_layanan">
                            <i class="fa fa-phone-square" style="transform: rotate(90deg);"></i>
                            <p style="display: inline;">(0351) 4477121</p>
                        </div>
                        <div class="icon_list_layanan">
                            <i class="fa fa-map-marker-alt"></i>
                            <p style="display:inline;">Jl. Teuku Umar No. Kec. Ngawi, Kab. Ngawi,
                                Jawa Timur</p>
                        </div>
                    </div>
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
@endsection
