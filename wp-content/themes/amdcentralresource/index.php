<?php get_header(); ?>

	<?php
		$bodyclass = get_body_class();

		if (in_array('blog', $bodyclass)) {

			$displayBlogArgs = array(
				'post_type' => 'sports',
				'posts_per_page' => '-1'
			);

			$displayBlog = new Wp_Query($displayBlogArgs);


			if ($displayBlog->have_posts()) : ?>
				<section class="display_latest_post">
					<div class="wrapper">
						<h2 class="recent_post center">Posts</h2>
						<ul class="latest_post">
				<?php while($displayBlog->have_posts()) : $displayBlog->the_post() ?>
					<li class="latest_post_list">
						<h3 class="latest_post_heading ft-30px"><?php the_title(); ?></h3>
						<p class="latest_post_content"><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="read_btn" title="Read More">Read More</a>
					</li>
			<?php endwhile; ?>
					</ul>
				</div>
			</section>
			<?php endif;
		}
	?>


<?php get_footer(); ?>