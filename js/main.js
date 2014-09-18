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

	jQuery('.module-product-action').on('click', function () {
		var ModuleTab = jQuery(this).siblings('.module-tab');

		//show the first tab
		ModuleTab.find('li:first input').attr('checked', 'checked');

		//toggle module tab
		ModuleTab.slideToggle();
	});

	jQuery('.button-tab-close').on('click', function () {
		jQuery(this).closest(".module-tab").slideToggle();
	});
});
