<?php
/**
 * Title: Personalized Solutions
 * Slug: anatta-site/personalized-solutions
 * Categories: anatta-site
 * Description: Centered monogram, heading and intro above two colored service cards with learn-more links.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- wp:group {"align":"full","backgroundColor":"surface","textColor":"ink","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ink-color has-surface-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"width":"96px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/monogram.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Northstar Wealth monogram', 'anatta-site' ); ?>" style="width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","textColor":"navy","fontSize":"x-large","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<h2 class="wp-block-heading has-text-align-center has-navy-color has-text-color has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Personalized Solutions Adapted to', 'anatta-site' ); ?><br><?php esc_html_e( 'Your Current and Future Needs', 'anatta-site' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"ink"} -->
<p class="has-text-align-center has-ink-color has-text-color"><?php esc_html_e( 'Using our experience to establish the right financial plan for you', 'anatta-site' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-solution-card","backgroundColor":"sky","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-solution-card has-ink-color has-sky-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"96px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/planning.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Stacked coins and bills icon', 'anatta-site' ); ?>" style="width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"textColor":"navy","fontSize":"large","style":{"typography":{"lineHeight":"1.2"}}} -->
<h3 class="wp-block-heading has-navy-color has-text-color has-large-font-size" style="line-height:1.2"><?php esc_html_e( 'Financial and', 'anatta-site' ); ?><br><?php esc_html_e( 'Tax Planning Services', 'anatta-site' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color"><?php esc_html_e( 'Sit down with a dedicated advisor who takes the time to understand where you are today and where you want to be. Together we build a written plan that covers cash flow, retirement, estate and tax considerations in one place.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"anatta-site-learn-more","textColor":"ink","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="anatta-site-learn-more has-ink-color has-text-color" style="margin-top:var(--wp--preset--spacing--50)"><a href="#"><?php esc_html_e( 'LEARN MORE +', 'anatta-site' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"anatta-site-solution-card","backgroundColor":"gold","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group anatta-site-solution-card has-ink-color has-gold-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"96px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icons/investment.svg' ) ); ?>" alt="<?php echo esc_attr__( 'Plant growing from coins icon', 'anatta-site' ); ?>" style="width:96px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"textColor":"navy","fontSize":"large","style":{"typography":{"lineHeight":"1.2"}}} -->
<h3 class="wp-block-heading has-navy-color has-text-color has-large-font-size" style="line-height:1.2"><?php esc_html_e( 'Investment', 'anatta-site' ); ?><br><?php esc_html_e( 'Management Services', 'anatta-site' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"ink"} -->
<p class="has-ink-color has-text-color"><?php esc_html_e( 'Our team designs and manages diversified portfolios built around your risk tolerance, time horizon and tax situation, with regular reviews so your investments keep pace with your life.', 'anatta-site' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"anatta-site-learn-more","textColor":"ink","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<p class="anatta-site-learn-more has-ink-color has-text-color" style="margin-top:var(--wp--preset--spacing--50)"><a href="#"><?php esc_html_e( 'LEARN MORE +', 'anatta-site' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
