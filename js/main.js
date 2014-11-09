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
//  Accordeon Tabs
//========================
jQuery(document).ready(function() {

	jQuery('.module-tab--item').find('input').on('click', function () {

		var previousValue = jQuery(this).attr('previousValue');
		var name = jQuery(this).attr('name');

		//we check if the radio input is checked
		if (previousValue == 'checked') {
			jQuery(this).removeAttr('checked');
			jQuery(this).attr('previousValue', false);

			//we remove a .module-tab--active
			jQuery(this).closest('.module-tab--list').removeClass('module-tab--list--active');
		//we check if the radio input is NOT checked
		} else {
			jQuery("input[name="+name+"]:radio").attr('previousValue', false);
			jQuery(this).attr('previousValue', 'checked');

			//we add a .module-tab--active
			jQuery(this).closest('.module-tab--list').addClass('module-tab--list--active');
		}
	});

	//we remove a .module-tab--active clickin on close button
	jQuery('.tab-close').on('click', function () {
		jQuery(this).closest('.module-tab--list').removeClass('module-tab--list--active');
	});
});
