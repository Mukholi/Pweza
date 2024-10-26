<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<div class="pweza-product-container">
		<div class="pweza-product">
			<div class="pweza-product-header-container">
				<?php

					if ($product->is_on_backorder()) {
						echo'<div class="pweza-product-badge-container">
							<div class="pweza-product-badge on-backorder">
								<p>On Backorder</p>
							</div>
						</div>';
					}
					else if ( ! $product->is_in_stock() ) {
						echo'<div class="pweza-product-badge-container">
							<div class="pweza-product-badge out-of-stock">
								<p>Out of Stock</p>
							</div>
						</div>';
					}
					else if ( $product->is_on_sale() ) {
						echo'<div class="pweza-product-badge-container">
							<div class="pweza-product-badge sale">
								<p>Sale</p>
							</div>
						</div>';
					}
					else {}
				
				?>

				<div class="pweza-product-wishlist-container">
					<div class="pweza-product-wishlist">
						<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
					</div>
				</div>
				<div class="pweza-product-header">
					
				</div>
			</div>
			<div class="pweza-product-body-container">
				<div class="pweza-product-body">
					<a class="pweza-product-body-link" href="#"><a>
				</div>
			</div>
		</div>
	</div>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
