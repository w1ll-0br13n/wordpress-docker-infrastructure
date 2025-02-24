<?php
/**
 * Title: Template page right sidebar
 * Slug: frontis/template-page-right-sidebar
 * Categories: pages
 * Keywords: page sidebar
 */
$image_url = trailingslashit(get_template_directory_uri());

$images = [
    $image_url . "assets/image/gallery-1.webp",
    $image_url . "assets/image/gallery-2.webp",
    $image_url . "assets/image/gallery-3.webp",
    $image_url . "assets/image/gallery-4.webp",
    $image_url . "assets/image/gallery-5.webp",
    $image_url . "assets/image/gallery-6.webp",
];
?>
<!-- wp:group {"metadata":{"name":"page with sidebar"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32","top":"var:preset|spacing|spacing-64","bottom":"var:preset|spacing|spacing-120"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-64);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-right:0px;padding-left:0px;flex-basis:66.66%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"align":"wide"} /-->

<!-- wp:post-content {"align":"wide"} /-->

<!-- wp:group {"metadata":{"categories":["posts"],"patternName":"frontis/comments","name":"Comments"},"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-comments alignwide" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments-title {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-40","bottom":"var:preset|spacing|spacing-40","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"h5"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:avatar {"size":40} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-8","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comment-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comment-date /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"p-2"} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-40","bottom":"var:preset|spacing|spacing-40"}}},"backgroundColor":"primary-100"} -->
<hr class="wp-block-separator has-text-color has-primary-100-color has-alpha-channel-opacity has-primary-100-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--spacing-40);margin-bottom:var(--wp--preset--spacing--spacing-40)"/>
<!-- /wp:separator -->

<!-- wp:comment-reply-link /-->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"h5"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Categories List","categories":["posts"],"patternName":"frontis/categories-list"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"0","top":"0","right":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|spacing-16","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:600">Categories List</h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"showLabel":false,"className":"is-style-FWP_-categories-minimal-pill is-style-FWP_-categories-minimal","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Latest Post","categories":["posts"],"patternName":"frontis/latest-post"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-16","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:500">Latest Post</h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageSizeWidth":113,"featuredImageSizeHeight":113,"className":"is-style-FWP_-latest-posts-minimal","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Search","categories":["posts"],"patternName":"frontis/search"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-16","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:500">Search</h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"className":"is-style-FWP_-search-minimal"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Social Link","categories":["posts"],"patternName":"frontis/social-link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-16","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:500">Social Links</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#FFFFFF","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"telegram"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Gallery","categories":["posts"],"patternName":"frontis/gallery"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-16","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:500">Gallery</h3>
<!-- /wp:heading -->

<!-- wp:gallery {"imageCrop":false,"linkTo":"none","sizeSlug":"thumbnail","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-16","left":"var:preset|spacing|spacing-16"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-default"><!-- wp:image {"id":25,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-25" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":20,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($images[1]); ?>" alt="" class="wp-image-20" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":16,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($images[2]); ?>" alt="" class="wp-image-16" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":31,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($images[3]); ?>" alt="" class="wp-image-31" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":12,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($images[4]); ?>" alt="" class="wp-image-12" style="border-radius:10px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":14,"sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-thumbnail has-custom-border"><img src="<?php echo esc_url($images[5]); ?>" alt="" class="wp-image-14" style="border-radius:10px"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Page List","categories":["posts"],"patternName":"frontis/page-list"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-16","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:500">Page List</h3>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-8"}},"layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Latest Comments","categories":["posts"],"patternName":"frontis/latest-comments"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-24","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:0;font-style:normal;font-weight:500">Latest Comments</h3>
<!-- /wp:heading -->

<!-- wp:latest-comments {"commentsToShow":3,"displayExcerpt":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Archives","categories":["posts"],"patternName":"frontis/archives-sidebar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|spacing-16","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"h6"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-link-color has-h-6-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:0;font-style:normal;font-weight:500">Archives</h3>
<!-- /wp:heading -->

<!-- wp:archives /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Calendar","categories":["posts","featured"],"patternName":"frontis/calendar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-800-background-color has-text-color has-background has-link-color" style="border-radius:16px;margin-top:0;margin-bottom:var(--wp--preset--spacing--spacing-24);padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:calendar {"className":"is-style-FWP_-post-calendar-custom-style"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->