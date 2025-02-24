<?php
/**
 * The template for displaying search forms in Stylish Fashion Designer
 * @package Stylish Fashion Designer
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'stylish-fashion-designer' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('stylish_fashion_designer_search_placeholder', __('Search', 'stylish-fashion-designer')) ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button','stylish-fashion-designer' ); ?>">
</form>