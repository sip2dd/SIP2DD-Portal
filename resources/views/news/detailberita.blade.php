@extends('template.main')

@section('title', 'Detail Berita | Portal Percepatan Digitalisasi Daerah')

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
                                                <li><a href="#">Edukasi Artikel</a></li>
                                                <li><a href="#">FAQ</a></li>
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
                                    </li>
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
   <!-- navgation link Start-->
   <div class="section-padd4 sky-blue">
      <div class="container nav-bread mt-30">
         <nav>
            <ol class="breadcrumb pl-0 sky-blue">
               <li class="breadcrumb-item"><a href="{!! url('/berita') !!}">Berita</a></li>
               <li class="breadcrumb-item active"><a href="">
                  @if($detail_berita != null)
                     {{ $detail_berita['judul']}}
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
   <section class="blog_area single-post-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list" style="padding-top: 10px; padding-bottom: 50px;">
               <div class="single-post">
                  <div class="blog_item_img">
                     <div id="contohCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                        @if($detail_berita != null)
                           <!-- TO DO LIST API CAROUSEL DETAIL BERITA GAMBAR -->
                           <div class="carousel-item active">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ $detail_berita['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="slide1">
                              </div>
                           </div>
                           <!-- <div class="carousel-item">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ URL::asset('img/blog/single_blog_3.png') }}" alt="slide2">
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ URL::asset('img/blog/single_blog_4.png') }}" alt="slide3">
                              </div>
                           </div> -->
                        @else
                           <div class="carousel-item active">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ URL::asset('img/P2DD.png') }}" alt="slide3">
                              </div>
                           </div>
                        @endif
                        </div>
                        <a class="carousel-control-prev w-auto" href="#contohCarousel" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"
                              style="width: 35px; height: 35px;"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#contohCarousel" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"
                              style="width: 35px; height: 35px;"></span>
                           <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
                  <div class="blog_detailss">
                     <h2>
                     @if($detail_berita != null)
                        {{ $detail_berita['judul']}}
                     @else
                        Oops! Mohon Maaf, halaman tidak tersedia atau URL yang Anda inputkan salah. 
                     @endif
                     </h2>
                     @if($detail_berita != null)
                     {!! $detail_berita['body'] !!}
                     @endif
                  </div>
                  <div class="divider"></div>
               </div>
               <div class="navigation-top ">
                  <div class="d-sm-flex justify-content-between text-center">
                     <ul class="blog-info-link">
                        <li><i class="fa fa-user"></i> @if($detail_berita != null){{ $detail_berita['dibuat_oleh']}} @endif</li>
                        <li><i class="fa fa-clock"></i>@if($detail_berita != null){{ $detail_berita['tanggal_publikasi']}} @endif</li>
                     </ul>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     @if($detail_berita != null)
                     <ul class="social-icons">
                        <li><a href="{!! $socmed['facebook'] !!}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{!! $socmed['whatsapp'] !!}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="{!! $socmed['twitter'] !!}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                     </ul>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita">
                           <h4>Berita Terbaru</h4>
                        </div>
                     </div>
                     <div class="col">
                        <div class="section-judul-berita">
                           <h6><a href="{!! url('beritaterbaru') !!}">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                  @if($highlights != null)
                     @foreach($highlights as $highlight)
                        <div class="media post_item">
                           <div class="col-lg-4 col-4">
                              <img src="{{$highlight['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                           </div>
                           <div class="col-lg-8 col-8">
                              <div class="media-body">
                                 <a href="{!! url('/detailberita?id=10')!!}">
                                    <h3>{{$highlight['judul']}}</h3>
                                 </a>
                                 <p>{{$highlight['tanggal_publikasi']}}</p>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  @else
                     Belum ada Data
                  @endif   
                  </aside>
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita">
                           <h4>Berita Satgas</h4>
                        </div>
                     </div>
                     <div class="col">
                        <div class="section-judul-berita">
                           <h6><a href="{!! url('beritasatgas') !!}">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                  @if($berita_satgases != null)
                     @foreach($berita_satgases as $berita_satgas)
                        <div class="media post_item">
                           <div class="col-lg-4 col-4">
                              <img src="{{$berita_satgas['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                           </div>
                           <div class="col-lg-8 col-8">
                              <div class="media-body">
                                 <a href="{!! url('/detailberita?id=10')!!}">
                                    <h3>{{$berita_satgas['judul']}}.</h3>
                                 </a>
                                 <p>{{$berita_satgas['tanggal_publikasi']}}</p>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  @else
                     Belum ada Data
                  @endif
                     
                  </aside>
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita">
                           <h4>Berita Daerah</h4>
                        </div>
                     </div>
                     <div class="col">
                        <div class="section-judul-berita">
                           <h6><a href="{!! url('beritadaerah') !!}">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                  @if($berita_daerahes != null)
                     @foreach($berita_daerahes as $berita_daerah)
                        <div class="media post_item">
                           <div class="col-lg-4 col-4">
                              <img src="{{$berita_daerah['gambar_utama']}}" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                           </div>
                           <div class="col-lg-8 col-8">
                              <div class="media-body">
                                 <a href="{!! url('/detailberita?id=10')!!}">
                                    <h3>{{$berita_daerah['judul']}}</h3>
                                 </a>
                                 <p>{{$berita_daerah['tanggal_publikasi']}}</p>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  @else
                     Belum ada Data
                  @endif
                     
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
@endsection