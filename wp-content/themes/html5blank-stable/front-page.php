<?php get_header(); ?>


<body>

    <div class="pageContainer" class="container simplebar-content-wrapper" data-scroll-container >

        <section id="HeroContainer" class="col-9 centered" data-scroll-section>
            <div class="row columns">

                <div class="col-5" id="HeroCardsContainer" data-scroll-speed="4">

                    <div class="card-container card-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content/home_03.jpg">
                    </div>

                    <div class="card-container card-2 offset">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content/home_08.jpg">
                    </div>

                    <div class="card-container card-3 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/content/home_05.jpg">
                    </div>

                </div>

                <div class="col-2"></div>

                <div class="col-5" id="HeroTextContainer" data-scroll-speed="2">
                    <h3 class="red">Le Concept Oenogusto</h3>
                    <h5>Oenogusto</h5>
                    
                    <h2>Dégustez <span class="red">& partez à la découverte du </span> monde du vin <span class="red">et de ses parfums.</span></h2>
                    <p>
                        À travers des ateliers de dégustations oenologiques ludiques, Oenogusto partage son savoir
                        autour du vin.
                        Admirer, toucher, sentir, goûter …
                        Tous vos sens seront en éveil le temps d’une
                        expérience inédite !
                    </p>
                    <a href="./ateliers" class="button"> Découvrir les ateliers </a>
                </div>
            </div>
        </section>

        <section id="QuoteContainer" class="col-9 centered" data-scroll-section>
            <div class="row columns">

                <div class="col-5" id="QuoteBlockquoteContainer" data-scroll-speed="1">
                    <blockquote>
                        Titulaire d’un Doctorat en Œnologie, obtenu à
                        l’Institut Universitaire de la Vigne et du Vin, à Dijon, j’ai notamment travaillé sur l’origine
                        et l’identification des arômes du cépage emblématique de la Bourgogne qu’est le Pinot noir.
                    </blockquote>
                </div>

                <div class="col-1 separator">


                </div>
                <div class="col-1">


                </div>

                <div class="col-5" id="QuoteTextContainer" data-scroll-speed="1">
                    <p>... pour autant, l'approche et les ateliers diversifiés que je vous propose n'ont <span
                            class="red">rien d'académiques.</span>
                        <p>
                            <p>Spécialisée dans <span class="red">l’analyse sensorielle</span> et la <span
                                    class="red">dégustation de vins</span>, je vous guiderai, particuliers, entreprises
                                ou collectivités, vers la découverte du monde du vin, de son <span
                                    class="red">histoire</span>, de ses <span class="red">flaveurs</span> et de ses
                                <span class="red">robes</span> multiples.
                            </p>
                </div>


            </div>
        </section>

        <section id="AteliersCTA" class="col-12 centered CTA" data-scroll-section>
            <div class="row columns">
                <div class="col-12 center-text" data-scroll-speed="-2">
                    <h4 class="red"> Ateliers à la une</h4>
                    <h5>Ateliers<h5>
                </div>
            </div>

        </section>

        <section id="AteliersHome" class="col-9 centered" data-scroll-section>
            
        <div class="carousel-items">

                <?php if(have_rows('ateliers_vedette')) : 
                    while (have_rows('ateliers_vedette')) : the_row(); ?>

                        <?php 
                            $image = get_sub_field('image');
                            $titre = get_sub_field('titre');
                            $session = get_sub_field('session');
                            $btntext = get_sub_field('btntext');
                            $btnlink = get_sub_field('btnlink');
                            $description =  get_sub_field('description'); 
                        ?>

                        <div class="carousel-item">
                            <div class="row columns ">
                                <div class="col-5">
                                    <img src="<?php echo $image['url']; ?>" >
                                </div>

                                <div class="col-2"></div>

                                <div class="col-5">
                                    <h3 class="red"><span class="date"><?php echo $session ?></span></h3>
                                    <h2><?php echo $titre ?></span></h2>
                                    <p>
                                        <?php echo $description ?>
                                    </p>
                                    <a href="<?php echo $btnlink ?>" class="button"><?php echo $btntext ?></a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>


        <section id="ContactCTA" class="col-12 centered CTA" data-scroll-section>
            <div class="row columns">
                <div class="col-12 center-text">
                    <h4 class="red"> Contact</h4>
                    <h5>Contact<h5>
                </div>
            </div>

        </section>

        <section id="ContactHome" class="col-12 centered" data-scroll-section>
            <div class="row columns">
                <div class="col-9 centered center-text">
                    <p>Pour tous projets et réservations, contactez-nous !</p>
                    <a href="./contact" class="button"> Contacter Oenogusto </a>
                </div>
        </section>


        <?php get_footer(); ?>

        <script>
                $('#accueil').addClass('active');
        </script>


        <script>
            ScrollReveal().reveal('.card-1', { delay: 400 });
            ScrollReveal().reveal('.card-2', { delay: 800 });
            ScrollReveal().reveal('.card-3', { delay: 1200 });
            ScrollReveal().reveal('h5', { delay: 2000 });
            ScrollReveal().reveal('.CTA:before', { delay: 2400 });
            ScrollReveal().reveal('#HeroTextContainer', { delay: 1600 });
           /* ScrollReveal().reveal('#QuoteBlockquoteContainer', { delay: 300 });
            ScrollReveal().reveal('#QuoteTextContainer', { delay: 800 });
           ScrollReveal().reveal('#AteliersCTA', { delay: 300 });
            ScrollReveal().reveal('#AteliersHome', { delay: 800 });
            ScrollReveal().reveal('#ContactCTA', { delay: 300 });
            ScrollReveal().reveal('#ContactHome', { delay: 800 });
            ScrollReveal().reveal('footer', { delay: 1000 });	*/
	    </script>
</body>


</html>