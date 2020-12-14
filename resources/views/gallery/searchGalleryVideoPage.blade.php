@extends('template.main')

@section('title', 'Galeri Video | Portal Percepatan Digitalisasi Daerah')

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
                                            <li><a href="{!! url('/dashboardkegiatan') !!}">Kegiatan</a></li>
                                            <li class="active"><a href="#">Galeri</a>
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
    <!-- Area Header dan judul Start-->
    <div class="section-padd4 sky-blue">
        <div class="container mt-50">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Galeri Video</h2>
                    </div>
                </div>
            </div>
            <!--Section Form input Cari-->
            <div class="form-row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <form action="{!! url('/carigalerivideo')!!}" method="GET">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="keyword" type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
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
    <!--================Galeri=================-->
    <section class="blog_area pt-10 background_3">
        <div class="container">
                @if($keyword != "")
                <div class="row">
                    <div class="col-lg-12 col-md-6 ket-jumlah-cari">
                    <p>Hasil pencarian <strong>"{{$keyword}}"</strong>, {{$count}} hasil ditemukan</p>
                    <!-- <p>Hasil pencarian <strong>"Elektronifikasi"</strong>, 30 hasil ditemukan</p> -->
                    </div>
                </div>
                @endif
            <!--Galeri-->
            @if($galleryVideos != null)
            <div class="row">
            @foreach($galleryVideos as $galleryVideo)
                <div class="col-lg-4 col-md-6">

                        <article class="blog_item">
                            <div class="blog_item_img">
                            @if($galleryVideo['tipe'] == "Youtube")
                                <img class="card-img" src="https://img.youtube.com/vi/{{ getYouTubeVideoId($galleryVideo['link']) }}/maxresdefault.jpg"
                                                                    alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                            @else
                                <img class="card-img" src="" alt="" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'">
                            @endif
                            </div>

                            <div class="blog_details">
                                <div class="row">
                                    <div class="col">
                                        <p>{{tanggal_indonesia($galleryVideo['tgl_dibuat'])}}</p>
                                    </div>
                                </div>
                                <h6 style="color: #606060;">
                                <img
                                src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo">
                                {{$galleryVideo['dibuat_oleh']}}
                                </h6>
                                <a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryVideo['galeri_id']}}" class="deskripsi-galeri1">
                                    <h2>{{ Str::limit($galleryVideo['judul'], 60) }}</h2>
                                </a>
                                <div class="row">
                                    <div class="col daftar_berita_link">
                                        <a href="{!! url('/detailgalerivideo?id=')!!}{{$galleryVideo['galeri_id']}}">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                </div>
            @endforeach
            </div>
            <div class="row justify-content-center mb-30">
                <nav class="blog-pagination">
                    <ul class="pagination">
                        @if($page > 1)
                        <li class="page-item">
                            <a href="{!! url('/carigalerivideo?keyword='.$keyword.'&page='.($page-1)) !!}" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        @else
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        @endif
                        @for($i =1; $i<=$pagination; $i++)
                                @if($page == $i)
                                <li class="page-item active">
                                    <a href="{!! url('/carigalerivideo?keyword='.$keyword.'&page='.$i) !!}" class="page-link">{{$i}}</a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a href="{!! url('/carigalerivideo?keyword='.$keyword.'&page='.$i) !!}" class="page-link">{{$i}}</a>
                                </li>
                                @endif
                        @endfor
                        @if($page == $pagination)
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                        @else
                        <li class="page-item">
                            <a href="{!! url('/carigalerivideo?keyword='.$keyword.'&page='.($page+1)) !!}" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
            @else
                <div class="row justify-content-center mb-30">
                    Belum ada Data
                </div>
            @endif
        </div>
    </section>
    <!--================Blog Area =================-->
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