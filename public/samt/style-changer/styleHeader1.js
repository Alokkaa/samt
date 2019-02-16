jQuery(document).ready(function($){
	var headerHeight = ((jQuery(".header1-demosite .header-inner-wrapper").outerHeight()) / 2);
	jQuery('.menu-from-icon').css({'top': headerHeight+'px'});
	jQuery('.container-wrapper').css({'padding-top': jQuery(".header-wrapper.header1-demosite").outerHeight()+'px'});
	setTimeout(function(){
		var headerHeight = ((jQuery(".header1-demosite .header-inner-wrapper").outerHeight()) / 2);
		jQuery('.menu-from-icon').css({'top': headerHeight+'px'});
		jQuery('.container-wrapper').css({'padding-top': jQuery(".header-wrapper.header1-demosite").outerHeight()+'px'});
	},700);
	
	jQuery(window).smartresize(function(){
		var headerHeight = ((jQuery(".header1-demosite .header-inner-wrapper").outerHeight()) / 2);
		jQuery('.menu-from-icon').css({'top': headerHeight+'px'});
		jQuery('.container-wrapper').css({'padding-top': jQuery(".header-wrapper.header1-demosite").outerHeight()+'px'});
	});
});