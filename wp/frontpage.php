<?php 
	/* Template Name: Home Page */
	get_header();
?>
		<?php
			$args_prefooter = array(
					'name'      => 'pre-footer-buy-now-section',
					'post_type' => 'global-fields'
			);
			$a_global_prefooter = get_posts($args_prefooter);
			$post_id_prefooter = $a_global_prefooter[0]->ID;		
		?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php
				$thumb_image_arr = wp_get_attachment_image_src(get_post_thumbnail_id(),'page-content_featured-image');
				$thumb_image = $thumb_image_arr[0];
			?>
			<img src="<?php echo $thumb_image;?>" alt="<?php the_title(); ?>"/>
		
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<?php endif; ?>
	
<?php get_footer(); ?>