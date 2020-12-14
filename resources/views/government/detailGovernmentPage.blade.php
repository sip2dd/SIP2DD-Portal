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
                                        @if($menus != null)
                                            @foreach($menus as $menu)
                                                
                                                @if($menu['link'] == "/".Request::segment(1))
                                                    <li class="active"><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                                @else
                                                    <li><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                                @endif

                                                @if(count($menu['menu_child']) > 0)
                                                <ul class="submenu">
                                                    @foreach($menu['menu_child'] as $child)
                                                        <li><a href="{!! url($child['link']) !!}">{{$child['menu']}}</a></li>
                                                    @endforeach
                                                </ul>
                                                
                                                @endif
                                                </li>
                    
                                            @endforeach
                                        
                                        @else
                                            <!-- <li><a href="{!! url('/') !!}">Beranda</a></li>
                                            <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                            <li class="active"><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
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
                                            </li> -->
                                        @endif
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
    <!-- navgation link Start-->
    <!-- navgation link Start-->
    <div class="section-padd4 sky-blue">
        <div class="container nav-bread mt-30">
            <nav>
                <ol class="breadcrumb pl-0 pr-0 sky-blue">
                    <li class="breadcrumb-item"><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                    @if($govDetail != null)
                    <li class="breadcrumb-item active"><a href="">{{$govDetail['profile']}}</a> </li>
                    @endif

                </ol>
            </nav>
        </div>
    </div>
    <!-- navigation link End-->
    <!-- Slider Area Start-->
    @if($govDetail != null)
    <div class="section-paddingr sky-blue">
        <div class="container pt-20">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-30">
                    @if($govDetail != null)
                        <h2>{{$govDetail['profile']}}</h2>
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
                        @if($govDetail != null)
                        <p>{{$govDetail['visi']}}</p>
                        @endif
                    </div>
                    <div class="misi">
                        <h5>Misi:</h5>
                        <p class="misi_list">
                        @if($govDetail != null)
                            {!! $govDetail['misi'] !!}
                        @endif
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="pb-20 sky-blue">
        <div class="container">
            <!--Section Form input-->
            <div class="form-row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <form action="{!! url('/cariberitatp2dd')!!}" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="keyword" type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
                                <input type="hidden" name="id" value="<?php echo ($govDetail != null) ?  $govDetail['instansi_id'] : '' ?>" />
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
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="row">
                            <div class="col">
                                <div class="section-judul-berita1">
                                    <h4>Berita Terbaru</h4>
                                </div>
                            </div>
                            <!-- <div class="col">
                                <div class="section-judul-berita1">
                                    <h6><a href="{!! url('/berita')!!}">Lihat Semua</a>
                                </div>
                            </div> -->
                        </div>
                        <div id="Beritagovcarousel" class="Beritagovcarousel owl-carousel owl-theme">
                            @if($govNewsHighlights != null)
                                @foreach($govNewsHighlights as $index => $govNewsHighlight)
                                                <article class="blog_item">
                                                    <div class="blog_item_img">
                                                        <img class="card-img" src="{{$govNewsHighlight['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    </div>
                                                    <div class="blog_details">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p>{{tanggal_indonesia($govNewsHighlight['tanggal_publikasi'])}}</p>
                                                            </div>
                                                            <div class="col">
                                                                <div class="lengkapnya_1">
                                                                    <a href="{!! url('/detailberita?id=')!!}{{$govNewsHighlight['berita_id']}}">Selengkapnya <i
                                                                            class="fas fa-chevron-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{!! url('/detailberita?id=')!!}{{$govNewsHighlight['berita_id']}}">
                                                            <h2>{{ Str::limit($govNewsHighlight['judul'], 80) }}</h2>
                                                        </a>
                                                        <h6> <img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo">
                                                        {{$govNewsHighlight['dibuat_oleh']}}
                                                        </h6>
                                                    </div>
                                                </article>
                                @endforeach
                            @else
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
                            @endif
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
                                @if($govDetail != null)
                                <h6><a href="{!! url('/beritatp2dd?id=')!!}{{$govDetail['instansi_id']}}">Lihat Semua</a></h6>
                                @endif

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
                                    <div class="col-lg-8 col-8 pr-0">
                                        <div class="media-body">
                                            <a href="{!! url('/detailberita?id=')!!}{{$govNewsItem['berita_id']}}">
                                                <h3>{{ Str::limit($govNewsItem['judul'], 60) }}</h3>
                                            </a>
                                            <p style="color: #606060; font-weight: 300; font-size: 12px;"> <img
                                                src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo"
                                                style="height: 14px; vertical-align: -1px; margin-right: .2rem;">
                                                {{ $govNewsItem['dibuat_oleh'] }}
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
                        <h2>Layanan</h2>
                    </div>
                </div>
            </div>
        @if($govServices != null)
        <div id="layanangovcarousel" class="layanangovcarousel owl-carousel owl-theme">
                @foreach($govServices as $govService)
                    <div class="services-caption text-center mb-10 mr-1 ml-1">
                        <div class="service-icon">
                            <span><img class="img-lay" src="{{$govService['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt=""></span>
                        </div>
                        <div class="service-cap">
                            <h4 class="service-judul"><a href="{!! url('detaillayanan?id=') !!}{{$govService['layanan_id']}}">{{Str::limit(Str::ucfirst($govService['judul']),32)}}</a></h4>
                            <!--Edit Penambahan nama pemda-->
                            <div class="services-loc">
                                <h6><img src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo"> {{ $govService['dibuat_oleh'] }}
                                </h6>
                            </div>
                            <p>{{ Str::limit(strip_tags($govService['deskripsi']), 80) }}</p>
                             <!--Edit Penambahan tombol pemda-->
                             <div class="link_layanan">
                                    <a href="{!! url('layanan?id=') !!}{{$govService['layanan_id']}}">Link Layanan</a>
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
            @if($govDetail != null)
                <a href="{!! url('/layanantp2dd?id=')!!}{{$govDetail['instansi_id']}}" class="btn radius-btn"
                    style="margin:auto; text-align: center; display: block;">Selengkapnya</a>
            @endif
            </div>
    </div>
    </section>
    <!--Galeri Video Start-->
    <!-- <div id="galerivideo_section" class="our-customer pb-40 pt-0 edukasi-section">
        <div class="container-fluid">
            <div class="our-customer-wrapper">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-90">
                            <h2>Galeri Video</h2>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto my-auto">
                @if($galleryGovVideos != null)
                    <div id="galeriCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                        @foreach($galleryGovVideos as $index => $galleryGovVideo)
                            @if($index == 0)
                            <div class="carousel-item active">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            @if($galleryGovVideo['tipe'] == "Youtube")
                                                <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($galleryGovVideo['link']) }}/maxresdefault.jpg"
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                            @else
                                                <img class="card-img" src=""
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                            @endif

                                        </div>
                                        <div class="what-cap">
                                            <h6>{{tanggal_indonesia($galleryGovVideo['tgl_dibuat'])}}</h6>

                                            <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{$galleryGovVideo['dibuat_oleh']}}
                                            </h6>
                                            <h4><a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryGovVideo['galeri_id']}}"> {{ Str::limit($galleryGovVideo['judul'], 60) }}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryGovVideo['galeri_id']}}">Selengkapnya <span
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
                                            @if($galleryGovVideo['tipe'] == "Youtube")
                                                <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($galleryGovVideo['link']) }}/maxresdefault.jpg"
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                            @else
                                                <img class="card-img" src=""
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                                            @endif
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{tanggal_indonesia($galleryGovVideo['tgl_dibuat'])}}</h6>
                                            <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{$galleryGovVideo['dibuat_oleh']}}
                                            </h6>
                                            <h4><a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryGovVideo['galeri_id']}}">{{ Str::limit($galleryGovVideo['judul'], 60) }}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryGovVideo['galeri_id']}}">Selengkapnya <span class="fas fa-chevron-right mr-2"></span></a>
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
                @if($govDetail != null)
                    <a href="{!! url('/galerivideotp2dd?id=')!!}{{$govDetail['instansi_id']}}" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
                @endif
            </div>
        </div>
    </div> -->
    <!--Galeri Foto End-->
    <div id="galerifoto_section" class="our-customer pb-40 pt-0 edukasi-section">
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
                @if($galleryGovPhotos != null)
                <div id="galerifotocarousel" class="galerifotocarousel owl-carousel owl-theme">
                        @foreach($galleryGovPhotos as $index => $galleryGovPhoto)
                                    <div class="single-customer">
                                        <div class="what-img">
                                        @if($galleryGovPhoto['link'] != null)
                                        <img class="card-img" src="http://103.18.117.44/sicantik-ws/webroot/files/upload/{{$galleryGovPhoto['link']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        @else
                                        <img class="card-img" src="http://103.18.117.44/sicantik-ws/webroot/files/upload/{{$galleryGovPhoto['file']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        @endif

                                        </div>
                                        <div class="what-cap">
                                            <h6>{{tanggal_indonesia($galleryGovPhoto['tgl_dibuat'])}}</h6>
                                            <!--Edit PEnamabahan instansi-->
                                            <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{$galleryGovPhoto['dibuat_oleh']}}
                                            </h6>
                                            <h4><a href="{!! url('/detailgalerifoto?id=')!!}{{$galleryGovPhoto['galeri_id']}}"> {{ Str::limit($galleryGovPhoto['judul'], 60) }}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailgalerifoto?id=')!!}{{$galleryGovPhoto['galeri_id']}}">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
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
                @if($govDetail != null)
                    <a href="{!! url('/galerifototp2dd?id=')!!}{{$govDetail['instansi_id']}}" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Slider Area End-->
@endsection

@section('p2dd_info')

@if($p2dd_info != null)
    <div class="footer-pera footer-pera2">
        <!-- <p>{{$p2dd_info['title']}}</p> -->
        <p>{!!$p2dd_info['deskripsi']!!}</p>
        <p>{{$p2dd_info['no_telpon']}}</p>
        <p>{{$p2dd_info['email']}}</p>
        <p>{!!$p2dd_info['alamat']!!}</p>
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

    @if($p2dd_info != null)
        <ul>
            <li>
                <a href="//{!!$p2dd_info['facebook']!!}" class="fab fa-facebook-f"></a>
            </li>
            <li>
                <a href="//{!!$p2dd_info['youtube']!!}" class="fab fa-youtube ml-4"></a>
            </li>
            <li>
                <a href="//{!!$p2dd_info['twitter']!!}" class="fab fa-twitter ml-4"></a>
            </li>
            <li>
                <a href="//{!!$p2dd_info['instagram']!!}" class="fab fa-instagram  ml-4"></a>
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