<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

</ul>
</section>

	<script>
		$(document).ready(function () {
			ScrollReveal().reveal('h5', { delay: 400 });
			/*ScrollReveal().reveal('.atelier-card:first-child', { delay: 800 });*/
			/*ScrollReveal().reveal('footer', { delay: 800 });*/
		});
	</script>

	<script>
		$('#ateliersNav').addClass('active');
	</script>
	
	<?php get_footer(); ?>


