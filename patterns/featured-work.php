<?php
/**
 * Title: Featured work
 * Slug: anatta-site/featured-work
 * Categories: anatta-site, query
 * Description: Latest three case studies from the Work category in a grid, with a link to all work.
 * Inserter: yes
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// The Work category is created on theme activation; the ID is resolved at render.
// If it is missing the ID is 0, the query returns no posts and the no-results copy shows.
$anatta_site_work    = get_category_by_slug( 'work' );
$anatta_site_work_id = $anatta_site_work ? absint( $anatta_site_work->term_id ) : 0;
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Featured work</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--40)">A selection of recent launches and optimisation programmes for brands we are proud to work with.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":["<?php echo absint( $anatta_site_work_id ); ?>"]}},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"12px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>New case studies are on their way.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work">View all work</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
