<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="pageContainer" data-scroll-container>


	<!--HEADER HERO -->
	<section id="TitleContainer" class="col-12 centered " data-scroll-section>
		<div class="row columns ">
			<div class="col-12 centered center-text">
				<h1>Ateliers</h1>
			</div>
		</div>
		<div class="row columns">
			<div class="col-12 centered">
				<h5>Ateliers</h5>
			</div>
		</div>
	</section>

	<section id="AteliersContainer" class="col-12 centered" data-scroll-section>
		<ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?> ">