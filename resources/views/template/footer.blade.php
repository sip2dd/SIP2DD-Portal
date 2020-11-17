<footer>
        <!-- Footer Start-->
        <div class="footer-main">
            <div class="footer-area section-padd-footer">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="single-footer-caption mb-40">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/log.png" alt=""></a>
                                </div>
                                <div id="icon-footer" class="footer-tittle">
                                    <ul>
                                        <li>
                                            <a href="" class="fab fa-facebook-f"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fab fa-youtube ml-4"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fab fab fa-vimeo-v ml-4"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fab fa-twitter  ml-4"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 pl-0">
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Beranda</h4>
                                        <ul>
                                            <li><a href="#">Fitur Kami</a></li>
                                            <li><a href="#">Layanan Terhangat</a></li>
                                            <li><a href="#">Berita</a></li>
                                            <li><a href="#">Edukasi</a></li>
                                            <li><a href="#">Galeri Foto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Berita</h4>
                                        <ul>
                                            <li><a href="#">Berita</a></li>
                                            <li><a href="#">Berita Terbaru</a></li>
                                            <li><a href="#">Berita Satgas</a></li>
                                            <li><a href="#">Berita Daerah</a></li>
                                            <li><a href="#">Galeri Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 pl-0">
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Edukasi</h4>
                                        <ul class="list_tiga">
                                            <li><a href="#">Materi</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Daftar Istilah</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>TP2DD</h4>
                                        <ul class="list_tiga">
                                            <li><a href="#">TP2DD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Regulasi</h4>
                                        <ul class="list_tiga">
                                            <li><a href="#">Regulasi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 pl-0">
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Galeri</h4>
                                        <ul>
                                            <li><a href="#">Galeri Foto</a></li>
                                            <li><a href="#">Galeri Video</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row baris_footer">
                                <div class="single-footer-caption mb-40">
                                    <div class="footer-tittle">
                                        <h4>Kegiatan</h4>
                                        <ul>
                                            <li><a href="#">Webinar Terbaru</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="single-footer-caption mb-40">
                                <div class="footer-tittle">
                                    <h4>Sekretariat Pokjanas P2DD</h4>
                                    <div class="footer-pera footer-pera2">
                                        <p>Heaven fruitful doesn't over lesser in days. Appear </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copy-Right -->
            <div class="row mr-0 ml-0">
                <div class="col-md-12 footer-copy">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> P2DD
                    </p>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>
   
    <script src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

    <script src="{{ URL::asset('datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('datatables/dataTables.bootstrap4.min.js') }}"></script>

  

    <script>
        $(document).ready(function () {
            $('#tb_daftar_istilah').DataTable({
                "columns": [null,
                    null,
                    {
                        "orderable": false
                    }
                ],
                "language": {
                    "infoEmpty": "Data tidak ditemukan",
                    "lengthMenu": "Tampil _MENU_ Data, Per Halaman",
                    "zeroRecords": "Maaf Data Tidak Ditemukan",
                    "search": "Cari :",
                    "info": "Tampil _TOTAL_ Data",
                    "infoFiltered": "(Filter Dari _MAX_ Total Data)",
                    "paginate": {
                        "first": "Awal",
                        "last": "Akhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                },
                "scrollY": '40vh',
                "scrollX": true,
                "scrollCollapse": true
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- All JS Custom Plugins Link Here here -->
    <!-- JS here -->
    <script type="text/javascript">
        $('.select_prov').select2({
            templateResult: function (data) {
                // We only really care if there is an element to pull classes from
                if (!data.element) {
                    return data.text;
                }

                var $element = $(data.element);

                var $wrapper = $('<span></span>');
                $wrapper.addClass($element[0].className);

                $wrapper.text(data.text);

                return $wrapper;
            },
            placeholder: "Pilih Provinsi/Kabupaten"
        });
    </script>

     <!--Edit penambahan Select2 .js-->
     <script type="text/javascript">
        $('.select_prov_tok').select2({
            templateResult: function (data) {
                // We only really care if there is an element to pull classes from
                if (!data.element) {
                    return data.text;
                }

                var $element = $(data.element);

                var $wrapper = $('<span></span>');
                $wrapper.addClass($element[0].className);

                $wrapper.text(data.text);

                return $wrapper;
            },
            placeholder: "Pilih Provinsi"
        });
    </script>
    
    <script src="{{ URL::asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <script>
        $("#galeriCarousel").on("touchstart", function (event) {
            var xClick = event.originalEvent.touches[0].pageX;
            $(this).one("touchmove", function (event) {
                var xMove = event.originalEvent.touches[0].pageX;
                if (Math.floor(xClick - xMove) > 5) {
                    $(this).carousel('next');
                } else if (Math.floor(xClick - xMove) < -5) {
                    $(this).carousel('prev');
                }
            });
            $(".carousel").on("touchend", function () {
                $(this).off("touchmove");
            });
        });
        $("#edukasiCarousel").on("touchstart", function (event) {
            var xClick = event.originalEvent.touches[0].pageX;
            $(this).one("touchmove", function (event) {
                var xMove = event.originalEvent.touches[0].pageX;
                if (Math.floor(xClick - xMove) > 5) {
                    $(this).carousel('next');
                } else if (Math.floor(xClick - xMove) < -5) {
                    $(this).carousel('prev');
                }
            });
            $(".carousel").on("touchend", function () {
                $(this).off("touchmove");
            });
        });
        $("#beritaCarousel").on("touchstart", function (event) {
            var xClick = event.originalEvent.touches[0].pageX;
            $(this).one("touchmove", function (event) {
                var xMove = event.originalEvent.touches[0].pageX;
                if (Math.floor(xClick - xMove) > 5) {
                    $(this).carousel('next');
                } else if (Math.floor(xClick - xMove) < -5) {
                    $(this).carousel('prev');
                }
            });
            $(".carousel").on("touchend", function () {
                $(this).off("touchmove");
            });
        });
    </script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- <script src="./assets/js/scripts.js"></script>-->
    <script>
        jQuery(document).ready(function () {
            $('#galeriCarousel').carousel({
                interval: 2500
            })
            $('#beritaCarousel').carousel({
                interval: 2000
            })
            $('#edukasiCarousel').carousel({
                interval: 2000
            })

            $('.carousel .carousel-item').each(function () {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });

        });
    </script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ URL::asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ URL::asset('js/multislider.js') }}"></script>
    <script src="{{ URL::asset('js/multislider.min.js') }}"></script>
    <!-- <script>
        $('#mixedSlider').multislider({
            duration: 650,
            interval: 3000
        });
    </script> -->
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ URL::asset('js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('js/animated.headline.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ URL::asset('js/contact.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
