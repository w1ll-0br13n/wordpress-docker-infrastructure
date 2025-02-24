<?php
//about theme info
add_action( 'admin_menu', 'web_agency_elementor_gettingstarted' );
function web_agency_elementor_gettingstarted() {
	add_theme_page( esc_html__('Web Agency Elementor', 'web-agency-elementor'), esc_html__('Web Agency Elementor', 'web-agency-elementor'), 'edit_theme_options', 'web_agency_elementor_about', 'web_agency_elementor_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function web_agency_elementor_admin_theme_style() {
	wp_enqueue_style('web-agency-elementor-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('web-agency-elementor-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'web_agency_elementor_admin_theme_style');

// Changelog
if ( ! defined( 'WEB_AGENCY_ELEMENTOR_CHANGELOG_URL' ) ) {
    define( 'WEB_AGENCY_ELEMENTOR_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function web_agency_elementor_changelog_screen() {	
	global $wp_filesystem;
	$changelog_file = apply_filters( 'web_agency_elementor_changelog_file', WEB_AGENCY_ELEMENTOR_CHANGELOG_URL );
	if ( $changelog_file && is_readable( $changelog_file ) ) {
		WP_Filesystem();
		$changelog = $wp_filesystem->get_contents( $changelog_file );
		$changelog_list = web_agency_elementor_parse_changelog( $changelog );
		echo wp_kses_post( $changelog_list );
	}
}

function web_agency_elementor_parse_changelog( $content ) {
	$content = explode ( '== ', $content );
	$changelog_isolated = '';
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}
	$changelog_array = explode( '= ', $changelog_isolated );
	unset( $changelog_array[0] );
	$changelog = '<div class="changelog">';
	foreach ( $changelog_array as $value) {
		$value = preg_replace( '/\n+/', '</span><span>', $value );
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div><hr>';
		$changelog .= str_replace( '<span></span>', '', $value );
	}
	$changelog .= '</div>';
	return wp_kses_post( $changelog );
}

//guidline for about theme
function web_agency_elementor_mostrar_guide() { 
	//custom function about theme customizer
	$web_agency_elementor_return = add_query_arg( array()) ;
	$web_agency_elementor_theme = wp_get_theme( 'web-agency-elementor' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Web Agency Elementor', 'web-agency-elementor' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'web-agency-elementor' ); ?>: <?php echo esc_html($web_agency_elementor_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="web_agency_elementor_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'web-agency-elementor' ); ?></button>
				<button class="tablinks" onclick="web_agency_elementor_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'web-agency-elementor' ); ?></button>
				<button class="tablinks" onclick="web_agency_elementor_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'web-agency-elementor' ); ?></button>
			</div>
	
			<div id="wpelemento_importer_editor" class="tabcontent  open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$plugin_ins = Web_Agency_Elementor_Plugin_Activation_WPElemento_Importer::get_instance();
					$web_agency_elementor_actions = $plugin_ins->recommended_actions;
					?>
					<div class="web-agency-elementor-recommended-plugins ">
							<div class="web-agency-elementor-action-list">
								<?php if ($web_agency_elementor_actions): foreach ($web_agency_elementor_actions as $key => $web_agency_elementor_actionValue): ?>
										<div class="web-agency-elementor-action" id="<?php echo esc_attr($web_agency_elementor_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($web_agency_elementor_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($web_agency_elementor_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($web_agency_elementor_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'web-agency-elementor'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'web-agency-elementor'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'web-agency-elementor'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'web-agency-elementor'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'web-agency-elementor'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'web-agency-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'web-agency-elementor'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'web-agency-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'web-agency-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'web-agency-elementor'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'web-agency-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'web-agency-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'web-agency-elementor'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'web-agency-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'web-agency-elementor'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'web-agency-elementor' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','web-agency-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','web-agency-elementor'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','web-agency-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','web-agency-elementor'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php web_agency_elementor_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'web-agency-elementor'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Web Agency WordPress Theme', 'web-agency-elementor'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'web-agency-elementor'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'web-agency-elementor'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'web-agency-elementor'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'web-agency-elementor'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'web-agency-elementor' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'web-agency-elementor' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'web-agency-elementor' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'web-agency-elementor' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'web-agency-elementor' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'web-agency-elementor' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'web-agency-elementor'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( WEB_AGENCY_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'web-agency-elementor'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'web-agency-elementor' ); ?></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>