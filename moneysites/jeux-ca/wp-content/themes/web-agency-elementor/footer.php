<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web Agency Elementor
 */

?>

<footer class="footer-side">
  <?php if( get_theme_mod( 'web_agency_elementor_show_footer_widget',true)) : ?>
    <div class="footer-widget">
      <div class="container">
        <?php if ( is_active_sidebar( 'footer1-sidebar' ) || is_active_sidebar( 'footer2- sidebar' ) || is_active_sidebar( 'footer3-sidebar' ) || is_active_sidebar( 'footer4-sidebar' ) ) : ?>
        <?php $count = 0;
          if ( is_active_sidebar('footer1-sidebar') ) : $count++; endif; 
          if ( is_active_sidebar('footer2-sidebar') ) : $count++; endif; 
          if ( is_active_sidebar('footer3-sidebar') ) : $count++; endif; 
          if ( is_active_sidebar('footer4-sidebar') ) : $count++; endif;
          $row = 'col-lg-'. 12/$count .' col-md-'. 12/$count .' col-sm-12';
        ?>
        <div class="row pt-2">
            <?php if ( is_active_sidebar('footer1-sidebar') ) : ?>
                <div class="footer-area <?php echo $row ?>">
                    <?php dynamic_sidebar('footer1-sidebar'); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar('footer2-sidebar') ) : ?>
                <div class="footer-area <?php echo $row ?>">
                    <?php dynamic_sidebar('footer2-sidebar'); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar('footer3-sidebar') ) : ?>
                <div class="footer-area <?php echo $row ?>">
                    <?php dynamic_sidebar('footer3-sidebar'); ?>
                </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar('footer4-sidebar') ) : ?>
                <div class="footer-area <?php echo $row ?>">
                    <?php dynamic_sidebar('footer4-sidebar'); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
    </div> 
  <?php endif; ?>
  <?php if( get_theme_mod( 'web_agency_elementor_show_footer_copyright',true)) : ?>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 align-self-center">
            <p class="mb-0 py-3 text-center text-md-start">
              <?php
                if (!get_theme_mod('web_agency_elementor_footer_text') ) { ?>
                  <a href="<?php echo esc_url('https://www.wpelemento.com/products/free-web-agency-wordpress-theme'); ?>" target="_blank">
                    <?php esc_html_e('Web Agency WordPress Theme','web-agency-elementor'); ?>
                  </a>
                <?php } else {
                  echo esc_html(get_theme_mod('web_agency_elementor_footer_text'));
                }
              ?>
              <?php if ( get_theme_mod('web_agency_elementor_copyright_enable', true) == true ) : ?>
              <?php
                /* translators: %s: WP Elemento */
                printf( esc_html__( ' By %s', 'web-agency-elementor' ), 'WP Elemento' ); ?>
              <?php endif; ?>
            </p>
          </div>
          <div class="col-lg-6 col-md-6 align-self-center text-center text-md-end">
            <?php if ( get_theme_mod('web_agency_elementor_copyright_enable', true) == true ) : ?>
              <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'web-agency-elementor' ), 'WordPress' ); ?></a>
            <?php endif; ?>
          </div>
        </div>
        <?php if(get_theme_mod('web_agency_elementor_footer_social_icon_hide', false )== true){ ?>
          <div class="row">
            <div class="col-12 align-self-center py-1">
              <div class="footer-links">
                <?php $web_agency_elementor_settings_footer = get_theme_mod( 'web_agency_elementor_social_links_settings_footer' ); ?>
                <?php if ( is_array($web_agency_elementor_settings_footer) || is_object($web_agency_elementor_settings_footer) ){ ?>
                  <?php foreach( $web_agency_elementor_settings_footer as $web_agency_elementor_setting_footer ) { ?>
                    <a href="<?php echo esc_url( $web_agency_elementor_setting_footer['link_url'] ); ?>" target="_blank">
                      <i class="<?php echo esc_attr( $web_agency_elementor_setting_footer['link_text'] ); ?> me-2"></i>
                    </a>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div> 
  <?php endif; ?>
  <?php if ( get_theme_mod('web_agency_elementor_scroll_enable_setting')) : ?>
    <div class="scroll-up">
      <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
    </div>
  <?php endif; ?>
  <?php if(get_theme_mod('web_agency_elementor_progress_bar', false )== true): ?>
    <div id="elemento-progress-bar" class="theme-progress-bar top"></div>
  <?php endif; ?>
  <?php if(get_theme_mod('web_agency_elementor_cursor_outline', false )== true): ?>
			<!-- Custom cursor -->
			<div class="cursor-point-outline"></div>
			<div class="cursor-point"></div>
			<!-- .Custom cursor -->
  <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
