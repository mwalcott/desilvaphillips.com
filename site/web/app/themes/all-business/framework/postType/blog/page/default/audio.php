<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.0
 * 
 * Blog Page Default Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<?php all_business_get_post_color(get_the_ID(), get_post_format(), 'default'); ?>
	
	<div class="cmsmasters_post_cont_wrap">
	
		<div class="cmsmasters_post_cont">
		<?php
			if ($author || $categories || $date) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
					$author ? all_business_get_post_author('page') : '';
					
					$categories ? all_business_get_post_category(get_the_ID(), 'category', 'page') : '';
					
					$date ? all_business_get_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			
			all_business_post_heading(get_the_ID(), 'h2');
			
			
			if (!post_password_required() && !empty($cmsmasters_post_audio_links) && sizeof($cmsmasters_post_audio_links) > 0) {
				$attrs = array(
					'preload' => 'none'
				);
				
				
				foreach ($cmsmasters_post_audio_links as $cmsmasters_post_audio_link_url) {
					$attrs[substr(strrchr($cmsmasters_post_audio_link_url, '.'), 1)] = $cmsmasters_post_audio_link_url;
				}
				
				
				echo '<div class="cmsmasters_audio">' . 
					wp_audio_shortcode($attrs) . 
				'</div>';
			}
			
			
			all_business_post_exc_cont();
			
			
			if ($comments || $likes || $more) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
				
					if ($comments || $likes) {
						echo '<div class="cmsmasters_post_meta_info entry-meta">';
						
							$comments ? all_business_get_post_comments('page') : '';
							
							$likes ? all_business_get_post_likes('page') : '';
							
						echo '</div>';
					}
					
					$more ? all_business_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
		?>
		</div>
	</div>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

