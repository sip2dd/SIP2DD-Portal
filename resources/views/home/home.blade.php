
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
                                            <li class="">
                                                <a href="{!! url($menu['link']) !!}">{{$menu['nama']}}</a>
                                                @if(count($menu['child']) > 0)
                                                    <ul class="submenu">
                                                    @foreach($menu['child'] as $child)
                                                        <li><a href="{!! url($child['link']) !!}">{{$child['nama']}}</a></li>
                                                    @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    @else
                                        @include('template.menutemplate')
                                    @endif
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
        <!-- Bagian Atas Start-->
        <div class="slider-area sky-blue">
            <div class="slider-active">
                <div class="single-slider section-padding d-flex justify-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Portal Informasi<br>Percepatan dan
                                        Perluasan<br>Digitalisasi Daerah</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Merupakan portal yang dapat dijadikan
                                        sebagai referensi bagi masyarakat untuk
                                        mendapatkan informasi terkait pelaksanaan <strong>Elektronifikasi Transaksi
                                            Pemerintah Daerah</strong>.
                                    </p>
                                </div>
                                <div class="slider-btns">
                                    <a data-animation="fadeInLeft" data-delay=".8s" href="{!! url('/pencarian') !!}"
                                        class="btn radius-btn">Cari
                                        Layanan & Berita</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                    data-delay=".8s">
                                    <img style="width: 550px" src="{{ URL::asset('img/hero/Frame.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bagian Atas End -->
        <!-- Fitur Kami Start -->
        <section id="fiturkami" class="best-features-area section-padd4 sky-blue ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="section-tittle mb-90">
                                    <h2>Fitur Kami</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Kanal Berita</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Kanal Layanan</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Data & Informasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Kolaborasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Regulasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Edukasi</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fitur Kami End -->
        <!-- Layanan Terhangat Start -->
        <section id="layananhangat" class="service-area sky-blue section-padd4">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-90">
                            <h2>Layanan Terhangat</h2>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto my-auto">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="services-caption text-center mb-30">
                                            <div class="service-icon">
                                                <span><img class="img-lay" src="{{ URL::asset('img/log_layanan/sakpole.png') }}"
                                                        alt=""></span>
                                            </div>
                                            <div class="service-cap">
                                                <h4><a href="">Sakpole Jateng</a></h4>
                                                <p>Bayar pajak kendaraan bermotor dengan mudah , akses Sakpole Jateng
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="services-caption text-center mb-30">
                                            <div class="service-icon">
                                                <span><img class="img-lay" src="{{ URL::asset('img/log_layanan/sakpole.png') }}"
                                                        alt=""></span>
                                            </div>
                                            <div class="service-cap">
                                                <h4><a href="">Sakpole Jateng</a></h4>
                                                <p>Bayar pajak kendaraan bermotor dengan mudah , akses Sakpole Jateng
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="services-caption text-center mb-30">
                                            <div class="service-icon">
                                                <span><img class="img-lay"
                                                        src="{{ URL::asset('img/log_layanan/LOGO BAPENDA1.png') }}" alt=""></span>
                                            </div>
                                            <div class="service-cap">
                                                <h4><a href="">Pajak Online</a></h4>
                                                <p>Ngurus pajak tanpa ribet, silahkan daftar online saja di pajak online
                                                    jakarta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="services-caption text-center mb-30">
                                            <div class="service-icon">
                                                <span><img class="img-lay" src="{{ URL::asset('img/log_layanan/image 33.png') }}"
                                                        alt=""></span>
                                            </div>
                                            <div class="service-cap">
                                                <h4><a href="">Samsat J'bret</a></h4>
                                                <p>Bayar pajak kendaraan bermotor dengan mudah, akses samsat jebret
                                                    online</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <a href="" class="btn radius-btn"
                        style="margin:auto; text-align: center; display: block;">Selengkapnya</a>
                </div>
            </div>
            </div>
        </section>
        <!-- Layanan Terhangat End -->
        <!--Berita-->
        <div id="berita_section" class="our-customer section-padd4 sky-blue">
            <div class="container-fluid">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Berita</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div id="beritaCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="">
                                            <div class="single-customer">
                                                <div class="what-img">
                                                    <img src="{{ URL::asset('img/berita/coba1.jpg') }}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <h6>28 September 2020</h6>
                                                    <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                                <div class="tulisan-lengkapnya">
                                                    <a href="">Selengkapnya <span
                                                            class="fas fa-chevron-right mr-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="">
                                            <div class="single-customer">
                                                <div class="what-img">
                                                    <img src="{{ URL::asset('img/hero/Frame.png') }}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <h6>28 September 2020</h6>
                                                    <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                                <div class="tulisan-lengkapnya">
                                                    <a href="">Selengkapnya <span
                                                            class="fas fa-chevron-right mr-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="">
                                            <div class="single-customer">
                                                <div class="what-img">
                                                    <img src="{{ URL::asset('img/berita/coba1.jpg') }}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <h6>28 September 2020</h6>
                                                    <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                                <div class="tulisan-lengkapnya">
                                                    <a href="">Selengkapnya <span
                                                            class="fas fa-chevron-right mr-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev w-auto" href="#beritaCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#beritaCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <a href="" class="btn radius-btn"
                            style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Edukasi Start-->
        <div id="edukasi_section" class="our-customer section-padd4 edukasi-section">
            <div class="container-fluid">
                <div class="our-customer-wrapper">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-90">
                                <h2>Edukasi</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div id="edukasiCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                <img src="{{ URL::asset('img/berita/coba1.jpg') }}" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h6>28 September 2020</h6>
                                                <h4><a href=""> Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                <img src="{{ URL::asset('img/berita/coba1.jpg') }}" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h6>28 September 2020</h6>
                                                <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                <img src="{{ URL::asset('img/berita/coba1.jpg') }}" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h6>28 September 2020</h6>
                                                <h4><a href="">To The Best Model Winner Contest</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-customer">
                                            <div class="what-img">
                                                <img src="{{ URL::asset('img/berita/coba1.jpg') }}" alt="">
                                            </div>
                                            <div class="what-cap">
                                                <h6>28 September 2020</h6>
                                                <h4><a href="">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                            <div class="tulisan-lengkapnya">
                                                <a href="">Selengkapnya <span
                                                        class="fas fa-chevron-right mr-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev w-auto" href="#edukasiCarousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#edukasiCarousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-info rounded-circle" aria-hidden="true"
                                    style="width: 35px; height: 35px;"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <a href="" class="btn radius-btn"
                            style="margin:0 auto; text-align: center; display: block;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Edukasi End-->
    </main>
@endsection
