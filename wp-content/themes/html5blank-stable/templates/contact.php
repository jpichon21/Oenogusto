<?php get_header(); ?>
<?php /* Template Name: Contact  */  ?>


<body>
    <div class="pageContainer" class="container" data-scroll-container>

        <!--HEADER HERO -->
            <section id="TitleContainer" class="col-12 centered " data-scroll-section>
            <div class="row columns ">
                <div class="col-12 centered center-text">
                    <h1>Contact</h1>
                    <p> Pour tous projets et réservations, contactez-nous !</p>
                </div>
            </div>
            <div class="row columns">
                <div class="col-12 centered">
                    <h5>Contact</h5>
                </div>
            </div>
        </section>

        <section class="col-9 centered" data-scroll-section>

            <?php echo get_field('contact_form'); ?>
            
        </section>

    <?php get_footer(); ?>