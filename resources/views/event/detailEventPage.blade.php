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
                                    @if($menus != null)
                                        @foreach($menus as $menu)
                                            
                                            @if($menu['link'] == "/".Request::segment(1))
                                                <li class="active"><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                            @else
                                                <li><a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                            @endif

                                            @if(count($menu['menu_child']) > 0)
                                            <ul class="submenu">
                                                @foreach($menu['menu_child'] as $child)
                                                    <li><a href="{!! url($child['link']) !!}">{{$child['menu']}}</a></li>
                                                @endforeach
                                            </ul>
                                            
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
                                        <li class="active"><a href="{!! url('/dashboardkegiatan') !!}">Kegiatan</a></li>
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
   <!-- navgation link Start-->
   <div class="section-padd4 sky-blue">
      <div class="container nav-bread mt-30">
         <nav>
            <ol class="breadcrumb pl-0 pr-0 sky-blue">
               <li class="breadcrumb-item"><a href="Edukasi.html">Kegiatan</a></li>
               <li class="breadcrumb-item active"><a href="">
                @if($detailEvent != null)
                     {{ $detailEvent['judul']}}
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
   <section class="detail_page single-post-area background_2 mb-30">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mb-30">
               <div class="single-post">
                  <div class="blogs">
                     <div id="Carouselgambar" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                        @if($detailEvent != null)
                           <!-- <div class="carousel-item">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
                                 <img src="assets/img/blog/single_blog_2.png" alt="slide2">
                              </div>
                           </div> -->
                           <div class="carousel-item active">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
                                 <!-- <iframe id="webinar_video" src="https://www.youtube.com/embed/fyVuLM6ubsU"
                                    allowfullscreen>
                                 </iframe> -->
                                 <img class="card-img" src="{{ $detailEvent['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="slide1">
                              </div>
                           </div>
                        @else
                           <div class="carousel-item active">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <img class="card-img" src="{{ URL::asset('img/P2DD.png') }}" alt="slide3">
                              </div>
                           </div>
                        @endif
                        </div>
                        <a class="carousel-control-prev w-auto" href="#Carouselgambar" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"
                              style="width: 35px; height: 35px;"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#Carouselgambar" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"
                              style="width: 35px; height: 35px;"></span>
                           <span class="sr-only">Next</span>
                        </a>
                     </div>
                     <div class="blogs_details">

                        @if($detailEvent != null)
                            <h2>{{ $detailEvent['judul']}}</h2>
                            <h3> <img class="logo_gov" src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                            {{ $detailEvent['dibuat_oleh']}}
                            </h3>
                        @else
                            Oops! Mohon Maaf, halaman tidak tersedia atau URL yang Anda inputkan salah.
                        @endif
                        </h2>
                        @if($detailEvent != null)
                        <p>{!! $detailEvent['deskripsi'] !!}</p>
                        @endif
                        <!--Edit judul menjadi materi-->
                        @if($attachments)
                        <div class="materi_edukasi">
                           <p>Lampiran :</p>
                           @foreach($attachments as $attachment)
                              @if($attachment['file'] != null)
                              <p>
                              <a href="{{$attachment['file']}}" class="btn btn_materi_edukasi"><i class="fa fa-cloud-download-alt"
                                    style="margin-right: .5em;"></i> {{$attachment['caption']}} 1</a>
                              </p>
                              @endif

                              @if($attachment['link'] != null)
                              <p>
                              <a href="{{$attachment['link']}}" class="btn btn_materi_edukasi"><i class="fa fa-cloud-download-alt"
                                    style="margin-right: .5em;"></i> {{$attachment['caption']}} 2</a>
                              </p>
                              @endif
                           @endforeach
                        </div>
                        @endif

                     </div>
                  </div>
                  <div class="divider1"></div>
                  <div class="navigationss-top ">
                     <div class="d-sm-flex justify-content-between text-center">
                        <ul class="blog-info-link">
                        <li><i class="fa fa-user"></i> @if($detailEvent != null){{ $detailEvent['dibuat_oleh']}} @endif</li>
                        <li><i class="fa fa-clock"></i>@if($detailEvent != null){{tanggal_indonesia( $detailEvent['tanggal_publikasi'],false)}} @endif</li>
                        </ul>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        @if($detailEvent != null)
                        <ul class="social-icons">
                            <li><a href="{!! $socmed['facebook'] !!}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{!! $socmed['whatsapp'] !!}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="{!! $socmed['twitter'] !!}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita rata_tengah">
                           <h4>Webinar Lainnya</h4>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                    @if($events != null)
                        @foreach($events as $event)
                        <div class="media post_item">
                            <div class="col-lg-4 col-4 pl-0 pr-0">
                            <img class="image" src="{{$event['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                            </div>
                            <!--Edit penambahana kelas samping berita-->
                            <div class="col-lg-8 col-8 pr-0">
                            <div class="media-body">
                                <a href="">
                                    <h3>{{ Str::limit($event['judul'], 60) }}</h3>
                                </a>
                                <!--Edit logo dan penambahan nama instansi-->
                                <p style="color: #606060; font-weight: 300; font-size: 12px;"> <img
                                        src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo"
                                        style="height: 14px; vertical-align: -1px; margin-right: .2rem;">
                                        {{$event['dibuat_oleh']}}
                                </p>
                                <p>{{tanggal_indonesia($event['tgl_dibuat'], false)}}</p>
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