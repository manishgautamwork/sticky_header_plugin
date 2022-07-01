jQuery(document).ready(function(){
	var lang_html = jQuery('#shl-header').html();
	jQuery("#shl-header").remove();
	jQuery(lang_html).css('display', 'inline-block');
	jQuery('header:first').after(lang_html);

});

jQuery(document).scroll(function() {
       if(jQuery(window).scrollTop() > 50){
         jQuery("#shl-header-menu-main").addClass("shl-header-sticky");
       }else if(jQuery(window).scrollTop() < 50){
         jQuery("#shl-header-menu-main").removeClass("shl-header-sticky");

       }
});	

