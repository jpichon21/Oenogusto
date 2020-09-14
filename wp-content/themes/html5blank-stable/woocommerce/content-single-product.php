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


<div class="pageContainer" data-scroll-container>

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
						<!-- -->
					</div>
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
					<div class="col-5 product-price-booking">
						<p class="ariane"><a href="./ateliers">Ateliers Oenologiques</a> > <a
								href="<?php echo get_permalink( $product->ID ); ?>"><?php echo $product->get_title(); ?></a>
						</p>
						<div class="product-image">
							<?php
								/**
								 * Hook: woocommerce_before_single_product_summary.
								 *
								 * @hooked woocommerce_show_product_sale_flash - 10
								 * @hooked woocommerce_show_product_images - 20
								 */
								do_action( 'woocommerce_before_single_product_summary' );
								?>
						</div>


						<div class="product-card-booking">
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
							
						</div>



						<!-- Titre + prix + ajouter au panier -->
						<div class="summary-duplicate">
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
									<span class="disclaimer">IMPORTANT : En réservant cet article, vous certifiez être âgé de
								plus de 18 ans. </span>

								<span>S'il ne reste plus assez de places disponibles : <a href="./contact">Contactez-moi</a>, je vous proposerai les meilleures solutions !</span>
						</div>





					</div>
					
					<!-- -->

					<div class="col-2"></div>

					<!-- Partie description -->
					<div class="col-5 product-description">
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
						<?php 
						$previous = previous_post_link( ' %link', '<i class="fas fa-arrow-left"></i> Atelier Précédent', true, '', 'product_cat' );
						if(isset($previous)){
							echo "
							<span class='prev'><i class='fas fa-arrow-left'></i>
								<?php previous_post_link( ' %link', 'Atelier Précédent', true, '', 'product_cat' ); ?>
						</span> ";
						} ?>




						<span
							class="next"><?php next_post_link( ' %link', 'Atelier Suivant 	<i class="fas fa-arrow-right"></i></span>', true, '', 'product_cat' ); ?>

					</div>

				</div>

			</div>

			<?php do_action( 'woocommerce_after_single_product' ); ?>

	</section>




	<script>
		$('#ateliersNav').addClass('active');
	</script>
	<script>
		$(document).ready(function () {
			ScrollReveal().reveal('h5', {
				delay: 400
			});
			ScrollReveal().reveal('.product-price-booking', {
				delay: 800
			});
			ScrollReveal().reveal('.product-description', {
				delay: 1200
			});
		});
	</script>
	<?php get_footer(); ?>