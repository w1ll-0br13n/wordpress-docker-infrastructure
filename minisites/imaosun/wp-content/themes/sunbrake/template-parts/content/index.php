<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer sunbrake-index__k__1MCYzfcZN-outer sunbrake-local-777-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner sunbrake-index__k__1MCYzfcZN-inner sunbrake-local-777-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-index__k__baLWB4dRKjp-container sunbrake-local-778-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner sunbrake-index__k__baLWB4dRKjp-inner sunbrake-local-778-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-index__k__kxeqsSpdy-n-container sunbrake-local-779-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner sunbrake-index__k__kxeqsSpdy-n-inner sunbrake-local-779-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-2 h-px-0 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align sunbrake-index__k__kxeqsSpdy-n-align sunbrake-local-779-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container sunbrake-index__k__CtKC_EuIZL-container sunbrake-local-780-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container sunbrake-index__k__vrf0UGkWrN-container sunbrake-local-781-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-3 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner sunbrake-index__k__vrf0UGkWrN-inner sunbrake-local-781-inner h-row">
										<?php sunbrake_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(sunbrake_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container sunbrake-index__k__vD7AVCTELY-container sunbrake-local-787-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner sunbrake-index__k__vD7AVCTELY-inner sunbrake-local-787-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-index__k__tBYU0uM8Xx-container sunbrake-local-788-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner sunbrake-index__k__tBYU0uM8Xx-inner sunbrake-local-788-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align sunbrake-index__k__tBYU0uM8Xx-align sunbrake-local-788-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(sunbrake_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing sunbrake-index__k__ELgmeRXRD--spacing sunbrake-local-789-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer sunbrake-index__k__ELgmeRXRD--outer sunbrake-local-789-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link sunbrake-index__k__ELgmeRXRD--link sunbrake-local-789-link h-w-100 h-global-transition" href="<?php sunbrake_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text sunbrake-index__k__ELgmeRXRD--text sunbrake-local-789-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'sunbrake'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-index__k__P2OarhUKUK-container sunbrake-local-790-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner sunbrake-index__k__P2OarhUKUK-inner sunbrake-local-790-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align sunbrake-index__k__P2OarhUKUK-align sunbrake-local-790-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer sunbrake-index__k__tRiQFlrj8q-outer sunbrake-local-791-outer" data-kubio="kubio/pagination-numbers">
														<?php sunbrake_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-index__k__2nd5yuWmz9-container sunbrake-local-792-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner sunbrake-index__k__2nd5yuWmz9-inner sunbrake-local-792-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align sunbrake-index__k__2nd5yuWmz9-align sunbrake-local-792-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(sunbrake_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing sunbrake-index__k__ELgmeRXRD--spacing sunbrake-local-793-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer sunbrake-index__k__ELgmeRXRD--outer sunbrake-local-793-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link sunbrake-index__k__ELgmeRXRD--link sunbrake-local-793-link h-w-100 h-global-transition" href="<?php sunbrake_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text sunbrake-index__k__ELgmeRXRD--text sunbrake-local-793-text kubio-inherit-typography">
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
