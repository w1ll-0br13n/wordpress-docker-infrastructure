<?php
/**
 * The template for displaying Comments.
 * @package Stylish Fashion Designer
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area mt-5">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title pt-5">
		    <?php
		    $stylish_fashion_designer_comments_number = get_comments_number();
		    if ( 1 === $stylish_fashion_designer_comments_number ) {

		        /* translators: %s: post title */
		        printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'stylish-fashion-designer' ), esc_html(get_the_title()) );

		    } else {

		        printf(
		       		 esc_html(
				      	/* translators: 1: number of comments, 2: post title */
				     	_nx( 
				          	'%1$s thought on &ldquo;%2$s&rdquo;',
				          	'%1$s thoughts on &ldquo;%2$s&rdquo;',
				          	$stylish_fashion_designer_comments_number,
				          	'comments title',
				          	'stylish-fashion-designer'
				       	)
				   	),
				   	esc_html (number_format_i18n( $stylish_fashion_designer_comments_number ) ),
				   	esc_html(get_the_title())
		        );
		    }
		    ?>
        </h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol>
		
		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'stylish-fashion-designer' ); ?></p>
	<?php endif; ?>

	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'title_reply' => esc_html(get_theme_mod('stylish_fashion_designer_title_comment_form',__('Leave a Reply','stylish-fashion-designer' )) ),
			'label_submit' => esc_html(get_theme_mod('stylish_fashion_designer_comment_form_button_content',__('Post Comment','stylish-fashion-designer' )) ),
		) );
	?>
</div>