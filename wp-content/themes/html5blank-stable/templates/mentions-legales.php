<?php get_header(); ?>
<?php /* Template Name: Mentions Legales  */  ?>


<body>
    <div class="pageContainer" class="container" data-scroll-container>

        <!--HEADER HERO -->
        <section id="TitleContainer" class="col-12 centered " data-scroll-section>
            <div class="row columns ">
                <div class="col-12 centered center-text">
                    <h1>Mentions Légales</h1>

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
                  <?php the_field('legal_mentions') ?>

                </div>
            </div>

        </section>



        <?php get_footer(); ?>