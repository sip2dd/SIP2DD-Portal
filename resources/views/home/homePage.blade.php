@extends('template.main')

@if ($p2dd_info != null)
    @section('title', $p2dd_info['title'])
@else
    @section('title', 'Portal Percepatan Digitalisasi Daerah')
@endif


@if ($p2dd_info != null)
    @section('description', strip_tags($p2dd_info['deskripsi']))
@endif

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
                                <a href="{!! url('/') !!}"><img src="{{ URL::asset('img/logo/log.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @if ($menus != null)
                                            @foreach ($menus as $menu)
                                                @if (isset($menu['link']))
                                                    @if ($menu['link'] == '/' . Request::segment(1))
                                                        @if ($menu['link'] == '/#')
                                                            <li class="active"><a>{{ $menu['nama'] }}</a>
                                                            @else
                                                            <li class="active"><a
                                                                    href="{!! url($menu['link']) !!}">{{ $menu['nama'] }}</a>
                                                        @endif
                                                    @elseif($menu['link'] == '/#')
                                                        <li><a>{{ $menu['nama'] }}</a>
                                                        @else
                                                        <li><a href="{!! url($menu['link']) !!}">{{ $menu['nama'] }}</a>
                                                    @endif
                                                @endif

                                                @if (isset($menu['menu_child']))
                                                    @if (count($menu['menu_child']) > 0)
                                                        <ul class="submenu">
                                                            @foreach ($menu['menu_child'] as $child)
                                                                <li><a
                                                                        href="{!! url($child['link']) !!}">{{ $child['menu'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                @endif
                                                </li>
                                            @endforeach
                                        @else
                                            <!--
                                                                                                                                                                                                                                                                                    <li class="active"><a href="{!! url('/') !!}">Beranda</a></li>
                                                                                                                                                                                                                                                                                    <li><a href="{!! url('/berita') !!}">Berita</a></li>
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
                                                                                                                                                                                                                                                                                    <li><a href="{!! url('/dashboardkegiatan') !!}">Kegiatan</a></li>
                                                                                                                                                                                                                                                                                    <li><a href="#">Galeri</a>
                                                                                                                                                                                                                                                                                        <ul class="submenu">
                                                                                                                                                                                                                                                                                            <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                                                                                                                                                                                                                                                                            <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                                                                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                                                                                    </li>

                                                                                                                                                                                                                                                                                 -->
                                        @endif
                                        <!-- <li>
                                                                                                                                                                 <div style="padding: 13px 30px;
                                                                                                                                                                border-radius: 50px;
                                                                                                                                                                background-color: #00ABE9;
                                                                                                                                                                color: #fff !important;
                                                                                                                                                                font-size: 15px !important;">
                                                                                                                                                                <a href="#">test</a>
                                                                                                                                                                </div>
                                                                                                                                                                </li> -->
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
                            <div class="col-lg-6 col-md-12 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Evaluasi
                                        Kinerja<br><i>(Championships)</i>
                                        TP2DD<br>Tahun 2022</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Berdasarkan surat Kementerian Koordinator Bidang Perekonomian nomor <strong>
                                            EK.3.5/127/D.I.M.EKON/05/2022</strong>
                                        perubahan Batas Akhir Pengumpulan Dokumen Evaluasi Kinerja (Championships) TP2DD
                                        Tahun 2022
                                        diubah dari semula <strong>tanggal 20 Mei 2022</strong>, menjadi <strong>tanggal 10
                                            Juni 2022</strong>
                                    </p>
                                    <!--<h1 data-animation="fadeInUp" data-delay=".4s">Portal Informasi<br>Percepatan dan
                                                                                                                                                                                                                                Perluasan<br>Digitalisasi Daerah</h1>
                                                                                                                                                                                                                            <p data-animation="fadeInUp" data-delay=".6s">Merupakan portal yang dapat dijadikan
                                                                                                                                                                                                                                sebagai referensi bagi masyarakat untuk
                                                                                                                                                                                                                                mendapatkan informasi terkait pelaksanaan <strong>Elektronifikasi Transaksi
                                                                                                                                                                                                                                    Pemerintah Daerah</strong>.
                                                                                                                                                                                                                            </p> -->
                                </div>
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay=".8s" href="https://kelola.p2dd.go.id"
                                        class="btn radius-btn">Akses Kelola P2DD</a>
                                    <!--  <a data-animation="fadeInLeft" data-delay=".8s" href="{!! url('pencarian') !!}"
                                                                                                                                                                                                                    class="btn radius-btn">Cari
                                                                                                                                                                                                                    Layanan & Berita</a>
                                                                                                                                                                                                                <a data-animation="fadeInLeft" data-delay=".8s" href="https://kelola.p2dd.go.id"
                                                                                                                                                                                                                    class="btn radius-btn" style="background: #40E0D0;" target="_blank"
                                                                                                                                                                                                                    rel="noopener noreferrer">Akses Kelola P2DD</a> -->

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                    data-delay=".8s">
                                    <iframe id="fred" style="border-radius:20px; border: 8px solid #00ABE9"
                                        title="Surat Championship"
                                        src="https://drive.google.com/file/d/1e5sFQrdCmdGDbeli8VGm0EqOrxrM6Sr6/preview"
                                        frameborder="1" scrolling="auto" height="500" width="400"></iframe>
                                    <!--<img style="width: 500px" src="{{ URL::asset('img/beranda/Group_gambar.svg') }}"
                                                                                                                                                                                                                alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian Atas End -->
        <!--Video -->
        <section class="service-area sky-blue section-paddingr">
            <div class="container padd-carousel">
                <div class="car_berita">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-70">
                                <h2 class="layanan_index"><span>Video Sosialisasi</span></h2>
                            </div>
                        </div>
                    </div>
                    <iframe style="border-radius:20px; border: 8px solid #00ABE9" width="100%" height="500px"
                        src="https://drive.google.com/file/d/1vUgKtpnHy58IB6LfshE1BU_fZ8_WOba4/preview"
                        allow="accelerometer; autoplay;  frameborder=" 0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <!--  Akhir Bagian video  -->
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
                                        <p>Berita terlengkap mengenai Percepatan dan Perluasan Digitalisasi Daerah.</p>
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
                                        <p>Layanan P2DD dari Kementerian, Lembaga dan Daerah mengenai.</p>
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
                                        <p>Data dan Informasi mengenai Percepatan dan Perluasan Digitalisasi Daerah.</p>
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
                                        <p>Wadah Kolaborasi Percepatan dan Perluasan Digitalisasi Daerah.</p>
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
                                        <p>Regulasi mengenai Percepatan dan Perluasan Digitalisasi Daerah tersedia.</p>
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
                                        <p>Materi, FAQ dan Daftar Istilah mengenai Percepatan dan Perluasan Digitalisasi
                                            Daerah.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fitur Kami End -->
        <!--Layanan Terhangat start baru 2-->
        <section class="service-area sky-blue section-paddingr">
            <div class="container padd-carousel">
                <div class="car_berita">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2 class="layanan_index"><span>Layanan Terhangat</span></h2>
                            </div>
                        </div>
                    </div>
                    @if ($govServices != null)
                        <div id="layanan_c" class="layanan_c owl-carousel owl-theme">
                            @foreach ($govServices as $index => $govService)
                                <div class="services-caption text-center mb-10 mr-1 ml-1">
                                    <div class="service-icon">
                                        <span><img class="img-lay" src="{{ $govService['gambar_utama'] }}"
                                                onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt=""></span>
                                    </div>
                                    <div class="service-cap">
                                        <!--Edit Penambahan kelas judul-->
                                        <h4 class="service-judul"><a
                                                href="{!! url('detaillayanan?id=') !!}{{ $govService['layanan_id'] }}">{{ Str::limit(Str::ucfirst($govService['judul']), 32) }}</a>
                                        </h4>
                                        <!--Edit Penambahan nama pemda-->
                                        <div class="services-loc">
                                            <h6><img src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                                                {{ $govService['dibuat_oleh'] }}
                                            </h6>
                                        </div>
                                        <p>{{ Str::limit(strip_tags($govService['deskripsi']), 80) }}.</p>
                                        <!--Edit Penambahan tombol pemda-->
                                        <div class="link_layanan">
                                            <a href="{{ $govService['link_layanan'] }}">Link Layanan</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
            </div>
        </section>
        <!--Layanan Terhangat end baru 2-->

        <!--Berita 2-->
        <div id="berita_section" class="our-customer section-paddingr sky-blue">
            <div class="container padd-carousel">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Berita</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        @if ($newsItems != null)
                            <div id="berita_c" class="berita_c owl-carousel owl-theme">
                                @foreach ($newsItems as $index => $newsItem)
                                    <div class="single-customer">
                                        <!--Edit css bagian gambar image-->
                                        <div class="what-img">
                                            <img src="{{ $newsItem['gambar_utama'] }}"
                                                onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{ tanggal_indonesia($newsItem['tanggal_publikasi']) }}</h6>
                                            <!--Edit PEnamabhan instansi-->
                                            <h6 class="cap_deskripsi"><img
                                                    src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{ $newsItem['dibuat_oleh'] }}
                                            </h6>
                                            <h4><a
                                                    href="{!! url('/detailberita?id=') !!}{{ $newsItem['berita_id'] }}">{{ Str::limit($newsItem['judul'], 60) }}.</a>
                                            </h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailberita?id=') !!}{{ $newsItem['berita_id'] }}">Selengkapnya
                                                <span class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                @endforeach
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
        <!--End Berita 2-->

        <!--Edukasi Start 2-->
        <div id="edukasi_section" class="our-customer section-paddingr sky-blue">
            <div class="container padd-carousel">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Edukasi</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        @if ($eduNewsItems != null)
                            <div id="edukasi_artikel_c" class="edukasi_artikel_c owl-carousel owl-theme">
                                @foreach ($eduNewsItems as $index => $eduNewsItem)
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="{{ $eduNewsItem['gambar_utama'] }}"
                                                onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{ tanggal_indonesia($eduNewsItem['tgl_dibuat']) }}</h6>
                                            <!--Edit penmabahan instansi-->
                                            <h6 class="cap_deskripsi"><img
                                                    src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{ $eduNewsItem['dibuat_oleh'] }}
                                            </h6>
                                            <h4><a
                                                    href="{{ url('detailedukasi?id=') }}{{ $eduNewsItem['edukasi_id'] }}">{{ Str::limit($eduNewsItem['judul'], 70) }}</a>
                                            </h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{{ url('detailedukasi?id=') }}{{ $eduNewsItem['edukasi_id'] }}">Selengkapnya
                                                <span class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                @endforeach
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
        <!--Edukasi End 2-->

        <!--Galeri Foto Start 2-->
        <div id="galerifoto_section" class="our-customer pb-30 edukasi-section">
            <div class="container padd-carousel">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Galeri Foto</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        @if ($galleryNewsItems != null)
                            <div id="gallery_foto_c" class="gallery_foto_c owl-carousel owl-theme">
                                @foreach ($galleryNewsItems as $index => $galleryNewsItem)
                                    <div class="single-customer">
                                        <div class="what-img">
                                            @if ($galleryNewsItem['file'] != null)
                                                <img class="card-img" src="{{ $galleryNewsItem['file'] }}" alt=""
                                                    onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                            @else
                                                <img class="card-img" src="{{ $galleryNewsItem['link'] }}" alt=""
                                                    onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                            @endif
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{ tanggal_indonesia($galleryNewsItem['tgl_dibuat']) }}</h6>
                                            <!--Edit penmabahna Instansi-->
                                            <h6 class="cap_deskripsi"><img
                                                    src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{ $galleryNewsItem['dibuat_oleh'] }}
                                            </h6>
                                            <h4><a href="{!! url('/detailgalerifoto?id=') !!}{{ $galleryNewsItem['galeri_id'] }}">
                                                    {{ Str::limit($galleryNewsItem['judul'], 60) }}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailgalerifoto?id=') !!}{{ $galleryNewsItem['galeri_id'] }}">Selengkapnya
                                                <span class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                @endforeach
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
                        <a href="{!! url('/galerifoto') !!}" class="btn radius-btn"
                            style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Galeri Foto End 2-->
    </main>
@endsection

@section('p2dd_info')

    @if ($p2dd_info != null)
        <div class="footer-pera footer-pera2">
            <!-- <p>{{ $p2dd_info['title'] }}</p> -->
            <p>{!! Str::limit($p2dd_info['deskripsi'], 120) !!}</p>
            <p>{{ $p2dd_info['no_telpon'] }}</p>
            <p>{{ $p2dd_info['email'] }}</p>
            <p>{!! $p2dd_info['alamat'] !!}</p>
        </div>
    @else
        <div class="footer-pera footer-pera2">
            <p>SIP2DD adalah Sistem Informasi Percepatan dan Perluasan Digitalisasi Daerah</p>
            <p>0218224049</p>
            <p>info@p2dd.go.id</p>
            <p>Jalan Merdeka Barat No. 10 Jakarta Pusat</p>
        </div>
    @endif
@endsection

@section('p2dd_medsos')

    @if ($p2dd_info != null)
        <ul>
            <li>
                <a href="//{!! $p2dd_info['facebook'] !!}" class="fab fa-facebook-f"></a>
            </li>
            <li>
                <a href="//{!! $p2dd_info['youtube'] !!}" class="fab fa-youtube ml-4"></a>
            </li>
            <li>
                <a href="//{!! $p2dd_info['twitter'] !!}" class="fab fa-twitter ml-4"></a>
            </li>
            <li>
                <a href="//{!! $p2dd_info['instagram'] !!}" class="fab fa-instagram  ml-4"></a>
            </li>
        </ul>
    @else
        <ul>
            <li>
                <a href="#" class="fab fa-facebook-f"></a>
            </li>
            <li>
                <a href="#" class="fab fa-youtube ml-4"></a>
            </li>
            <li>
                <a href="#" class="fab fa-twitter ml-4"></a>
            </li>
            <li>
                <a href="#" class="fab fab fa-instagram-v ml-4"></a>
            </li>

        </ul>
    @endif
@endsection
