<?php
/**
 * The Sidebar containing the main widget areas.
 * @package Stylish Fashion Designer
 */
?>
<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="search" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'firstsidebar', 'stylish-fashion-designer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Search', 'stylish-fashion-designer' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="categories-dropdown" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'secondsidebar', 'stylish-fashion-designer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Dropdown Categories', 'stylish-fashion-designer' ); ?></h3>
            <ul>
                <?php wp_dropdown_categories('title_li=');  ?>
            </ul>
        </aside>
        <aside role="complementary" aria-label="<?php esc_attr_e( 'thirdsidebar', 'stylish-fashion-designer' ); ?>" id="archives" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'stylish-fashion-designer' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside role="complementary" aria-label="<?php esc_attr_e( 'forthsidebar', 'stylish-fashion-designer' ); ?>" id="meta" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'stylish-fashion-designer' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="tag-cloud" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'fifthsidebar', 'stylish-fashion-designer' ); ?>">
            <h3 class="widget-title"><?php esc_html_e( 'Tag Cloud', 'stylish-fashion-designer' ); ?></h3>
            <ul>
                <?php wp_tag_cloud('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>  
</div>