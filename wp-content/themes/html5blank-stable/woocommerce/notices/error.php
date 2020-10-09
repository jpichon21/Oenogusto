<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $notices ) {
	return;
}

?>

				<ul class="woocommerce-error" role="alert">
					<!--?php foreach ( $notices as $notice ) : ?>
						<!-div class="modal active"!-->
							<!--a href="#close" class="modal-overlay close" aria-label="Close"></a!-->
								<!--div class="modal-container"!-->
								<!--div class="modal-header"!-->
								<!--a href="#close" class="btn btn-clear float-right close" aria-label="Close"></a!-->
								<!--/div>
									<!-div class="modal-body"!-->
												<li<?php echo wc_get_notice_data_attr( $notice ); ?>>
													<?php echo wc_kses_notice( $notice['notice'] ); ?>
												</li>
												<!--/div!-->
								<!--/div!-->
						<!--/div!-->
			
				</ul>


					<!--?php endforeach; ?-->