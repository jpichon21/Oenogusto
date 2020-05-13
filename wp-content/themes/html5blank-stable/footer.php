<footer class="col-9 centered" data-scroll-section>
            <div class="row columns">

                <div class="col-5 text-left">
                    <a href="#">Mentions légales</a>
                    <a href="#">Politique de confidentialité</a>
                </div>

                <div class="col-2 center-text">
                    <div>
                        <p>©2020 - Oenogusto</p>
                    </div>
                </div>

                <div class="col-5 text-right">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>


        </footer>




        <?php woocommerce_login_form() ?>

    </div>
    <!--script>
        (function () {
            console.log("test");
            const scroll = new LocomotiveScroll({
                el: document.querySelector('[data-scroll-container]'),
                smooth: true
            });
        })();
    </script-->


    <script>
            $('.carousel-items').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                fade: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>