<?php
$stylish_fashion_designer_archive_year  = get_the_time('Y'); 
$stylish_fashion_designer_archive_month = get_the_time('m'); 
$stylish_fashion_designer_archive_day   = get_the_time('d');
?>
<?php $stylish_fashion_designer_related_posts = stylish_fashion_designer_related_posts();
if(get_theme_mod('stylish_fashion_designer_related_enable_disable',true)==1){ ?>
<?php if ( $stylish_fashion_designer_related_posts->have_posts() ): ?>
    <div class="related-posts">
        <h3 class="mb-3"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_related_title',__('Related Post','stylish-fashion-designer')));?></h3>
        <div class="row">
            <?php while ( $stylish_fashion_designer_related_posts->have_posts() ) : $stylish_fashion_designer_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-inner-box mb-3 p-3">
                        <?php if (get_theme_mod('stylish_fashion_designer_related_post_featured_image', true) && has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="mb-2"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="metabox mb-3">
                            <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_post_date_icon','far fa-calendar-alt')); ?> me-1 my-2"></i> <a href="<?php echo esc_url( get_day_link( $stylish_fashion_designer_archive_year, $stylish_fashion_designer_archive_month, $stylish_fashion_designer_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                            <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_post_author_icon','fas fa-user')); ?> me-1 my-2"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                        </div>
                        <p class="mb-4"><?php $stylish_fashion_designer_excerpt = get_the_excerpt(); echo esc_html( stylish_fashion_designer_string_limit_words( $stylish_fashion_designer_excerpt, esc_attr(get_theme_mod('stylish_fashion_designer_related_post_excerpt_number','15')))); ?> <?php echo esc_html( get_theme_mod('stylish_fashion_designer_post_discription_suffix','[...]') ); ?></p>
                        <?php if( get_theme_mod('stylish_fashion_designer_button_text','Read More') != ''){ ?>
                            <div class="postbtn mt-2 text-start">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_button_text','Read More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>