<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

 get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<!-- topbana -->
			            <div class="tbanana imgbtn">
			                <!--<a href="<?//php echo esc_url( home_url( '/' ) ); ?>/※">-->
			                <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
			                    <!--<img src="<?//php echo get_stylesheet_directory_uri() ?>/images/top-bana.png" alt="※"/>
			                	</a>-->
		            	</div>
		    <!-- topbana -->
	<!-- #IB-main## -->
				<div class="row">
						<div class="col-md-6 col-md-push-3 centerc">
								<div class="banapadding">
									<a href="https://ryuka-kampo.com/blog-fl/%E5%A9%A6%E5%AE%9D%E5%BD%93%E5%B8%B0%E8%86%A0%EF%BC%88%E3%81%B5%E3%81%BB%E3%81%86%E3%81%A8%E3%81%86%E3%81%8D%E3%81%93%E3%81%86%EF%BC%89%E3%81%A7%E3%80%81%E5%81%A5%E5%BA%B7%E7%BE%8E%E4%BA%BA%EF%BC%81/">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/wide-bana.png"  alt="婦宝当帰膠（ふほうとうきこう）で、健康美人！"/>
									</a>
								</div>
							<!--<?//php get_template_part( 'messageborad-w' ); ?>-->
							<!--<?php// get_template_part( 'messageborad' ); ?>-->
							<?php get_template_part( 'messageborad-amelink' ); ?>
							<!--<?//php get_template_part( 'semi-indexparts-main' ); ?>-->
							<!--<?//php get_template_part( 'consul-indexparts-main' ); ?>-->
							<?php get_template_part( 'blogul' ); ?>
							<!--<?//php get_template_part( 'index-w' ); ?>-->
						</div>
							<div class="col-md-3 col-md-pull-6">
								 <?php get_template_part( 'left-sidebar' ); ?>
							</div>
					<div class="col-md-3 sidebarpadd">
					<?php get_sidebar(); ?>
											</div><!-- side -->
				</div><!-- row -->
		<!-- #IB-main## -->
					<!--<div class="home-widget-area row">

						<div class="col-sm-6 col-md-4 home-widget">
							<?//php if( is_active_sidebar('home1') ) dynamic_sidebar( 'home1' ); ?>
						</div>

						<div class="col-sm-6 col-md-4 home-widget">
							<?//php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?>
						</div>

						<div class="col-sm-6 col-md-4 home-widget">
							<?//php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?>
						</div>

					</div> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
}
?>