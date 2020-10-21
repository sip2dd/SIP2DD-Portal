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
                                <a href="index.html"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
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
                    <li class="breadcrumb-item"><a href="TP2DD.html">TP2DD</a></li>
                    <li class="breadcrumb-item active"><a href="#">Pemerintah Kabupaten Ngawi</a>
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
                        <h2>Pemerintah Kabupaten Ngawi</h2>
                    </div>
                </div>
            </div>
            <div class="row pemda_desk justify-content-center">
                <div class="col-lg-4 mb-30">
                    <div class="logo_pemda">
                        <img class src="assets/img/logo_pemda/ngawi.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 visi_misi">
                    <div class="visi">
                        <h5>Visi :</h5>
                        <p>"Ngawi Sejahtera, Berakhlak Berbasis Pedesaan Barometer Jawa Timur"</p>
                    </div>
                    <div class="misi">
                        <h5>Misi:</h5>
                        <ul class="misi_list">
                            <li>Menanggulangi kemiskinan secara terpadu dan berkelanjutan.</li>
                            <li> Meningkat pelayanan dasar bidang pendidikan dan kesehatan yang berkualitas serta
                                berdaya saing.</li>
                            <li>Meningkatkan budaya yang berlandaskan kearifan dan keagamaan dalam suasana yang kondusif
                            </li>
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
                                    <h6><a href="Berita_terbaru.html">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <div id="BeritaTrCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-lg-12 pr-0 pl-0">
                                        <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img" src="assets/img/berita/kominfo2.jpeg" alt="">
                                            </div>
                                            <div class="blog_details">
                                                <div class="row">
                                                    <div class="col">
                                                        <p>02 Oktober 2020</p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="lengkapnya_1">
                                                            <a href="Detail_Berita.html">Selengkapnya <i
                                                                    class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="Detail_Berita.html">
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
                                                <img class="card-img" src="assets/img/blog/blog_3.png" alt="">
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
                                                <a href="Detail_Berita.html">
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
                                                <img class="card-img" src="assets/img/blog/single_blog_4.png" alt="">
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
                                                <a href="Detail_Berita.html">
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
                                    <h6><a href="Berita_Satgas.html">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/blog/artikel_video_pajak2.jpg" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronifikasi Transaksi..</h3>
                                        </a>
                                        <p>02 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/post/post_4.png" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronfikasi Transaksi..</h3>
                                        </a>
                                        <p>01 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/post/post_4.png" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronfikasi Transaksi..</h3>
                                        </a>
                                        <p>01 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/post/post_2.png" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronfikasi Transaksi..</h3>
                                        </a>
                                        <p>01 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
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
            <div class="MS-content">
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/logo (1).png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/logo (1).png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/logo (1).png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/LOGO BAPENDA1.png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/LOGO BAPENDA1.png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="MS-controls">
                <button class="MS-left"><span class="carousel-control-prev-icon bg-info rounded-circle"
                        style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
                <button class="MS-right"><span class="carousel-control-next-icon bg-info rounded-circle"
                        style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
            </div>

        </div>
        <div class="container">
            <div class="row mt-5 mb-5">
                <a href="" class="btn radius-btn"
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
                    <div id="galerifotoCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="Detail_Galeri_foto.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="Detail_Galeri_foto.html">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="">Selengkapnya <span class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="Detail_Galeri_foto.html">To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="Detail_Galeri_foto.html">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="Detail_Galeri_foto.html">Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="Detail_Galeri_foto.html">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev w-auto" href="#edukasiCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#edukasiCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <a href="Galeri_Foto.html" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!--Galeri Foto End-->
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
                                    <h6><a href="Berita_terbaru.html">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <div id="BeritaTrCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-lg-12 pr-0 pl-0">
                                        <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img" src="assets/img/berita/kominfo2.jpeg" alt="">
                                            </div>
                                            <div class="blog_details">
                                                <div class="row">
                                                    <div class="col">
                                                        <p>02 Oktober 2020</p>
                                                    </div>
                                                    <div class="col">
                                                        <div class="lengkapnya_1">
                                                            <a href="Detail_Berita.html">Selengkapnya <i
                                                                    class="fas fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="Detail_Berita.html">
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
                                                <img class="card-img" src="assets/img/blog/blog_3.png" alt="">
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
                                                <a href="Detail_Berita.html">
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
                                                <img class="card-img" src="assets/img/blog/single_blog_4.png" alt="">
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
                                                <a href="Detail_Berita.html">
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
                                    <h6><a href="Berita_Satgas.html">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/blog/artikel_video_pajak2.jpg" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronifikasi Transaksi..</h3>
                                        </a>
                                        <p>02 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/post/post_4.png" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronfikasi Transaksi..</h3>
                                        </a>
                                        <p>01 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/post/post_4.png" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronfikasi Transaksi..</h3>
                                        </a>
                                        <p>01 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media post_item">
                                <div class="col-lg-4 col-4 pl-0 pr-0">
                                    <img class="image" src="assets/img/post/post_2.png" alt="post">
                                </div>
                                <div class="col-lg-8 col-8">
                                    <div class="media-body">
                                        <a href="Detail_Berita.html">
                                            <h3>Elektronfikasi Transaksi..</h3>
                                        </a>
                                        <p>01 Oktober 2020</p>
                                    </div>
                                </div>
                            </div>
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
            <div class="MS-content">
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/logo (1).png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/logo (1).png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/logo (1).png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/LOGO BAPENDA1.png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="services-caption text-center mb-10">
                        <div class="service-icon">
                            <span><img class="img-lay" src="assets/img/log_layanan/LOGO BAPENDA1.png" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="">Pajak Online</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor
                                incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="MS-controls">
                <button class="MS-left"><span class="carousel-control-prev-icon bg-info rounded-circle"
                        style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
                <button class="MS-right"><span class="carousel-control-next-icon bg-info rounded-circle"
                        style="width: 35px; height: 35px;" aria-hidden="true"></span></button>
            </div>

        </div>
        <div class="container">
            <div class="row mt-5 mb-5">
                <a href="" class="btn radius-btn"
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
                    <div id="galerifotoCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="Detail_Galeri_foto.html"> Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="Detail_Galeri_foto.html">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="">Selengkapnya <span class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="Detail_Galeri_foto.html">To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="Detail_Galeri_foto.html">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="assets/img/berita/coba1.jpg" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>28 September 2020</h6>
                                            <h4><a href="Detail_Galeri_foto.html">Welcome To The Best Model Winner
                                                    Contest</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="Detail_Galeri_foto.html">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev w-auto" href="#edukasiCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#edukasiCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <a href="Galeri_Foto.html" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!--Galeri Foto End-->
@endsection