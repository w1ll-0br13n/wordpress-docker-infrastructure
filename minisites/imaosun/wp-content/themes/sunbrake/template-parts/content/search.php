<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer sunbrake-search__k__1MCYzfcZN-outer sunbrake-local-990-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner sunbrake-search__k__1MCYzfcZN-inner sunbrake-local-990-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-search__k__baLWB4dRKjp-container sunbrake-local-991-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner sunbrake-search__k__baLWB4dRKjp-inner sunbrake-local-991-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-search__k__kxeqsSpdy-n-container sunbrake-local-992-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner sunbrake-search__k__kxeqsSpdy-n-inner sunbrake-local-992-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align sunbrake-search__k__kxeqsSpdy-n-align sunbrake-local-992-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container sunbrake-search__k__CtKC_EuIZL-container sunbrake-local-993-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container sunbrake-search__k__vrf0UGkWrN-container sunbrake-local-994-container gutters-row-lg-2 gutters-row-v-lg-1 gutters-row-md-2 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner sunbrake-search__k__vrf0UGkWrN-inner sunbrake-local-994-inner h-row">
										<?php sunbrake_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(sunbrake_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container sunbrake-search__k__vD7AVCTELY-container sunbrake-local-1004-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner sunbrake-search__k__vD7AVCTELY-inner sunbrake-local-1004-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-search__k__tBYU0uM8Xx-container sunbrake-local-1005-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner sunbrake-search__k__tBYU0uM8Xx-inner sunbrake-local-1005-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align sunbrake-search__k__tBYU0uM8Xx-align sunbrake-local-1005-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(sunbrake_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing sunbrake-search__k__ELgmeRXRD--spacing sunbrake-local-1006-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer sunbrake-search__k__ELgmeRXRD--outer sunbrake-local-1006-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link sunbrake-search__k__ELgmeRXRD--link sunbrake-local-1006-link h-w-100 h-global-transition" href="<?php sunbrake_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text sunbrake-search__k__ELgmeRXRD--text sunbrake-local-1006-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'sunbrake'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-search__k__P2OarhUKUK-container sunbrake-local-1007-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner sunbrake-search__k__P2OarhUKUK-inner sunbrake-local-1007-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align sunbrake-search__k__P2OarhUKUK-align sunbrake-local-1007-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer sunbrake-search__k__tRiQFlrj8q-outer sunbrake-local-1008-outer" data-kubio="kubio/pagination-numbers">
														<?php sunbrake_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-search__k__tBYU0uM8Xx-container sunbrake-local-1009-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner sunbrake-search__k__tBYU0uM8Xx-inner sunbrake-local-1009-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align sunbrake-search__k__tBYU0uM8Xx-align sunbrake-local-1009-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(sunbrake_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing sunbrake-search__k__ELgmeRXRD--spacing sunbrake-local-1010-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer sunbrake-search__k__ELgmeRXRD--outer sunbrake-local-1010-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link sunbrake-search__k__ELgmeRXRD--link sunbrake-local-1010-link h-w-100 h-global-transition" href="<?php sunbrake_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text sunbrake-search__k__ELgmeRXRD--text sunbrake-local-1010-text kubio-inherit-typography">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
