<footer>
        <!-- Footer Start-->
        <div class="footer-main">
            <div class="footer-area section-padd4">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ URL::asset('img/logo/log.png') }}" alt=""></a>
                                </div>
                                <div id="icon-footer" class="footer-tittle">
                                    <ul>
                                        <li>
                                            <a href="" class="fab fa-facebook-f"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fab fa-youtube ml-5"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fab fab fa-vimeo-v ml-5"></a>
                                        </li>
                                        <li>
                                            <a href="" class="fab fa-twitter  ml-5"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Beranda</h4>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Download</a></li>
                                        <li><a href="#">Reviews</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>TP2DD</h4>
                                    <ul>
                                        <li><a href="#">Report a bug</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Regulasi</h4>
                                    <ul>
                                        <li><a href="#">Report a bug</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
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
        </div>
        <!-- Footer End-->

    </footer>

    <script src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- All JS Custom Plugins Link Here here -->
    <!-- JS here -->
    <script>
        jQuery(document).ready(function () {
            $('#recipeCarousel').carousel({
                interval: 2000
            });
            $('#beritaCarousel').carousel({
                interval: 3000
            });
            $('#EdukasiCarousel').carousel({
                interval: 2000
            });

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

    <script src="{{ URL::asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- <script src="./assets/js/scripts.js"></script>-->
    <!-- Jquery Mobile Menu -->
    <script src="{{ URL::asset('js/jquery.slicknav.min.js') }}"></script>

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

    <script src="{{ URL::asset('js/share.js') }}"></script>