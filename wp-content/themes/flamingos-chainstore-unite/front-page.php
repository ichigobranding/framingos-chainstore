<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

 get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main image" role="main">
	<?php get_template_part( 'smabana' ); ?>
	<!-- topbana -->
			<!-- <div class="tbanana imgbtn">
				<a href="<?//php echo esc_url( home_url( '/' ) ); ?>/※">
					<img src="<?//php echo get_stylesheet_directory_uri() ?>/images/top-bana.png" alt="※"/>
					</a>
			</div>-->
	<!-- topbana -->
	<!-- #IB-main## -->
				<div class="row">
						<!--<div class="col-md-6 col-md-push-3 centerc">-->
						<div class="col-md-8 centerc">
							<?php get_template_part( 'ap-bana' ); ?>
							<?php get_template_part( 'messageborad' ); ?>
							<!--<?//php get_template_part( 'messageborad-w' ); ?>-->
							<?php get_template_part( 'semi-indexparts-main' ); ?>
							<?php get_template_part( 'consul-indexparts-main' ); ?>
							<!--<?//php get_template_part( 'index-w' ); ?>-->
							<!--<?//php get_template_part( 'blogul' ); ?>-->
							<?php get_template_part( 'blogul-lis' ); ?>
						</div>
							<!--<div class="col-md-3 col-md-pull-6">
								 <?//php get_template_part( 'left-sidebar' ); ?>
							</div>-->
					<div class="col-md-4 sidebarpadd">
					<!--<div class="col-md-4 sidebarpadd">-->
						<?php get_template_part( 'sidebar2' ); ?>
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