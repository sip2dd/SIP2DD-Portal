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
                                        <li><a href="{!! url('/') !!}">Beranda</a></li>
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
                                        <li class="active"><a href="{!! url('/kegiatan') !!}">Kegiatan</a></li>
                                        <li><a href="#">Galeri</a>
                                        <ul class="submenu">
                                            <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                            <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                        </ul>

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
    <!--Bagian Video-->
    @if($highlightevent != null)
        @foreach($highlightevent as $index => $item)
        <div id="video_kegiatan" class="section-padd4 webinar-wrapper sky-blue">
            <div class="container webinar-tmp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-md-12 desk_video pr-0 pl-0">
                        <h2>{{ Str::limit($item['judul'], 60) }}</h2>
                        <p>Wireframes are generally created by business analysts, user experience designers, developers,
                            visual designers, and by those with expertise</p>
                        <!--Edit penamabahan margin mb-35 sama ada beberapa edit class di css-->
                        <div class="row ket_webinar justify-content-center mb-35">
                            <div class="col-lg-7 col-md-12 col_webinar">
                                <p class="ket_tempat"> <img src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="">
                                {{ $item['dibuat_oleh'] }}</p>
                            </div>
                            <div class="col-lg-5 col-md-12 col-webinar">
                                <p class="ket_waktu"><i class="fa fa-clock"></i> {{tanggal_indonesia($item['tgl_dibuat'],false)}}</p>
                            </div>
                        </div>
                        <div class="button_webinar">
                            <ul>
                                <li>
                                    <a href="{!! url('/detailkegiatan?id=')!!}{{$item['kegiatan_id']}}" class="button_card_v">Selengkapnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 video-conf">
                        <video height="380px" style="width: 100%;" controls>
                            <source src="">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
    <div class="section-padd4 sky-blue">
        <div class="container nav-bread mt-30">
            <nav>
                <ol class="breadcrumb pl-0 sky-blue">
                    <!-- <li class="breadcrumb-item"><a href="Berita.html">Kegiatan</a></li>
                    <li class="breadcrumb-item active"><a href="#">List Webinar</a>
                    </li> -->
                </ol>
            </nav>
        </div>
    </div>
    @endif
    <!--Galeri Foto Start-->
    <div class="our-customer pb-30 section-paddingr pt-50 background_2">
        <div class="container">
            <div class="our-customer-wrapper">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-90">
                            <h2>Webinar Terbaru</h2>
                        </div>
                    </div>
                </div>
                @if($eventItems != null)
                <div class="row mx-auto my-auto">
                    <div id="galerifotoCarousel" class="carousel slide w-100" data-ride="carousel">

                        <div class="carousel-inner w-100" role="listbox">
                        @foreach($eventItems as $index => $item)
                            @if ($index == 0)
                            <div class="carousel-item active">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-customer">
                                        <div class="what-img">
                                            <img src="{{$item['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{tanggal_indonesia($item['tgl_dibuat'])}}</h6>
                                            <!--Edit PEnamabahan instansi-->
                                            <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{ $item['dibuat_oleh'] }}
                                            </h6>
                                            <h4><a href="{!! url('/detailkegiatan?id=')!!}{{$item['kegiatan_id']}}"> {{ Str::limit($item['judul'], 60) }}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailkegiatan?id=')!!}{{$item['kegiatan_id']}}">Selengkapnya <span
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
                                            <img src="{{$item['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        </div>
                                        <div class="what-cap">
                                            <h6>{{tanggal_indonesia($item['tgl_dibuat'])}}</h6>
                                            <!--Edit PEnamabahan instansi-->
                                            <h6 class="cap_deskripsi"><img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}"
                                                    alt="logo">{{ $item['dibuat_oleh'] }}
                                            </h6>
                                            <h4><a href="{!! url('/detailkegiatan?id=')!!}{{$item['kegiatan_id']}}"> {{ Str::limit($item['judul'], 60) }}</a></h4>
                                        </div>
                                        <div class="tulisan-lengkapnya">
                                            <a href="{!! url('/detailkegiatan?id=')!!}{{$item['kegiatan_id']}}">Selengkapnya <span
                                                    class="fas fa-chevron-right mr-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>


                        <a class="carousel-control-prev w-auto" href="#galerifotoCarousel" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#galerifotoCarousel" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                style="width: 35px; height: 35px;"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <div class="row mt-5 mb-5">
                    <a href="{!! url('kegiatan') !!}" class="btn radius-btn"
                        style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
                @else
                        <div class="container">
                            <div class="row mt-5 mb-5">
                                <a style="margin:auto; text-align: center; display: block;">Belum ada Data</a>
                            </div>
                        </div>

                @endif
            </div>
        </div>
    </div>
    <!--Galeri Foto End-->


@endsection

