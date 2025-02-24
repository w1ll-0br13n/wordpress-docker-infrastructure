<div id="post-<?php the_ID(); ?>" class=" <?php get_post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer sunbrake-single__k__single-lAFSH8Xo9x-outer sunbrake-local-1122-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner sunbrake-single__k__single-lAFSH8Xo9x-inner sunbrake-local-1122-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-single__k__single-baLWB4dRKjp-container sunbrake-local-1123-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-2" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner sunbrake-single__k__single-baLWB4dRKjp-inner sunbrake-local-1123-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-2">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-single__k__single-kxeqsSpdy-n-container sunbrake-local-1124-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner sunbrake-single__k__single-kxeqsSpdy-n-inner sunbrake-local-1124-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-2 h-px-md-3 v-inner-md-2 h-px-3 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align sunbrake-single__k__single-kxeqsSpdy-n-align sunbrake-local-1124-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container sunbrake-single__k__iE82N7AEu-container sunbrake-local-1125-container h-aspect-ratio--4-3 <?php sunbrake_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image sunbrake-single__k__iE82N7AEu-image sunbrake-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner sunbrake-single__k__iE82N7AEu-inner sunbrake-local-1125-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align sunbrake-single__k__iE82N7AEu-align sunbrake-local-1125-align h-y-container align-self-lg-end align-self-md-end align-self-end"></div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer sunbrake-single__k__in2mlwF4a-metaDataContainer sunbrake-local-1126-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
								<span class="metadata-item">
									<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
										<span class="h-svg-icon">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="user" viewBox="0 0 512 545.5">
												<path d="M240 112c61.666 0 112 50.334 112 112 0 38.54-19.698 72.834-49.5 93 57.074 24.477 97.5 81.1 97.5 147h-32c0-70.89-57.11-128-128-128s-128 57.11-128 128H80c0-65.9 40.426-122.522 97.5-147-29.802-20.166-49.5-54.46-49.5-93 0-61.666 50.334-112 112-112zm0 32c-44.372 0-80 35.628-80 80s35.628 80 80 80 80-35.628 80-80-35.628-80-80-80z" /></svg>
											</span>
											<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
										</a>
									</span>
									<span class="metadata-item">
										<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
											<span class="h-svg-icon">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="calendar" viewBox="0 0 512 545.5">
													<path d="M144 96h32v16h160V96h32v16h64v352H80V112h64V96zm-32 48v32h288v-32h-32v16h-32v-16H176v16h-32v-16h-32zm0 64v224h288V208H112zm96 32h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32z" /></svg>
												</span>
												<?php echo esc_html(get_the_date('F j, Y')); ?>
											</a>
										</span>
										<span class="metadata-item">
											<a href="">
												<span class="h-svg-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="clock-o" viewBox="0 0 512 545.5">
														<path d="M256 96c105.85 0 192 86.15 192 192s-86.15 192-192 192S64 393.85 64 288 150.15 96 256 96zm0 32c-88.555 0-160 71.445-160 160s71.445 160 160 160 160-71.445 160-160-71.445-160-160-160zm-16 32h32v112h80v32H240V160z" /></svg>
													</span>
													<?php echo esc_html(get_the_time()); ?>
												</a>
											</span>
										</div>
										<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-single__k__single-SbdKxHs2YI-container sunbrake-local-1127-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
											<div class="position-relative wp-block-kubio-row__inner sunbrake-single__k__single-SbdKxHs2YI-inner sunbrake-local-1127-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
												<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-single__k__single-3VGwAjm9cX-container sunbrake-local-1128-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
													<div class="position-relative wp-block-kubio-column__inner sunbrake-single__k__single-3VGwAjm9cX-inner sunbrake-local-1128-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
														<div class="position-relative wp-block-kubio-column__align sunbrake-single__k__single-3VGwAjm9cX-align sunbrake-local-1128-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
															<?php the_content(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-single__k__single-1uGRU27HVz-container sunbrake-local-1129-container gutters-row-lg-0 gutters-row-v-lg-1 gutters-row-md-0 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/row">
											<div class="position-relative wp-block-kubio-row__inner sunbrake-single__k__single-1uGRU27HVz-inner sunbrake-local-1129-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-1 gutters-col-md-0 gutters-col-v-md-1 gutters-col-0 gutters-col-v-1">
												<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-single__k__single-K4Akm2YNqS-container sunbrake-local-1130-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
													<div class="position-relative wp-block-kubio-column__inner sunbrake-single__k__single-K4Akm2YNqS-inner sunbrake-local-1130-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-3 h-px-md-0 v-inner-md-3 h-px-0 v-inner-3">
														<div class="position-relative wp-block-kubio-column__align sunbrake-single__k__single-K4Akm2YNqS-align sunbrake-local-1130-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
															<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text sunbrake-single__k__single-1pwRcGAnh-text sunbrake-local-1131-text" data-kubio="kubio/text">
																<?php esc_html_e('TAGS', 'sunbrake'); ?>
															</p>
															<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container sunbrake-single__k__single-tlSt_AyBi-container sunbrake-local-1132-container kubio-post-tags-container" data-kubio="kubio/post-tags">
																<div class="position-relative wp-block-kubio-post-tags__placeholder sunbrake-single__k__single-tlSt_AyBi-placeholder sunbrake-local-1132-placeholder kubio-post-tags-placeholder"></div>
																<div class="position-relative wp-block-kubio-post-tags__tags sunbrake-single__k__single-tlSt_AyBi-tags sunbrake-local-1132-tags">
																	<?php sunbrake_tags_list(__('No tags', 'sunbrake')); ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-single__k__oBH0ABWoeL-container sunbrake-local-1133-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
											<div class="position-relative wp-block-kubio-row__inner sunbrake-single__k__oBH0ABWoeL-inner sunbrake-local-1133-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
												<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-single__k__wETEbWZUNc-container sunbrake-local-1134-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
													<div class="position-relative wp-block-kubio-column__inner sunbrake-single__k__wETEbWZUNc-inner sunbrake-local-1134-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
														<div class="position-relative wp-block-kubio-column__align sunbrake-single__k__wETEbWZUNc-align sunbrake-local-1134-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
															<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text sunbrake-single__k__single-1pwRcGAnh-text sunbrake-local-1135-text" data-kubio="kubio/text">
																<?php esc_html_e('Categories', 'sunbrake'); ?>
															</p>
															<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container sunbrake-single__k__up5pQ_Cww-container sunbrake-local-1136-container kubio-post-categories-container" data-kubio="kubio/post-categories">
																<div class="position-relative wp-block-kubio-post-categories__placeholder sunbrake-single__k__up5pQ_Cww-placeholder sunbrake-local-1136-placeholder kubio-post-categories-placeholder"></div>
																<div class="position-relative wp-block-kubio-post-categories__tags sunbrake-single__k__up5pQ_Cww-tags sunbrake-local-1136-tags">
																	<?php sunbrake_categories_list(__('No category', 'sunbrake')); ?>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php if(sunbrake_has_pagination()): ?>
										<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container sunbrake-single__k__single-nqLiVZCaYo-container sunbrake-local-1137-container gutters-row-lg-0 gutters-row-v-lg-3 gutters-row-md-0 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-pagination">
											<div class="position-relative wp-block-kubio-query-pagination__inner sunbrake-single__k__single-nqLiVZCaYo-inner sunbrake-local-1137-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-3 gutters-col-md-0 gutters-col-v-md-3 gutters-col-0 gutters-col-v-3">
												<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-single__k__single-3ndM77FkZV-container sunbrake-local-1138-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
													<div class="position-relative wp-block-kubio-column__inner sunbrake-single__k__single-3ndM77FkZV-inner sunbrake-local-1138-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
														<div class="position-relative wp-block-kubio-column__align sunbrake-single__k__single-3ndM77FkZV-align sunbrake-local-1138-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
															<?php if(sunbrake_has_pagination_button(true)): ?>
															<div class="position-relative wp-block-kubio-pagination-nav-button__spacing sunbrake-single__k__ELgmeRXRD--spacing sunbrake-local-1139-spacing">
																<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer sunbrake-single__k__ELgmeRXRD--outer sunbrake-local-1139-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
																	<a class="position-relative wp-block-kubio-pagination-nav-button__link sunbrake-single__k__ELgmeRXRD--link sunbrake-local-1139-link h-w-100 h-global-transition" href="<?php sunbrake_get_navigation_button_link(true); ?>">
																		<span class="position-relative wp-block-kubio-pagination-nav-button__text sunbrake-single__k__ELgmeRXRD--text sunbrake-local-1139-text kubio-inherit-typography">
																			<?php esc_html_e('Previous', 'sunbrake'); ?>
																		</span>
																	</a>
																</span>
															</div>
															<?php endif; ?>
														</div>
													</div>
												</div>
												<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-single__k__single-mMPMCQqWfs-container sunbrake-local-1140-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
													<div class="position-relative wp-block-kubio-column__inner sunbrake-single__k__single-mMPMCQqWfs-inner sunbrake-local-1140-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
														<div class="position-relative wp-block-kubio-column__align sunbrake-single__k__single-mMPMCQqWfs-align sunbrake-local-1140-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
															<?php if(sunbrake_has_pagination_button()): ?>
															<div class="position-relative wp-block-kubio-pagination-nav-button__spacing sunbrake-single__k__ELgmeRXRD--spacing sunbrake-local-1141-spacing">
																<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer sunbrake-single__k__ELgmeRXRD--outer sunbrake-local-1141-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
																	<a class="position-relative wp-block-kubio-pagination-nav-button__link sunbrake-single__k__ELgmeRXRD--link sunbrake-local-1141-link h-w-100 h-global-transition" href="<?php sunbrake_get_navigation_button_link(); ?>">
																		<span class="position-relative wp-block-kubio-pagination-nav-button__text sunbrake-single__k__ELgmeRXRD--text sunbrake-local-1141-text kubio-inherit-typography">
																			<?php esc_html_e('Next', 'sunbrake'); ?>
																		</span>
																	</a>
																</span>
															</div>
															<?php endif; ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer sunbrake-single__k__single-s5UQRGEAN-commentsContainer sunbrake-local-1142-commentsContainer" data-kubio="kubio/post-comments">
											<?php sunbrake_post_comments(array (
  'none' => __('No responses yet', 'sunbrake'),
  'one' => __('One response', 'sunbrake'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'sunbrake'),
  'disabled' => __('Comments are closed', 'sunbrake'),
  'avatar_size' => __('32', 'sunbrake'),
)); ?>
										</div>
										<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container sunbrake-single__k__single-oXoikmHxB-container sunbrake-local-1143-container" data-kubio="kubio/post-comments-form">
											<?php comment_form(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
