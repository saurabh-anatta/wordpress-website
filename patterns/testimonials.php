<?php
/**
 * Title: Testimonials
 * Slug: anatta-site/testimonials
 * Categories: anatta-site, testimonials
 * Description: Two client testimonial cards on a brand-tint background.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","backgroundColor":"brand-tint","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-tint-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">What our clients say</h2>
<!-- /wp:heading -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns is-stacked-on-mobile">
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-card","backgroundColor":"surface","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-card has-surface-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Anatta rebuilt our Shopify Plus store in ten weeks. Conversion rate is up 38% and our team can finally ship campaigns without waiting on developers.</p>
<!-- /wp:paragraph --><cite>Northwind Outfitters</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0;font-weight:700">Maya Chen</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","style":{"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-small-font-size" style="margin-top:0">Head of Ecommerce, Northwind Outfitters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-card","backgroundColor":"surface","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-card has-surface-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Their CRO programme paid for itself in the first quarter. Every test came with clear reasoning, and the wins kept compounding.</p>
<!-- /wp:paragraph --><cite>Lumen Skincare</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"bottom":"0"}}}} -->
<p style="margin-bottom:0;font-weight:700">Daniel Okafor</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","style":{"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-small-font-size" style="margin-top:0">VP of Growth, Lumen Skincare</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
