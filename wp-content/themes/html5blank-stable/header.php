<!---------------------------------------->
<!---------------------------------------->
<!--- DEVELOPPEMENT PAR NCP MULTIMEDIA --->
<!------- Pour Agence Citron Givré ------->
<!------https://ncpmultimedia.com/-------->
<!------mail: ncpmedia21@gmail.com-------->
<!---------------------------------------->
<!---------------------------------------->
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' '; } ?> <?php bloginfo('name'); ?>
	</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="stylesheet" href="https://use.typekit.net/eru5fzs.css">
	<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
	<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
	<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">
	<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/locomotive-scroll.css'; ?>">
	<link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/animate.css'; ?>">

	<link rel="stylesheet" src="main.css">

	<script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/locomotive-scroll.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/scrollreveal.min.js'; ?>"></script>



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

	<!-- gestion des modals -->
	<script>
		$(document).ready(function () {
			$('.close').on('click', function (event) {
				event.stopPropagation();
				$('.modal').removeClass('active');
			});
		});
	</script>
	<!-- -->

	<!-- carousel home -->
	<script>
		$(document).ready(function () {
			$('.carousel-items').slick({
				dots: true,
				infinite: true,
				autoplay: true,
				fade: true,
				cssEase: 'linear',
				speed: 300,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		});
	</script>
	<!-- -->

	<!-- carousel produit -->
	<script>
		$(document).ready(function () {

			$('.slider-for').slick({
				dots: false,
				arrows: false,
				infinite: true,
				autoplay: true,
				fade: false,
				speed: 300,
				slidesToShow: 1,
				slidesToScroll: 1
			});

			$('.slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.slider-for',
				dots: false,
				arrows: false,
				centerMode: true,
				focusOnSelect: true
			});
		});
	</script>






</head>

<body <?php body_class(); ?>>
	<!-- wrapper -->
	<div class="wrapper">

		<div class="columns col-12 centered">
			<header class="col-12">
				<nav id="menuNav" class="column col-11 centered">
					<div id="menuLogo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-oeno.png">
						</a>
					</div>
					<ul>
						<!--li><a id="accueil" href="./home">Accueil</a></li-->
						<li><a class="main-nav" id="ateliersNav" href="<?php echo get_permalink('13'); ?>">Ateliers</a>
						</li>

						<li><a class="main-nav" id="entrepriseNav"
								href="<?php echo get_permalink('25'); ?>">Entreprises</a></li>
						<li><a class="main-nav" id="contactNav" href="<?php echo get_permalink('9'); ?>">Contact</a>
						</li>
						<li><a class="main-nav" id="accountNav" href="<?php echo get_permalink('22'); ?>"><i
									class="fas fa-user" style="margin-right:0.6rem"></i>Compte</a></li>
						<li><a class="main-nav" id="cartNav" href="<?php echo get_permalink('17'); ?>"><i
									class="fas fa-shopping-cart" style="margin-right:0.6rem"></i>Panier</a></li>

						<li onclick="toggleNav()"><a class="mobile-nav toggle-nav" id="toggleNav" href="#"><i class="fas fa-bars"
									style="font-size: 3.2rem; margin-right:0.6rem;"></i></a></li>

					</ul>
				</nav>

				<nav id="MobileNav">
					<ul>

						<li onclick="toggleNav()" class="toggle-nav-container"><a class="toggle-nav" href="#"><i class="fas fa-times"
									style="margin-right:0.6rem;"></i></a></li>

						<li><a class="mobile-link" id="accueil" href="./home">Accueil</a></li>
						<li><a  class="mobile-link"id="ateliersNav" href="<?php echo get_permalink('13'); ?>">Ateliers</a></li>

						<li><a class="mobile-link" id="entrepriseNav" href="<?php echo get_permalink('25'); ?>">Entreprises</a></li>
						<li><a class="mobile-link" id="contactNav" href="<?php echo get_permalink('9'); ?>">Contact</a></li>
						<li><a class="mobile-link" id="accountNav" href="<?php echo get_permalink('22'); ?>"><i class="fas fa-user"
									style="margin-right:0.6rem"></i>Compte</a></li>
						<li><a class="mobile-link" id="cartNav" href="<?php echo get_permalink('17'); ?>"><i class="fas fa-shopping-cart"
									style="margin-right:0.6rem"></i>Panier</a></li>



					</ul>

				</nav>
				<script>
					function toggleNav() {
						var target = document.getElementById("MobileNav");
						target.classList.toggle("visible");
					}

				</script>
			</header>
		</div>