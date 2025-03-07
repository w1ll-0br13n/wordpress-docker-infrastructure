<?php

// Customizer slider control
class Stylish_Fashion_Designer_Custom_Control extends WP_Customize_Control {
	public $type = 'slider_control';
	public function enqueue() {
		wp_enqueue_script( 'skyrocket-custom-controls-js', trailingslashit( esc_url(get_template_directory_uri()) ) . 'js/customizer.js', array( 'jquery', 'jquery-ui-core' ), '1.0', true );
		wp_enqueue_style( 'skyrocket-custom-controls-css', trailingslashit( esc_url(get_template_directory_uri()) ) . 'css/customizer.css', array(), '1.0', 'all' );
	}
	public function render_content() {
	?>
		<div class="slider-custom-control">
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><input type="number" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
			<div class="slider" slider-min-value="<?php echo esc_attr( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_attr( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_attr( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_attr( $this->value() ); ?>"></span>
		</div>
	<?php
	}
}