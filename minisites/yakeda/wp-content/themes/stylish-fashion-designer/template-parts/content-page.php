<?php
/**
 * The template part for displaying page content
 *
 * @package Stylish Fashion Designer
 * @subpackage stylish_fashion_designer
 * @since stylish_fashion_designer 1.0
 */
?>
<div class="page_content">
  <h1><?php the_title();?></h1>
  <?php if(has_post_thumbnail()) { ?>
    <div class="feature-box">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php } ?>
  <div class="new-text"><?php the_content(); ?></div>
  <?php
  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || '0' != get_comments_number() ) {
       comments_template();
  }?>
  <div class="clear"></div>
  <?php
    wp_link_pages( array(
      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'stylish-fashion-designer' ) . '</span>',
      'after'       => '</div>',
      'link_before' => '<span>',
      'link_after'  => '</span>',
      'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'stylish-fashion-designer' ) . ' </span>%',
      'separator'   => '<span class="screen-reader-text">, </span>',
    ) );
  ?>
</div>