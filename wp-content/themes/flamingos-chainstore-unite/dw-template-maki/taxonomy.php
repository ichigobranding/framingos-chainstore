<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flat-bootstrap
 */

get_header(); ?>
<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
      	<div id="primary" class="content-area">
      		<main id="main" class="site-main" role="main">

				<div class="row">
						<div class="col-md-8">

					      <div class="kiji-page">
						<!-- タクソノミ一覧 -->
						
									 <div class="ibskinArticlelist">
												<div class="ibskinArticleHeader">
														<h1 class="fontW6"><?php the_terms($post->ID,'tema'); ?><?php the_terms($post->ID,'message'); ?>一覧</h1>
												</div>
										<div class="ibskinArticleBody2">
                                           
                                           <?php get_template_part( 'listlist' ); ?>

										</div>
									</div>
						<!-- タクソノミ一覧 -->

								<!-- pager -->
										<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
								<!-- /pager	-->
							</div><!-- kiji-page -->

						</div>
							<!--div class="col-md-4 col-md-pull-6">
								<?php //get_template_part( 'left-sidebar' ); ?>
							</div>-->
					<div class="col-md-4 sidebarpadd">
						<?php get_sidebar(); ?>
					</div>
				</div>

      		</main><!-- #main -->
      	</div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>