<?php
	$args_prefooter = array(
			'name'      => 'custom-post-slug',
			'post_type' => 'global-fields'
	);
	$a_global_prefooter = get_posts($args_prefooter);
	$post_id_prefooter = $a_global_prefooter[0]->ID;			
?>

<?php 
	$thumb_image = get_field('custom_image',$post_id_prefooter);
?>
<img src="<?php echo $thumb_image['sizes']['custom-image-size']; ?>" alt="<?php echo $thumb_image['title']; ?>" />

<h2><?php echo get_field('custom_heading',$post_id_prefooter); ?></h2>
<a href="<?php echo get_field('custom_link',$post_id_prefooter); ?>" target="_blank" class="generic-buttons re-footer__button">Custom Link</a>
