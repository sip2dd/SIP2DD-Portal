@extends('template.main')

@section('title', 'Detail Layanan TP2DD | Portal Percepatan Digitalisasi Daerah')

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
                                <a href="{!!  url('/') !!}"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
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
                                                        <li class="active"><a
                                                                href="{!!  url($menu['link']) !!}">{{ $menu['nama'] }}</a>
                                                        @else
                                                        <li><a href="{!!  url($menu['link']) !!}">{{ $menu['nama'] }}</a>
                                                    @endif
                                                @endif

                                                @if (isset($menu['menu_child']))

                                                    @if (count($menu['menu_child']) > 0)
                                                        <ul class="submenu">
                                                            @foreach ($menu['menu_child'] as $child)
                                                                <li><a
                                                                        href="{!!  url($child['link']) !!}">{{ $child['menu'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                    @endif
                                                @endif
                                                </li>

                                            @endforeach

                                        @else
                                            <!-- <li><a href="{!!  url('/') !!}">Beranda</a></li>
                                                    <li><a href="{!!  url('/berita') !!}">Berita</a></li>
                                                    <li class="active"><a href="{!!  url('/tp2dd') !!}">TP2DD</a></li>
                                                    <li><a href="#">Edukasi</a>
                                                        <ul class="submenu">
                                                            <li><a href="{!!  url('/edukasi') !!}">Materi</a></li>
                                                            <li><a href="{!!  url('/faq') !!}">FAQ</a></li>
                                                            <li><a href="{!!  url('/daftaristilah') !!}">Daftar Istilah</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{!!  url('/regulasi') !!}">Regulasi</a></li>
                                                    <li><a href="#">Kolaborasi</a></li>
                                                    <li><a href="{!!  url('/dashboardkegiatan') !!}">Kegiatan</a></li>
                                                    <li><a href="#">Galeri</a>
                                                    <ul class="submenu">
                                                        <li><a href="{!!  url('/galerifoto') !!}">Galeri Foto</a></li>
                                                        <li><a href="{!!  url('/galerivideo') !!}">Galeri Video</a></li>
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
    <div class="section-padd4 sky-blue">
        <div class="container nav-bread mt-30">
            <nav>
                <ol class="breadcrumb pl-0 pr-0 sky-blue">
                    <li class="breadcrumb-item"><a href="">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/layanan') }}">Layanan</a></li>
                    @if ($detailGovServices != null)
                        <li class="breadcrumb-item active"><a href="">{{ $detailGovServices['judul'] }}</a>
                    @endif
                </ol>
            </nav>
        </div>
    </div>
    <!-- navigation link End-->
    <!-- Slider Area Start-->
    <div class="section-paddingr sky-blue">
        <div class="container pt-20 add-padd">
            <div class="row pemda_desk clear-padd justify-content-center">
                <div class="col-lg-4 mb-30">
                    <div class="logo_pemda">
                        @if ($detailGovServices != null)
                            <img class src="{{ $detailGovServices['gambar_utama'] }}"
                                onerror="this.src='{{ URL::asset('img/logo/log.png') }}'" alt="">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 clear-padd">
                    <div class="judul_layanan">
                        @if ($detailGovServices != null)
                            <h2>{{ $detailGovServices['judul'] }}</h2>

                            <h5>{{ $detailGovServices['dibuat_oleh'] }}</h5>
                        @endif
                    </div>
                    <div class="deskripsi_layanan">
                        @if ($detailGovServices != null)
                            <p>{!! $detailGovServices['deskripsi'] !!}</p>
                        @endif

                    </div>
                    <div class="icon_layanan">
                        <div class="icon_list_layanan">
                            <i class="fa fa-phone-square" style="transform: rotate(90deg);"></i>
                            @if ($detailGovServices != null)
                                <p style="display: inline;">{{ $detailGovServices['kontak'] }}</p>
                            @endif
                        </div>
                        <div class="icon_list_layanan">
                            <i class="fa fa-map-marker-alt"></i>
                            @if ($detailGovServices != null)
                                <p style="display:inline;">{{ strip_tags($detailGovServices['alamat']) }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-sm-12 col-md-6">
                            <div class="tombol_download">
                                @if ($detailGovServices != null)
                                    <a class="btn-pdf"
                                        href="http://103.18.117.44/sicantik-ws/webroot/files/upload/{{ $detailGovServices['manual'] }}"
                                        style="padding: 15px 20px; font-size: 18px;"> <i class="fa fa-file-pdf"></i> Unduh
                                        Tutorial</a>
                                @else
                                    <a class="btn-pdf" href="#" style="padding: 15px 20px; font-size: 18px;"> <i
                                            class="fa fa-file-pdf"></i> Unduh Tutorial</a>
                                @endif

                            </div>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-6">
                            <div class="tombol_masuk">
                                @if ($detailGovServices != null)
                                    <a class="btn radius-btn" href="//{{ $detailGovServices['link_layanan'] }}"
                                        style="padding: 25px 30px;">Link Layanan</a>
                                @else
                                    <a class="btn radius-btn" href="" style="padding: 25px 30px;">Link Layanan</a>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Fitur Kami Start -->
    @if($features != null)
    <section id="fiturlayanankami" class="best-features-area section-paddingr sky-blue " style="padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="section-tittle mb-90">
                                <h2>Fitur Layanan</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <!-- <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-info-circle"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>PPID</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-comment"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Kanal Informasi</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Layanan Publik</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-microphone"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Pengaduan Masyarakat</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Portal Data</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="fa fa-list-alt"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>E-LKHPN</h3>
                                    <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row justify-content-center">
                    @if($features != null)
                        @foreach($features as $feature)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="{{$feature['icon']}}"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>{{$feature['judul']}}</h3>
                                        <p>{{$feature['deskripsi']}}.</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="section-paddingr background_2">
        <div class="container">
            <div class="tutorial_vid">
                @if ($detailGovServices != null)
                    <div class="vid_judul">

                        <h3>Video {{ $detailGovServices['judul'] }}</h3>

                    </div>
                    @if ($detailGovServices['link_video'] != null || $detailGovServices['link_video'] != '')

                        <div class="vid_layanan">
                            <x-embed url="{{ $detailGovServices['link_video'] }}" />
                        </div>
                    @elseif($detailGovServices['upload_video'] != null || $detailGovServices['upload_video'] != "")
                        <?php preg_match(
                        '/<iframe.*src=\"(.*)\".*>
                            <\ /iframe>/isU',
                                $detailGovServices['upload_video'],
                                $match,
                                ); ?>
                                @if (array_key_exists(1, $match))
                                    <div class="col-lg-12 pr-0 pl-0 video_iframe">
                                        {!! $detailGovServices['upload_video'] !!}
                                    </div>
                                @else
                                    <video controls>
                                        <source
                                            src="http://103.18.117.44/sicantik-ws/webroot/files/upload/{{ $detailGovServices['upload_video'] }}">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                    @endif
                @endif
            </div>
        </div>
    </section>

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
                <a href="//{!!  $p2dd_info['facebook'] !!}" class="fab fa-facebook-f"></a>
            </li>
            <li>
                <a href="//{!!  $p2dd_info['youtube'] !!}" class="fab fa-youtube ml-4"></a>
            </li>
            <li>
                <a href="//{!!  $p2dd_info['twitter'] !!}" class="fab fa-twitter ml-4"></a>
            </li>
            <li>
                <a href="//{!!  $p2dd_info['instagram'] !!}" class="fab fa-instagram  ml-4"></a>
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
