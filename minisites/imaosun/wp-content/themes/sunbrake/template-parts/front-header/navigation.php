<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> sunbrake-front-header__k__Gp3qTlxXlu-outer sunbrake-local-502-outer" data-kubio="kubio/navigation" id="navigation">
	<?php sunbrake_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav sunbrake-front-header__k__xLwdIMLPC_l-nav sunbrake-local-519-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section sunbrake-front-header__k__xLwdIMLPC_l-nav-section sunbrake-local-519-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer sunbrake-front-header__k__DqcL_YF9LKJ-outer sunbrake-local-520-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container sunbrake-front-header__k__MqErEXZ17Jm-container sunbrake-local-521-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-3 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner sunbrake-front-header__k__MqErEXZ17Jm-inner sunbrake-local-521-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-3 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-front-header__k__SFXC9Ze09eu-container sunbrake-local-522-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner sunbrake-front-header__k__SFXC9Ze09eu-inner sunbrake-local-522-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-3">
								<div class="position-relative wp-block-kubio-column__align sunbrake-front-header__k__SFXC9Ze09eu-align sunbrake-local-522-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php sunbrake_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row sunbrake-front-header__k__YpuDHFCdd-container sunbrake-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  sunbrake-front-header__k__YpuDHFCdd-image sunbrake-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   sunbrake-front-header__k__YpuDHFCdd-alternateImage sunbrake-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  sunbrake-front-header__k__YpuDHFCdd-text sunbrake-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container sunbrake-front-header__k__ki2xVVS75-t-container sunbrake-local-524-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner sunbrake-front-header__k__ki2xVVS75-t-inner sunbrake-local-524-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align sunbrake-front-header__k__ki2xVVS75-t-align sunbrake-local-524-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container sunbrake-front-header__k__WScomb9U_36-container sunbrake-local-525-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container sunbrake-front-header__k__ZEkYpBrx7RA-container sunbrake-local-526-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner sunbrake-front-header__k__ZEkYpBrx7RA-inner sunbrake-local-526-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align sunbrake-front-header__k__ZEkYpBrx7RA-align sunbrake-local-526-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php sunbrake_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
