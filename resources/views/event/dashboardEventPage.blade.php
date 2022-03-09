@extends('template.main')

@section('title', 'Kegiatan | Portal Percepatan Digitalisasi Daerah')

@if($p2dd_info != null)
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
                                <a href=""><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @if($menus != null)
                                            @foreach($menus as $menu)
                                                @if(isset($menu['link']))
                                                    @if($menu['link'] == "/".Request::segment(1))
                                                        <li class="active"><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                                    @else
                                                        <li><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                                    @endif
                                                @endif

                                                @if(isset($menu['menu_child']))

                                                    @if(count($menu['menu_child']) > 0)
                                                    <ul class="submenu">
                                                        @foreach($menu['menu_child'] as $child)
                                                            <li><a href="{!! url($child['link']) !!}">{{$child['menu']}}</a></li>
                                                        @endforeach
                                                    </ul>

                                                    @endif
                                                @endif
                                                </li>

                                            @endforeach

                                        @else
                                        <!-- <li><a href="{!! url('/') !!}">Beranda</a></li>
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
                                        <li class="active"><a href="{!! url('/dashboardkegiatan') !!}">Kegiatan</a></li>
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
    <!--Bagian Video-->
    @if($highlightevent != null)
        @foreach($highlightevent as $index => $item)
        <div id="video_kegiatan" class="section-padd4 webinar-wrapper sky-blue">
            <div class="container webinar-tmp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-5 col-md-12 desk_video pr-0 pl-0">
                        <h2>{{ Str::limit($item['judul'], 60) }}</h2>
                        <p>{{Str::limit(strip_tags($item['deskripsi']), 120) }}</p>
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
                        <div class="laravel-embed__responsive-wrapper" style="width: 100%;">
                            @if($video != null)
                            <?php
                                $url = $video;
                                parse_str(parse_url( $url, PHP_URL_QUERY ), $vars );
                                echo '<iframe src="https://www.youtube.com/embed/'.$vars['v'].'" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                            ?>
                            @else
                                <img src="{{ $item['gambar_utama'] }}" class="card-img card_image1" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                            @endif
                        </div>
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
    <div class="our-customer pb-30 pt-50 background_3">
        <div class="container padd-carousel">
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
                    <div id="listkegiatancarousel" class="listkegiatancarousel owl-carousel owl-theme">
                        @foreach($eventItems as $index => $item)
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
                        @endforeach
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

@section('p2dd_info')

@if($p2dd_info != null)
    <div class="footer-pera footer-pera2">
        <!-- <p>{{$p2dd_info['title']}}</p> -->
        <p>{!! Str::limit($p2dd_info['deskripsi'], 120) !!}</p>
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
