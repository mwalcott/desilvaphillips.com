<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Blog Page Timeline Video Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);

$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);

$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);

?>

<!--_________________________ Start Video Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_timeline_type'); ?>>
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'timeline'); ?>
	
	<div class="cmsmasters_post_cont_wrap">
	<?php
		echo '<div class="cmsmasters_post_img_wrap">';
			if (!post_password_required()) {
			
				if ($date) {
				
					$date ? all_business_get_post_date('page', 'default') : '';
					
				}
				
				
				if ($cmsmasters_post_video_type == 'selfhosted' && !empty($cmsmasters_post_video_links) && sizeof($cmsmasters_post_video_links) > 0) {
					$video_size = cmsmasters_image_thumbnail_list();
					
					
					$attrs = array( 
						'preload'  => 'none', 
						'height'   => $video_size['cmsmasters-blog-masonry-thumb']['height'], 
						'width'    => $video_size['cmsmasters-blog-masonry-thumb']['width'] 
					);
					
					
					if (has_post_thumbnail()) {
						$video_poster = wp_get_attachment_image_src((int) get_post_thumbnail_id(get_the_ID()), 'cmsmasters-blog-masonry-thumb');
						
						
						$attrs['poster'] = $video_poster[0];
					}
					
					
					foreach ($cmsmasters_post_video_links as $cmsmasters_post_video_link_url) {
						$attrs[substr(strrchr($cmsmasters_post_video_link_url, '.'), 1)] = $cmsmasters_post_video_link_url;
					}
					
					
					echo '<div class="cmsmasters_video_wrap">' . 
						wp_video_shortcode($attrs) . 
					'</div>';
				} elseif ($cmsmasters_post_video_type == 'embedded' && $cmsmasters_post_video_link != '') {
					global $wp_embed;
					
					
					$video_size = cmsmasters_image_thumbnail_list();
					
					
					echo '<div class="cmsmasters_video_wrap">' . 
						do_shortcode($wp_embed->run_shortcode('[embed width="' . $video_size['cmsmasters-blog-masonry-thumb']['width'] . '" height="' . $video_size['cmsmasters-blog-masonry-thumb']['height'] . '"]' . $cmsmasters_post_video_link . '[/embed]')) . 
					'</div>';
				} elseif (has_post_thumbnail()) {
					all_business_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, false, true, false, true, true, false);
				}
			}
			
			all_business_post_heading(get_the_ID(), 'h2');
			
		echo '</div>';
		?>
		
		<div class="cmsmasters_post_cont">
		<?php
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta' . ((theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
					
					$author ? all_business_get_post_author('page') : '';
					
					$categories ? all_business_get_post_category(get_the_ID(), 'category', 'page') : '';
					
				echo '</div>';
			}
			
			
			all_business_post_exc_cont();
			
			
			if ($comments || $likes || $more) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					if ($comments || $likes) {
						echo '<div class="cmsmasters_post_meta_info">';
							
							$comments ? all_business_get_post_comments('page') : '';
							
							$likes ? all_business_get_post_likes('page') : '';
							
						echo '</div>';
					}
					
					$more ? all_business_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
		?>
			<div class="cl"></div>
		</div>
	</div>
	
	<span class="cmsmasters_post_bullet"></span>
</article>
<!--_________________________ Finish Video Article _________________________ -->

