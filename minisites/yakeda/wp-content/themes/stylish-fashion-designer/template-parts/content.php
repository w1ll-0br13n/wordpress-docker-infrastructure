<?php
/**
 * The template part for displaying content
 * @package Stylish Fashion Designer
 * @subpackage stylish_fashion_designer
 * @since 1.0
 */
?>

<?php $stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_post_layouts','Layout 2');
if($stylish_fashion_designer_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($stylish_fashion_designer_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($stylish_fashion_designer_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}