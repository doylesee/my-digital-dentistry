<?php
	get_header();
?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<p><?php echo wp_trim_words(get_the_content(),55,'...'); ?><a href="<?php echo get_permalink(); ?>">Keep Reading</a></p>
	<?php endwhile; else: ?>
		<h1>No Results Found</h1>
		<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
		<div class="inner-page__search-form clearfix">
			<?php get_search_form( true ); ?>
		</div>
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