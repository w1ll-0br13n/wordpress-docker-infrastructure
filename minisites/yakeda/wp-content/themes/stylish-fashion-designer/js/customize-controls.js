( function( api ) {

	// Extends our custom "stylish-fashion-designer" section.
	api.sectionConstructor['stylish-fashion-designer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );

(function ($) {
    function ResetDemoSettings() {
        if (!confirm("Are you sure you want to reset demo import settings?")) return;

        $.post(ajaxurl, { action: 'stylish_fashion_designer_reset_demo_import_settings' }, function () {
            location.reload();
        });
    }

    window.ResetDemoSettings = ResetDemoSettings;
})(jQuery);

(function ($, wp) {
    function ResetGlobalColor() {
        if (confirm("Are you sure you want to reset global color settings?")) {
            wp.customize.instance("stylish_fashion_designer_first_color").set("#D1B266");
        }
    }

    window.ResetGlobalColor = ResetGlobalColor;
})(jQuery, wp);
