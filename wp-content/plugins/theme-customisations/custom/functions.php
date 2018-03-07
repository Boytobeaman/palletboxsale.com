<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */
remove_action( 'storefront_footer', 'storefront_credit',20 );

add_action( 'storefront_footer', 'footer_link_custom', 10 );

if ( ! function_exists( 'footer_link_custom' ) ) {

	/**
	 * Insert the footer links.
	 *
	 * @subpackage	Archives
	 */
	function footer_link_custom() {
		echo '<div class="cutomize-footer-link">
				  <a href="https://www.homedepot.com/" target="_blank">Homedepot</a>
				  <a href="https://www.plastic-crate.com/" target="_blank">Plastic moving boxes</a>
				  <a href="https://www.walmart.com/c/kp/moving-dolly" target="_blank">Walmart dolly</a>
				  <a href="http://www.joinplastic.com/" target="_blank">Folding plastic crate</a>
				  <a href="https://www.plastic-crate.co.uk/" target="_blank">Euro crates</a>
				</div>';
	}
}

//make description text of each catogory appear after products loop

if ( ! function_exists( 'woocommerce_content' ) ) {

	/**
	 * Output WooCommerce content.
	 *
	 * This function is only used in the optional 'woocommerce.php' template.
	 * which people can add to their themes to add basic woocommerce support.
	 * without hooks or modifying core templates.
	 *
	 */
	function woocommerce_content() {

		if ( is_singular( 'product' ) ) {

			while ( have_posts() ) : the_post();

				wc_get_template_part( 'content', 'single-product' );

			endwhile;

		} else { ?>

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

			<?php endif; ?>

			

			<?php if ( have_posts() ) : ?>

				<?php do_action( 'woocommerce_before_shop_loop' ); ?>

				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action( 'woocommerce_after_shop_loop' ); ?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php do_action( 'woocommerce_no_products_found' ); ?>

			<?php endif; ?>
			
			<?php do_action( 'woocommerce_archive_description' ); 

		}
	}
}