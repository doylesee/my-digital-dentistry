<?php
	/* Template Name: Blog List Page */
	get_header();
?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>

	<?php get_sidebar(); ?>
			
	<!-- WP Post list query -->
	<?php
		$i_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$a_args	=	array(
			'post_type'			=> 'post',
			'orderby'			=> 'date',
			'order'				=> 'DESC',
			'posts_per_page'	=> 10,
			'paged'				=> $i_paged
		);
		$o_query = new WP_Query( $a_args );
	?>
	<?php
		while ( $o_query->have_posts() ) {
			$o_query->the_post();
	?>
					
		<?php if(has_post_thumbnail()) { ?>
			<?php
				echo get_the_post_thumbnail(get_the_ID(),'blog_list-item-image' , array('alt' => the_title_attribute('echo=0'),'title' =>the_title_attribute('echo=0')));
			?>
		<?php } else { } ?>
		
		<h2><?php echo get_the_title()?></h2>
		<?php echo get_the_author(); ?>
		<?php echo get_the_time('F d, Y'); ?>
		<p><?php echo wp_trim_words(get_the_content(),32,'...'); ?><a href="<?php echo get_permalink(); ?>">Keep Reading</a></p>
		
		<span class='st_facebook_hcount' displayText='Facebook'></span>
		<span class='st_twitter_hcount' displayText='Tweet'></span>
		<span class='st_googleplus_hcount' displayText='Google +'></span>
		<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
	
	<?php } ?>				
	
	<div class="clearfix">
	<?php
		$i_temp = 99999;
		$a_nav = array(
			'base'   		=> str_replace($i_temp, '%#%', esc_url(get_pagenum_link($i_temp))),
			'format'		=> '',
			'current' 		=> max( 1, $i_paged ),
			'total' 		=> $o_query->max_num_pages,
			'prev_text' 	=> 'Previous',
			'next_text' 	=> 'Next',
			'type'			=> 'list',
			'end_size'		=> 3,
			'mid_size'		=> 3
		);
		echo paginate_links( $a_nav );
		wp_reset_postdata();
	?>
	</div>
	
<?php get_footer(); ?>