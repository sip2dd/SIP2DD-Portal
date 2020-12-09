

    <script src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script>
        $('#tahunRegulasi').each(function () {
            var currentYear = new Date().getFullYear()
            var oldyears = 1999;
            for (i = currentYear; i >= oldyears; i--) {
                $(this).append('<option value="' + (i) + '">' + (i) + '</option>');
            }
        });
    </script>

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
        $("#layananCarousel").on("touchstart", function (event) {
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
    <script>
        $('#mixedSlider').multislider({
            duration: 650,
            interval: 3000
        });
    </script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gallery_foto_c,#edukasi_artikel_c,#berita_c,#layanan_c").owlCarousel({
            loop:true,
            margin:25,
            autoplay:4500,
            nav:true,navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1200:{
                    items:3
                }
                }
                });

                $('.gallery_foto_c').find('.owl-nav').removeClass('disabled');
                $('.gallery_foto_c').on('changed.owl.carousel', function(event) {
                $(this).find('.owl-nav').removeClass('disabled');
                });
                $('.edukasi_artikel_c').find('.owl-nav').removeClass('disabled');
                $('.edukasi_artikel_c').on('changed.owl.carousel', function(event) {
                $(this).find('.owl-nav').removeClass('disabled');
                });
    });
        </script>
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ URL::asset('js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('js/animated.headline.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nice-select.js') }}"></script>
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
