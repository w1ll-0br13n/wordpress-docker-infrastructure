<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $stylish_fashion_designer_demo_import_completed = get_option('stylish_fashion_designer_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($stylish_fashion_designer_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'stylish-fashion-designer') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="site-btn" target="_blank">' . esc_html__('VIEW SITE', 'stylish-fashion-designer') . '</a></span>';
        }
		
        if (isset($_POST['submit'])) {

            if (!is_plugin_active('woocommerce/woocommerce.php')) {
                // Install the plugin if it doesn't exist
                $stylish_fashion_designer_plugin_slug = 'woocommerce';
                $stylish_fashion_designer_plugin_file = 'woocommerce/woocommerce.php';
  
                // Check if plugin is installed
                $stylish_fashion_designer_installed_plugins = get_plugins();
                if (!isset($stylish_fashion_designer_installed_plugins[$stylish_fashion_designer_plugin_file])) {
                    include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                    include_once(ABSPATH . 'wp-admin/includes/file.php');
                    include_once(ABSPATH . 'wp-admin/includes/misc.php');
                    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
  
                    // Install the plugin
                    $stylish_fashion_designer_upgrader = new Plugin_Upgrader();
                    $stylish_fashion_designer_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
                }
                // Activate the plugin
                activate_plugin($stylish_fashion_designer_plugin_file);
            }

            // ------- Create Nav Menu --------
            $stylish_fashion_designer_menuname = 'Main Menus';
            $stylish_fashion_designer_bpmenulocation = 'primary';
            $stylish_fashion_designer_menu_exists = wp_get_nav_menu_object($stylish_fashion_designer_menuname);

            if (!$stylish_fashion_designer_menu_exists) {
                $stylish_fashion_designer_menu_id = wp_create_nav_menu($stylish_fashion_designer_menuname);

                // Create Home Page
                $stylish_fashion_designer_home_title = 'Home';
                $stylish_fashion_designer_home = array(
                    'post_type' => 'page',
                    'post_title' => $stylish_fashion_designer_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $stylish_fashion_designer_home_id = wp_insert_post($stylish_fashion_designer_home);
                // Assign Home Page Template
                add_post_meta($stylish_fashion_designer_home_id, '_wp_page_template', 'page-template/home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $stylish_fashion_designer_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($stylish_fashion_designer_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'stylish-fashion-designer'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $stylish_fashion_designer_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $stylish_fashion_designer_about_title = 'About Us';
                $stylish_fashion_designer_about_content = 'Explore all the about we have on our website. Find information about our services, company, and more.
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more contactly with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $stylish_fashion_designer_about = array(
                    'post_type' => 'page',
                    'post_title' => $stylish_fashion_designer_about_title,
                    'post_content' => $stylish_fashion_designer_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about'
                );
                $stylish_fashion_designer_about_id = wp_insert_post($stylish_fashion_designer_about);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($stylish_fashion_designer_menu_id, 0, array(
                    'menu-item-title' => __('about', 'stylish-fashion-designer'),
                    'menu-item-classes' => 'about',
                    'menu-item-url' => home_url('/about/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $stylish_fashion_designer_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $stylish_fashion_designer_contact_title = 'Contact Us';
                $stylish_fashion_designer_contact_content = 'Explore all the contact we have on our website. Find information about our services, company, and more.
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more contactly with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $stylish_fashion_designer_contact = array(
                    'post_type' => 'page',
                    'post_title' => $stylish_fashion_designer_contact_title,
                    'post_content' => $stylish_fashion_designer_contact_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'contact'
                );
                $stylish_fashion_designer_contact_id = wp_insert_post($stylish_fashion_designer_contact);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($stylish_fashion_designer_menu_id, 0, array(
                    'menu-item-title' => __('Contact', 'stylish-fashion-designer'),
                    'menu-item-classes' => 'contact',
                    'menu-item-url' => home_url('/contact/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $stylish_fashion_designer_contact_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));


                // Set the menu location if it's not already set
                if (!has_nav_menu($stylish_fashion_designer_bpmenulocation)) {
                    $stylish_fashion_designer_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($stylish_fashion_designer_locations)) {
                        $stylish_fashion_designer_locations = array();
                    }
                    $stylish_fashion_designer_locations[$stylish_fashion_designer_bpmenulocation] = $stylish_fashion_designer_menu_id;
                    set_theme_mod('nav_menu_locations', $stylish_fashion_designer_locations);
                }
            }

            // Assign the menu to the theme location
            set_theme_mod('nav_menu_locations', [$stylish_fashion_designer_bpmenulocation => $stylish_fashion_designer_menu_id]);

                              
            // Set the demo import completion flag
    		update_option('stylish_fashion_designer_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'stylish-fashion-designer') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'stylish-fashion-designer') . '</a></span>';
            //end

            //Header 
            set_theme_mod( 'stylish_fashion_designer_phone_text', 'Phone' );
            set_theme_mod( 'stylish_fashion_designer_phone_number', '123-456-7890' );
            set_theme_mod( 'stylish_fashion_designer_email_address_text', 'Mail' );
            set_theme_mod( 'stylish_fashion_designer_email_address1', 'xyz123@example.com' );

            //Slider Section
            $stylish_fashion_designer_slider_data = array(
                array(
                    'bg_image' => get_template_directory_uri() . '/images/slider1.png',
                    'small_text' => 'Hello Welcome To Fashion Designer',
                    'title' => 'EMBRACE YOUR STYLE',
                    'btn_text' => 'Read More',
                    'btn_url' => '#',
                ),
                array(
                    'bg_image' => get_template_directory_uri() . '/images/slider2.png',
                    'small_text' => 'Crafting Style, One Stitch at a Time',
                    'title' => 'Express Yourself in Fashion',
                    'btn_text' => 'Read More',
                    'btn_url' => '#',
                ),
                array(
                    'bg_image' => get_template_directory_uri() . '/images/slider3.png',
                    'small_text' => 'Elevate Your Style with Fashion Designing',
                    'title' => 'Fashion Your Identity',
                    'btn_text' => 'Read More',
                    'btn_url' => '#',
                ),
            );
        
            set_theme_mod('stylish_fashion_designer_slide_number', count($stylish_fashion_designer_slider_data));
        
            foreach ($stylish_fashion_designer_slider_data as $stylish_fashion_designer_index => $stylish_fashion_designer_data) {
                $stylish_fashion_designer_i = $stylish_fashion_designer_index + 1;
        
                set_theme_mod("stylish_fashion_designer_slider_bg_image$stylish_fashion_designer_i", $stylish_fashion_designer_data['bg_image']);
                set_theme_mod("stylish_fashion_designer_slider_small_text$stylish_fashion_designer_i", $stylish_fashion_designer_data['small_text']);
                set_theme_mod("stylish_fashion_designer_slider_title$stylish_fashion_designer_i", $stylish_fashion_designer_data['title']);
                set_theme_mod("stylish_fashion_designer_slider_btn_text$stylish_fashion_designer_i", $stylish_fashion_designer_data['btn_text']);
                set_theme_mod("stylish_fashion_designer_slider_btn_url$stylish_fashion_designer_i", $stylish_fashion_designer_data['btn_url']);
            }
            
            //Products Section
            set_theme_mod( 'stylish_fashion_designer_section_small_text', 'Online Shop' );
            set_theme_mod( 'stylish_fashion_designer_section_title', 'OUR PRODUCT' );
            set_theme_mod( 'stylish_fashion_designer_product_btn_text', 'View All Product' );
            set_theme_mod( 'stylish_fashion_designer_product_btn_url', '#' );

            set_theme_mod('stylish_fashion_designer_product_page', 'productcategory1');

            // Define product category names, product titles, and tags
            $stylish_fashion_designer_category_names = array('productcategory1');
            $stylish_fashion_designer_title_array = array(
                array("Product Title 1", "Product Title 2", "Product Title 3", "Product Title 4")
            );
            
            foreach ($stylish_fashion_designer_category_names as $stylish_fashion_designer_index => $stylish_fashion_designer_category_name) {
                // Create or retrieve the product category term ID
                $stylish_fashion_designer_term = term_exists($stylish_fashion_designer_category_name, 'product_cat');
                
                // If the term doesn't exist, create it
                if ($stylish_fashion_designer_term === 0 || $stylish_fashion_designer_term === null) {
                    $stylish_fashion_designer_term = wp_insert_term($stylish_fashion_designer_category_name, 'product_cat');
                }
                
                // Check for errors in category creation
                if (is_wp_error($stylish_fashion_designer_term)) {
                    error_log('Error creating category: ' . $stylish_fashion_designer_term->get_error_message());
                    continue; // Skip to the next iteration if category creation fails
                }
            
                // Retrieve the category ID for assignment
                $stylish_fashion_designer_term_id = $stylish_fashion_designer_term['term_id'];
            
                // Loop to create 4 products for each category
                for ($stylish_fashion_designer_i = 0; $stylish_fashion_designer_i < 4; $stylish_fashion_designer_i++) {
                    // Create product content
                    $stylish_fashion_designer_title = $stylish_fashion_designer_title_array[$stylish_fashion_designer_index][$stylish_fashion_designer_i];
                    $stylish_fashion_designer_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.';
            
                    // Create product post object
                    $stylish_fashion_designer_my_post = array(
                        'post_title'    => wp_strip_all_tags($stylish_fashion_designer_title),
                        'post_content'  => $stylish_fashion_designer_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'product', // Post type set to 'product'
                    );
            
                    // Insert the product into the database
                    $stylish_fashion_designer_post_id = wp_insert_post($stylish_fashion_designer_my_post);
            
                    // Check for errors in product creation
                    if (is_wp_error($stylish_fashion_designer_post_id)) {
                        error_log('Error creating product: ' . $stylish_fashion_designer_post_id->get_error_message());
                        continue; // Skip to the next product if creation fails
                    }
            
                    // Assign the category to the product
                    wp_set_object_terms($stylish_fashion_designer_post_id, array($stylish_fashion_designer_term_id), 'product_cat');
                    
                    // Set product as simple product and assign price
                    update_post_meta($stylish_fashion_designer_post_id, '_regular_price', 250.00); // Assign regular price
                    update_post_meta($stylish_fashion_designer_post_id, '_price', 200.00); // Assign the sale price (same as regular price for simplicity)
            
                    // Handle the featured image using media_sideload_image
                    $stylish_fashion_designer_image_url = get_template_directory_uri() . '/images/product' . ($stylish_fashion_designer_i + 1) . '.png';
                    $stylish_fashion_designer_image_id = media_sideload_image($stylish_fashion_designer_image_url, $stylish_fashion_designer_post_id, null, 'id');
            
                    // Check if there was an error downloading the image
                    if (is_wp_error($stylish_fashion_designer_image_id)) {
                        error_log('Error downloading image: ' . $stylish_fashion_designer_image_id->get_error_message());
                        continue; // Skip to the next product if image download fails
                    }
            
                    // Assign featured image to product
                    set_post_thumbnail($stylish_fashion_designer_post_id, $stylish_fashion_designer_image_id);
                }
            }       
              
            //Copyright Text
            set_theme_mod( 'stylish_fashion_designer_footer_text', 'By Buywptemplate' );

        }
    ?>

    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=stylish-fashion-designer-guide-page" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('stylish_fashion_designer_demo_import_completed')) : ?>
        <form method="post">
        <p><?php esc_html_e('Click the below run importer button to import demo content','stylish-fashion-designer'); ?></p>
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','stylish-fashion-designer'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
