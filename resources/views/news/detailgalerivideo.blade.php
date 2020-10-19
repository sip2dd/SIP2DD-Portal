@extends('template.main')

@section('title', 'Galeri Video | Portal Percepatan Digitalisasi Daerah')

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
            <ol class="breadcrumb pl-0 pr-0 sky-blue">
               <li class="breadcrumb-item"><a href="Berita.html">Berita</a></li>
               <li class="breadcrumb-item"><a href="Galeri.html">Galeri</a></li>
               <li class="breadcrumb-item active"><a href="#">Mulai 20..dkjajdkakdjkajdkjkjadkjakd</a>
               </li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- navigation link End-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area background_2">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mb-30">
               <div class="single-post">
                  <div class="blogs">
                     <video controls>
                        <source src="https://www.youtube.com/watch?v=A0IM-2zdNhY.mp4">
                     </video>
                     <div class="blogs_details">
                        <h2>Second divided from form fish beast made every of seas
                           all gathered us saying he our
                        </h2>
                     </div>
                  </div>
                  <div class="divider1"></div>
                  <div class="navigationss-top ">
                     <div class="d-sm-flex justify-content-between text-center">
                        <ul class="blog-info-link">
                           <li><i class="fa fa-user"></i> Admin Pemda</li>
                           <li><i class="fa fa-clock"></i>03 Oktober 2020</li>
                        </ul>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita">
                           <h4>Video Terbaru</h4>
                        </div>
                     </div>
                     <div class="col">
                        <div class="section-judul-berita">
                           <h6><a href="Galeri.html">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="{{ URL::asset('img/P2DD.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="Detail_Berita.html">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="{{ URL::asset('img/P2DD.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="Detail_Berita.html">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="{{ URL::asset('img/P2DD.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="Detail_Berita.html">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="{{ URL::asset('img/P2DD.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="Detail_Berita.html">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="{{ URL::asset('img/P2DD.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="Detail_Berita.html">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
@endsection