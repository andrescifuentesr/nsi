//========================
//  Flexslider
//========================
jQuery(window).load(function(){
	jQuery(".flexslider").flexslider({
		animation:"slide",
		start:function(){
			jQuery(".site-main").find(".flexslider-wrapper").removeClass("loading");
			jQuery(".spinner").hide();
		}
	});
});

//========================
//  Accordeon
//========================
jQuery(document).ready(function() {
	jQuery('.button-module-tab').on('click', function () {
		var ModuleTab = jQuery(this).next('.module-tab');

		//show the first tab
		ModuleTab.find('li:first input').attr('checked', 'checked');

		jQuery('.module-tab').addClass('hide-module-tab');

		//toggle module tab
		ModuleTab.toggleClass('hide-module-tab');
	});
	jQuery('.button-tab-close').on('click', function () {
		jQuery('.module-tab').addClass('hide-module-tab');
	});
});