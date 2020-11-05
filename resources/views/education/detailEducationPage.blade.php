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
                                                <li><a href="{!! url('/edukasi') !!}">Edukasi Artikel</a></li>
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
               <li class="breadcrumb-item"><a href="Edukasi.html">Edukasi</a></li>
               <li class="breadcrumb-item active"><a href="#">Pembayaran online pajak di Provinsi Jawa Barat</a>
               </li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- navigation link End-->
   <!--================Blog Area =================-->
   <section class="detail_page single-post-area background_2">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mb-30">
               <div class="single-post">
                  <div class="blogs">
                     <img src="assets/img/edukasi/image2.jpg" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="">
                     <div class="blogs_details">
                        <h2>Edukasi Terkait Pembayaran Online Pajak diProvinsi Jawa Barat
                        </h2>
                        <h3><i class="fa fa-map-marker-alt" style="margin-right:.7rem;"></i>Pemerintah Jawa Barat</h3>
                        <p class="desk_edukasi">
                           Tutorial aplikasi elektronifikasi pemerintah daerah Provinsi Jawa Barat terkait pembayaran
                           pajak secara online melalui aplikasi Samsat J’bret. Aplikasi tersebut digunakan untuk
                           pembayaran pajak kendaraan bermotor secara online sehingga memudahkan masyarakat dalam
                           melakukan transaksi.
                        </p>
                        <div class="materi_edukasi">
                           <p>Materi Tutorial :</p>
                           <a href="#" class="btn btn_materi_edukasi"><i class="fa fa-file-pdf"
                                 style="margin-right: .5em;"></i> Unduh
                              Disini</a>
                        </div>

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
                        <div class="section-judul-berita rata_tengah">
                           <h4>Edukasi Lainnya</h4>
                        </div>
                     </div>
                  </div>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="assets/img/post/post_4.png" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                        </div>
                        <!--Edit penambahana kelas samping berita-->
                        <div class="col-lg-8 col-8 samping_berita">
                           <div class="media-body">
                              <a href="#">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <!--Edit penambahan nama pemda-->
                              <p style="color: #606060; font-weight: 300; font-size: 12px;"><i
                                    class="fa fa-map-marker-alt" style="margin-right: .2rem;"></i>Pemerintah
                                 Jawa Barat
                              </p>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="assets/img/post/post_4.png" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                        </div>
                        <div class="col-lg-8 col-8 samping_berita">
                           <div class="media-body">
                              <a href="#">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p style="color: #606060; font-weight: 300; font-size: 12px;"><i
                                    class="fa fa-map-marker-alt" style="margin-right: .2rem;"></i>Pemerintah
                                 Jawa Barat
                              </p>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="assets/img/post/post_4.png" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                        </div>
                        <div class="col-lg-8 col-8 samping_berita">
                           <div class="media-body">
                              <a href="#">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p style="color: #606060; font-weight: 300; font-size: 12px;"><i
                                    class="fa fa-map-marker-alt" style="margin-right: .2rem;"></i>Pemerintah
                                 Jawa Barat
                              </p>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="assets/img/post/post_4.png" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                        </div>
                        <div class="col-lg-8 col-8 samping_berita">
                           <div class="media-body">
                              <a href="#">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p style="color: #606060; font-weight: 300; font-size: 12px;"><i
                                    class="fa fa-map-marker-alt" style="margin-right: .2rem;"></i>Pemerintah
                                 Jawa Barat
                              </p>
                              <p>01 Oktober 2020</p>
                           </div>
                        </div>
                     </div>
                     <div class="media post_item">
                        <div class="col-lg-4 col-4 pl-0 pr-0">
                           <img class="image" src="assets/img/post/post_4.png" onerror="this.src='{{ URL::asset('img/P2DD.png') }}'" alt="post">
                        </div>
                        <div class="col-lg-8 col-8 samping_berita">
                           <div class="media-body">
                              <a href="#">
                                 <h3>Elektronfikasi Transaksi..</h3>
                              </a>
                              <p style="color: #606060; font-weight: 300; font-size: 12px;"><i
                                    class="fa fa-map-marker-alt" style="margin-right: .2rem;"></i>Pemerintah
                                 Jawa Barat
                              </p>
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