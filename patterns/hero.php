<?php
/**
 * Title: Hero
 * Slug: anatta-site/hero
 * Categories: anatta-site, banner
 * Description: Full-width hero with eyebrow, headline, intro copy and two calls to action.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bg.svg' ) ); ?>","dimRatio":70,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":640,"minHeightUnit":"px","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bg.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em","fontWeight":"600"}}} -->
<p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Digital commerce agency</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"surface","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-surface-color has-text-color has-xx-large-font-size">We build commerce experiences that convert</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"surface","fontSize":"large"} -->
<p class="has-surface-color has-text-color has-large-font-size">Anatta partners with ambitious direct-to-consumer brands to design, build and optimise Shopify storefronts that turn first-time visitors into loyal customers.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"backgroundColor":"brand","textColor":"surface"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-surface-color has-brand-background-color has-text-color has-background wp-element-button" href="/contact">Start a project</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"surface","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-surface-color has-text-color wp-element-button" href="/work">See our work</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
