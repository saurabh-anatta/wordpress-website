<?php
/**
 * Title: Services
 * Slug: anatta-site/services
 * Categories: anatta-site, services
 * Description: Three service cards with icon, heading, description and link.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">What we do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)">From first sketch to peak season, we help commerce teams launch faster, sell more and keep improving.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30","top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns is-stacked-on-mobile">
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-card","backgroundColor":"surface","borderColor":"muted","style":{"border":{"width":"1px","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-card has-border-color has-muted-border-color has-surface-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/commerce.svg' ) ); ?>" alt="Shopping bag icon representing Shopify and headless commerce builds" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Shopify &amp; headless commerce</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fast, scalable storefronts on Shopify Plus and headless stacks.<br>Built to handle launches, drops and peak-season traffic.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/services/commerce">Learn more →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-card","backgroundColor":"surface","borderColor":"muted","style":{"border":{"width":"1px","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-card has-border-color has-muted-border-color has-surface-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/conversion.svg' ) ); ?>" alt="Upward trend arrow icon representing conversion rate optimisation" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Conversion rate optimisation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Research-led experiments that lift revenue per visitor.<br>We test, learn and ship the winners every sprint.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/services/cro">Learn more →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-card","backgroundColor":"surface","borderColor":"muted","style":{"border":{"width":"1px","radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-card has-border-color has-muted-border-color has-surface-background-color has-background" style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/strategy.svg' ) ); ?>" alt="Compass icon representing growth design and strategy" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">Growth design &amp; strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Brand-led UX and roadmaps grounded in customer insight.<br>Clear priorities that connect design work to growth.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/services/strategy">Learn more →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
