<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Template for displaying all single posts.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<div class="container">
<div id="main-grid" class="row">
			<!-- パンクズ -->
				<div class="breadcrumbs">
						 <?php if(function_exists('bcn_display'))
						{
						bcn_display();
						}?>
			      </div>
        	<!-- パンクズ -->
    <div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>	
                        <?php get_template_part( 'consul-mainparts' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
			                <div class="right3">
                                     <a href="<?php bloginfo(); ?>/consul">
                                        <button type="button" class="btn bottom-shousai">
                                            スポットコンサルティング 日程一覧
                                        </button>
                                     </a>
                            </div>
	</div><!-- #primary -->	
	<?php get_sidebar(); ?>
</div><!-- .row -->

</div><!-- .container -->

<?php get_footer(); ?>