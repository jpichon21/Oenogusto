<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>




<section id="ProductContainer" class="col-12 centered" data-scroll-section>

	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>


<div id="TitleContainer">
	<div class="row columns">
		<div class="col-12">
		<!-- Titre + prix + ajouter au panier -->
			<div class="summary entry-summary">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
			</div>
		</div>
		<!-- -->
	</div>

	<div class="row columns">
		<div class="col-12">
			<h5>Ateliers</h5>
		</div>
	</div>
</div>



<div id="ProductCardContainer" class="col-9 centered">

	<div class="row columns">
	<!-- Partie carrousel + prix -->
		<div class="col-5">
			<p class="ariane"><a href="./ateliers">Ateliers Oenologiques</a> > <a href="<?php echo get_permalink( $product->ID ); ?>"><?php echo $product->get_title(); ?></a></p>
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );
					?>
					
			<div class="product-card-booking">
				<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
				<form class="cart" method="post" enctype='multipart/form-data'>

					<input type="hidden" name="<?php echo $action ?>" value="<?php echo esc_attr( $product->get_id() ); ?>"/>

					<?php
					do_action( 'yith_wcbk_before_booking_form' );

					/**
					 * yith_wcbk_booking_form_start hook.
					 *
					 * @hooked yith_wcbk_booking_form_start - 10
					 */
					do_action( 'yith_wcbk_booking_form_start', $product );

					/**
					 * yith_wcbk_booking_form_meta hook.
					 *
					 * @hooked yith_wcbk_booking_form_meta - 10
					 */
					do_action( 'yith_wcbk_booking_form_meta', $product );

					/**
					 * yith_wcbk_booking_form_fields hook.
					 *
					 * @hooked yith_wcbk_booking_form_dates - 10
					 * @hooked yith_wcbk_booking_form_persons - 20
					 * @hooked yith_wcbk_booking_form_services - 30
					 */
					do_action( 'yith_wcbk_booking_form_content', $product );

					/**
					 * yith_wcbk_booking_form_message hook.
					 *
					 * @hooked yith_wcbk_booking_form_message - 10
					 */
					do_action( 'yith_wcbk_booking_form_message', $product );

					/**
					 * yith_wcbk_booking_form_end hook.
					 *
					 * @hooked yith_wcbk_booking_form_end - 10
					 */
					do_action( 'yith_wcbk_booking_form_end', $product );
					?>

					<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

					<?php do_action( 'yith_wcbk_booking_before_add_to_cart_button' ); ?>

					<button type="submit" class="yith-wcbk-add-to-cart-button single_add_to_cart_button button alt"
							disabled><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

					<?php do_action( 'yith_wcbk_booking_after_add_to_cart_button' ); ?>

					<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
					<?php echo '<p class="entreprise-cta-container"><a href="./contact" class="entreprise-cta">Vous êtes une entreprise ? Contactez-nous <i class="far fa-envelope"></i></a></p>' ?>
				</form>
			</div>
		</div>
		<!-- -->

		<div class="col-2"></div>

		<!-- Partie description -->
		<div class="col-5">
					<!-- Description -->
					<?php
					/**
					* Hook: woocommerce_after_single_product_summary.
					* @hooked woocommerce_template_single_price - 10
					* @hooked woocommerce_output_product_data_tabs - 10
					* @hooked woocommerce_upsell_display - 15
					* @hooked woocommerce_output_related_products - 20
					*/
					do_action( 'woocommerce_after_single_product_summary' );
					?>
					<!-- -->
		</div>
		<!-- -->
	</div>

	<div class="row columns">

	<div class="col-12 centered show-more-ateliers">
		<span class="prev"><i class="fas fa-arrow-left"></i> <?php previous_post_link( ' %link', 'Atelier Précédent', true, '', 'product_cat' ); ?>	</span>
		<span class="next"><?php next_post_link( ' %link', 'Atelier Suivant', true, '', 'product_cat' ); ?> <i class="fas fa-arrow-right"></i></span>
	</div>

</div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

</section>
	<script>
		$('#ateliersNav').addClass('active');
	</script>
	<?php get_footer(); ?>
</div>


