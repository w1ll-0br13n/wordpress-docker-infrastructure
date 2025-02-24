<?php
/**
 * The template for displaying the footer.
 * @package Stylish Fashion Designer
 */
?>
<?php if( get_theme_mod( 'stylish_fashion_designer_hide_show_scroll',true) != '' || get_theme_mod( 'stylish_fashion_designer_display_scroll',true) != ''){ ?>
    <?php $stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_footer_options','Right');
    if($stylish_fashion_designer_theme_lay == 'Left align'){ ?>
        <a href="#" id="scrollbutton" class="left"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'stylish-fashion-designer' ); ?></span></a>
    <?php }else if($stylish_fashion_designer_theme_lay == 'Center align'){ ?>
        <a href="#" id="scrollbutton" class="center"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'stylish-fashion-designer' ); ?></span></a>
    <?php }else{ ?>
        <a href="#" id="scrollbutton"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'stylish-fashion-designer' ); ?></span></a>
    <?php }?>
<?php }?>
<footer role="contentinfo">
    <?php if( get_theme_mod( 'stylish_fashion_designer_footer_hide',true) != '') { ?>

    <?php //Set widget areas classes based on user choice
        $stylish_fashion_designer_widget_areas = get_theme_mod('stylish_fashion_designer_footer_widget_areas', '4');
        if ($stylish_fashion_designer_widget_areas == '3') {
            $stylish_fashion_designer_cols = 'col-lg-4 col-md-6';
        } elseif ($stylish_fashion_designer_widget_areas == '4') {
            $stylish_fashion_designer_cols = 'col-lg-3 col-md-6';
        } elseif ($stylish_fashion_designer_widget_areas == '2') {
            $stylish_fashion_designer_cols = 'col-lg-6 col-md-6';
        } else {
            $stylish_fashion_designer_cols = 'col-lg-12 col-md-12';
        }
    ?>
    
    <aside id="sidebar-footer" class="footer-wp" role="complementary">
        <div class="container">
            <div class="row">

                <div class="<?php echo esc_attr($stylish_fashion_designer_cols); ?> footer-block">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else : ?>
                        <aside id="search" class="widget pb-3" role="complementary" aria-label="<?php esc_attr_e('footer1', 'stylish-fashion-designer'); ?>">
                            <h3 class="widget-title"><?php esc_html_e( 'Search', 'stylish-fashion-designer' ); ?></h3>
                            <?php get_search_form(); ?>
                        </aside>
                    <?php endif; ?>
                </div>

                <div class="<?php echo esc_attr($stylish_fashion_designer_cols); ?> footer-block">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php else : ?>
                        <aside id="archives" class="widget pb-3" role="complementary" aria-label="<?php esc_attr_e('footer2', 'stylish-fashion-designer'); ?>">
                            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'stylish-fashion-designer' ); ?></h3>
                            <ul>
                                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                            </ul>
                        </aside>
                    <?php endif; ?>
                </div>

                <div class="<?php echo esc_attr($stylish_fashion_designer_cols); ?> footer-block">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php else : ?>
                        <aside id="meta" class="widget pb-3" role="complementary" aria-label="<?php esc_attr_e('footer3', 'stylish-fashion-designer'); ?>">
                            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'stylish-fashion-designer' ); ?></h3>
                            <ul>
                                <?php wp_register(); ?>
                                <li><?php wp_loginout(); ?></li>
                                <?php wp_meta(); ?>
                            </ul>
                        </aside>
                    <?php endif; ?>
                </div>

                <div class="<?php echo esc_attr($stylish_fashion_designer_cols); ?> footer-block">
                    <?php if (is_active_sidebar('footer-4')) : ?>
                        <?php dynamic_sidebar('footer-4'); ?>
                    <?php else : ?>
                        <aside id="categories" class="widget pb-3" role="complementary" aria-label="<?php esc_attr_e('footer4', 'stylish-fashion-designer'); ?>">
                            <h3 class="widget-title"><?php esc_html_e( 'Categories', 'stylish-fashion-designer' ); ?></h3>
                            <ul>
                                <?php wp_list_categories('title_li=');  ?>
                            </ul>
                        </aside>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </aside>

    <?php }?>
	<div class="copyright-wrapper py-3 px-0">
        <div class="container">
            <p><?php stylish_fashion_designer_credit(); ?> <?php esc_html__(get_theme_mod('stylish_fashion_designer_footer_copy',__('By Buywptemplate','stylish-fashion-designer'))); ?></p>
            <?php if(get_theme_mod('stylish_fashion_designer_footer_facebook_url') != '' || get_theme_mod('stylish_fashion_designer_footer_instagram_url') != '' || get_theme_mod('stylish_fashion_designer_footer_twitter_url') != '' || get_theme_mod('stylish_fashion_designer_footer_linkedin_url') != ''){ ?>
                <div class="socialicons mt-2">
                    <?php if(get_theme_mod('stylish_fashion_designer_footer_facebook_url') != ''){ ?>
                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_footer_facebook_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_footer_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html__('Facebook', 'stylish-fashion-designer'); ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('stylish_fashion_designer_footer_instagram_url') != ''){ ?>
                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_footer_instagram_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_footer_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html__('Instagram', 'stylish-fashion-designer'); ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('stylish_fashion_designer_footer_twitter_url') != ''){ ?>
                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_footer_twitter_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_footer_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html__('Twitter', 'stylish-fashion-designer'); ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('stylish_fashion_designer_footer_linkedin_url') != ''){ ?>
                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_footer_linkedin_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_footer_linkedin_icon','fa-brands fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html__('Youtube', 'stylish-fashion-designer'); ?></span></a>
                    <?php }?>
                </div>
            <?php }?>
        </div>
        </div>
        <div class="clear"></div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
