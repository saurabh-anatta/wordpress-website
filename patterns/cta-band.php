<?php
/**
 * Title: CTA band
 * Slug: anatta-site/cta-band
 * Categories: anatta-site, call-to-action
 * Description: Full-width brand-coloured call to action with a single button.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","backgroundColor":"brand","textColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-color has-brand-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","textColor":"surface","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-surface-color has-text-color has-x-large-font-size">Ready to grow your store?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">Tell us where you want to be next year and we will map out how to get there together.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"surface","textColor":"brand"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-brand-color has-surface-background-color has-text-color has-background wp-element-button" href="/contact">Get in touch</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
