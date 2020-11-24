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
                                        <li ><a href="{!! url('/') !!}">Beranda</a></li>
                                        <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                        <li><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                                        <li class="active"><a href="#">Edukasi</a>
                                            <ul class="submenu">
                                                <li class="active"><a href="{!! url('/edukasi') !!}">Materi</a></li>
                                                <li><a href="{!! url('/faq') !!}">FAQ</a></li>
                                                <li><a href="{!! url('/daftaristilah') !!}">Daftar Istilah</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{!! url('/regulasi') !!}">Regulasi</a></li>
                                        <li><a href="#">Kolaborasi</a></li>
                                        <li><a href="{!! url('/kegiatan') !!}">Kegiatan</a></li>
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
    <!-- Area Header dan judul Start-->
    <div class="section-padd4 sky-blue">
        <div class="container mt-50">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Materi</h2>
                    </div>
                </div>
            </div>
            <!--Section Form input Cari-->
            <div class="form-row justify-content-center">
                <!--*Edit* tambahan class col untuk responsive-->
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <form action="{!! url('/pencarian')!!}" method="GET">
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
    <section class="blog_area pt-10 background_1">
        <div class="container">
            <!--Galeri-->
            @if($eduItems != null)
            <div class="row">
            @foreach($eduItems as $item)
                <div class="col-lg-4 col-md-6">
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img" src="{{$item['gambar_utama']}}"  onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                        </div>

                        <div class="blog_details">
                            <div class="row">
                                <div class="col">
                                    <p>{{tanggal_indonesia($item['tgl_dibuat'])}}</p>
                                </div>
                            </div>
                            <h6> <img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo">
                                {{$item['dibuat_oleh']}}
                            </h6>
                            <a href="{{ url('detailedukasi?id=') }}{{$item['edukasi_id']}}" class="deskripsi-galeri1">
                                <h2>{{ Str::limit($item['judul'], 60) }}</h2>
                            </a>
                            <div class="row">
                                <div class="col daftar_berita_link">
                                    <a href="{{ url('detailedukasi?id=') }}{{$item['edukasi_id']}}">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
            @endif

            </div>
            <div class="row justify-content-center mb-50">
                <nav class="blog-pagination">
                    <ul class="pagination">
                        @if($page > 1)
                        <li class="page-item">
                            <a href="{!! url('/edukasi?page='.($page-1)) !!}" class="page-link" aria-label="Previous">
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
                                    <a href="{!! url('/edukasi?page='.$i) !!}" class="page-link">{{$i}}</a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a href="{!! url('/edukasi?page='.$i) !!}" class="page-link">{{$i}}</a>
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
                            <a href="{!! url('/edukasi?page='.($page+1)) !!}" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
