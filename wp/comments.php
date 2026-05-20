
<!-- Comment form -->
<?php
	$comments_args = array(
		'title_reply'			=>	'Write a Comment',
		'label_submit'			=>	'Submit',
		'comment_notes_after'	=>	''
	);
	comment_form($comments_args);
?>

<?php if ( have_comments() ) : ?>
<a name="comments"></a>
<!-- Comments list -->
<h3>Comments</h3>
<?php
	wp_list_comments( array(
		'style'			=>	'div',
		'per_page'		=>	5,
		'avatar_size'	=>	0
	) );
?>
<?php endif; ?>

<!-- Comments pagination -->
<?php echo paginate_comments_links(); ?>