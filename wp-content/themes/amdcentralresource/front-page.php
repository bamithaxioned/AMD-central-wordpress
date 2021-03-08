<?php
	get_header();

	$latestPostArgs = array(
		'post_type' => 'sports',
		'posts_per_page' => 1
	);

	$latestPost = new Wp_Query($latestPostArgs);
?>

<?php if($latestPost->have_posts()): while($latestPost->have_posts()): $latestPost->the_post() ?>
<section class="display_latest_post">
	<div class="wrapper">
		<h3 class="recent_post center">Most Recent Post</h3>
		<ul class="latest_post">
			<li class="latest_post_list">
				<h3 class="latest_post_heading"><?php the_title(); ?></h3>
				<p class="latest_post_content"><?php the_excerpt(); ?></p>
			<!-- <p class="latest_post_content"><?php //the_content(); ?></p> -->
			<a href="<?php the_permalink(); ?>" title="Read More" class="read_btn">Read More</a>
			</li>
		</ul>
	</div>
</section>
<?php
	endwhile;
	endif;
?>

<?php get_footer(); ?>