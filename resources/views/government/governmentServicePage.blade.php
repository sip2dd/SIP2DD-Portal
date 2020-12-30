@extends('template.main')

@section('title', 'Layanan TP2DD | Portal Percepatan Digitalisasi Daerah')

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
<main class="background-utama">
        <!-- navgation link Start-->
        <div class="section-padd4">
            <div class="container nav-bread mt-30">
                <nav>
                    <ol class="breadcrumb pl-0 pr-0 sky-blue">
                        <li class="breadcrumb-item"><a href="{{url('')}}">TP2DD</a></li>
                        @if($govDetail != null)
                            <li class="breadcrumb-item"><a href="{{url('/detailtp2dd?id=')}}{{$govDetail['instansi_id']}}">{{$govDetail['profile']}}</a></li>
                        @endif
                        <li class="breadcrumb-item active"><a href="">Layanan TP2DD</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- navigation link End-->
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padding pt-0">
            <div class="container pr-0 pl-0">
                <!-- Section Judul -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle pt-25 text-center mb-50">
                            <h2>Layanan TP2DD</h2>
                            @if($govDetail != null)
                            <h2>{{$govDetail['profile']}}</h2>
                            @endif
                        </div>
                    </div>
                </div>
                <!--Section Form input-->
                <div class="form-row justify-content-center mb-50">
                    <!--Edit untuk responsive form input bebeerapa ada edit di css-->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <form action="{!! url('/carilayanantp2dd')!!}" method="GET">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="keyword" type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
                                    <input type="hidden" name="id" value="<?php echo (isset($id)) ?  $id : '' ?>" >
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

                
                <!-- Section caption -->
                @if($govServices != null)
                <div class="row padd-coba">
                    @foreach($govServices as $govService)
                    <div class="col-xl-4 col-lg-4 col-md-6 clear-padd">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span><img src="{{$govService['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/logo/log.png') }}'"></span>
                            </div>
                            <div class="service-cap">
                                <h4 class="service-judul"><a href="{!! url('/detaillayanan?id=')!!}{{$govService['layanan_id']}}">{{Str::limit($govService['judul'],32)}}</a></h4>
                                <div class="services-loc">
                                    <h6><img src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                                        {{$govService['dibuat_oleh']}}
                                    </h6>
                                </div>
                                <p>{{Str::limit(strip_tags($govService['deskripsi']), 90) }}.</p>

                            </div>
                            <div class="link_layanan">
                                <a href="//{{$govService['link_layanan']}}" target="_blank">Link Layanan</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mb-30">
                    <nav class="blog-pagination">
                    <ul class="pagination">
                            @if($page > 1)
                            <li class="page-item">
                                <a href="{!! url('/layanantp2dd?id='.$id.'&page='.($page-1)) !!}" class="page-link" aria-label="Previous">
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
                                        <a href="{!! url('/layanantp2dd?id='.$id.'&page='.$i) !!}" class="page-link">{{$i}}</a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a href="{!! url('/layanantp2dd?id='.$id.'&page='.$i) !!}" class="page-link">{{$i}}</a>
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
                                <a href="{!! url('/layanantp2dd?id='.$id.'&page='.($page+1)) !!}" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                            @endif
                            </ul>
                    </nav>
                </div>
                @else
                <div class="row justify-content-center mb-30">
                    Belum Ada Data
                </div>
                @endif
            </div>
        </section>
        <!-- Akhir area TP2DD -->
    </main>

    
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