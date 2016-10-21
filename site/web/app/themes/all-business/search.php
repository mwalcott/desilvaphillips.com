<?php
/**
 * @package 	WordPress
 * @subpackage 	All Business
 * @version		1.0.5
 * 
 * Search Page Template
 * Created by CMSMasters
 * 
 */


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


echo '<div class="cmsmasters_search">' . "\n";


if (!have_posts()) : 
	echo '<div class="cmsmasters_search_zero">' . 
		'<h4>' . esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'all-business') . '</h4>' . 
		'<br />';
		
		get_search_form();
		
	echo '</div>';
else : 
	while (have_posts()) : the_post(); 
	
		$current_tax = '';
		
		$current_tax .= (has_term('category') ? 'category' : '');
		$current_tax .= (has_term('pj-categs') ? 'pj-categs' : '');
		$current_tax .= (has_term('product_cat') ? 'product_cat' : '');
		$current_tax .= (has_term('tribe_events_cat') ? 'tribe_events_cat' : '');
		$current_tax .= (has_term('cp-categs') ? 'cp-categs' : '');
		$current_tax .= (has_term('events_category') ? 'events_category' : '');
		
	?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_archive_type'); ?>>
			<?php 
			if (!post_password_required() && has_post_thumbnail()) {
				echo '<div class="cmsmasters_archive_item_img_wrap">';
					all_business_thumb(get_the_ID(), 'cmsmasters-square-thumb');
				echo '</div>';
			}
			?>
			<div class="cmsmasters_archive_item_cont_wrap">
				<div class="cmsmasters_archive_item_type">
					<?php
					$post_type_obj = get_post_type_object(get_post_type());
					
					echo '<span>' . $post_type_obj->labels->singular_name . '</span>';
					?>
				</div>
				<?php
				
				if (cmsmasters_title(get_the_ID(), false) != get_the_ID()) {
					?>
					<header class="cmsmasters_archive_item_header entry-header">
						<h2 class="cmsmasters_archive_item_title entry-title">
							<a href="<?php the_permalink(); ?>">
								<?php cmsmasters_title(get_the_ID(), true); ?>
							</a>
						</h2>
					</header>
					<?php 
				}
				
				
				if (theme_excerpt(55, false) != '') {
					echo cmsmasters_divpdel('<div class="cmsmasters_archive_item_content entry-content">' . "\n" . 
						wpautop(theme_excerpt(55, false)) . 
					'</div>' . "\n");
				}
				
				
				if (get_post_type() == 'post' || $current_tax != '') {
					echo '<footer class="cmsmasters_archive_item_info entry-meta">';
						
						if (get_post_type() == 'post') {
							echo '<span class="cmsmasters_archive_item_date_wrap">' . 
								esc_html__('On', 'all-business') . ' ' . 
								'<abbr class="published cmsmasters_archive_item_date" title="' . esc_attr(get_the_date()) . '">';
									
									
									if (cmsmasters_title(get_the_ID(), false) == get_the_ID()) {
										echo '<a href="' . esc_url(get_permalink()) . '">' . 
											get_the_date() . 
										'</a>';
									} else {
										echo get_the_date();
									}
									
									
								echo '</abbr>' . 
								'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
									get_the_modified_date() . 
								'</abbr>' . 
							'</span>' . 
							'<span class="cmsmasters_archive_item_user_name">' . 
								esc_html__('by', 'all-business') . ' ' . 
								'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author" title="' . esc_attr__('Posts by', 'all-business') . ' ' . get_the_author_meta('display_name') . '">' . get_the_author_meta('display_name') . '</a>' . 
							'</span>';
						}
						
						
						if ($current_tax != '') {
							echo '<span class="cmsmasters_archive_item_category">' . 
								esc_html__('In', 'all-business') . ' ' . 
								all_business_get_the_category_list(get_the_ID(), $current_tax, ', ') . 
							'</span>';
						}
						
					echo '</footer>';
				}
				?>
			</div>
		</article>
	<?php 	
	endwhile;
	
	
	echo cmsmasters_pagination();
endif;


echo '</div>' . "\n" . 
'</div>' . "\n" . 
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

