<?php
	$siteTitle = get_bloginfo('name');
	$siteTagLine = get_bloginfo('description');
?>
		<footer class="footer">
			<div class="wrapper">
				<h6 class="footer_heading"><a href="<?php echo get_home_url(); ?>" title="<?php echo 
				$siteTitle; ?>" class="footer_heading_link"><?php echo $siteTitle; ?></a></h6>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>