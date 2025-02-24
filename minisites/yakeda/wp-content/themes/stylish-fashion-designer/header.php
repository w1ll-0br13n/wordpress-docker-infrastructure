<?php
/**
 * The Header for our theme.
 * @package Stylish Fashion Designer
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <?php if(get_theme_mod('stylish_fashion_designer_preloader',false) != '' || get_theme_mod( 'stylish_fashion_designer_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
<header role="banner" class="header-box">
  <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'stylish-fashion-designer' ); ?></a>
  <div class="top-header">
    <div class="container-fluid">
      <div class="topbar">
        <div class="row">
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12 phone-box">
            <div class="row">
              <div class="col-xxl-2 col-xl-2 col-lg-2 align-self-center"></div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-3 cart-box align-self-center">
                <?php if ( class_exists('woocommerce') ) { ?>
                  <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" class="cart-icon"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_cart_icon','fa-solid fa-basket-shopping')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'shopping cart','stylish-fashion-designer' );?></span>
                  <?php 
                    $stylish_fashion_designer_cart_count = WC()->cart->get_cart_contents_count(); 
                    if($stylish_fashion_designer_cart_count > 0): ?>
                    <span class="cart-count"><?php echo $stylish_fashion_designer_cart_count; ?></span>
                  <?php endif; ?>
                  </a>
                <?php }?>
              </div>
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-9 col-9 align-self-center">
                <div class="phone-sec py-0 py-lg-0 py-md-2 ">
                  <?php if( get_theme_mod( 'stylish_fashion_designer_phone_text','' ) != '') { ?>
                    <div class="row">
                      <div class="col-xl-2 col-lg-2 col-md-2 col-2 p-0 align-self-center">
                        <i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_phone_icon','fas fa-phone')); ?>"></i>
                      </div>
                      <div class="col-xl-10 col-lg-10 col-md-10 col-10 ps-3">            
                        <p class="call text-capitalize"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_phone_text','') ); ?></p>
                        <p><a class="call1" href="tel:<?php echo esc_attr( get_theme_mod('stylish_fashion_designer_phone_number','' )); ?>"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_phone_number','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_phone_number','') ); ?></span></a></p>        
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12 py-0 py-lg-0 py-md-0 text-lg-start text-md-center text-center px-0">
            <div class="logo py-2">
              <div class="row">
                <div class="<?php if( get_theme_mod( 'stylish_fashion_designer_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 text-center<?php } ?>">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
                <div class="<?php if( get_theme_mod( 'stylish_fashion_designer_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 text-center<?php } ?>">
                  <?php $stylish_fashion_designer_blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $stylish_fashion_designer_blog_info ) ) : ?>
                    <?php if( get_theme_mod('stylish_fashion_designer_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $stylish_fashion_designer_description = get_bloginfo( 'description', 'display' );
                  if ( $stylish_fashion_designer_description || is_customize_preview() ) : ?>
                    <?php if( get_theme_mod('stylish_fashion_designer_site_tagline_enable',false) != ''){ ?>
                      <p class="site-description"><?php echo esc_html($stylish_fashion_designer_description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-12 mail-box">
            <div class="row">
              <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-9 col-10 align-self-center">
                <div class="mail-sec py-0 py-lg-0 py-md-2 ">
                  <?php if( get_theme_mod( 'stylish_fashion_designer_email_address_text','' ) != '') { ?>
                      <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-2 p-0 align-self-center">
                          <i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_email_icon','fa-solid fa-envelope-open-text')); ?>"></i>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-10 ps-2">            
                          <p class="email text-capitalize"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_email_address_text','') ); ?></p>
                          <p><a class="email1" href="mailto:<?php echo esc_attr( get_theme_mod('stylish_fashion_designer_email_address1','' )); ?>"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_email_address1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_email_address1','') ); ?></span></a></p>        
                        </div>
                      </div>
                    <?php }?>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-2 col-2 align-self-center text-end">
                <?php if(class_exists('woocommerce')){ ?>
                  <?php if( get_theme_mod( 'stylish_fashion_designer_display_search', true) != '' ) { ?>
                    <div class="main-search d-inline-block">
                      <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_search_icon','fas fa-search')); ?>"></i></a></span>
                    </div>
                  <?php }?>
                  <div class="searchform_page w-100 h-100">
                    <div class="close w-100 text-end me-lg-4 me-3"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
                    <div class="search_input">
                      <div class="header-search">
                        <?php get_product_search_form(); ?>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="col-xxl-2 col-xl-2 col-lg-2 align-self-center"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- menu header -->
    <div class="main-menu-header">
      <div class="container">
        <div class="navigation-header">
          <div class="toggle-nav mobile-menu">
            <button onclick="stylish_fashion_designer_openNav()"><i class="fa-solid fa-bars"></i></button>
          </div>
          <div id="mySidenav" class="nav sidenav">
            <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'stylish-fashion-designer' ); ?>">
              <?php {
                wp_nav_menu(
                  array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu', 
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  )
                );
              } ?>
            </nav>
            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="stylish_fashion_designer_closeNav()"><i class="fas fa-times"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
