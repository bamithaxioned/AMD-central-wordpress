<?php
	$siteTitle = get_bloginfo('name');
	$siteTagLine = get_bloginfo('description');
?>
		<footer class="footer">
			<div class="wrapper">
				<h6 class="footer_heading"><a href="<?php echo get_home_url(); ?>" title="<?php echo 
				$siteTitle; ?>" class="footer_heading_link"><?php echo $siteTitle; ?></a></h6>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_class' => 'navigation',
						)
					);
				?>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>