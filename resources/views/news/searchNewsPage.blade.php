@extends('template.main')

@section('title', 'Pencarian | Portal Percepatan Digitalisasi Daerah')

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
                                        <li class="active"><a href="{!! url('/berita') !!}">Berita</a></li>
                                        <li><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                                        <li><a href="#">Edukasi</a>
                                            <ul class="submenu">
                                                <li><a href="{!! url('/edukasi') !!}">Edukasi Artikel</a></li>
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
                <div class="form-row justify-content-center">
                    <!--*Edit* tambahan class col untuk responsive-->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <form action="{!! url('/pencarianberita')!!}" method="GET">
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
                @if($keyword != "")
                <div class="row">
                    <div class="col-lg-12 col-md-6 ket-jumlah-cari">
                    <p>Hasil pencarian <strong>"{{$keyword}}"</strong>, {{$count}} hasil ditemukan</p>    
                    <!-- <p>Hasil pencarian <strong>"Elektronifikasi"</strong>, 30 hasil ditemukan</p> -->
                    </div>
                </div>
                @endif
                <!--Hasil Pencarian -->
                @if($searchNews != null)
                <div class="row">
                    @foreach($searchNews as $index => $newsItem)
                        <div class="card w-100 card-besar">
                            <div class="row no-gutters berita_card">
                                <div class="col-lg-4">
                                    <img class="berita_img" src="{{$newsItem['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'"
                                        style="width:100%; height: 250px;">
                                </div>
                                <div class="col-lg-8 card_desk">
                                    <div class="card-body">
                                        <h6>{{tanggal_indonesia($newsItem['tanggal_publikasi'])}}</h6>
                                        <h4><a href="{!! url('/detailberita?id=')!!}{{$newsItem['berita_id']}}">
                                        {{ Str::limit($newsItem['judul'], 60) }}</a></h4>
                                        <h6> <img src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo">
                                            {{$newsItem['dibuat_oleh']}}
                                        </h6>
                                        <p>{{ Str::limit(strip_tags($newsItem['body']), 250) }}
                                        <p id="selengkapnya"><a href="{!! url('/detailberita?id=')!!}{{$newsItem['berita_id']}}">Selengkapnya <i
                                                    class="fas fa-chevron-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--Bagian Pagination-->
                <div class="row justify-content-center">
                    <nav class="blog-pagination">
                        <ul class="pagination">
                            @if($page > 1)
                            <li class="page-item">
                                <a href="{!! url('/pencarianberita?&keyword='.$keyword.'&page='.($page-1)) !!}" class="page-link" aria-label="Previous">
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
                                        <a href="{!! url('/pencarianberita?&keyword='.$keyword.'&page='.$i) !!}" class="page-link">{{$i}}</a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a href="{!! url('/pencarianberita?&keyword='.$keyword.'&page='.$i) !!}" class="page-link">{{$i}}</a>
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
                                <a href="{!! url('/pencarianberita?&keyword='.$keyword.'&page='.($page+1)) !!}" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                @else
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <a style="margin:auto; text-align: center; display: block;">Belum ada Data, Silahkan ketik di kolom pencarian</a>
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!-- Akhir pagination-->

    </main>
@endsection

