<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit; 
?>

<div id="AccountContainer" class="col-9 centered" data-scroll-section>
	<div class="row columns">

	<?php
		/**
		 * My Account navigation.
		 *
		 * @since 2.6.0
		 */
		echo '<div class="col-4">';
		do_action( 'woocommerce_account_navigation' ); 
		echo '</div>';
	?>

	<div class="col-2"></div>

	<div class="woocommerce-MyAccount-content col-6">
		<?php
			/**
			 * My Account content.
			 *
			 * @since 2.6.0
			 */
			do_action( 'woocommerce_account_content' );
		?>
	</div>
	
</div>
<script>
    $('#accountNav').addClass('active');
</script>