<?php get_header(); ?>
<?php /* Template Name: Entreprises  */  ?>


<body>
    <div class="pageContainer" class="container" data-scroll-container>

        <!--HEADER HERO -->
        <section id="TitleContainer" class="col-12 centered wow" data-scroll-section>
            <div class="row columns ">
                <div class="col-12 centered center-text">
                    <h1>Entreprises</h1>
                </div>
            </div>
            <div class="row columns">
                <div class="col-12 centered">
                    <h5>Entreprises</h5>
                </div>
            </div>
        </section>


        <section id="EntrepriseIntro" class="col-9 centered" data-scroll-section>
            <div class="row columns">
                <div class="col-5 intro-left" data-scroll-speed="1">
                    <p class="left">L’offre <span class="red">d’Oenogusto </span>repose sur un savoir riche et une approche originale et ludique du monde du
                        vin.</p>
                    <p class="left">
                        En conjuguant savamment culture et convivialité, les ateliers proposés par Oenogusto conviennent
                        parfaitement a des événements organisés pour vos clients, à vos réunions d'équipe, séminaires,
                        team building, lancements ou célébrations d'événements, cadeaux d'affaires...</p>
                </div>

                <div class="col-1 separator">
                </div>
                <div class="col-1">
                </div>

                <div class="col-5 intro-right" data-scroll-speed="1">
                    <p class="right">Expérience unique de partage, déchanges et de découverte, vous pouvez participer à l'un des 6
                        ateliers de votre choix ou bénéficier d'un événement totalement sur mesure en nous exposant
                        votre demande. Nous construirons ensemble l'offre la plus adaptée et la plus attrayante.</p>
                </div>
            </div>

            <div class="row columns">
                <div class="col-5">
                    <blockquote>
                         Le vin n'aura plus de secrets pour vous !
                    </blockquote>
                </div>
            </div>
        </section>
        <!-- -->

        <!--A LA DEMANDE-->
        <section id="EntrepriseDemande" class="col-9 centered wow" data-scroll-section>

                    <div class="row columns ">

                    <div class="col-5">
                            <h3 class="red">Pour les Entreprises</h3>
                            <h2>Atelier <br><span class="red">à la Demande</span></h2>
                            <p>                               
                                Vous êtes une entreprise ? Nous proposons des ateliers  sur-mesure Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ultricies dolor. 
                                Vestibulum sollicitudin purus non nunc accumsan, vitae mollis nibh volutpat. 
                                Integer eget sollicitudin lacus.
                            </p>
                            <a href="./contact" class="button"> Demander un devis </a>
                        </div>
                    

                        <div class="col-2"></div>

             

                        <div class="col-5 video-container">
                            <video autoplay loop muted>
                                <source src="<?php echo get_template_directory_uri(); ?>/video/video-1.mov">
                            </video>
                   
                        </div>
                    </div>
        </section>
        <!-- -->

        
        <!--A LA CARTE-->
        <section id="EntrepriseCarte" class="col-9 centered " data-scroll-section>

                    <div class="row columns ">

                    <div class="col-5 video-container">
                            <video autoplay loop muted>
                                <source src="<?php echo get_template_directory_uri(); ?>/video/video-2.mov">
                            </video>
                   
                        </div>

                        <div class="col-2"></div>

                        <div class="col-5">
                            <h3 class="red">Pour Entreprises et Particuliers</h3>
                            <h2>Atelier <br><span class="red">à la Carte</span></h2>
                            <p>                               
                                Vous êtes une entreprise ? Nous proposons des ateliers  sur-mesure Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ultricies dolor. 
                                Vestibulum sollicitudin purus non nunc accumsan, vitae mollis nibh volutpat. 
                                Integer eget sollicitudin lacus.
                            </p>
                            <a href="./ateliers" class="button"> Découvrir les ateliers</a>
                        </div>

                    </div>
        </section>
        <!-- -->
        
        
        <!-- CONTACT CTA-->
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
                    <p>Vous êtes une entreprise et souhaitez un devis sur-mesure ?<br> Contactez-nous !</p>
                    <a href="./contact" class="button"> Contacter Oenogusto </a>
                </div>
        </section>
        <!-- -->

<script>
        ScrollReveal().reveal('.intro-left', { delay: 300 });
        ScrollReveal().reveal('.intro-right', { delay: 800 });
        ScrollReveal().reveal('blockquote', { delay: 1200 });
        ScrollReveal().reveal('#EntrepriseDemande', { delay: 300 });
        ScrollReveal().reveal('#EntrepriseCarte', { delay: 300 });
        ScrollReveal().reveal('#ContactCTA', { delay: 300 });
        ScrollReveal().reveal('#ContactHome', { delay: 800 });
        ScrollReveal().reveal('footer', { delay: 1000 });
</script>
<script>
    $('#entrepriseNav').addClass('active');
</script>
<?php get_footer(); ?>