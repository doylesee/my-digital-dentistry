<?php get_header(); ?>

	<?php get_sidebar(); ?>
			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php
			if(has_post_thumbnail()) {
				echo get_the_post_thumbnail(get_the_ID(),'blog_list-item-image' , array('alt' => the_title_attribute('echo=0'),'title' =>the_title_attribute('echo=0')));
			} else {}
		?>
		<h2><?php the_title(); ?></h2>
		<?php the_author(); ?>
		<?php the_time('F d, Y'); ?>
		<p>
			<?php echo wp_trim_words(get_the_content(),32,'...'); ?>
			<a href="<?php echo get_permalink(); ?>">Read More</a>
		</p>
	<?php endwhile; else: ?>				
	<?php endif; ?>

	<div class="clearfix">
	<?php
		$i_temp = 99999;
		$a_nav = array(
			'base'   		=> str_replace($i_temp, '%#%', esc_url(get_pagenum_link($i_temp))),
			'format'		=> '',
			'current' 		=> max( 1, $i_paged ),
			//'total' 		=> 4,
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