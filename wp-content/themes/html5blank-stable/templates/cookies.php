<?php get_header(); ?>
<?php /* Template Name: Cookies  */  ?>


<body>
    <div class="pageContainer" class="container" data-scroll-container>

        <!--HEADER HERO -->
        <section id="TitleContainer" class="col-12 centered " data-scroll-section>
            <div class="row columns ">
                <div class="col-12 centered center-text">
                    <h1>Utilisation des Cookies </h1>

                </div>
            </div>
            <div class="row columns">
                <div class="col-12 centered">

                </div>
            </div>
        </section>

        <section id="pageContent" class="col-12 centered" data-scroll-section>
            <div class="row columns">
                <div class="col-9 centered">
                <p> <?php the_field('cookies') ?></p>
                </div>
            </div>

        </section>



        <?php get_footer(); ?>