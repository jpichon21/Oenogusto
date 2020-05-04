<?php get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/eru5fzs.css">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">
    <link rel="stylesheet" src="main.css">

    <script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>
</head>

<body>

    <div class="pageContainer" class="container">

        <section id="HeroContainer" class="col-9 centered">
            <div class="row columns">

                <div class="col-5" id="HeroCardsContainer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/home_03.jpg">
                    <img class="offset" src="<?php echo get_template_directory_uri(); ?>/img/content/home_08.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/content/home_05.jpg">
                </div>

                <div class="col-2"></div>

                <div class="col-5">
                    <h3 class="red">Le concept Oenogusto</h3>
                    <h2>Dégustez <span class="red">& partez à la découverte du </span> monde du vin <span class="red">et
                            de ses parfums.</span></h2>
                    <p>
                        À travers des ateliers de dégustations oenologiques ludiques, Oenogusto partage son savoir
                        autour du vin.
                        Admirer, toucher, sentir, goûter …
                        Tous vos sens seront en éveil le temps d’une
                        expérience inédite !
                    </p>
                    <a href="#" class="button"> Découvrir les ateliers </a>
                </div>
            </div>
        </section>

        <section id="QuoteContainer" class="col-9 centered">
            <div class="row columns">

                <div class="col-5" id="QuoteBlockquoteContainer">
                    <blockquote>
                        Titulaire d’un Doctorat en Œnologie, obtenu à
                        l’Institut Universitaire de la Vigne et du Vin, à Dijon, j’ai notamment travaillé sur l’origine
                        et l’identification des arômes du cépage emblématique de la Bourgogne qu’est Pinot noir. 
                    </blockquote>
                </div>

                <div class="col-2 separator"></div>

                <div class="col-5" id="QuoteTextContainer">
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

        <section id="AteliersCTA" class="col-12 centered CTA">
            <div class="row columns">
                <div class="col-12 center-text">
                    <h4 class="red"> Ateliers à la une</h4>
                </div>
            </div>

        </section>

        <section id="ContactCTA" class="col-12 centered CTA">
            <div class="row columns">
                <div class="col-12 center-text">
                    <h4 class="red"> Contact</h4>
                </div>
            </div>

        </section>

        <section id="ContactHome" class="col-12 centered">
            <div class="row columns">
            <div class="col-9 centered center-text">
                    <p>Pour tous projets et réservations, contactez-nous !</p>
                    <a href="#" class="button"> Contacter Oenogusto </a>
            </div>
        </section>




        <?php woocommerce_login_form() ?>

    </div>
</body>

</html>