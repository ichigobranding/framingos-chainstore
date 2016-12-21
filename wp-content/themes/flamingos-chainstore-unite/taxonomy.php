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
						<div class="col-md-6 col-md-push-3">

					      <div class="kiji-page">
						<!-- タクソノミ一覧 -->
						
									 <div class="ibskinArticlelist">
												<div class="ibskinArticleHeaderall">
														<b><?php the_terms($post->ID,'tema'); ?><?php the_terms($post->ID,'message'); ?>一覧</b>
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
							<div class="col-md-3 col-md-pull-6">
								<?php get_template_part( 'left-sidebar' ); ?>
							</div>
					<div class="col-md-3 sidebarpadd">
						<?php get_sidebar(); ?>
					</div>
				</div>

      		</main><!-- #main -->
      	</div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>