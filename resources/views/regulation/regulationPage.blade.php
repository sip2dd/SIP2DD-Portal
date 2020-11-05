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
    <main class="background-utama">
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padding">
            <div class="container">
                <!-- Section Judul -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle pt-25 text-center mb-40">
                            <h2>Regulasi</h2>
                        </div>
                    </div>
                </div>
                <!--Section Form input-->
                <div class="row justify-content-center mb-50">
                    <form action="" class="form-inline form_searchcari">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="jenisRegulasi" class="label_inputan">Regulasi</label>
                                    <select id="jenisRegulasi" class="search_inputan">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="nomorRegulasi" class="label_inputan">Nomor</label>
                                    <input id="nomorRegulasi" class="search_inputan" type="number" autocomplete="off"
                                        placeholder="Input Nomor">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="tahunRegulasi" class="label_inputan">Tahun</label>
                                    <select id="tahunRegulasi" class="search_inputan">
                                        <option selected hidden>Input Tahun</option>
                                        <option>Semua Tahun</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="tentangRegulasi" class="label_inputan">Tentang Peraturan</label>
                                    <textarea class="search_inputan tentangr" id="tentangRegulasi" rows="1"></textarea>
                                    <div class="input-group-append">
                                        <button class="button_searchr">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--Bagian list regulasi -->
                <div class="row">
                @if($regItems != null)
                    @foreach($regItems as $index => $item)
                    <div class="card w-100 card-besar">
                        <div class="body_card">
                            <h4>{{$item['judul']}}</h4>
                            <p>{!! $item['deskripsi'] !!}</p>
                            <div class="button_card">
                                <a href="{{$item['file']}}" target="_blank" class="button_card_d"><i class="fa fa-file-pdf"></i> Unduh Materi</a>
                                <a href="" class="button_card_v" data-toggle="modal" data-target="#tampilRegulasi"><i
                                        class="fa fa-search"></i>
                                    Pratinjau</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                    
                </div>
                <!--Bagian Pagination-->
                <div class="row justify-content-center">
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
        <!-- Akhir pagination-->
        <!-- Modal Tampil Detail Regulasi -->
        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="tampilRegulasi" tabindex="-1"
            role="dialog" aria-labelledby="tampilRegulasi" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tampilRegulasi">
                            Peraturan Presiden
                            Nomor 40/Pres/0322/0321021 Tahun 2009
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            id="btnbatalbarang1">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <embed src="http://103.18.117.44/sicantik-ws/webroot/files/upload/1327-20201018112722_719_instruksigubernurdaerahkhususibukotajakartanomor55tahun2020.pdf" frameborder="0" width="100%" height="380px">
                    </div>
                    <div class="modal-footer justify-content-center">
                        <a href="" class="button_card_d"><i class="fa fa-file-pdf"></i> Unduh Materi</a>
                        <button type="button" class="button_card_v" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 @endsection