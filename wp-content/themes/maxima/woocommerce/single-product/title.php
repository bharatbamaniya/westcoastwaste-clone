<?php

/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

global $product;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

the_title('<h1 class="product_title entry-title">', '</h1>');
?>

<?php if ($product->is_type('variable')) { ?>

	<div class="product-single-dimensions">
		Dimensions: <strong><?php the_field('dimensions'); ?></strong>
	</div>

	<div class="product-single-sizing">
		<div class="row">
			<div class="col-lg-4">
				<div class="circle">
					<div class="abs-circle-holder">
						<div class="content-holder">
							Approx x <?php the_field('approx_trailer'); ?> Trailer
						</div>
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-trailer.png" alt="Product Trailer">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="circle">
					<div class="abs-circle-holder">
						<div class="content-holder">
							Approx x <?php the_field('approx_bin'); ?> Wheelie bins
						</div>
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-bin.png" alt="Product Trailer">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php } ?>