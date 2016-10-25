<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * 
 * @cmsmasters_package 	All Business
 * @cmsmasters_version 	1.0.0
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


get_header();


list($cmsmasters_layout) = all_business_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content_wrap_inner">' . "\n\t" . 
	'<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content_wrap_inner">' . "\n\t" . 
	'<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}

echo'
	</div></div><style type="text/css"> 
#cmsmasters_row_580ea103ae3d2 { 
	background-image: url(http://142.4.18.189/~desilva4/wp-content/uploads/2016/10/events.jpg); 
	background-position: center center; 
	background-repeat: no-repeat; 
	background-attachment: scroll; 
	background-size: cover; 
} 

#cmsmasters_row_580ea103ae3d2 .cmsmasters_row_outer_parent { 
	padding-top: 100px; 
} 

#cmsmasters_row_580ea103ae3d2 .cmsmasters_row_outer_parent { 
	padding-bottom: 70px; 
} 

#cmsmasters_row_580ea103ae3d2 .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
	padding-left:3%; 
} 
#cmsmasters_row_580ea103ae3d2 .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
	padding-right:3%; 
} 
 
#cmsmasters_heading_580ea103af0dc { 
	text-align:center; 
	margin-top:0px; 
	margin-bottom:20px; 
} 

#cmsmasters_heading_580ea103af0dc .cmsmasters_heading { 
	text-align:center; 
} 

#cmsmasters_heading_580ea103af0dc .cmsmasters_heading, #cmsmasters_heading_580ea103af0dc .cmsmasters_heading a { 
	font-size:40px; 
	line-height:46px; 
	font-weight:bold; 
	font-style:normal; 
	color:#ffffff;
} 

#cmsmasters_heading_580ea103af0dc .cmsmasters_heading_divider { 
} 

 
#cmsmasters_row_580ea103af375 .cmsmasters_row_outer_parent { 
	padding-top: 50px; 
} 

#cmsmasters_row_580ea103af375 .cmsmasters_row_outer_parent { 
	padding-bottom: 50px; 
} 

 
#cmsmasters_row_580ea103b02b0 { 
	background-color:#1d4488;
} 

#cmsmasters_row_580ea103b02b0 .cmsmasters_row_outer_parent { 
	padding-top: 50px; 
} 

#cmsmasters_row_580ea103b02b0 .cmsmasters_row_outer_parent { 
	padding-bottom: 50px; 
} 

 
#cmsmasters_row_580ea103b08e0 { 
	background-image: url(http://142.4.18.189/~desilva4/wp-content/uploads/2016/10/about-counter-bg.jpg); 
	background-position: center center; 
	background-repeat: no-repeat; 
	background-attachment: scroll; 
	background-size: cover; 
} 

#cmsmasters_row_580ea103b08e0 .cmsmasters_row_outer_parent { 
	padding-top: 50px; 
} 

#cmsmasters_row_580ea103b08e0 .cmsmasters_row_outer_parent { 
	padding-bottom: 50px; 
} 

#cmsmasters_row_580ea103b08e0 .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
	padding-left:0%; 
} 
#cmsmasters_row_580ea103b08e0 .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
	padding-right:0%; 
} 
 
#cmsmasters_heading_580ea103b11aa { 
	text-align:center; 
	margin-top:0px; 
	margin-bottom:20px; 
} 

#cmsmasters_heading_580ea103b11aa .cmsmasters_heading { 
	text-align:center; 
} 

#cmsmasters_heading_580ea103b11aa .cmsmasters_heading, #cmsmasters_heading_580ea103b11aa .cmsmasters_heading a { 
	font-weight:normal; 
	font-style:normal; 
	color:#ffffff;
} 

#cmsmasters_heading_580ea103b11aa .cmsmasters_heading_divider { 
} 

 
#cmsmasters_counters_580ea103b132a .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner, 
#cmsmasters_counters_580ea103b132a .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner, #cmsmasters_counters_580ea103b132a .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner { 
	padding-top:70px; 
} 

#cmsmasters_counters_580ea103b132a.counters_type_vertical .cmsmasters_counter .cmsmasters_counter_inner:before { 
	margin-left:-30px; 
} 

#cmsmasters_counters_580ea103b132a.counters_type_horizontal .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap { 
	line-height:60px; 
} 

#cmsmasters_counters_580ea103b132a .cmsmasters_counter .cmsmasters_counter_inner:before { 
	font-size:30px; 
	line-height:60px; 
	width:60px; 
	height:60px; 
	border-width:0px; 
} 


#cmsmasters_counter_580ea103b1677 .cmsmasters_counter_inner:before { 
} 


#cmsmasters_counter_580ea103b188b .cmsmasters_counter_inner:before { 
} 


#cmsmasters_counter_580ea103b1a94 .cmsmasters_counter_inner:before { 
} 


#cmsmasters_counter_580ea103b1c82 .cmsmasters_counter_inner:before { 
} 


#cmsmasters_counter_580ea103b1e84 .cmsmasters_counter_inner:before { 
} 

 
#cmsmasters_row_580ea103b20f3 .cmsmasters_row_outer_parent { 
	padding-top: 0px; 
} 

#cmsmasters_row_580ea103b20f3 .cmsmasters_row_outer_parent { 
	padding-bottom: 50px; 
} 

 
#cmsmasters_row_580ea103b23f5 { 
	background-color:#ffffff;
} 

#cmsmasters_row_580ea103b23f5 .cmsmasters_row_outer_parent { 
	padding-top: 0px; 
} 

#cmsmasters_row_580ea103b23f5 .cmsmasters_row_outer_parent { 
	padding-bottom: 50px; 
} 

</style><div id="cmsmasters_row_580ea103ae3d2" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_triangle cmsmasters_row_fullwidth">
<div id="page-banner" class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin">
<div class="cmsmasters_column one_first">

<div id="cmsmasters_heading_580ea103af0dc" class="cmsmasters_heading_wrap cmsmasters_heading_align_center" data-animation="fadeInUp" data-delay="0">
	<h1 class="cmsmasters_heading">Events</h1>
</div><div class="cmsmasters_text" data-animation="fadeInUp" data-delay="300">
<p style="text-align: center;"><strong><span style="color: #f59231;">Let\'s Connect</span></strong></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div><div class="middle_content entry" role="main"><div class="cmsmasters_row_inner"><p>&nbsp;</p>';


echo '<div id="tribe-events-pg-template" class="clearfix">' . "\n\t";
	tribe_events_before_html();
	tribe_get_view();
	tribe_events_after_html();
	echo '<div class="cl"></div>';
echo '</div> <!-- #tribe-events-pg-template -->' . "\n";


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

