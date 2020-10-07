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
                        <a href="index.html"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xl-10 col-lg-10 col-md-10">
                     <!-- Main-menu -->
                     <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                           <ul id="navigation">
                              <li><a href="index.html">Beranda</a></li>
                              <li class="active"><a href="#">Berita</a></li>
                              <li><a href="TP2DD.html">TP2DD</a></li>
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
               <li class="breadcrumb-item"><a href="Berita.html">Berita</a></li>
               <li class="breadcrumb-item"><a href="#">Berita Terbaru</a>
               <li class="breadcrumb-item active"><a href="#">Berjadjdakdjda</a>
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
                           <div class="carousel-item active">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ URL::asset('img/berita/kominfo2.jpeg') }}" alt="slide1">
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ URL::asset('img/blog/single_blog_3.png') }}" alt="slide2">
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="col-lg-12">
                                 <img class="card-img" src="{{ URL::asset('img/blog/single_blog_4.png') }}" alt="slide3">
                              </div>
                           </div>
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
                     <h2>Elektronifikasi Transaksi Pemda Untuk Mendorong Transformasi
                        Digital
                        dan
                        Pertumbuhan Ekonomi
                     </h2>
                     <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower
                     </p>
                     <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower to actually sit through a
                        self-imposed MCSE training. who has the willpower to actually
                     </p>
                     <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower
                     </p>
                     <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                        should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                        fraction of the camp price. However, who has the willpower to actually sit through a
                        self-imposed MCSE training. who has the willpower to actually
                     </p>
                  </div>
                  <div class="divider"></div>
               </div>
               <div class="navigation-top ">
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
                           <h6><a href="">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_1.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>From life was you fish...</h3>
                              </a>
                              <p>January 12, 2019</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_2.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>The Amazing Hubble</h3>
                              </a>
                              <p>02 Hours ago</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/blog/blog_1.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Astronomy Or Astrology</h3>
                              </a>
                              <p>03 Hours ago</p>
                           </div>
                        </div>
                     </div>
                  </aside>
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita">
                           <h4>Berita Satgas</h4>
                        </div>
                     </div>
                     <div class="col">
                        <div class="section-judul-berita">
                           <h6><a href="">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_1.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>From life was you fish...</h3>
                              </a>
                              <p>January 12, 2019</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_1.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>The Amazing Hubble dkjkadadadadaddad</h3>
                              </a>
                              <p>02 Hours ago</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_3.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Astronomy Or Astrology</h3>
                              </a>
                              <p>03 Hours ago</p>
                           </div>
                        </div>
                     </div>
                  </aside>
                  <div class="row pt-0">
                     <div class="col">
                        <div class="section-judul-berita">
                           <h4>Berita Daerah</h4>
                        </div>
                     </div>
                     <div class="col">
                        <div class="section-judul-berita">
                           <h6><a href="">Lihat Semua</a></h6>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_1.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>From life was you fish...</h3>
                              </a>
                              <p>January 12, 2019</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_2.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>The Amazing Hubble</h3>
                              </a>
                              <p>02 Hours ago</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4">
                           <img src="{{ URL::asset('img/post/post_3.png') }}" alt="post">
                        </div>
                        <div class="col-lg-8 col-8">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Astronomy Or Astrology</h3>
                              </a>
                              <p>03 Hours ago</p>
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