@extends('template.main')

@section('title', 'Pemda | Portal Percepatan Digitalisasi Daerah')

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
    <!-- navgation link Start-->
    <div class="section-padd4 sky-blue">
        <div class="container nav-bread mt-30">
            <nav>
                <ol class="breadcrumb pl-0 pr-0 sky-blue">
                    <li class="breadcrumb-item"><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                    @if($govDetail != null)
                    <li class="breadcrumb-item active"><a href="#">{{$govDetail['nama']}}</a>
                    @endif
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- navigation link End-->
    <!-- Slider Area Start-->
    <div class="section-paddingr sky-blue">
        <div class="container pt-20">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-30">
                    @if($govDetail != null)
                        <h2>{{$govDetail['nama']}}</h2>
                    @endif
                    
                    </div>
                </div>
            </div>
            <div class="row pemda_desk justify-content-center">
                <div class="col-lg-4 mb-30">
                    <div class="logo_pemda">
                        @if($govDetail != null)
                            <img class src="{{$govDetail['logo']}}" onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt="">
                        @endif
                        
                    </div>
                </div>
                <div class="col-lg-6 visi_misi">
                    <div class="visi">
                        <h5>Visi :</h5>
                        <p>"Aorem psum olorsit amet ectetur adipiscing elit, sed dov."</p>
                    </div>
                    <div class="misi">
                        <h5>Misi:</h5>
                        <ul class="misi_list">
                            <li>Aorem psum olorsit amet ectetur adipiscing elit, sed dov..</li>
                            <li>Aorem psum olorsit amet ectetur adipiscing elit, sed dov..</li>
                            <li>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-20 sky-blue">
        <div class="container">
            <!--Section Form input-->
            <div class="form-row justify-content-center">
                <div class="col-lg-8 col-md-4">
                    <form action="" method="">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
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
    <section class="blog_area section-padd4 sky-blue">
        <div class="container">
            <!--Berita Terbaru-->
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h4>Berita Terbaru</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h6><a href="{!! url('/berita')!!}">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <div id="BeritaTrCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                            @if($govNewsHighlights != null)
                                @foreach($govNewsHighlights as $index => $govNewsHighlight)
                                    @if ($index == 0) 
                                        <div class="carousel-item active">
                                            <div class="col-lg-12 pr-0 pl-0">
                                                <article class="blog_item">
                                                    <div class="blog_item_img">
                                                        <img class="card-img" src="{{$govNewsHighlight['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{$govNewsHighlight['tanggal_publikasi']}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailberita?id=')!!}{{$govNewsHighlight['berita_id']}}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=')!!}{{$govNewsHighlight['berita_id']}}">
                                                            <h2>{{$govNewsHighlight['judul']}}</h2>
                                                        </a>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <div class="col-lg-12 pr-0 pl-0">
                                                <article class="blog_item">
                                                    <div class="blog_item_img">
                                                        <img class="card-img" src="{{$govNewsHighlight['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{$govNewsHighlight['tanggal_publikasi']}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailberita?id=')!!}{{$govNewsHighlight['berita_id']}}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=')!!}{{$govNewsHighlight['berita_id']}}">
                                                            <h2>{{$govNewsHighlight['judul']}}</h2>
                                                        </a>
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h4>Berita Lainnya</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h6><a href="{!! url('/beritadaerah')!!}">Lihat Semua</a></h6>
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
                                    <div class="col-lg-8 col-8">
                                        <div class="media-body">
                                            <a href="{!! url('/detailberita?id=')!!}{{$govNewsItem['berita_id']}}">
                                                <h3>{{$govNewsItem['judul']}}</h3>
                                            </a>
                                            <p>{{$govNewsItem['tanggal_publikasi']}}</p>
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
    <!--Layanan Terhangat start baru-->
    <section class="service-area sky-blue section-paddingr">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-90 mt-40">
                        <h2>Layanan Terhangat</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="mixedSlider">
        @if($govServices != null)
            <div class="MS-content">
                @foreach($govServices as $govService)
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="{{$govService['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="{!! url('layanan?id=') !!}{{$govService['layanan_id']}}">{{$govService['judul']}}</a></h4>
                            <p>{{ Str::limit(strip_tags($govService['deskripsi']), 120) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="MS-controls">
                <button class="MS-left"><span class="carousel-control-prev-icon bg-info rounded-circle"
                                style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
                <button class="MS-right"><span class="carousel-control-next-icon bg-info rounded-circle"
                                style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
            </div>
        @else
            <div class="container">
                <div class="row mt-5 mb-5">
                    <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                </div>
            </div>
        @endif

        </div>
        <div class="container">
            <div class="row mt-5 mb-5">
                <a href="{!! url('/layanan')!!}" class="btn radius-btn"
                    style="margin:auto; text-align: center; display: block;">Selengkapnya</a>
            </div>
        </div>
    </section>
    <!--Galeri Foto Start-->
    <div id="galerifoto_section" class="our-customer section-paddingr pt-0 edukasi-section">
        <div class="container-fluid">
            <div class="our-customer-wrapper">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-90">
                            <h2>Galeri Foto</h2>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto my-auto">
                @if($galleryGovPhotos != null)
                    <div id="galeriCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                        @foreach($galleryGovPhotos as $index => $galleryGovPhoto)
                            @if($index == 0)
                            <div class="carousel-item active">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            @if($galleryGovPhoto['link'] != null)
                                            <img src="{{$galleryGovPhoto['link']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                            @else
                                            <img src="{{$galleryGovPhoto['file']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                            @endif
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{$galleryGovPhoto['tgl_dibuat']}}</h6>
                                            <h4><a href="{!! url('/detailgalerifoto?id=')!!}{{$galleryGovPhoto['galeri_id']}}"> {{$galleryGovPhoto['judul']}}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailgalerifoto?id=')!!}{{$galleryGovPhoto['galeri_id']}}">Selengkapnya <span
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
                                            @if($galleryGovPhoto['link'] != null)
                                            <img src="{{$galleryGovPhoto['link']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                            @else
                                            <img src="{{$galleryGovPhoto['file']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                            @endif
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{$galleryGovPhoto['tgl_dibuat']}}</h6>
                                            <h4><a href="">{{$galleryGovPhoto['judul']}}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="">Selengkapnya <span class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                        <a class="carousel-control-prev w-auto" href="#galeriCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#galeriCarousel" role="button" data-slide="next">
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
                    <a href="{!! url('/galerifoto')!!}" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!--Galeri Foto End-->
    <!-- Slider Area End--> 
@endsection