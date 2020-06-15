<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 */
_deprecated_file(
	/* translators: %s: Template name. */
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);
?>

<footer class="col-9 centered" data-scroll-section>
            <div class="row columns">

                <div class="col-5 text-left">
                    <a href="<?php echo get_permalink('83'); ?>">Mentions légales</a>
                    <a href="<?php echo get_permalink('85'); ?>">Politique de confidentialité</a>
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

    </div>


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
        <script>
            const scroll = new LocomotiveScroll({
                el: document.querySelector('[data-scroll-container]'),
                smooth: true
            });
    </script>
 



		<?php wp_footer(); ?>
</body>
</html>
