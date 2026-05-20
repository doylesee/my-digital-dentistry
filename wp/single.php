<?php get_header(); ?>

	<?php get_sidebar(); ?>
			
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
		<?php if(has_post_thumbnail()) {
			$thumb_image_arr = wp_get_attachment_image_src(get_post_thumbnail_id(),'blog_list-item-image');
			$thumb_image = $thumb_image_arr[0];
		?>
		<img src="<?php echo $thumb_image;?>" alt="<?php the_title(); ?>"/>
		<?php } ?>								
		<h2><?php the_title()?></h2>						
		<?php the_author(); ?>
		<?php the_time('F d, Y'); ?>
		<?php the_content(); ?>
		
		<span class='st_facebook_hcount' displayText='Facebook'></span>
		<span class='st_twitter_hcount' displayText='Tweet'></span>
		<span class='st_googleplus_hcount' displayText='Google +'></span>
		<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
									
		<!-- Blog comments -->
		<?php comments_template(); ?> 
	
	<?php endwhile; else: ?>
	<?php endif; ?>

<?php get_footer(); ?>