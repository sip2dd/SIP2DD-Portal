@extends('template.main')

@section('title', 'Regulasi | Portal Percepatan Digitalisasi Daerah')

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
                                                        @if($menu['link'] == "/#")
                                                            <li class="active"><a>{{$menu['nama']}}</a>
                                                        @else
                                                        <li class="active"><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                                        @endif
                                                    @elseif($menu['link'] == "/#")
                                                        <li><a>{{$menu['nama']}}</a>
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
                                    <!-- 
                                        <li class="active"><a href="{!! url('/') !!}">Beranda</a></li>
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
                                        <li><a href="#">Galeri</a>
                                            <ul class="submenu">
                                                <li><a href="{!! url('/galerifoto') !!}">Galeri Foto</a></li>
                                                <li><a href="{!! url('/galerivideo') !!}">Galeri Video</a></li>
                                            </ul>
                                        </li>

                                     -->
                                    @endif
                                        <!-- <li>
                                            <div style="padding: 13px 30px;
    border-radius: 50px;
    background-color: #00ABE9;
    color: #fff !important;
    font-size: 15px !important;">
                                                <a href="#">test</a>
                                            </div>
                                        </li> -->
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
    <main class="background_1">
        <!-- Area untuk Pencarian TP2DD -->
        <section class="service-area section-padding mb-30">
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
                    <form action="{!! url('/cariregulasi')!!}" class="form-inline form_searchcari" method="GET">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="nomorRegulasi" class="label_inputan">Nomor</label>
                                    <input name="nomor" id="nomorRegulasi" class="search_inputan" type="text" autocomplete="off"
                                        placeholder="Input Nomor">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="tahunRegulasi" class="label_inputan">Tahun</label>
                                    <select name="tahun" id="tahunRegulasi" class="search_inputan">
                                        <option hidden>Input Tahun</option>
                                        <option>Semua Tahun</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <!--Edit judul dan perubahan tag menjadi input-->
                                    <label for="tentangRegulasi" class="label_inputan">Tentang</label>
                                    <input name="tentang" class="search_inputan" id="tentangRegulasi" type="text"
                                        placeholder="Cari..">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="statusRegulasi" class="label_inputan">Status</label>
                                    <select name="status" class="search_inputan tentangr" id="statusRegulasi" class="search_inputan">
                                        <option hidden>Pilih Status</option>
                                        <option>Berlaku</option>
                                        <option>Diubah</option>
                                        <option>Mengubah</option>
                                        <option>Dicabut</option>
                                        <option>Mencabut</option>
                                        <option>Tidak Berlaku</option>
                                    </select>
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
                                <a href="" class="button_card_x" data-toggle="modal" data-target="#tampilRegulasi{{$index}}"><i
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
                         <ul class="pagination">
                            @if($page > 1)
                            <li class="page-item">
                                <a href="{!! url('/regulasi?page='.($page-1)) !!}" class="page-link" aria-label="Previous">
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
                                        <a href="{!! url('/regulasi?page='.$i) !!}" class="page-link">{{$i}}</a>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a href="{!! url('/regulasi?page='.$i) !!}" class="page-link">{{$i}}</a>
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
                                <a href="{!! url('/regulasi?page='.($page+1)) !!}" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Akhir pagination-->
        <!-- Modal Tampil Detail Regulasi -->
        @if($regItems != null)
            @foreach($regItems as $index => $item)
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="tampilRegulasi{{$index}}" tabindex="-1"
                role="dialog" aria-labelledby="tampilRegulasi" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tampilRegulasi">
                                {{$item['judul']}}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                id="btnbatalbarang1">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <embed src="{{$item['file']}}" frameborder="0" width="100%" height="380px">
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href="{{$item['file']}}" target="_blank" class="button_card_d"><i class="fa fa-file-pdf"></i> Unduh Materi</a>
                            <button type="button" class="button_card_x" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </main>

    <!--Edit Penambahan tombol scroll up-->
    <!--Tambah Tombol scroll up dan js nya-->
    <button id="scrollUp" onclick="topFunction()" style="position: fixed; z-index: 2147483647; display: block;"><i
            class="ti-arrow-up"></i></button>
    <script>
        var mybutton = document.getElementById("scrollUp");

        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
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
