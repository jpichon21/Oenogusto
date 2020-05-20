<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Oenogusto | <?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' '; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://use.typekit.net/eru5fzs.css">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/locomotive-scroll.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/animate.css'; ?>">
		<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/simplebar.css'; ?>">
	
		<link rel="stylesheet" src="main.css">

		<script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
   		<script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/locomotive-scroll.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/scrollreveal.min.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/simplebar.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/kursor.js'; ?>"></script>

		<script src="<?php echo get_template_directory_uri() . '/js/customizer.js'; ?>"></script>
   		<script src="<?php echo get_template_directory_uri() . '/js/navigation.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/skip-link-focus-fix.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/utils.js'; ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/woocommerce.js'; ?>"></script>


		<?php wp_head(); ?>
		<script src="https://kit.fontawesome.com/6164dace53.js" crossorigin="anonymous"></script>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
		</script>


		<script>
		//Gestion des modals
		$( document ).ready(function() {
			$('.close').on('click', function(event){
				event.stopPropagation();
				$('.modal').removeClass('active');
			});
		});
		</script>
	
		<noscript>
			<style>
				/**
				* Reinstate scrolling for non-JS clients
				*/
				.simplebar-content-wrapper {
				overflow: auto;
				}
			</style>
		</noscript>


</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper" id="simpleWrapper" data-simplebar>

			<div class="columns col-12 centered">
				<header class="col-12">
					<nav id="menuNav" class="column col-11 centered">
						<div id="menuLogo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-oeno.png">
							</a>
						</div>
						<ul>
							<li><a id="ateliersNav" href="./ateliers">Ateliers</a></li>
							<li><a id="entrepriseNav" href="./entreprises">Entreprises</a></li>
							<li><a id="contactNav" href="./contact">Contact</a></li>
							<li><a id="cartNav" href="./panier"><i class="fas fa-shopping-cart" style="margin-right:0.6rem"></i>Panier</a></li>
						</ul>
					</nav>

				</header>
			</div>
			