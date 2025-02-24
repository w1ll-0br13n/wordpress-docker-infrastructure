<?php

add_action( 'admin_menu', 'stylish_fashion_designer_gettingstarted' );
function stylish_fashion_designer_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'stylish-fashion-designer'), esc_html__('Theme Demo Import', 'stylish-fashion-designer'), 'edit_theme_options', 'stylish-fashion-designer-guide-page', 'stylish_fashion_designer_guide');
}

function stylish_fashion_designer_admin_theme_style() {
   wp_enqueue_style('stylish-fashion-designer-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'stylish_fashion_designer_admin_theme_style');

function stylish_fashion_designer_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Stylish Fashion Designer, you rock!', 'stylish-fashion-designer' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional website. Please Click on the link below to know the theme setup information.', 'stylish-fashion-designer' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=stylish-fashion-designer-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'stylish-fashion-designer' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'stylish_fashion_designer_notice');

/**
 * Theme Info Page
 */
function stylish_fashion_designer_guide() {

	// Theme info
	$stylish_fashion_designer_return = add_query_arg( array()) ;
	$stylish_fashion_designer_theme = wp_get_theme( 'stylish-fashion-designer' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
		    <div>
                <h2 class="tgmpa-notice-warning"></h2>
            </div>
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Stylish Fashion Designer', 'stylish-fashion-designer' ); ?></h2>
						<p><?php esc_html_e( 'Version: ', 'stylish-fashion-designer' ); ?><?php echo esc_html($stylish_fashion_designer_theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'stylish-fashion-designer' ); ?>
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'stylish-fashion-designer' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
							<div class="demo-content">
								<?php
									/* Demo Import */
									require get_parent_theme_file_path( '/inc/dashboard/demo-content.php' );
								?>
						    </div>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'stylish-fashion-designer'); ?></a>
						<a href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'stylish-fashion-designer'); ?></a>
						<a href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'stylish-fashion-designer'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Stylish Fashion Designer Theme', 'stylish-fashion-designer' ); ?></h2>
			<div class="row">
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		           	<p><?php esc_html_e( 'The Stylish Fashion Designer WordPress Theme is an elegant and modern solution crafted for fashion designers, boutique owners, and trendsetters looking to establish a strong online presence. Whether you specialize in kidswear design, activewear, sportswear fashion, or high fashion, this theme is tailored to showcase your creativity. Designed with stunning visual elements, it allows designers to display their fashion collections, designer shoes, luxury accessories, and bespoke fashion pieces in a sleek, professional manner. Featuring a minimalist yet sophisticated layout, this theme is ideal for creating a fashion portfolio website, an online fashion store, or a personal fashion brand platform. The theme’s intuitive design supports fashion blogging, trend forecasting, and fashion influencer marketing, making it an excellent choice for fashion startups and fashion consultancy firms. Integrated e-commerce functionality allows designers to sell custom fashion pieces, designer bags, and eco-friendly fashion products effortlessly. Additionally, its responsive and retina-ready design ensures a seamless browsing experience across all devices. With built-in fashion advertising, fashion networking, and digital fashion trends integration, designers can reach a global audience. Whether youre in urban fashion, vintage fashion, avant-garde fashion, or streetwear branding, this theme provides an adaptable platform for all. The inclusion of fashion craftsmanship, embroidery design, and textile technology features enables artisans to highlight their expertise. ', 'stylish-fashion-designer' ); ?><p><br>
				        	<ol>
							   <li><?php esc_html_e( 'Start','stylish-fashion-designer'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','stylish-fashion-designer'); ?></a> <?php esc_html_e( 'your website.','stylish-fashion-designer'); ?> </l>
							   <li><?php esc_html_e( 'Stylish Fashion Designer','stylish-fashion-designer'); ?> <a target="_blank" href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','stylish-fashion-designer'); ?></a> </li>
						   </ol>
	         </div>
	      </div>
				 <div class="col-md-5">
						<div class="pad-box">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
						</div>
						
	      </div>
      </div>
			  <div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','stylish-fashion-designer'); ?></h2>
				   	<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','stylish-fashion-designer'); ?></h3>
                    			<p class="pad-box-p"><?php esc_html_e( 'The Stylish Fashion Designer WordPress Theme is an elegant and modern solution crafted for fashion designers, boutique owners, and trendsetters looking to establish a strong online presence. Whether you specialize in kidswear design, activewear, sportswear fashion, or high fashion, this theme is tailored to showcase your creativity. Designed with stunning visual elements, it allows designers to display their fashion collections, designer shoes, luxury accessories, and bespoke fashion pieces in a sleek, professional manner. Featuring a minimalist yet sophisticated layout, this theme is ideal for creating a fashion portfolio website, an online fashion store, or a personal fashion brand platform. The theme’s intuitive design supports fashion blogging, trend forecasting, and fashion influencer marketing, making it an excellent choice for fashion startups and fashion consultancy firms. Integrated e-commerce functionality allows designers to sell custom fashion pieces, designer bags, and eco-friendly fashion products effortlessly. Additionally, its responsive and retina-ready design ensures a seamless browsing experience across all devices. With built-in fashion advertising, fashion networking, and digital fashion trends integration, designers can reach a global audience. Whether youre in urban fashion, vintage fashion, avant-garde fashion, or streetwear branding, this theme provides an adaptable platform for all. The inclusion of fashion craftsmanship, embroidery design, and textile technology features enables artisans to highlight their expertise. ', 'stylish-fashion-designer' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Features','stylish-fashion-designer'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using Customizer API','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Responsive design','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Site Icon and Logo option','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Header Images option','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Pagination option','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Demo Importer','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Main Slider','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Woocommerce Compatible','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Section to show categories','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Product Listing based on category','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Top Categories Section','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Best Seller Tab','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Testimonial with custom post type','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Promotional Banners','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Shortcodes for Testimonials','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Newsletter with the help of contact form 7.','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Well-sanitized as per WordPress standards.','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Typography for the complete website','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Global Color pallete','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Section specific Color pallete','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Instagram Section','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Allow setting site title, tagline, logo','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','stylish-fashion-designer'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','stylish-fashion-designer'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','stylish-fashion-designer'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','stylish-fashion-designer'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','stylish-fashion-designer'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','stylish-fashion-designer'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','stylish-fashion-designer'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','stylish-fashion-designer'); ?></a> <?php esc_html_e( 'your website.','stylish-fashion-designer'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','stylish-fashion-designer'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','stylish-fashion-designer'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','stylish-fashion-designer'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','stylish-fashion-designer'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( STYLISH_FASHION_DESIGNER_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'stylish-fashion-designer'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>
