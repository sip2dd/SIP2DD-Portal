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
                                        <li class="active"><a href="{!! url('/') !!}">Beranda</a></li>
                                        <li><a href="{!! url('/berita') !!}">Berita</a></li>
                                        <li><a href="{!! url('/tp2dd') !!}">TP2DD</a></li>
                                        <li><a href="#">Edukasi</a>
                                            <ul class="submenu">
                                                <li><a href="#">Edukasi Artikel</a></li>
                                                <li><a href="{!! url('/faq') !!}">FAQ</a></li>
                                                <li><a href="#">Daftar Istilah</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Regulasi</a></li>
                                        <li><a href="#">Kolaborasi</a></li>
                                        <li><a href="#">Kegiatan</a></li>
                                        <li><a href="{!! url('/galeri') !!}">Galeri</a>
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
                            <div class="mobile_menu d-block d-md-none"></div>
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
                <!--Section Form input-->
                <div class="form-row justify-content-center mb-50">
                    <!--Edit untuk responsive kolom pencarian dan ada edit di css-->
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <form action="" method="">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" autocomplete="off" class="inputan-cari" placeholder="Cari">
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
                    <div class="col-lg-6 col-md-6 justify-content-center">
                        <div class="dropdown">
                            <div class="btn-group" role="group">
                                <button class="button2 btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Urutkan
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Dari Huruf Awal <i class="fa fa-sort-alpha-down"
                                            style="margin-left: 1.5em;"></i></a>
                                    <a class="dropdown-item" href="#">Dari Huruf Terakhir<img
                                            src="assets/fonts/sort-alpha-down-alt-solid.svg"
                                            style="width: 13px; margin-left: .3em;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card table_istilah">
                    <div class="table-responsive pb-0">
                        <table class="table table-hover table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col" width="6%">No</th>
                                    <th scope="col" width="35%">Nama Istilah</th>
                                    <th scope="col" width="60%">Deskripsi Istilah </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                                <tr>
                                    <th scope="row" width="6%">1</th>
                                    <td width="35%">Mark </td>
                                    <td width="60%">Otto</td>
                                </tr>
                            </tbody>
                        </table>
                        </table>
                    </div>
                </div>
                <div class="row justify-content-center mb-50">
                    <nav class="blog-pagination">
                        <!-- <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul> -->
                    </nav>
                </div>
            </div>
        </section>
        <!-- Akhir area TP2DD -->
    </main>
@endsection
