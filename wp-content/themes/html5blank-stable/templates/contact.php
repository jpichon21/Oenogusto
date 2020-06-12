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

        <section class="col-6 centered contact-form-section" data-scroll-section>

            <?php echo get_field('contact_form'); ?>
            
        </section>

        <section id="CadeauCta" class="col-12 centered CTA" data-scroll-section>
            <div class="row columns">
                <div class="col-12 center-text">
                    <h4 class="red"> Carte Cadeau</h4>
                </div>
            </div>
            </section>

            <section id="ContactHome" class="col-12 centered" data-scroll-section>
            <div class="row columns">
                <div class="col-9 centered center-text">
                    <p>Vous souhaitez offrir un moment de convivialité, de découverte et de détente ? </br>Pensez à nos cartes cadeaux !</p>
                    <a href="./produit/carte-cadeau/" class="button"> Offrir une carte </a>
                </div>
        </section>

</section>
        
<script>
    $('#contactNav').addClass('active');
</script>
<script>
    	ScrollReveal().reveal('h5', { delay: 400 });
        ScrollReveal().reveal('.wpcf7', { delay: 800 });
        ScrollReveal().reveal('footer', { delay: 1200 });
</script>

    <?php get_footer(); ?>