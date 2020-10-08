@extends('template.main')

@section('title', 'Pencarian Berita | Portal Percepatan Digitalisasi Daerah')

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
    <main class="background-utama">
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padding">
            <div class="container">
                <!-- Section Judul -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle pt-25 text-center mb-30">
                            <h2>Pencarian</h2>
                        </div>
                    </div>
                </div>
                <!--Section Form input-->
                <div class="form-row justify-content-center mb-50">
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
                @if($cari != null)
                <div class="row">
                    <div class="col-lg-12 col-md-6 ket-jumlah-cari">
                        <p>Hasil pencarian <strong>{{$cari}}</strong>, 2 hasil ditemukan</p>
                    </div>
                </div>
                @endif
                <!--Hasil Pencarian -->
                <div class="row">
                    <div class="card w-100 card-besar">
                        <div class="row no-gutters berita_card">
                            <div class="col-lg-4 berita_img">
                                <img class="" src="{{ URL::asset('img/berita/coba1.jpg') }}">
                            </div>
                            <div class="col-lg-8 card_desk">
                                <div class="card-body">
                                    <h5>Kamis, 01 Oktober 2020</h5>
                                    <h4><a href="{!! url('/detailberita?id=10')!!}">Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                            Digital dan Pertumbuhan Ekonomi</a></h4>
                                    <p>Multiply sea night grass fourth day sea lesser rule open subdue female fill which
                                        them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <p id="selengkapnya"><a href="{!! url('/detailberita?id=10')!!}">Selengkapnya <i
                                                class="fas fa-chevron-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 card-besar">
                        <div class="row no-gutters berita_card">
                            <div class="col-lg-4 berita_img">
                                <img class="" src="{{ URL::asset('img/berita/coba1.jpg') }}">
                            </div>
                            <div class="col-lg-8 card_desk">
                                <div class="card-body">
                                    <h5>Kamis, 01 Oktober 2020</h5>
                                    <h4><a href="{!! url('/detailberita?id=10')!!}">Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                                            Digital dan Pertumbuhan Ekonomi</a></h4>
                                    <p>Multiply sea night grass fourth day sea lesser rule open subdue female fill which
                                        them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <p id="selengkapnya"><a href="{!! url('/detailberita?id=10')!!}">Selengkapnya <i
                                                class="fas fa-chevron-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Bagian Pagination-->
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
        <!-- Akhir pagination-->

    </main>
@endsection

