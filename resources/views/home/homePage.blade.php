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
                                                <li><a href="{!! url('/edukasi') !!}">Edukasi Artikel</a></li>
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

                                        @foreach($menus as $index => $menu)
                                        <!-- <li><a href="{!! url($menu['parentlink']) !!}">{!! $menu['parentmenu'] !!}</a></li> -->
                                        @endforeach


                                    
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
    <main>
        <!-- Bagian Atas Start-->
        <div class="slider-area sky-blue">
            <div class="slider-active">
                <div class="single-slider section-padding d-flex justify-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Portal Informasi<br>Percepatan dan
                                        Perluasan<br>Digitalisasi Daerah</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Merupakan portal yang dapat dijadikan
                                        sebagai referensi bagi masyarakat untuk
                                        mendapatkan informasi terkait pelaksanaan <strong>Elektronifikasi Transaksi
                                            Pemerintah Daerah</strong>.
                                    </p>
                                </div>
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay=".8s" href="{!! url('pencarian') !!}"
                                        class="btn radius-btn">Cari
                                        Layanan & Berita</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                    data-delay=".8s">
                                    <img style="width: 500px" src="{{ URL::asset('img/beranda/Group_gambar.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian Atas End -->
        <!-- Fitur Kami Start -->
        <!--Edit semua icon pada fitur kami-->
        <section id="fiturkami" class="best-features-area section-paddingr sky-blue ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="section-tittle mb-90">
                                    <h2 class="fitur_index"><span>Fitur Kami</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span><i class="fa fa-newspaper"></i></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Kanal Berita</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span> <i class="fa fa-chalkboard-teacher"></i>
                                        </span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Kanal Layanan</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span> <i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Data & Informasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span><i class="fa fa-users"></i></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Kolaborasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span><i class="fa fa-list-alt"></i></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Regulasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span><i class="fa fa-th-list"></i></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Edukasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fitur Kami End -->
        <!--Layanan Terhangat start baru-->
        <section class="service-area sky-blue section-paddingr">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-90">
                            <h2 class="layanan_index"><span>Layanan Terhangat</span></h2>
                        </div>
                    </div>
                </div>
                @if($govServices != null)
                    <div id="mixedSlider" class="carousel slide" data-ride="carousel">
                        <div class="MS-content">
                            @foreach($govServices as $index => $govService)
                            <div class="item">
                                <div class="services-caption text-center mb-10">
                                    <div class="service-icon">
                                        <span><img class="img-lay" src="{{$govService['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt=""></span>
                                    </div>
                                    <div class="service-cap">
                                        <!--Edit Penambahan kelas judul-->
                                        <h4 class="service-judul"><a href="{!! url('layanan?id=') !!}{{$govService['layanan_id']}}">{{$govService['judul']}}</a></h4>
                                        <!--Edit Penambahan nama pemda-->
                                        <div class="services-loc">
                                            <h6><img src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo"> {{ $govService['dibuat_oleh'] }}
                                            </h6>
                                        </div>
                                        <p>{{ Str::limit(strip_tags($govService['deskripsi']), 120) }}.</p>
                                        <!--Edit Penambahan tombol pemda-->
                                        <div class="link_layanan">
                                            <a href="{{$govService['link_layanan']}}">Link Layanan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="MS-controls">
                            <button class="MS-left" data-slide="prev"><span
                                    class="carousel-control-prev-icon bg-info rounded-circle"
                                    style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
                            <button class="MS-right" data-slide="next"><span
                                    class="carousel-control-next-icon bg-info rounded-circle"
                                    style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
                        </div>

                    </div>
                @else
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                    </div>
                </div>
                @endif
                <div class="row mt-5 mb-5">
                    <a href="{!! url('layanan') !!}" class="btn radius-btn"
                        style="margin:auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
            </div>
        </section>
        <!--Layanan Terhangat end baru-->
        <!--Berita-->
        <div id="berita_section" class="our-customer section-paddingr sky-blue">
            <div class="container">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Berita</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        @if($newsItems != null)
                        <div id="beritaCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                            @foreach($newsItems as $index => $newsItem)
                                @if ($index == 0)
                                <div class="carousel-item active">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="">
                                            <div class="single-customer">
                                                <!--Edit css bagian gambar image-->
                                                <div class="what-img">
                                                    <img src="{{ $newsItem['gambar_utama'] }}"  onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <h6>{{ tanggal_indonesia($newsItem['tanggal_publikasi']) }}</h6>
                                                    <!--Edit PEnamabhan instansi-->
                                                    <h6 class="cap_deskripsi"><img
                                                            src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                            alt="logo">{{ $newsItem['dibuat_oleh'] }}
                                                    </h6>
                                                    <h4><a href="{!! url('/detailberita?id=')!!}{{$newsItem['berita_id']}}">{{ Str::limit($newsItem['judul'], 60) }}.</a></h4>
                                                </div>
                                                <div class="tulisan-lengkapnya">
                                                    <a href="{!! url('/detailberita?id=')!!}{{$newsItem['berita_id']}}">Selengkapnya <span
                                                            class="fas fa-chevron-right mr-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="">
                                            <div class="single-customer">
                                                <div class="what-img">
                                                    <img src="{{ $newsItem['gambar_utama'] }}"  onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    
                                                    <h6>{{ tanggal_indonesia($newsItem['tanggal_publikasi']) }}</h6>
                                                    <!--Edit Penambahan nama instansi-->
                                                    <h6 class="cap_deskripsi"><img
                                                            src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                            alt="logo">{{ $newsItem['dibuat_oleh'] }}
                                                    </h6>
                                                    <h4><a href="{!! url('/detailberita?id=')!!}{{$newsItem['berita_id']}}">{{ Str::limit($newsItem['judul'], 60) }}.</a></h4>
                                                </div>
                                                <div class="tulisan-lengkapnya">
                                                    <a href="{!! url('/detailberita?id=')!!}{{$newsItem['berita_id']}}">Selengkapnya <span
                                                            class="fas fa-chevron-right mr-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                            <a class="carousel-control-prev w-auto" href="#beritaCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#beritaCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @else
                        <div class="container">
                            <div class="row mt-5 mb-5">
                                <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="row mt-5 mb-5">
                        <a href="{!! url('berita') !!}" class="btn radius-btn"
                            style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Edukasi Start-->
        <div id="edukasi_section" class="our-customer section-paddingr sky-blue">
            <div class="container">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Edukasi</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        @if($eduNewsItems != null)
                        <div id="edukasiCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                            @foreach($eduNewsItems as $index => $eduNewsItem)
                                @if ($index == 0)
                                <div class="carousel-item active">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                <img src="{{$eduNewsItem['gambar_utama']}}"  onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h6>{{ tanggal_indonesia($eduNewsItem['tanggal_publikasi']) }}</h6>
                                                <!--Edit penmabahan instansi-->
                                                <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov2_grey.svg') }}"
                                                        alt="logo">{{ $eduNewsItem['dibuat_oleh'] }}
                                                </h6>
                                                <h4><a href="{!! url('/detailberita?id=')!!}{{$eduNewsItem['berita_id']}}">{{ Str::limit($eduNewsItem['judul'], 70) }}</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="{!! url('/detailberita?id=')!!}{{$eduNewsItem['berita_id']}}">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                <img src="{{$eduNewsItem['gambar_utama']}}"  onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h6>{{ tanggal_indonesia($eduNewsItem['tanggal_publikasi']) }}</h6>
                                                <!--Edit penmabahan instansi-->
                                                <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov2_grey.svg') }}"
                                                        alt="logo">{{ $eduNewsItem['dibuat_oleh'] }}
                                                </h6>
                                                <h4><a href="{!! url('/detailberita?id=')!!}{{$eduNewsItem['berita_id']}}">{{ Str::limit($eduNewsItem['judul'], 70) }}</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="{!! url('/detailberita?id=')!!}{{$eduNewsItem['berita_id']}}">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                            <a class="carousel-control-prev w-auto" href="#edukasiCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#edukasiCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @else
                        <div class="container">
                            <div class="row mt-5 mb-5">
                                <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="row mt-5 mb-5">
                        <a href="{!! url('edukasi') !!}" class="btn radius-btn"
                            style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Edukasi End-->
        <!--Galeri Foto Start-->
        <div id="galerifoto_section" class="our-customer section-paddingr edukasi-section">
            <div class="container">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Galeri Foto</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        @if($galleryNewsItems != null)
                        <div id="galeriCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                            @foreach($galleryNewsItems as $index => $galleryNewsItem)
                                @if($index == 0)
                                <div class="carousel-item active">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                @if($galleryNewsItem['tipe'] == "Youtube")
                                                    <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($galleryNewsItem['link']) }}/maxresdefault.jpg" alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                @else
                                                    <img class="card-img" src="" alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                @endif
                                            </div>
                                            <div class="what-cap">
                                                <h6>{{ tanggal_indonesia($galleryNewsItem['tgl_dibuat']) }}</h6>
                                                <!--Edit penmabahna Instansi-->
                                                <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                        alt="logo">{{ $galleryNewsItem['dibuat_oleh'] }}
                                                </h6>
                                                <h4><a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryNewsItem['galeri_id']}}"> {{ Str::limit($galleryNewsItem['judul'], 60) }}</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryNewsItem['galeri_id']}}">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                @if($galleryNewsItem['tipe'] == "Youtube")
                                                    <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($galleryNewsItem['link']) }}/maxresdefault.jpg" alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                @else
                                                    <img class="card-img" src="" alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                                @endif
                                                
                                            </div>
                                            <div class="what-cap">
                                                <h6>{{ tanggal_indonesia($galleryNewsItem['tgl_dibuat']) }}</h6>
                                                <!--Edit penmabahna Instansi-->
                                                <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                        alt="logo">{{ $galleryNewsItem['dibuat_oleh'] }}
                                                </h6>
                                                <h4><a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryNewsItem['galeri_id']}}">{{ Str::limit($galleryNewsItem['judul'], 60) }}</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryNewsItem['galeri_id']}}">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                            <a class="carousel-control-prev w-auto" href="#galeriCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#galeriCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @else
                        <div class="container">
                            <div class="row mt-5 mb-5">
                                <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="row mt-5 mb-5">
                        <a href="{!! url('/galerivideo') !!}" class="btn radius-btn"
                            style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Galeri Foto End-->
    </main>    
@endsection


