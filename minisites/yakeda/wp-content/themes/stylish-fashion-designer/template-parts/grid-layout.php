<?php
/**
 * The template part for displaying grid layout
 * @package Stylish Fashion Designer
 * @subpackage stylish_fashion_designer
 * @since 1.0
 */
?>

<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="box-image">
      <?php if( get_theme_mod( 'stylish_fashion_designer_post_featured_image',true) != '') { ?>
        <div class="box-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
    </div>
    <div class="mainbox p-4">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <div class="new-text">
      <?php $stylish_fashion_designer_excerpt = get_the_excerpt(); echo esc_html( stylish_fashion_designer_string_limit_words( $stylish_fashion_designer_excerpt, esc_attr(get_theme_mod('stylish_fashion_designer_post_excerpt_number','30')))); ?>  <?php echo esc_html( get_theme_mod('stylish_fashion_designer_post_discription_suffix','[...]') ); ?>
      </div> 
      <?php if( get_theme_mod('stylish_fashion_designer_button_text','Read More') != ''){ ?>
        <div class="postbtn mt-4 text-start">
          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_button_text','Read More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </article>
</div>