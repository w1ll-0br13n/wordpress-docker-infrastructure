<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); 

?>

<main role="main" id="skip_content">
  <?php do_action( 'stylish_fashion_designer_above_slider' ); ?>

  <?php 
    $stylish_fashion_designer_number = get_theme_mod('stylish_fashion_designer_slide_number');
    if($stylish_fashion_designer_number != ''){
  ?>
  <?php if ( get_theme_mod( 'stylish_fashion_designer_slider_hide', true ) ) { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleIndicators" class="carousel slide <?php if ( get_theme_mod('stylish_fashion_designer_slide_remove_fade',true) == 1 ) { ?> carousel-fade <?php } ?>" data-bs-ride="carousel" data-type="multi" data-interval="false">
        <div class="carousel-inner" role="listbox">
          <?php for ($stylish_fashion_designer_i=1; $stylish_fashion_designer_i<=$stylish_fashion_designer_number; $stylish_fashion_designer_i++) {?>
            <div <?php if($stylish_fashion_designer_i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if ( get_theme_mod('stylish_fashion_designer_slider_bg_image',true) != "" ) {?>
                <img class="slider-banner-img" src="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_slider_bg_image'.$stylish_fashion_designer_i)); ?>" alt="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_slide_title'.$stylish_fashion_designer_i, true)); ?>" title="#slidecaption<?php echo esc_html($stylish_fashion_designer_i); ?>">
              <?php } ?>
              <div class="container">
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <?php if(get_theme_mod('stylish_fashion_designer_slider_small_text'.$stylish_fashion_designer_i) != ''){ ?>
                      <p class="slider-small-text mb-2 text-capitalize"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_slider_small_text'.$stylish_fashion_designer_i)); ?></p>
                    <?php } ?>
                    <?php if(get_theme_mod('stylish_fashion_designer_slider_title'.$stylish_fashion_designer_i) != ''){ ?>
                      <h1 class="slider-title mb-4 pb-0 text-uppercase" class=""><?php echo esc_html(get_theme_mod('stylish_fashion_designer_slider_title'.$stylish_fashion_designer_i)); ?></h1>
                    <?php } ?>
                    <?php if ( get_theme_mod('stylish_fashion_designer_slider_btn_text'.$stylish_fashion_designer_i) != '' ) {?>
                      <div class ="slider-btn text-center pt-3">
                        <a href="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_slider_btn_url'.$stylish_fashion_designer_i,false));?>"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_slider_btn_text'.$stylish_fashion_designer_i));?></a>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_slider_previous_icon','fa-solid fa-angle-left')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','stylish-fashion-designer' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('stylish_fashion_designer_slider_next_icon','fa-solid fa-angle-right')); ?>" ></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','stylish-fashion-designer' );?></span>
        </a> 
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }}?>
  <?php do_action( 'stylish_fashion_designer_below_slider' ); ?>

  <!-- Products Section -->
  <?php if( get_theme_mod( 'stylish_fashion_designer_section_title') != '' || get_theme_mod( 'stylish_fashion_designer_section_small_text') != '') { ?>
    <section id="product-sec" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-8 col-12 align-self-center">
            <div class="heading-box">
              <?php if(get_theme_mod('stylish_fashion_designer_section_small_text') != ''){ ?>
                <p class="text-capitalize"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_section_small_text')); ?></p>
              <?php } ?>
              <?php if( get_theme_mod( 'stylish_fashion_designer_section_title') != '') { ?>
                <h2 class="section-heading pb-1 text-uppercase"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_section_title',''));?></h2>  
              <?php } ?>
              <div class="d-flex align-items-center scissors-box">
                <div class="line-left"></div>
                <i class="fa-solid fa-scissors"></i>
                <div class="line-right"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-12 align-self-center text-end product-sec-btn">
            <?php if(get_theme_mod('stylish_fashion_designer_product_btn_text') != ''){ ?>
              <a href="<?php echo esc_url(get_theme_mod('stylish_fashion_designer_product_btn_url')); ?>" class="product-btn text-capitalize"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_product_btn_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('stylish_fashion_designer_product_btn_text')); ?></span></a>
            <?php }?>
          </div>
        </div>
        <div class="row">
          <?php if ( class_exists( 'WooCommerce' ) && get_theme_mod('stylish_fashion_designer_product_page') != '' ) {?>
            <?php $stylish_fashion_designer_args = array(
              'post_type' => 'product',
              'product_cat' => get_theme_mod('stylish_fashion_designer_product_page'),
              'order' => 'ASC',
              'hide_empty' => 0,
              'posts_per_page' => 4,
            );
            $stylish_fashion_designer_loop = new WP_Query( $stylish_fashion_designer_args );
              while ( $stylish_fashion_designer_loop->have_posts() ) : $stylish_fashion_designer_loop->the_post(); global $product; ?>
              <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-12 pt-0 mt-4 pb-4 px-3 product-main-div">
                <div class="main-product-section mx-md-0 mx-lg-0 mx-2">
                  <div class="position-relative">
                    <div class="product-img">
                      <?php if (has_post_thumbnail( $stylish_fashion_designer_loop->post->ID )) echo get_the_post_thumbnail($stylish_fashion_designer_loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                    </div>
                    <div class="cart-btn">
                      <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $stylish_fashion_designer_loop->post, $product ); } ?>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3 class="product-heading text-capitalize pb-2"><a href="<?php echo esc_url(get_permalink( $stylish_fashion_designer_loop->post->ID )); ?>"><?php the_title(); ?></a></h3>
                    <div class="rating-box pt-2">
                      <?php 
                        if( $product->is_type('simple') && $product->get_average_rating() > 0 ) { 
                          woocommerce_template_loop_rating(); 
                          echo '<div class="border-divider"></div>';  
                        } 
                      ?>
                      <p class="pro-price"><?php if ( $product->is_on_sale() ) {
                        $stylish_fashion_designer_sale_price = $product->get_sale_price();
                        echo wc_price( $stylish_fashion_designer_sale_price );
                      } else {
                        echo wc_price( $product->get_regular_price() );
                      } ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <div class="container front-page-content mt-4">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>