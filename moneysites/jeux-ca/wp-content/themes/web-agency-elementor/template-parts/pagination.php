<?php if(get_theme_mod('web_agency_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'web-agency-elementor' ),
			'next_text' => esc_html__( 'Next page', 'web-agency-elementor' ),
		) );
	?>		
<?php endif; ?>