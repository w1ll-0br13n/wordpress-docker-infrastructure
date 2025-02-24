<div class="<?php sunbrake_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container sunbrake-index__k__QtetVXHJ9I-container sunbrake-local-782-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner sunbrake-index__k__QtetVXHJ9I-inner sunbrake-local-782-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align sunbrake-index__k__QtetVXHJ9I-align sunbrake-local-782-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container sunbrake-index__k__iE82N7AEu-container sunbrake-local-783-container h-aspect-ratio--4-3 <?php sunbrake_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if(has_post_thumbnail()): ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image sunbrake-index__k__iE82N7AEu-image sunbrake-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner sunbrake-index__k__iE82N7AEu-inner sunbrake-local-783-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align sunbrake-index__k__iE82N7AEu-align sunbrake-local-783-align h-y-container align-self-lg-start align-self-md-start align-self-start"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link sunbrake-index__k__tstzQ_uACq-link sunbrake-local-784-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container sunbrake-index__k__tstzQ_uACq-container sunbrake-local-784-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text sunbrake-index__k__-hWWlFyCEF-text sunbrake-local-785-text" data-kubio="kubio/post-excerpt">
				<?php sunbrake_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing sunbrake-index__k__7TrnS1SQ70-spacing sunbrake-local-786-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer sunbrake-index__k__7TrnS1SQ70-outer sunbrake-local-786-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link sunbrake-index__k__7TrnS1SQ70-link sunbrake-local-786-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text sunbrake-index__k__7TrnS1SQ70-text sunbrake-local-786-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'sunbrake'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
