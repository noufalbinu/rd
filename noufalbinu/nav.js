jQuery(document).ready(function(){
	jQuery('#nav-icon').click(function(){
		jQuery(this).toggleClass('open');
	  if(jQuery('#menu').css('opacity') == '0'){
	    jQuery('#menu').css('opacity','1');
	    jQuery('#menu').fadeIn(300).css('display','table');
	  }else{
	    jQuery('#menu').css('opacity','0');
	    jQuery('#menu').fadeOut(300).css('display','none !important');
	  }
	});
});