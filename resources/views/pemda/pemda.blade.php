@extends('template.main')

@section('title', 'TP2DD | Portal Percepatan Digitalisasi Daerah')

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
    <main class="background-utama"> 
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padding">
            <div class="container">
                <!-- Section Judul -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle pt-25 text-center mb-30">
                            <h2>TP2DD</h2>
                            <p>Tim Percepatan dan Perluasan Digitalisasi Daerah</p>
                        </div>
                    </div>
                </div>
                <!--Section Form input-->
                <div class="form-row justify-content-center mb-50">
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
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="dropdown">
                            <div class="btn-group" role="group">
                                <button class="button2 btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Provinsi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Jawa Barat</a>
                                    <a class="dropdown-item" href="#">Jawa Tengah</a>
                                    <a class="dropdown-item" href="#">Jawa Timur</a>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button class="button2 btn-light dropdown-toggle" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kabupaten/Kota
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#">Kota Depok</a>
                                    <a class="dropdown-item" href="#">Kota Bandung</a>
                                    <a class="dropdown-item" href="#">Kabupaten Cilacap</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ket-jumlah">
                        <p>menunjukkan hasil 1-30 Kabupaten/Kota</p>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span><img src="{{ URL::asset('img/logo_tp2dd/image 2.png') }}" style="width: 90px;"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="">DKI Jakarta</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span> <img src="{{ URL::asset('img/logo_tp2dd/image 3.png') }}" style="width:90px;"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="">Jawa Barat</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span><img src="{{ URL::asset('img/logo_tp2dd/image 4.png') }}" style="width: 90px;"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="">Jawa Timur</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span><img src="{{ URL::asset('img/logo_tp2dd/image 5.png') }}" style="width: 90px;"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="">Ngawi</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span><img src="{{ URL::asset('img/logo_tp2dd/image 6.png') }}" style="width: 90px;"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="">Jawa Tengah</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span><img src="{{ URL::asset('img/logo_tp2dd/image 7.png') }}" style="width: 90px;"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="">Kalimantan Selatan</a></h4>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
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
        <!-- Akhir area TP2DD -->

    </main>

@endsection




