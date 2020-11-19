@extends('template.main')

@section('title', 'Berita | Portal Percepatan Digitalisasi Daerah')

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
                                        <li><a href="{!! url('/') !!}">Beranda</a></li>
                                        <li class="active"><a href="{!! url('/berita') !!}">Berita</a></li>
                                        <li><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
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
    <!-- Slider Area Start-->
    <div class="section-padd4 sky-blue">
        <div class="container mt-50">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Berita​</h2>
                    </div>
                </div>
            </div>
            <!--Section Form input-->
            <div class="form-row justify-content-center">
                <!--*Edit* tambahan class col untuk responsive-->
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <form action="{!! url('/pencarian')!!}" method="GET">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="keyword" type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
                                    <div class="input-group-append">
                                        <button class="button1">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
    <!--================Berita Area =================-->
    <section class="blog_area background_1">
        <div class="container">
            <!--Berita Terbaru-->
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h4>Berita Terbaru</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h6><a href="{!! url('/beritaterbaru') !!}">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <div id="BeritaTrCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                            @if($highlights != null)
                                @foreach($highlights as $index => $highlight)
                                    @if ($index == 0) 
                                        <div class="carousel-item active">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pl-0">
                                                <article class="blog_item">
                                                    <div class="blog_item_img">
                                                        <img class="card-img" src="{{$highlight['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{tanggal_indonesia($highlight['tanggal_publikasi'])}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailberita?id=')!!}{{$highlight['berita_id']}}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=')!!}{{$highlight['berita_id']}}">
                                                            <h2>{{$highlight['judul']}}</h2>
                                                        </a>
                                                        <h6 style="color: #00ABE9;"> 
                                                        <img
                                                            src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                                                            {{$highlight['dibuat_oleh']}}
                                                        </h6>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pl-0">
                                                <article class="blog_item">
                                                    <div class="blog_item_img">
                                                        <img class="card-img" src="{{$highlight['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{tanggal_indonesia($highlight['tanggal_publikasi'], false)}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailgalerivideo?id=')!!}{{$highlight['berita_id']}}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=')!!}{{$highlight['berita_id']}}">
                                                            <h2>{{ Str::limit($highlight['judul'], 60) }}</h2>
                                                        </a>
                                                        <h6 style="color: #00ABE9;"> 
                                                        <img
                                                            src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                                                        {{$highlight['dibuat_oleh']}}
                                                        </h6>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="carousel-item active">
                                    <div class="col-lg-12 pr-0 pl-0">
                                        <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img" src="{{ URL::asset('img/P2DD.png') }}" alt="">
                                            </div>
                                            <div class="blog_details">
                                                <div class="row">
                                                    <div class="col">
                                                        <p></p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="lengkapnya_1">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <h2>Selamat Datang di Portal Percepatan dan Perluasan Digitalisasi Daerah</h2>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            @endif
                            </div>
                            <a class="carousel-control-prev w-auto" href="#BeritaTrCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#BeritaTrCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Berita Terbaru-->
                        <!--Galeri-->
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h4>Galeri Video</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h6><a href="{!! url('/galeri') !!}">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="GaleriCarousel" class="carousel slide w-100" data-ride="carousel">
                            @if($galleryNews != null)
                                <div class="carousel-inner w-100" role="listbox">
                                        @foreach($galleryNews as $index => $gallery)
                                            
                                            @if ($index == 0)
                                                <div class="carousel-item active">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <article class="blog_item">
                                                            <div class="blog_item_img">
                                                               @if($gallery['tipe'] == "Youtube")
                                                                <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($gallery['link']) }}/maxresdefault.jpg"
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                                @else
                                                                <img class="card-img" src=""
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                                @endif
                                                            </div>
                                                            <div class="blog_details">
                                                                <div class="row">
                                                                    <div class="col galeri-detail-tgl1">
                                                                        <p>{{tanggal_indonesia($gallery['tgl_dibuat'], false)}}</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="lengkapnya_2">
                                                                            <a href="{!! url('/detailgalerivideo?id=')!!}{{$gallery['galeri_id']}}">Selengkapnya <i
                                                                                    class="fas fa-chevron-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="{!! url('/detailgalerivideo?id=')!!}{{$gallery['galeri_id']}}" class="deskripsi-galeri1">
                                                                    <h2>{{$gallery['judul']}}</h2>
                                                                </a>
                                                                <h6 style="color: #00ABE9;"> 
                                                                <img
                                                                    src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                                                                    {{$gallery['dibuat_oleh']}}
                                                                </h6>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <article class="blog_item">
                                                            <div class="blog_item_img">
                                                                @if($gallery['tipe'] == "Youtube")
                                                                <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($gallery['link']) }}/maxresdefault.jpg"
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                                @else
                                                                <img class="card-img" src=""
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                                @endif
                                                            </div>
                                                            <div class="blog_details">
                                                                <div class="row">
                                                                    <div class="col galeri-detail-tgl1">
                                                                        <p>{{tanggal_indonesia($gallery['tgl_dibuat'], false)}}</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="lengkapnya_2">
                                                                            <a href="{!! url('/detailgalerivideo?id=')!!}{{$gallery['galeri_id']}}">Selengkapnya <i
                                                                                    class="fas fa-chevron-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="{!! url('/detailgalerivideo?id=')!!}{{$gallery['galeri_id']}}" class="deskripsi-galeri1">
                                                                    <h2>{{ Str::limit($gallery['judul'], 70) }}</h2>
                                                                </a>
                                                                <h6 style="color: #00ABE9;"> 
                                                                <img
                                                                    src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                                                                    {{$gallery['dibuat_oleh']}}
                                                                </h6>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                </div>
                                <a class="carousel-control-prev w-auto" href="#GaleriCarousel" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                        style="width: 35px; height: 35px;"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                        
                                <a class="carousel-control-next w-auto" href="#GaleriCarousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                        style="width: 35px; height: 35px;"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                @else
                                <div class="col-lg-6"> Belum ada Data</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h4>Berita Satgas</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h6><a href="{!! url('/beritasatgas') !!}">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">
                        @if($govNews != null)    
                            @foreach($govNews as $govNewsItem)
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="{{$govNewsItem['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                                </div>
                                <div class="col-lg-8 col-8 samping_berita">
                                    <div class="media-body">
                                        <a href="{!! url('/detailberita?id=')!!}{{$govNewsItem['berita_id']}}">
                                            <h3>{{ Str::limit($govNewsItem['judul'], 70) }}</h3>
                                        </a>
                                        <p style="color: #606060; font-weight: 300; font-size: 12px;"> <img
                                                src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo"
                                                style="height: 14px; vertical-align: -1px; margin-right: .2rem;">
                                                {{$govNewsItem['dibuat_oleh']}}
                                        </p>
                                        <p>{{tanggal_indonesia($govNewsItem['tanggal_publikasi'], false)}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="media post_item">Belum ada Data</div>
                        @endif
                        </aside>
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h4>Berita Daerah</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h6><a href="{!! url('/beritadaerah') !!}">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">
                        @if($localgovNews != null)    
                            @foreach($localgovNews as $localgovNewsItem)
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="{{$localgovNewsItem['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                                </div>
                                <div class="col-lg-8 col-8 samping_berita">
                                    <div class="media-body">
                                        <a href="{!! url('/detailberita?id=')!!}{{$localgovNewsItem['berita_id']}}">
                                            <h3>{{ Str::limit($localgovNewsItem['judul'], 70) }}</h3>
                                        </a>
                                        <p style="color: #606060; font-weight: 300; font-size: 12px;"> <img
                                                src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo"
                                                style="height: 14px; vertical-align: -1px; margin-right: .2rem;">
                                            {{$localgovNewsItem['dibuat_oleh']}}
                                            
                                        </p>
                                        <p>{{tanggal_indonesia($localgovNewsItem['tanggal_publikasi'], false)}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="media post_item">Belum ada Data</div>
                        @endif
                           
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    
@endsection('content')
