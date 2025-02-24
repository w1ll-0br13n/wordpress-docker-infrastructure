<?php
/**
 * Title: Footer Selective Yellow
 * Slug: frontis/footer-selective-yellow
 * Categories: footer
 */
$theme_author_link = 'https://wpmessiah.com/';
$theme_author_name = 'WP Messiah';
$current_year = date('Y');
$image_url = trailingslashit(get_template_directory_uri());
$images = [
    $image_url . "assets/image/site-white-logo.webp",
];
$home_url =  home_url();
?>
<!-- wp:group {"metadata":{"name":"Footer Selective Yellow","categories":["footer"],"patternName":"frontis/footer-selective-yellow"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|spacing-32","left":"var:preset|spacing|spacing-32","top":"var:preset|spacing|spacing-104","bottom":"var:preset|spacing|spacing-32"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"#1f1500"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" id="footer" style="background-color:#1f1500;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--spacing-104);padding-right:var(--wp--preset--spacing--spacing-32);padding-bottom:var(--wp--preset--spacing--spacing-32);padding-left:var(--wp--preset--spacing--spacing-32)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","left":"0","right":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"330px","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:330px"><!-- wp:group {"className":"wp-block-column","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group wp-block-column" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":451,"width":"110px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
<figure class="wp-block-image size-full is-resized"><a href="<?php echo $home_url; ?>"><img src="<?php echo esc_url($images[0]); ?>" alt="" class="wp-image-451" style="width:110px"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#fff9eb"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|spacing-16","right":"0","bottom":"var:preset|spacing|spacing-24","left":"0"}},"color":{"text":"#fff9eb"}}} -->
<p class="has-text-color has-link-color" style="color:#fff9eb;margin-top:var(--wp--preset--spacing--spacing-16);margin-right:0;margin-bottom:var(--wp--preset--spacing--spacing-24);margin-left:0;font-size:18px;font-style:normal;font-weight:400">We’re a diverse and passionate team that takes ownership of your design and empower you.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"customIconColor":"#fff9eb","iconColorValue":"#fff9eb","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"telegram"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"100px","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"FBHideTab":true,"FBHideMob":true} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100px"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"align":"wide","style":{"elements":{"link":{"color":{"text":"#fff9eb"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|spacing-16"}},"color":{"text":"#fff9eb"}},"fontSize":"h6"} -->
<h4 class="wp-block-heading alignwide has-text-color has-link-color has-h-6-font-size" style="color:#fff9eb;padding-bottom:var(--wp--preset--spacing--spacing-16);font-style:normal;font-weight:600">Information</h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:navigation {"customTextColor":"#fff9eb","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-16"}},"fontSize":"p-1","layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"FAQ","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Support","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":4,"align":"wide","style":{"elements":{"link":{"color":{"text":"#fff9eb"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"bottom":"var:preset|spacing|spacing-16"}},"color":{"text":"#fff9eb"}},"fontSize":"h6"} -->
<h4 class="wp-block-heading alignwide has-text-color has-link-color has-h-6-font-size" style="color:#fff9eb;padding-bottom:var(--wp--preset--spacing--spacing-16);font-style:normal;font-weight:600">Company</h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:navigation {"customTextColor":"#fff9eb","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|spacing-16"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<!-- wp:navigation-link {"label":"About us","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Careers","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact us","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Lift Media","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"350px","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:350px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|spacing-24","bottom":"var:preset|spacing|spacing-24","left":"var:preset|spacing|spacing-24","right":"var:preset|spacing|spacing-24"}},"border":{"radius":"15px"},"color":{"background":"#7a5400"}},"layout":{"type":"constrained","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-group has-background" style="border-radius:15px;background-color:#7a5400;padding-top:var(--wp--preset--spacing--spacing-24);padding-right:var(--wp--preset--spacing--spacing-24);padding-bottom:var(--wp--preset--spacing--spacing-24);padding-left:var(--wp--preset--spacing--spacing-24)"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"#fff9eb"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|spacing-16"}},"color":{"text":"#fff9eb"}},"fontSize":"h6"} -->
<h4 class="wp-block-heading has-text-color has-link-color has-h-6-font-size" style="color:#fff9eb;margin-bottom:var(--wp--preset--spacing--spacing-16)">Subscribe</h4>
<!-- /wp:heading -->

<!-- wp:group {"className":"email","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group email" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:shortcode -->
[mc4wp_form id=660]
<!-- /wp:shortcode --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|spacing-16","right":"0","bottom":"0","left":"0"}},"color":{"text":"#fff9eb"},"elements":{"link":{"color":{"text":"#fff9eb"}}}},"fontSize":"p-1"} -->
<p class="has-text-color has-link-color has-p-1-font-size" style="color:#fff9eb;margin-top:var(--wp--preset--spacing--spacing-16);margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:400">Hello, we are Justwp. Our goal is to translate the positive effects from revolutionizing how companies engage with their clients</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|spacing-104","bottom":"var:preset|spacing|spacing-32"}}},"backgroundColor":"neutral-100"} -->
<hr class="wp-block-separator alignwide has-text-color has-neutral-100-color has-alpha-channel-opacity has-neutral-100-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--spacing-104);margin-bottom:var(--wp--preset--spacing--spacing-32)"/>
<!-- /wp:separator -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|spacing-24","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"FBHideTab":true,"FBHideMob":true} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#fff9eb"}}},"color":{"text":"#fff9eb"}},"fontSize":"p-1"} -->
<p class="has-text-color has-link-color has-p-1-font-size" style="color:#fff9eb"><?php echo sprintf(esc_html__('Copyright @ %1$s - WordPress Theme by %2$s', 'frontis'), esc_html($current_year), '<a href="' . esc_url($theme_author_link) . '">' . esc_html($theme_author_name) . '</a>'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"FBHideDesktop":true} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-white"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"background-white","fontSize":"p-1"} -->
<p class="has-text-align-center has-background-white-color has-text-color has-link-color has-p-1-font-size" style="font-style:normal;font-weight:400"><?php echo sprintf(esc_html__('Copyright @ %1$s - WordPress Theme by %2$s', 'frontis'), esc_html($current_year), '<a href="' . esc_url($theme_author_link) . '">' . esc_html($theme_author_name) . '</a>'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"FBHideTab":true,"FBHideMob":true} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:navigation {"customTextColor":"#fff9eb","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"p-2","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Terms","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Privacy","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Cookies","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"FBHideDesktop":true} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:navigation {"textColor":"body-text","overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"p-2","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Terms","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Privacy","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Cookies","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->