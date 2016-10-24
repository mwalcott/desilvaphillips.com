jQuery(document).ready(function(){



if (jQuery('body').attr('class').indexOf("event") > -1){
  jQuery('.menu-item-33').addClass('current-menu-item');
}
if (jQuery('body').attr('class').indexOf("profile") > -1){
  jQuery('.menu-item-28').addClass('current-menu-item');
}
if (jQuery('.cmsmasters_post_tags a').html()){

	if (jQuery('.cmsmasters_post_tags a').html().indexOf('deals') > -1){
  		jQuery('.menu-item-30').addClass('current-menu-item');
	}


	if (jQuery('.cmsmasters_post_tags a').html().indexOf('resources &amp; news') > -1){
  		jQuery('.menu-item-32').addClass('current-menu-item');
	}
}

// Keep the mobile hamburger nav open
jQuery(".header_top_but").on('click', function() {
	jQuery('.top_nav_wrap nav').css({ display:'block' });
});

jQuery('.tribe-events-page-title').html('Events');


jQuery('.tag-resources-news .entry-content a').each(function(){
  other_link = jQuery(this).parent().parent().parent().prev().find('.entry-title a');
  console.log(other_link);
  link = jQuery(this).attr('href');

  other_link.attr('href',link);
other_link.attr('target','_blank');
});


});