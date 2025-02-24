<?php
/**
 * Title: Author Box
 * Slug: frontis/author-box
 * Categories: sidebar
 * Inserter: false
 */


// Retrieve theme options.
$theme_options = get_option( 'frontis_theme_options', [] );


// Check if the author box should be disabled.
if ( isset( $theme_options['authorBox'] ) && is_bool( $theme_options['authorBox'] ) && $theme_options['authorBox'] != true ) {
    return ''; 
}
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"42px","bottom":"42px","left":"24px","right":"24px"}},"border":{"radius":"15px"}},"backgroundColor":"outline","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-outline-background-color has-background" style="border-radius:15px;padding-top:42px;padding-right:24px;padding-bottom:42px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:0px;padding-left:0px"><!-- wp:post-author /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->


