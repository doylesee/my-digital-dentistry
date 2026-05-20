						
<h2>Latest Posts</h2>
<?php
	$a_args = array(
		'post_type'			=> 'post',
		'orderby'			=> 'date',
		'order'				=> 'DESC',
		'posts_per_page'	=> 10
	);
	$a_posts = get_posts( $a_args );

	foreach( $a_posts as $o_post ) {
?>
<a href="<?php echo get_permalink($o_post->ID); ?>"><?php echo $o_post->post_title; ?></a>
<?php 
	}
	wp_reset_postdata();
?>

<h2>Archives</h2>
<ul>
	<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
</ul>