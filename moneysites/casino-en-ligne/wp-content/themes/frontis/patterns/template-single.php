<?php
/**
 * Title: Template single
 * Slug: frontis/template-single
 * Categories: pages
 * Keywords: post, single
 */
$image_url = trailingslashit(get_template_directory_uri());

$images = [
    $image_url . "assets/image/admin.svg",
    $image_url . "assets/image/clock.svg",
    $image_url . "assets/image/storage.svg",
    $image_url . "assets/image/chat.svg",
];
?>
<!-- wp:group {"metadata":{"name":"Single Page Layout"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-64","bottom":"var:preset|spacing|spacing-120","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-32"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-64);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-120);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:tag-cloud {"numberOfTags":2,"className":"is-style-FWP_-tag-cloud-pill","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|spacing-16"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:post-title {"level":1,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"h2"} /-->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"262px","className":"is-single-post-meta","style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-single-post-meta" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:262px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-16","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-16);margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":190,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"right":"var:preset|spacing|spacing-8"}}}} -->
<figure class="wp-block-image size-full" style="margin-right:var(--wp--preset--spacing--spacing-8)"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-190" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-2"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":190,"sizeSlug":"full","linkDestination":"none","className":"service-button-icon","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"right":"var:preset|spacing|spacing-8"}}}} -->
<figure class="wp-block-image size-full service-button-icon" style="margin-right:var(--wp--preset--spacing--spacing-8)"><img src="<?php echo esc_url($images[1]); ?>" alt="clock" class="wp-image-190"/></figure>
<!-- /wp:image -->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-2","fontFamily":"work-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"350px","className":"is-single-post-meta","style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"0","left":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-single-post-meta" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:350px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-16","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-16);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":190,"sizeSlug":"full","linkDestination":"none","className":"service-button-icon","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"right":"var:preset|spacing|spacing-8"}}}} -->
<figure class="wp-block-image size-full service-button-icon" style="margin-right:var(--wp--preset--spacing--spacing-8)"><img src="<?php echo esc_url($images[2]); ?>" alt="storage" class="wp-image-190"/></figure>
<!-- /wp:image -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"heading","fontSize":"p-2"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":190,"sizeSlug":"full","linkDestination":"none","className":"service-button-icon","style":{"color":{"duotone":"var:preset|duotone|primary"},"spacing":{"margin":{"right":"var:preset|spacing|spacing-8"}}}} -->
<figure class="wp-block-image size-full service-button-icon" style="margin-right:var(--wp--preset--spacing--spacing-8)"><img src="<?php echo esc_url($images[3]); ?>" alt="chat" class="wp-image-190"/></figure>
<!-- /wp:image -->

<!-- wp:comments {"fontSize":"medium"} -->
<div class="wp-block-comments has-medium-font-size"><!-- wp:comments-title {"showPostTitle":false,"level":5,"style":{"spacing":{"margin":{"bottom":"0","top":"0","right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"heading","fontSize":"p-2","fontFamily":"work-sans"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-32","right":"0","left":"0"}}}} /-->

<!-- wp:post-content /-->

<!-- wp:group {"metadata":{"categories":["posts"],"patternName":"frontis/author-box","name":"Author Box"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-40","bottom":"var:preset|spacing|spacing-40","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"var:preset|spacing|spacing-32"}},"border":{"radius":"15px"}},"backgroundColor":"primary-800","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-800-background-color has-background" style="border-radius:15px;margin-top:var(--wp--preset--spacing--spacing-32);padding-top:var(--wp--preset--spacing--spacing-40);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-40);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author {"textAlign":"center","showBio":false,"byline":"","isLink":true,"linkTarget":"_blank","className":"is-style-FWP_-post-author-simple is-style-FWP_-post-author-custom is-style-FWP_-post-author-custom-styles is-style-FWP_-post-author-custom-style-1 is-style-FWP_-post-author-compact-author","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"h5","fontFamily":"plus-jakarta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Navigation"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|spacing-48","bottom":"var:preset|spacing|spacing-64"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-48);margin-bottom:var(--wp--preset--spacing--spacing-64);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-140"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-navigation-link {"textAlign":"left","showTitle":true,"linkLabel":true,"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Related Posts"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0","top":"0","right":"0","left":"0"}}},"fontSize":"h5"} -->
<h2 class="wp-block-heading has-h-5-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Related Post</h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"categories":["posts"],"patternName":"frontis/blog-post","name":"Blog Post"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|spacing-32","bottom":"var:preset|spacing|spacing-80"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--spacing-32);margin-bottom:var(--wp--preset--spacing--spacing-80);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"categories":["posts"],"patternName":"core/query-offset-posts","name":"Offset"},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%"><!-- wp:query {"queryId":33,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|spacing-24"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|spacing-24"}}}} /-->

<!-- wp:tag-cloud {"className":"is-style-FWP_-tag-cloud-pill"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|spacing-16","bottom":"var:preset|spacing|spacing-24","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"h6","fontFamily":"inter"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-8","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author {"isLink":true,"className":"is-style-FWP_-post-author-custom-style-2 is-style-FWP_-post-author-elegant-author","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontSize":"p-2"} /-->

<!-- wp:post-date {"className":"is-style-FWP_-post-date-custom-style","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"p-2","fontFamily":"inter"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-comments" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:comments-title {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|spacing-40","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"h5"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:avatar {"size":40} /-->

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
<!-- /wp:group -->