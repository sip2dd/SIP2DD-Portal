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
                                        <li class="active"><a href="#">Edukasi</a>
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
   <!-- navgation link Start-->
   <div class="section-padd4 sky-blue">
      <div class="container nav-bread mt-30">
         <nav>
            <ol class="breadcrumb pl-0 pr-0 sky-blue">
               <li class="breadcrumb-item"><a href="">Materi</a></li>

                  <li class="breadcrumb-item active"><a href="">
                  @if($detailEducation != null)
                     {{ $detailEducation['judul']}}
                  @else
                     404 : Tidak ditemukan
                  @endif
                  </a>
                  </li>
               </li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- navigation link End-->
   <!--================Blog Area =================-->
   <section class="detail_page single-post-area background_3 mb-30">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mb-30">
               <div class="single-post">
                  <div class="blogs">
                     @if($detailEducation != null)
                           <!-- TO DO LIST API CAROUSEL DETAIL BERITA GAMBAR -->
                           <div class="carousel-item active">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
                                 <img class="card-img" src="{{ $detailEducation['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="slide1">
                              </div>
                           </div>

                        @else
                           <div class="carousel-item active">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
                                 <img class="card-img" src="{{ URL::asset('img/P2DD.png') }}" alt="slide3">
                              </div>
                           </div>
                        @endif
                     <div class="blogs_details">
                        @if($detailEducation != null)
                        <h2>{{ $detailEducation['judul']}}</h2>
                           <h3> <img class="logo_gov" src="{{ URL::asset('img/logo_list/gov4_blue.svg') }}" alt="logo">
                           {{ $detailEducation['dibuat_oleh']}}
                           </h3>
                        @else
                           </h2>Oops! Mohon Maaf, Silahkan cek koneksi anda atau halaman tidak tersedia atau URL yang Anda inputkan salah.</h2>
                        @endif

                        @if($detailEducation != null)
                        {!! $detailEducation['deskripsi'] !!}
                        @endif

                        @if($attachments)
                        <div class="materi_edukasi">
                           <p>Lampiran :</p>
                           @foreach($attachments as $attachment)
                              @if($attachment['file'] != null)
                              <p>
                              <a href="{{$attachment['file']}}" class="btn btn_materi_edukasi"><i class="fa fa-cloud-download-alt"
                                    style="margin-right: .5em;"></i> {{$attachment['caption']}}</a>
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
                           <li><i class="fa fa-user"></i> @if($detailEducation != null){{ $detailEducation['dibuat_oleh']}} @endif</li>
                           <li><i class="fa fa-clock"></i>@if($detailEducation != null){{tanggal_indonesia( $detailEducation['tgl_dibuat'],false)}} @endif</li>
                        </ul>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        @if($detailEducation != null)
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
                           <h4>Materi Lainnya</h4>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                  @if($edu != null)
                     @foreach($edu as $item)
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                        <img class="image" src="{{$item['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                        </div>
                        <!--Edit penambahana kelas samping berita-->
                        <div class="col-lg-8 col-8 pr-0">
                           <div class="media-body">
                              <a href="{!! url('/detailedukasi?id=')!!}{{$item['edukasi_id']}}">
                                 <h3>{{ Str::limit($item['judul'], 60) }}</h3>
                              </a>
                              <!--Edit penambahan nama pemda-->
                              <p style="color: #606060; font-weight: 300; font-size: 12px;"> <img
                                src="{{ URL::asset('img/logo_list/gov4_grey.svg') }}" alt="logo"
                                style="height: 14px; vertical-align: -1px; margin-right: .2rem;">
                                {{$item['dibuat_oleh']}}
                        </p>
                              <p>{{tanggal_indonesia($item['tgl_dibuat'], false)}}</p>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  @endif
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
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
