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
/*
	jQuery('.module-tab--item').hover(function () {
		jQuery(this).find('input').attr('checked', 'true');
	}, function () {
		jQuery('.module-tab--item').find('input').attr('checked', 'false');
	});

	jQuery('.module-product-action').on('click', function () {
		var ModuleTab = jQuery(this).siblings('.module-tab');

		//show the first tab
		ModuleTab.find('.module-tab--item').toggleClass('module-tab--active');

	});
*/
});
