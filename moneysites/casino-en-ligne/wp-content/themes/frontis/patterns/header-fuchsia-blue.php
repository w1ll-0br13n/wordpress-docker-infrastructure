<?php
/**
 * Title: Header Fuchsia Blue
 * Slug: frontis/header-fuchsia-blue
 * Categories: header
 */
$image_url = trailingslashit(get_template_directory_uri());
$images = [
    $image_url . "assets/image/site-white-logo.webp",
];
$home_url =  home_url();
?>

<!-- wp:group {"metadata":{"name":"Header Fuchsia Blue","categories":["header"],"patternName":"frontis/header-fuchsia-blue"},"align":"wide","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--spacing-32);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"metadata":{"patternName":"frontis/header","name":"Header"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-24","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background-white"}}}},"textColor":"background-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--spacing-24);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"alignwide","style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-16","bottom":"var:preset|spacing|spacing-16","left":"var:preset|spacing|spacing-32","right":"var:preset|spacing|spacing-16"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"100px"},"color":{"background":"#44169c"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-background" style="border-radius:100px;background-color:#44169c;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-16);padding-right:var(--wp--preset--spacing--spacing-16);padding-bottom:var(--wp--preset--spacing--spacing-16);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:image {"id":451,"width":"102px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><a href="<?php echo $home_url; ?>"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-451" style="width:102px"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"textColor":"white","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-40"},"typography":{"textDecoration":"none"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#about","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#blog","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#footer","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"FBHideMob":true} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"#44169c"}}},"color":{"text":"#44169c"}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-white-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="color:#44169c" rel="">Contact us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->