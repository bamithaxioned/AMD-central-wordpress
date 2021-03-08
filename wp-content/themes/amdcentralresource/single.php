<?php
	get_header();
	$image = get_field('featured_image');
	$blogPageLink = get_permalink(get_option( 'page_for_posts' ));
	$imageWidth = $image['width'];
	$imageHeight = $image['height'];
?>

 <section class="display_latest_post">
 	<div class="wrapper">
 		<ul class="latest_post">
 			<?php if (have_posts()) : while(have_posts()) : the_post() ?>
 				<li class="latest_post_list">
 					<figure>
 						<img src="<?php echo $image['url']; ?>" width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>">
 					</figure>
 					<h2 class="latest_post_heading"><?php the_title(); ?></h2>
 					<p class="latest_post_content"><?php the_content(); ?></p>
 				</li>
			<?php
				endwhile;
				endif;
			?>
 		</ul>
 		<div class="back_btn_block">
 			<a href="<?php echo $blogPageLink; ?>" title="Back to Blogs" class="back_btn">Back to Blogs</a>
 		</div>
 	</div>
 </section>

<?php get_footer(); ?>