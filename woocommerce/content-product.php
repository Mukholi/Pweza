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
								<p>On<br>Backorder</p>
							</div>
						</div>';
					}
					else if ( ! $product->is_in_stock() ) {
						echo'<div class="pweza-product-badge-container">
							<div class="pweza-product-badge out-of-stock">
								<p>Out of<br>Stock</p>
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
				<div class="pweza-product-header">
					<a class="pweza-product-header-link" href="<?php echo $product->get_permalink(); ?>">
						<div class="pweza-product-image-gradient"></div>
						<?php
							$image_id = $product->get_image_id();
							$image_url = wp_get_attachment_image_url( $image_id, 'full');
							echo '<img class="pweza-product-image" src="' .$image_url. '">';
						?>
					</a>
				</div>
			</div>
			<div class="pweza-product-body-container">
				<div class="pweza-product-wishlist-container">
					<div class="pweza-product-wishlist">
						<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
					</div>
				</div>
				<div class="pweza-product-body">
					<a class="pweza-product-link" href="<?php echo $product->get_permalink(); ?>">
						<div class="pweza-product-rating">
							<div class="pweza-product-rating-stars">
								<?php
									if($product->get_average_rating() >= 4.5){
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
									}
									else if($product->get_average_rating() >= 3.5){
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
									}
									else if($product->get_average_rating() >= 2.5){
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
									}
									else if($product->get_average_rating() >= 1.5){
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
									}
									else if($product->get_average_rating() >= 0.5){
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-fill.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
									}
									else{
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
										echo '<img class="pweza-product-rating-star" src="'.get_template_directory_uri().'/icon/star-holo.svg">';
									}
								
								?>
								<!-- <img class="pweza-product-rating-star" src="<?php echo get_template_directory_uri();?>/icon/star-fill.svg">
								<img class="pweza-product-rating-star" src="<?php echo get_template_directory_uri();?>/icon/star-fill.svg">
								<img class="pweza-product-rating-star" src="<?php echo get_template_directory_uri();?>/icon/star-fill.svg">
								<img class="pweza-product-rating-star" src="<?php echo get_template_directory_uri();?>/icon/star-fill.svg">
								<img class="pweza-product-rating-star" src="<?php echo get_template_directory_uri();?>/icon/star-holo.svg"> -->
							</div>
							<div class="pweza-product-rating-numbers">
								<p class="pweza-product-rating-number-rating"><?php echo $product->get_average_rating();?></p>
								<p class="pweza-product-rating-number-population">(<?php echo $product->get_review_count();?>)</p>
							</div>
						</div>
						<p class="pweza-product-name"><?php echo $product->get_name();?></p>
						<div class="pweza-product-prices">
							<?php
							if ( $product->is_type( 'grouped' ) ) {
								$children = $product->get_children();
								$min_price = PHP_INT_MAX;
    							$max_price = 0;

								foreach ( $children as $child_id ) {
									$child_product = wc_get_product( $child_id );
							
									$child_price = $child_product->get_price();
									$min_price = min($min_price, $child_price);
									$max_price = max($max_price, $child_price);
								}
								echo '<p class="pweza-product-price-full">'.get_woocommerce_currency_symbol().' '.number_format($min_price, 0, '.', ',').' - '.get_woocommerce_currency_symbol().' '.number_format($max_price, 0, '.', ',').' </p>';

							}
							else if ( $product->is_type( 'variable' ) ) {
								 // Get all variations
								 $variations = $product->get_children();
								 $prices = [];

								// Loop through each variation to get its price
								foreach ( $variations as $variation_id ) {
									$variation = wc_get_product( $variation_id );
									if ( $variation && $variation->is_purchasable() ) {
										$prices[] = $variation->get_price();
									}
								}

								if ( ! empty( $prices ) ) {
									// Get the lowest and highest prices
									$lowest_price = min( $prices );
									$highest_price = max( $prices );
								}

								echo '<p class="pweza-product-price-full">'.get_woocommerce_currency_symbol().' '.number_format($lowest_price, 0, '.', ',').' - '.get_woocommerce_currency_symbol().' '.number_format($highest_price, 0, '.', ',').' </p>';


							}
						
							else{
								if ( $product->is_on_sale() ) {
									echo '<p class="pweza-product-price-full">'.get_woocommerce_currency_symbol().' '.number_format($product->get_sale_price(), 0, '.', ',').'</p>';
									echo '<p class="pweza-product-price-slash">'.get_woocommerce_currency_symbol().' '.number_format($product->get_regular_price(), 0, '.', ',').'</p>
';
								}
								else{
									echo '<p class="pweza-product-price-full">'.get_woocommerce_currency_symbol().' '.number_format($product->get_regular_price(), 0, '.', ',').'</p>';
								}
							}
							?>
						</div>
					</a>
					<div class="pweza-product-add-to-cart">
						<?php woocommerce_template_loop_add_to_cart();?>
					</div>
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
//	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
//	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
//	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
