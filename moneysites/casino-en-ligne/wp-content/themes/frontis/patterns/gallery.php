<?php
/**
 * Title: Gallery Sidebar
 * Slug: frontis/gallery
 * Categories: sidebar
 * Inserter: false
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
<!-- wp:group {"metadata":{"name":"Gallery"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"},"margin":{"top":"0","bottom":"var:preset|spacing|spacing-24"},"blockGap":"0"},"border":{"radius":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-800","textColor":"white","layout":{"type":"constrained"}} -->
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
