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
                                        <li><a href="{!! url('/') !!}">Beranda</a></li>
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
                                    </li>
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
                        <li class="breadcrumb-item"><a href="{{url('')}}">Beranda</a></li>
                        <li class="breadcrumb-item active"><a href="{!! url('/layanan') !!}">Layanan TP2DD</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- navigation link End-->
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padding pt-0">
            <div class="container">
                <!-- Section Judul -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle pt-25 text-center mb-50">
                            <h2>Layanan TP2DD</h2>
                        </div>
                    </div>
                </div>
                <!--Section Form input-->
                <div class="form-row justify-content-center mb-50">
                    <!--Edit untuk responsive form input bebeerapa ada edit di css-->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <form action="{!! url('/carilayanan')!!}" method="GET">
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

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!--Edit Memakai plugin select 2-->
                        <div class="dropdown">
                            <div class="btn-group" role="group">
                                <select class="select_prov" style="width: 250px; padding: 10px 5px;" onchange="if (this.value) window.location.href=this.value">
                                <option class="l1"></option>
                                @if($listGovs != null)
                                @foreach($listGovs as $gov)
                                    @if(strlen($gov['kode_daerah']) < 3)
                                        <option class="l1" value="{{ url('/layananinstansi') }}?kode_daerah={{$gov['kode_daerah']}}">{{$gov['nama_daerah']}}</option>
                                    @else
                                        <option class="l2" value="{{ url('/layananinstansi') }}?kode_daerah={{$gov['kode_daerah']}}">{{$gov['nama_daerah']}}</option>
                                    @endif
                                @endforeach
                                @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ket-jumlah">
                        <!-- <p>menunjukkan hasil 10 Layanan</p> -->
                    </div>
                </div>
                <!-- Section caption -->
                @if($govServices != null)
                <div class="row">
                    @foreach($govServices as $govService)
                    <div class="col-xl-4 col-lg-4 col-md-6">
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
                                <a href="{!! url('/layananinstansi?kode_daerah='.$kode_daerah.'&page='.($page-1)) !!}" class="page-link" aria-label="Previous">
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
                                        <a href="{!! url('/layananinstansi?kode_daerah='.$kode_daerah.'&page='.$i) !!}" class="page-link">{{$i}}</a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a href="{!! url('/layananinstansi?kode_daerah='.$kode_daerah.'&page='.$i) !!}" class="page-link">{{$i}}</a>
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
                                <a href="{!! url('/layananinstansi?kode_daerah='.$kode_daerah.'&page='.($page+1)) !!}" class="page-link" aria-label="Next">
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
