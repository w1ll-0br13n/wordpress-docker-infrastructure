<?php
/**
 * The template part for displaying content
 * @package Stylish Fashion Designer
 * @subpackage stylish_fashion_designer
 * @since 1.0
 */

$stylish_fashion_designer_archive_year  = get_the_time('Y'); 
$stylish_fashion_designer_archive_month = get_the_time('m'); 
$stylish_fashion_designer_archive_day   = get_the_time('d'); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="layout1 text-center">
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if( get_theme_mod('stylish_fashion_designer_metafields_date', true) != '' || get_theme_mod('stylish_fashion_designer_metafields_author', true) != '' || get_theme_mod('stylish_fashion_designer_metafields_comment', true) != '' || get_theme_mod('stylish_fashion_designer_metafields_time', true) != '' ||  get_theme_mod('stylish_fashion_designer_display_post_date', true) != '' || get_theme_mod('stylish_fashion_designer_display_post_author', true) != '' || get_theme_mod('stylish_fashion_designer_display_post_comment', true) != '' || get_theme_mod('stylish_fashion_designer_display_post_time', true) != ''){ ?>
      <div class="metabox mb-3">
        <?php if( get_theme_mod( 'stylish_fashion_designer_metafields_date',true) != '' || get_theme_mod( 'stylish_fashion_designer_display_post_date',true) != '') { ?>
          <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_post_date_icon','far fa-calendar-alt')); ?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $stylish_fashion_designer_archive_year, $stylish_fashion_designer_archive_month, $stylish_fashion_designer_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="ms-1"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_blog_post_meta_seperator','|') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'stylish_fashion_designer_metafields_author',true) != '' || get_theme_mod( 'stylish_fashion_designer_display_post_author',true) != '') { ?>
          <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_post_author_icon','fas fa-user')); ?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span><span class="ms-1"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_blog_post_meta_seperator','|') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'stylish_fashion_designer_metafields_comment',true) != '' || get_theme_mod( 'stylish_fashion_designer_display_post_comment',true) != '') { ?>
          <span class="entry-comments mx-1"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_post_comment_icon','fas fa-comments')); ?> me-1"></i> <?php comments_number( __('0 Comment', 'stylish-fashion-designer'), __('0 Comments', 'stylish-fashion-designer'), __('% Comments', 'stylish-fashion-designer') ); ?></span><span class="ms-1"><?php echo esc_html( get_theme_mod('stylish_fashion_designer_blog_post_meta_seperator','|') ); ?></span>
        <?php }?>
        <?php if( get_theme_mod( 'stylish_fashion_designer_metafields_time',true) != '' || get_theme_mod( 'stylish_fashion_designer_display_post_time',true) != '') { ?>
          <span class="entry-time mx-1"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_post_time_icon','fas fa-clock')); ?> me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
        <?php echo esc_html (stylish_fashion_designer_edit_link()); ?>
      </div>
    <?php }?>
    <?php $stylish_fashion_designer_postimg_lay = get_theme_mod( 'stylish_fashion_designer_post_featured_image','Image');
    if($stylish_fashion_designer_postimg_lay == 'Image'){ ?>
      <div class="box-image">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php }
    if($stylish_fashion_designer_postimg_lay == 'Color'){ ?>
      <div class="post-color text-center"></div>
    <?php }?>
    <div class="new-text mt-3">
      <p>
        <?php $stylish_fashion_designer_theme_lay = get_theme_mod( 'stylish_fashion_designer_content_settings','Excerpt');
        if($stylish_fashion_designer_theme_lay == 'Content'){ ?>
          <?php the_content(); ?>
        <?php }
        if($stylish_fashion_designer_theme_lay == 'Excerpt'){ ?>
          <?php if(get_the_excerpt()) { ?>
            <?php $stylish_fashion_designer_excerpt = get_the_excerpt(); echo esc_html( stylish_fashion_designer_string_limit_words( $stylish_fashion_designer_excerpt, esc_attr(get_theme_mod('stylish_fashion_designer_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('stylish_fashion_designer_post_discription_suffix','[...]') ); ?>
          <?php }?>
        <?php }?>
      </p>
    </div>
    <?php if( get_theme_mod('stylish_fashion_designer_button_text','Read More') != ''){ ?>
      <div class="postbtn text-center mt-4">
        <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_button_text','Read More'));?></span></a>
      </div>
    <?php }?>
  </div>
</article>