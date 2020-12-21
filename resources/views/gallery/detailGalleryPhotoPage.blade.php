@extends('template.main')

@section('title', 'Galeri Foto | Portal Percepatan Digitalisasi Daerah')

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
                                                <li><a href="{!!  url('/tp2dd') !!}">TP2DD</a></li>
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
                                                <li class="active"><a href="#">Galeri</a>
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
                    <li class="breadcrumb-item"><a href="{!!  url('/galerifoto') !!}">Galeri Foto</a></li>
                    <li class="breadcrumb-item active"><a href="">
                            @if ($detailGalleryPhoto != null)
                                {{ $detailGalleryPhoto['judul'] }}
                            @else
                                404 : Tidak ditemukan
                            @endif
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- navigation link End-->
    <!--================Blog Area =================-->
    <section class="detail_page single-post-area mb-30 background_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-30">
                    <div class="single-post">
                        <div class="blogs">
                            <div class="blogs_details">
                                @if ($detailGalleryPhoto != null)
                                    <h2>{{ $detailGalleryPhoto['judul'] }}</h2>
                                    <h3><img class="logo_gov" src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}"
                                            alt="logo">{{ $detailGalleryPhoto['dibuat_oleh'] }}</h3>
                                @else
                                    404 : Tidak ditemukan
                                @endif</a>
                            </div>
                            <div class="row blogs-item">
                                <!-- <div class="item_gallery col-lg-4 col-md-6">
                                   <a href="#gambar1">
                                   @if ($detailGalleryPhoto != null)
                                         @if ($detailGalleryPhoto['link'] != null)
                                        <img class="card-img" src="{{ $detailGalleryPhoto['link'] }}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                @else
                                        <img class="card-img" src="{{ $detailGalleryPhoto['file'] }}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        @endif
                                      <div class="overly">
                                         <div class="text"><i class="fas fa-search-plus"></i></div>
                                      </div>
                                   @endif
                                   </a>
                                   <div class="overlay" id="gambar1">
                                      <a href="#" class="tutup">X Tutup</a>
                                      <div class="kotak">
                                         @if ($detailGalleryPhoto['link'] != null)
                                        <img class="card-img" src="{{ $detailGalleryPhoto['link'] }}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                @else
                                        <img class="card-img" src="{{ $detailGalleryPhoto['file'] }}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                        @endif
                                        @if ($detailGalleryPhoto != null)
                                        <p>{{ $detailGalleryPhoto['judul'] }} </p>
                                         @endif

                                      </div>
                                      <div class="nav-overlay">
                                         <a href="#gambar4" class="sebelumnya">
                                            <p class="fas fa-chevron-left"></p>
                                         </a>
                                         <a href="#gambar2" class="lanjut">
                                            <p class="fas fa-chevron-right"></p>
                                         </a>
                                      </div>
                                   </div>
                                </div> -->
                                @if ($detailGalleryPhoto != null)

                                    @if ($detailGalleryPhoto['file'] != null)

                                        <div class="item_gallery col-lg-4 col-md-6">
                                            <a href="#gambar">
                                                @if ($detailGalleryPhoto['link'] != null)
                                                    <img class="card-img" src="{{ $detailGalleryPhoto['link'] }}"
                                                        onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                @else
                                                    <img class="card-img" src="{{ $detailGalleryPhoto['file'] }}"
                                                        onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                @endif
                                                <div class="overly">
                                                    <div class="text"><i class="fas fa-search-plus"></i></div>
                                                </div>
                                            </a>
                                            <div class="overlay" id="gambar">
                                                <a href="#" class="tutup">X Tutup</a>
                                                <div class="kotak">
                                                    @if ($detailGalleryPhoto['link'] != null)
                                                        <img class="card-img" src="{{ $detailGalleryPhoto['link'] }}"
                                                            onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    @else
                                                        <img class="card-img" src="{{ $detailGalleryPhoto['file'] }}"
                                                            onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    @endif
                                                    <p>{{ $detailGalleryPhoto['judul'] }}</p>
                                                </div>
                                                <div class="nav-overlay">
                                                    <a href="#gambar1" class="sebelumnya">
                                                        <p class="fas fa-chevron-left"></p>
                                                    </a>
                                                    <a href="#gambar1" class="lanjut">
                                                        <p class="fas fa-chevron-right"></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="item_gallery col-lg-4 col-md-6">
                                            <a href="#gambar">
                                                @if ($detailGalleryPhoto['link'] != null)
                                                    <img class="card-img" src="{{ $detailGalleryPhoto['link'] }}"
                                                        onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                @else
                                                    <img class="card-img" src="{{ $detailGalleryPhoto['file'] }}"
                                                        onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                @endif
                                                <div class="overly">
                                                    <div class="text"><i class="fas fa-search-plus"></i></div>
                                                </div>
                                            </a>
                                            <div class="overlay" id="gambar">
                                                <a href="#" class="tutup">X Tutup</a>
                                                <div class="kotak">
                                                    @if ($detailGalleryPhoto['link'] != null)
                                                        <img class="card-img" src="{{ $detailGalleryPhoto['link'] }}"
                                                            onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    @else
                                                        <img class="card-img" src="{{ $detailGalleryPhoto['file'] }}"
                                                            onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    @endif
                                                    <p>{{ $detailGalleryPhoto['judul'] }}</p>
                                                </div>
                                                <div class="nav-overlay">
                                                    <a href="#gambar1" class="sebelumnya">
                                                        <p class="fas fa-chevron-left"></p>
                                                    </a>
                                                    <a href="#gambar1" class="lanjut">
                                                        <p class="fas fa-chevron-right"></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                                @if ($attachments != null)
                                    @foreach ($attachments as $index => $attachment)
                                        <div class="item_gallery col-lg-4 col-md-6">
                                            <a href="#gambar{{ $index + 1 }}">
                                                @if ($attachment['link'] != null)
                                                    <img class="card-img" src="{{ $attachment['link'] }}"
                                                        onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                @else
                                                    <img class="card-img" src="{{ $attachment['file'] }}"
                                                        onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                @endif
                                                <div class="overly">
                                                    <div class="text"><i class="fas fa-search-plus"></i></div>
                                                </div>
                                            </a>
                                            <div class="overlay" id="gambar{{ $index + 1 }}">
                                                <a href="#" class="tutup">X Tutup</a>
                                                <div class="kotak">
                                                    @if ($attachment['link'] != null)
                                                        <img class="card-img" src="{{ $attachment['link'] }}"
                                                            onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    @else
                                                        <img class="card-img" src="{{ $attachment['file'] }}"
                                                            onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                                                    @endif
                                                    <p>{{ $detailGalleryPhoto['judul'] }}</p>
                                                </div>
                                                <div class="nav-overlay">
                                                    <a href="#gambar{{ $index - 1 }}" class="sebelumnya">
                                                        <p class="fas fa-chevron-left"></p>
                                                    </a>
                                                    <a href="#gambar{{ $index + 2 }}" class="lanjut">
                                                        <p class="fas fa-chevron-right"></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="divider1"></div>
                        <div class="navigationss-top ">
                            <div class="d-sm-flex justify-content-between text-center">
                                <ul class="blog-info-link">
                                    @if ($detailGalleryPhoto != null)
                                        <li><i class="fa fa-user"></i> {{ $detailGalleryPhoto['dibuat_oleh'] }}</li>
                                        <li><i
                                                class="fa fa-clock"></i>{{ tanggal_indonesia($detailGalleryPhoto['tgl_dibuat'], false) }}
                                        </li>
                                    @endif
                                </ul>
                                <ul class="social-icons">
                                    @if ($detailGalleryPhoto != null)
                                        <ul class="social-icons">
                                            <li><a href="{!!  $socmed['facebook'] !!}" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{!!  $socmed['whatsapp'] !!}" target="_blank"><i
                                                        class="fab fa-whatsapp"></i></a></li>
                                            <li><a href="{!!  $socmed['twitter'] !!}" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <div class="row pt-0">
                            <div class="col">
                                <div class="section-judul-berita">
                                    <h4>Foto Terbaru</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div class="section-judul-berita">
                                    <h6><a href="{!!  url('/galerifoto') !!}">Lihat Semua</a></h6>
                                </div>
                            </div>
                        </div>
                        <aside class="single_sidebar_widget popular_post_widget">

                            @if ($galleryPhotos != null)
                                @foreach ($galleryPhotos as $photoItem)
                                    <div class="media post_item">
                                        <div class="col-lg-4 col-4 pl-0 pr-0">
                                            @if ($photoItem['file'] != null)
                                                <img class="image" src="{{ $photoItem['file'] }}"
                                                    onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                                            @else
                                                <img class="image" src="{{ $photoItem['link'] }}"
                                                    onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                                            @endif
                                        </div>
                                        <div class="col-lg-8 col-8 pr-0">
                                            <div class="media-body">
                                                <a
                                                    href="{!!  url('/detailgalerifoto?id=') !!}{{ $photoItem['galeri_id'] }}">
                                                    <h3>{{ Str::limit($photoItem['judul'], 50) }}</h3>
                                                </a>
                                                <p style="color: #606060; font-weight: 300; font-size: 12px;"> <img
                                                        src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo"
                                                        style="height: 14px; vertical-align: -1px; margin-right: .2rem;">
                                                    {{ $photoItem['dibuat_oleh'] }}
                                                </p>
                                                <p>{{ tanggal_indonesia($photoItem['tgl_dibuat'], false) }}</p>
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
    <!--================ Blog Area end =================-->
@endsection

@section('p2dd_info')

    @if ($p2dd_info != null)
        <div class="footer-pera footer-pera2">
            <!-- <p>{{ $p2dd_info['title'] }}</p> -->
            <p>{!! $p2dd_info['deskripsi'] !!}</p>
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
