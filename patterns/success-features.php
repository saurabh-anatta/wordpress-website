<?php
/**
 * Title: Setting You Up For Success
 * Slug: anatta-site/success-features
 * Categories: anatta-site
 * Description: Navy section with intro copy, four icon tabs and a detail panel for the selected tab.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","backgroundColor":"navy","textColor":"surface","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-color has-navy-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","textColor":"surface","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontWeight":"700"}}} -->
<p class="has-text-align-center has-surface-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.2em;text-transform:uppercase"><?php esc_html_e( 'Northstar Wealth', 'anatta-site' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"surface","fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-surface-color has-text-color has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Setting You Up For Success', 'anatta-site' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"anatta-site-measure","textColor":"surface"} -->
<p class="has-text-align-center anatta-site-measure has-surface-color has-text-color"><?php esc_html_e( 'Over the years we have advised households at every stage of life, so we know how to shape a financial plan or investment strategy around both your personal and professional ambitions. As an independent firm we can choose from a broad range of solutions, use modern planning technology and build portfolios with genuine diversification.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"anatta-site-features","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group anatta-site-features" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:group {"className":"anatta-site-feature anatta-site-feature-1 is-active","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group anatta-site-feature anatta-site-feature-1 is-active"><!-- wp:image {"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/analysis.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Magnifying glass icon', 'anatta-site' ); ?>" style="width:72px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","textColor":"surface"} -->
<p class="has-text-align-center has-surface-color has-text-color"><?php esc_html_e( 'Comprehensive', 'anatta-site' ); ?><br><?php esc_html_e( 'Financial Analysis', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"anatta-site-feature anatta-site-feature-2","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group anatta-site-feature anatta-site-feature-2"><!-- wp:image {"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/fiduciary.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Shield with check mark icon', 'anatta-site' ); ?>" style="width:72px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","textColor":"surface"} -->
<p class="has-text-align-center has-surface-color has-text-color"><?php esc_html_e( 'Fiduciary to', 'anatta-site' ); ?><br><?php esc_html_e( 'Our Clients', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"anatta-site-feature anatta-site-feature-3","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group anatta-site-feature anatta-site-feature-3"><!-- wp:image {"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/expertise.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Group of four people icon', 'anatta-site' ); ?>" style="width:72px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","textColor":"surface"} -->
<p class="has-text-align-center has-surface-color has-text-color"><?php esc_html_e( 'Diversified', 'anatta-site' ); ?><br><?php esc_html_e( 'Expertise', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"anatta-site-feature anatta-site-feature-4","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group anatta-site-feature anatta-site-feature-4"><!-- wp:image {"width":"72px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/tailored.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Hand presenting a service tray icon', 'anatta-site' ); ?>" style="width:72px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","textColor":"surface"} -->
<p class="has-text-align-center has-surface-color has-text-color"><?php esc_html_e( 'Tailored', 'anatta-site' ); ?><br><?php esc_html_e( 'Services', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"anatta-site-feature-panels","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide anatta-site-feature-panels" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"anatta-site-feature-panel anatta-site-feature-panel-1 is-active","backgroundColor":"sky","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-feature-panel anatta-site-feature-panel-1 is-active has-ink-color has-sky-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"navy","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size" style="font-weight:600"><?php esc_html_e( 'Comprehensive Financial Analysis', 'anatta-site' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color"><?php esc_html_e( 'We review every part of your financial life — income, assets, liabilities, insurance and taxes — so recommendations are grounded in the complete picture rather than a single account.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"anatta-site-feature-panel anatta-site-feature-panel-2","backgroundColor":"sky","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-feature-panel anatta-site-feature-panel-2 has-ink-color has-sky-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"navy","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size" style="font-weight:600"><?php esc_html_e( 'Fiduciary to Our Clients', 'anatta-site' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color"><?php esc_html_e( 'As fiduciaries we are obligated to put your interests first. Our advice is transparent, our fees are clearly disclosed and we do not earn commissions on the products we recommend.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"anatta-site-feature-panel anatta-site-feature-panel-3","backgroundColor":"sky","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-feature-panel anatta-site-feature-panel-3 has-ink-color has-sky-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"navy","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size" style="font-weight:600"><?php esc_html_e( 'Diversified Expertise', 'anatta-site' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color"><?php esc_html_e( 'Our advisors bring backgrounds in tax, investments, estate planning and corporate benefits, so you have specialists on hand for each decision rather than a single generalist.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"anatta-site-feature-panel anatta-site-feature-panel-4","backgroundColor":"sky","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-feature-panel anatta-site-feature-panel-4 has-ink-color has-sky-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"level":3,"textColor":"navy","fontSize":"x-large","style":{"typography":{"fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-navy-color has-text-color has-x-large-font-size" style="font-weight:600"><?php esc_html_e( 'Tailored Services', 'anatta-site' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color"><?php esc_html_e( 'We intentionally work with a limited number of households so we can offer a highly personalized experience and a consistently high standard of service.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
