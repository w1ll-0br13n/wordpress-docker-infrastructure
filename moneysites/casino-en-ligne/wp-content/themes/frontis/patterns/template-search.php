<?php
/**
 * Title: Template search
 * Slug: frontis/template-search
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"margin":{"top":"var:preset|spacing|spacing-64","bottom":"var:preset|spacing|spacing-64"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-64);margin-bottom:var(--wp--preset--spacing--spacing-64);padding-top:0;padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:0;padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:query-title {"type":"search","textAlign":"center","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"h2"} /--></div>
<!-- /wp:group -->
 
 <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-120","right":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"h5"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color has-h-5-font-size">Sorry, but nothing matched your search terms. Try another search?</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","className":"is-style-swt-search-minimal is-style-FWP_-search-minimal"} /--></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","height":"","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|spacing-24","left":"0"}}}} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-swt-post-terms-pill is-style-FWP_-post-terms-pill","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-16","bottom":"var:preset|spacing|spacing-24","right":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"h6"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"isLink":true,"className":"is-style-FWP_-post-author-elegant-author","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-2"} /-->

<!-- wp:post-date {"className":"is-style-FWP_-post-date-custom-style","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-1","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->