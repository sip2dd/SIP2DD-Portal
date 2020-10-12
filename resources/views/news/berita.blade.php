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
                                <a href="{!! url('/') !!}"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
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
                <div class="col-lg-8 col-md-4">
                    <form action="{!! url('/pencarianberita')!!}" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="cari" type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
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
    <section class="blog_area">
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
                                            <div class="col-lg-12 pr-0 pl-0">
                                                <article class="blog_item">
                                                    <div class="blog_item_img">
                                                        <img class="card-img" src="{{$highlight['gambar_utama']}}" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{$highlight['tanggal_publikasi']}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailgaleri?id=10')!!}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=10')!!}">
                                                            <h2>{{$highlight['judul']}}</h2>
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
                                                        <img class="card-img" src="{{$highlight['gambar_utama']}}" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{$highlight['tanggal_publikasi']}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailgaleri?id=10')!!}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=10')!!}">
                                                            <h2>{{$highlight['judul']}}</h2>
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
                                                <a href="{!! url('/detailberita?id=10')!!}">
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
                                    <h4>Galeri</h4>
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
                            @if($galeris != null)
                                <div class="carousel-inner w-100" role="listbox">
                                        @foreach($galeris as $index => $galeri)
                                            @if ($index == 0)
                                                <div class="carousel-item active">
                                                    <div class="col-lg-6">
                                                        <article class="blog_item">
                                                            <div class="blog_item_img">
                                                                <img class="card-img" src="{{$galeri['gambar_utama']}}"
                                                                    alt="">
                                                            </div>
                                                            <div class="blog_details">
                                                                <div class="row">
                                                                    <div class="col galeri-detail-tgl1">
                                                                        <p>{{$galeri['tanggal_publikasi']}}</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="lengkapnya_2">
                                                                            <a href="{!! url('/detailgaleri?id=10')!!}">Selengkapnya <i
                                                                                    class="fas fa-chevron-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="{!! url('/detailgaleri?id=10')!!}" class="deskripsi-galeri1">
                                                                    <h2>{{$galeri['judul']}}</h2>
                                                                </a>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <div class="col-lg-6">
                                                        <article class="blog_item">
                                                            <div class="blog_item_img">
                                                                <img class="card-img" src="{{$galeri['gambar_utama']}}"
                                                                    alt="">
                                                            </div>
                                                            <div class="blog_details">
                                                                <div class="row">
                                                                    <div class="col galeri-detail-tgl1">
                                                                        <p>{{$galeri['tanggal_publikasi']}}</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="lengkapnya_2">
                                                                            <a href="{!! url('/detailgaleri?id=10')!!}">Selengkapnya <i
                                                                                    class="fas fa-chevron-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="{!! url('/detailgaleri?id=10')!!}" class="deskripsi-galeri1">
                                                                    <h2>{{$galeri['judul']}}</h2>
                                                                </a>
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

                        @if($berita_satgases != null)    
                            @foreach($berita_satgases as $berita_satgas)
                                <div class="media post_item">
                                    <div class="col-lg-4 col-4">
                                        <img src="{{$berita_satgas['gambar_utama']}}" alt="post">
                                    </div>
                                    <div class="col-lg-8 col-8">
                                        <div class="media-body">
                                            <a href="{!! url('/detailberita?id=10')!!}">
                                                <h3>{{$berita_satgas['judul']}}</h3>
                                            </a>
                                            <p>{{$berita_satgas['tanggal_publikasi']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div>Belum ada Data</div>
                        @endif

                        <!-- <div>Belum ada Data</div> -->
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
                        @if($berita_daerahes != null)    
                            @foreach($berita_daerahes as $berita_daerah)
                                <div class="media post_item">
                                    <div class="col-lg-4 col-4">
                                        <img src="{{$berita_daerah['gambar_utama']}}" alt="post">
                                    </div>
                                    <div class="col-lg-8 col-8">
                                        <div class="media-body">
                                            <a href="{!! url('/detailberita?id=10')!!}">
                                                <h3>{{$berita_daerah['judul']}}</h3>
                                            </a>
                                            <p>{{$berita_daerah['tanggal_publikasi']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div>Belum ada Data</div>
                        @endif
                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection



