<?php
/**
 * Title: Hero
 * Slug: anatta-site/hero
 * Categories: anatta-site, banner
 * Description: Full-width photo hero with a diagonal ocean overlay, headline and supporting line.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bg.svg' ) ); ?>","alt":"<?php echo esc_attr__( 'Advisors meeting with clients around a conference table', 'anatta-site' ); ?>","dimRatio":90,"overlayColor":"ocean","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center left","align":"full","className":"anatta-site-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left anatta-site-hero" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-ocean-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Advisors meeting with clients around a conference table', 'anatta-site' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-bg.svg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"textColor":"surface","fontSize":"xx-large","style":{"typography":{"fontWeight":"700"}}} -->
<h1 class="wp-block-heading has-surface-color has-text-color has-xx-large-font-size" style="font-weight:700"><?php esc_html_e( 'Tax-Smart', 'anatta-site' ); ?><br><?php esc_html_e( 'Wealth', 'anatta-site' ); ?><br><?php esc_html_e( 'Management', 'anatta-site' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"surface","fontSize":"large","style":{"typography":{"fontWeight":"300"}}} -->
<p class="has-surface-color has-text-color has-large-font-size" style="font-weight:300"><?php esc_html_e( 'Guided By Your Life Goals', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
