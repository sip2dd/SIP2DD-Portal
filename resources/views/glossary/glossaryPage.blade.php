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
                                        <li class="active"><a href="#">Edukasi</a>
                                            <ul class="submenu">
                                                <li><a href="{!! url('/edukasi') !!}">Materi</a></li>
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



    <main>
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padd4 background_3">
            <div class="container mt-50">
                <!-- Section Judul -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center mb-50">
                            <h2>Daftar Istilah</h2>
                        </div>
                    </div>
                </div>
                <div class="card table_istilah pt-3 pb-3 pl-3 pr-3">
                    <div class="table-responsive pb-0">
                        <table class="table table-hover" id="tb_daftar_istilah" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col" width="6%">No</th>
                                    <th scope="col" width="35%">Nama Istilah</th>
                                    <th scope="col" width="50%">Deskripsi Istilah </th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($gloItems != null)
                                @foreach($gloItems as $index => $item)
                                <tr>
                                    <th scope="row" width="6%">{{$index+1}}</th>
                                    <td width="35%">{{$item['nama']}} </td>
                                    <td width="50%">{{$item['deskripsi']}}</td>
                                </tr>
                                @endforeach
                            @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir area TP2DD -->
    </main>

    
@endsection
