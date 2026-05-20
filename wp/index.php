<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div id="section-1">
			<div class="row section-1__inner">
				<div class="small-12 medium-6 medium-offset-1 end columns section-1__copy">
					<h1><?php echo get_field('heading_section_1'); ?></h1>
					<?php echo get_field('content_section_1'); ?>
				</div>
				<div class="section-1__image fadeIn">
					<?php $image_section_1 = get_field('image_section_1'); ?>
					<img src="<?php echo $image_section_1['sizes']['section_1_image']; ?>" alt="<?php echo $image_section_1['title']; ?>" />
				</div>
			</div>
		</div><!--close #section-1-->
		
		<div id="section-2">
			<div class="row section-2__inner">
				<div class="section-2__image effects effects--fade-in">
					<?php $image_section_2 = get_field('image_section_2'); ?>
					<img src="<?php echo $image_section_2['sizes']['section_2_image']; ?>" alt="<?php echo $image_section_2['title']; ?>" />
				</div>
				<div class="small-12 medium-5 medium-offset-7 column section__copy section-2__copy">
					<h2><?php echo get_field('heading_section_2'); ?></h2>
					<p><?php echo get_field('content_section_2'); ?></p>
					<?php
						$learn_more_link_section_2 = get_field('learn_more_link_section_2');
						if ($learn_more_link_section_2) {
					?>
						<a href="<?php echo $learn_more_link_section_2; ?>" class="section__buttons hvr-fade">Learn More</a>
					<?php } ?>
				</div>
			</div>
		</div><!--close #section-2-->
		
		<div class="mini-section mini-section--1">
			<div class="row">
				<div class="small-12 medium-8 medium-offset-2 column">
					<h2><?php echo get_field('content_mini_section_1'); ?></h2>
				</div>
			</div>
		</div><!--close .mini-section-->
		
		<div id="websites"></div>
		<div id="section-3">
			<div class="row">
				<div class="small-12 medium-8 medium-offset-2 end columns section__copy section-3__copy">
					<h2><?php echo get_field('heading_section_3'); ?></h2>
					<p><?php echo get_field('content_section_3'); ?></p>
					<?php
						$learn_more_link_section_3 = get_field('learn_more_link_section_3');
						if ($learn_more_link_section_3) {
					?>
						<a href="<?php echo $learn_more_link_section_3; ?>" class="section__buttons hvr-fade">Learn More</a>
					<?php } ?>
				</div>
				<div class="small-12 columns section-3__image effects effects--fade-in">
					<?php $image_section_3 = get_field('image_section_3'); ?>
					<img src="<?php echo $image_section_3['sizes']['section_3_image']; ?>" alt="<?php echo $image_section_3['title']; ?>" />
				</div>
			</div>
		</div><!--close #section-3-->
		
		<div id="section-4">
			<div class="section-4__image--left effects effects--fade-in-left">
				<?php $column_1_image_section_4 = get_field('column_1_image_section_4'); ?>
				<img src="<?php echo $column_1_image_section_4['sizes']['section_4_col_1_image']; ?>" alt="<?php echo $column_1_image_section_4['title']; ?>" />
			</div>

			<div class="section-4__image--right effects effects--fade-in-right">
				<?php $column_2_image_section_4 = get_field('column_2_image_section_4'); ?>
				<img src="<?php echo $column_2_image_section_4['sizes']['section_4_col_2_image']; ?>" alt="<?php echo $column_2_image_section_4['title']; ?>" />
			</div>
			<div class="row">
				<div class="small-12 medium-4 medium-offset-1 large-3 large-offset-2 columns section__copy section-4__copy section-4__copy--left">
					<div id="seo"></div>
					<h2><?php echo get_field('column_1_heading_section_4'); ?></h2>
					<p><?php echo get_field('column_1_content_section_4'); ?></p>
					<?php
						$column_1_learn_more_link_section_4 = get_field('column_1_learn_more_link_section_4');
						if ($column_1_learn_more_link_section_4) {
					?>
						<a href="<?php echo $column_1_learn_more_link_section_4; ?>" class="section__buttons hvr-fade">Learn More</a>
					<?php } ?>
				</div>
				<div class="small-12 medium-4 medium-offset-2 large-3 end columns section__copy section-4__copy section-4__copy--right">
					<div id="ppc-management"></div>
					<h2><?php echo get_field('column_2_heading_section_4'); ?></h2>
					<p><?php echo get_field('column_2_content_section_4'); ?></p>
					<?php
						$column_2_learn_more_link_section_4 = get_field('column_2_learn_more_link_section_4');
						if ($column_2_learn_more_link_section_4) {
					?>
						<a href="<?php echo $column_2_learn_more_link_section_4; ?>" class="section__buttons hvr-fade">Learn More</a>
					<?php } ?>
				</div>
			</div>
		</div><!--close #section-4-->
		
		<div id="social-media"></div>
		<div id="section-5">
			<div class="row">
				<div class="small-12 medium-4 large-3 large-offset-1 end columns section__copy section-5__copy">
					<h2><?php echo get_field('heading_section_5'); ?></h2>
					<p><?php echo get_field('content_section_5'); ?></p>
					<?php
						$column_1_learn_more_link_section_5 = get_field('column_1_learn_more_link_section_5');
						if ($column_1_learn_more_link_section_5) {
					?>
						<a href="<?php echo $column_1_learn_more_link_section_5; ?>" class="section__buttons hvr-fade">Learn More</a>
					<?php } ?>
				</div>
				<div class="small-12 medium-8 columns section-5__image effects effects--fade-in-up">
					<?php $image_section_5 = get_field('image_section_5'); ?>
					<img src="<?php echo $image_section_5['sizes']['section_5_image']; ?>" alt="<?php echo $image_section_5['title']; ?>" />
				</div>
			</div>
		</div><!--close #section-5-->
		
		<div id="section-6">
			<div class="section-6__image effects effects--fade-in"></div>
			<div class="row">
				<div class="small-12 columns section-6__heading">
					<h2><?php echo get_field('heading_section_6'); ?></h2>
				</div>
				<div class="small-12 medium-8 medium-offset-2 end columns section-6__copy">
					<?php echo get_field('content_section_6'); ?>
					<?php
						$learn_more_link_section_6 = get_field('learn_more_link_section_6');
						if ($learn_more_link_section_6) {
					?>
						<a href="<?php echo $learn_more_link_section_6; ?>" class="section__buttons section__buttons--invert hvr-fade">Learn More</a>
					<?php } ?>
				</div>
			</div>
		</div><!--close #section-6-->
		
		<div class="mini-section mini-section--2">
			<div class="row">
				<div class="small-12 column">
					<h2><?php echo get_field('heading_mini_section_2'); ?></h2>
					<p><?php echo get_field('content_mini_section_2'); ?></p>
				</div>
			</div>
		</div><!--close .mini-section-->
		
	<?php endwhile; else: ?>
	<?php endif; ?>
	
<?php get_footer(); ?>