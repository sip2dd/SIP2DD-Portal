@extends('template.main')

@section('title', 'Berita Daerah | Portal Percepatan Digitalisasi Daerah')

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
                                <a href="index.html"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Beranda</a></li>
                                        <li class="active"><a href="#">Berita</a></li>
                                        <li><a href="TP2DD.html">TP2DD</a></li>
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
        <div class="container nav-bread mt-30">
            <nav>
                <ol class="breadcrumb pl-0 sky-blue">
                    <li class="breadcrumb-item"><a href="Berita.html">Berita</a></li>
                    <li class="breadcrumb-item active"><a href="#">Berita Daerah</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container mt-70">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Berita​ Daerah</h2>
                    </div>
                </div>
            </div>
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
    <!--================Berita Terbaru =================-->
    <section class="blog_area pt-10 mb-30">
        <div class="container">
            <!--Berita Terbaru-->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{ URL::asset('img/blog/single_blog_1.png') }}" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>02 Oktober 2020</p>
                                </div>
                                <div class="col lokasi_alamat">
                                    <h6>Jawa Tengah</h6>
                                </div>
                            </div>
                            <a href="single-blog.html" class="deskripsi-galeri1">
                                <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                    Digital
                                    dan
                                    Pertumbuhan Ekonomi</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{ URL::asset('img/blog/single_blog_2.png') }}" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>02 Oktober 2020</p>
                                </div>
                                <div class="col lokasi_alamat">
                                    <h6>Jawa Barat</h6>
                                </div>
                            </div>
                            <a href="single-blog.html" class="deskripsi-galeri1">
                                <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                    Digital
                                    dan
                                    Pertumbuhan Ekonomi</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{ URL::asset('img/blog/single_blog_4.png') }}" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>02 Oktober 2020</p>
                                </div>
                                <div class="col lokasi_alamat">
                                    <h6>Sumatera Selatan</h6>
                                </div>
                            </div>
                            <a href="single-blog.html" class="deskripsi-galeri1">
                                <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                    Digital
                                    dan
                                    Pertumbuhan Ekonomi</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{ URL::asset('img/blog/blog_3.png') }}" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>02 Oktober 2020</p>
                                </div>
                                <div class="col lokasi_alamat">
                                    <h6>Jawa Timur</h6>
                                </div>
                            </div>
                            <a href="single-blog.html" class="deskripsi-galeri1">
                                <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                    Digital
                                    dan
                                    Pertumbuhan Ekonomi</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{ URL::asset('img/blog/blog_2.png') }}" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>02 Oktober 2020</p>
                                </div>
                                <div class="col lokasi_alamat">
                                    <h6>Kepulauan Bangka Belitung</h6>
                                </div>
                            </div>
                            <a href="single-blog.html" class="deskripsi-galeri1">
                                <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                    Digital
                                    dan
                                    Pertumbuhan Ekonomi</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{ URL::asset('img/blog/blog_3.png') }}" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>02 Oktober 2020</p>
                                </div>
                                <div class="col lokasi_alamat">
                                    <h6>Ngawi</h6>
                                </div>
                            </div>
                            <a href="single-blog.html" class="deskripsi-galeri1">
                                <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                    Digital
                                    dan
                                    Pertumbuhan Ekonomi</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row justify-content-center mb-50">
                <nav class="blog-pagination">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection

