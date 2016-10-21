<?php 
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function all_business_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'all-business');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'all-business');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'all-business');
	}
	
	if (CMSMASTERS_DONATIONS) {
		$tabs['campaign'] = esc_attr__('Campaign', 'all-business');
	}
	
	
	return $tabs;
}


function all_business_options_single_sections() {
	$tab = all_business_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'all-business');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'all-business');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'all-business');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'all-business');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function all_business_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = all_business_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'all-business'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'all-business') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'all-business') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'all-business') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'all-business'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_html__('Show Related Posts', 'all-business') . '|related', 
				esc_html__('Show Popular Posts', 'all-business') . '|popular', 
				esc_html__('Show Recent Posts', 'all-business') . '|recent', 
				esc_html__('Hide More Posts Box', 'all-business') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'all-business'), 
			'desc' => esc_html__('posts', 'all-business'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMASTERS_SHORTNAME . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'all-business'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'all-business'), 
			'type' => 'number', 
			'std' => '5', 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'all-business'), 
			'desc' => esc_html__('Enter a project details block title', 'all-business'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'all-business'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_html__('Show Related Projects', 'all-business') . '|related', 
				esc_html__('Show Popular Projects', 'all-business') . '|popular', 
				esc_html__('Show Recent Projects', 'all-business') . '|recent', 
				esc_html__('Hide More Projects Box', 'all-business') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'all-business'), 
			'desc' => esc_html__('projects', 'all-business'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'all-business'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'all-business'), 
			'type' => 'number', 
			'std' => '5', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'all-business'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'all-business'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'all-business'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'all-business'), 
			'type' => 'text', 
			'std' => 'pj-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMASTERS_SHORTNAME . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'all-business'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'all-business'), 
			'type' => 'text', 
			'std' => 'pj-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'all-business'), 
			'desc' => esc_html__('Enter a profile details block title', 'all-business'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'all-business'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'all-business'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMASTERS_SHORTNAME . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'all-business'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'all-business'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_layout', 
			'title' => esc_html__('Layout Type', 'all-business'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'all-business') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'all-business') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'all-business') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_title', 
			'title' => esc_html__('Campaign Title', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_date', 
			'title' => esc_html__('Campaign Date', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_cat', 
			'title' => esc_html__('Campaign Categories', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_author', 
			'title' => esc_html__('Campaign Author', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_comment', 
			'title' => esc_html__('Campaign Comments', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_tag', 
			'title' => esc_html__('Campaign Tags', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_like', 
			'title' => esc_html__('Campaign Likes', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_nav_box', 
			'title' => esc_html__('Campaign Navigation Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_share_box', 
			'title' => esc_html__('Sharing Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_author_box', 
			'title' => esc_html__('About Author Box', 'all-business'), 
			'desc' => esc_html__('show', 'all-business'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_more_campaigns_box', 
			'title' => esc_html__('More Campaigns Box', 'all-business'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_html__('Show Related Campaigns', 'all-business') . '|related', 
				esc_html__('Show Popular Campaigns', 'all-business') . '|popular', 
				esc_html__('Show Recent Campaigns', 'all-business') . '|recent', 
				esc_html__('Hide More Campaigns Box', 'all-business') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_more_campaigns_count', 
			'title' => esc_html__('More Campaigns Box Items Number', 'all-business'), 
			'desc' => esc_html__('campaigns', 'all-business'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_more_campaigns_pause', 
			'title' => esc_html__('More Campaigns Slider Pause Time', 'all-business'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'all-business'), 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMASTERS_SHORTNAME . '_donations_campaign_slug', 
			'title' => esc_html__('Campaign Slug', 'all-business'), 
			'desc' => esc_html__('Enter a page slug that should be used for your donations campaign single item', 'all-business'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

