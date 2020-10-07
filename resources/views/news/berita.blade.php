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
                    <form action="{!! url('/pencarianberita') !!}" method="GET">
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
                                    <h6><a href="">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <div id="BeritaTrCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-lg-12 pr-0 pl-0">
                                        <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img" src="{{ URL::asset('img/blog/single_blog_1.png') }}" alt="">
                                            </div>
                                            <div class="blog_details">
                                                <div class="row">
                                                    <div class="col">
                                                        <p>02 Oktober 2020</p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="lengkapnya_1">
                                                            <a href="">Selengkapnya <i
                                                                    class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="single-blog.html">
                                                    <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                                        Digital
                                                        dan
                                                        Pertumbuhan Ekonomi</h2>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-lg-12 pr-0 pl-0">
                                        <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img" src="{{ URL::asset('img/blog/single_blog_2.png') }}" alt="">
                                            </div>
                                            <div class="blog_details">
                                                <div class="row">
                                                    <div class="col">
                                                        <p>02 Oktober 2020</p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="lengkapnya_1">
                                                            <a href="">Selengkapnya <i
                                                                    class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="single-blog.html">
                                                    <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                                        Digital
                                                        dan
                                                        Pertumbuhan Ekonomi</h2>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-lg-12 pr-0 pl-0">
                                        <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img" src="{{ URL::asset('img/blog/single_blog_3.png') }}" alt="">
                                            </div>
                                            <div class="blog_details">
                                                <div class="row">
                                                    <div class="col">
                                                        <p>02 Oktober 2020</p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="lengkapnya_1">
                                                            <a href="">Selengkapnya <i
                                                                    class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="single-blog.html">
                                                    <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                                        Digital
                                                        dan
                                                        Pertumbuhan Ekonomi</h2>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
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
                                    <h6><a href="">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="GaleriCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-lg-6">
                                            <article class="blog_item">
                                                <div class="blog_item_img">
                                                    <img class="card-img" src="{{ URL::asset('img/blog/single_blog_2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="blog_details">
                                                    <div class="row">
                                                        <div class="col galeri-detail-tgl1">
                                                            <p>02 Oktober 2020</p>
                                                        </div>
                                                        <div class="col">
                                                            <div class="lengkapnya_2">
                                                                <a href="">Selengkapnya <i
                                                                        class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="single-blog.html" class="deskripsi-galeri1">
                                                        <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                                            Digital dan
                                                            Pertumbuhan Ekonomi</h2>
                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-lg-6">
                                            <article class="blog_item">
                                                <div class="blog_item_img">
                                                    <img class="card-img" src="{{ URL::asset('img/blog/single_blog_2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="blog_details">
                                                    <div class="row">
                                                        <div class="col galeri-detail-tgl1">
                                                            <p>02 Oktober 2020</p>
                                                        </div>
                                                        <div class="col">
                                                            <div class="lengkapnya_2">
                                                                <a href="">Selengkapnya <i
                                                                        class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="single-blog.html" class="deskripsi-galeri1">
                                                        <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                                            Digital dan
                                                            Pertumbuhan Ekonomi</h2>
                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
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
                                    <h6><a href="">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish mencoba lebih pnajgadada adakdj</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_2.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_3.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_4.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h4>Berita Daerah</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita2">
                                    <h6><a href="">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_1.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish mencoba lebih pnajgadada adakdj</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_2.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_3.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ URL::asset('img/post/post_4.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection



