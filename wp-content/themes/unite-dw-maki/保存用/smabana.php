<!-- スマホ版対応 topbana -->
<div class="tbanana imgbtn">
	<?php if (wp_is_mobile()) :?>
		<!-- topbana -->
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/top-bana-mobile-small.png" alt="※"/>
		<!--<?//php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>-->
		<!-- topbana -->
	<?php else: ?>
		<!-- topbana -->
			<!--<a href="<?//php echo esc_url( home_url( '/' ) ); ?>/※">-->
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/top-bana.png" alt="※"/>
				<!--</a>-->
		<!-- topbana -->
	<?php endif; ?>
</div>
<!-- スマホ topbana -->