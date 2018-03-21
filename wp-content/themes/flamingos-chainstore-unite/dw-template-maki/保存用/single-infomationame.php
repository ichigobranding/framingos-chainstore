<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>
<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
      	<div id="primary" class="content-area">
      		<main id="main" class="site-main" role="main">

				<div class="row">
						<div class="col-md-6 col-md-push-3">
						
									<div class="kiji-page">
 							  <!--記事全体-->
                                          <article>
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      <div class="ibskinArticleHeader">
                                                          <div class="ibskinArticleTitle">
                                                                <h1>
                                                                  <b>アメブロを更新しました。(<?php echo get_the_date('n月j日'); ?>)</b>
                                                                </h1>
                                                          </div>
                                                      </div>
                                                      
                                                            <div class="ibskinArticleBody2">

	                                                      <!--記事　中身-->
														            <?php while ( have_posts() ) : the_post(); ?>	
																<!--記事info-->
                                                                          <div class="ibarticleDetailArea">
                                                                              <time datetime="2016-08-12" pubdate="pubdate"><?php echo get_the_date(); ?></time><?php get_template_part( 'new' ); ?>
                                                                              <br />テーマ：<?php echo get_the_term_list( $id,message, $before, $sep, $after ); ?>
                                                                          </div>
                                                                <!--記事info-->
                                アメブロで新しい記事を公開しました。<br><br>
															 <span style="color: #ff0000;"><strong>タイトルは「<?php the_title(); ?>」です。</strong></span><br><br>

																			<a href="<?php the_field('ame-new-url'); ?>" target="_blank">
																				<strong><span style="color: #0000ff;"><span style="color: #0000ff;">記事はこちらからご覧ください！</span></span></strong></a>


																		<?php endwhile; // end of the loop. ?>
																		<br>
																		<p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>                                           
	                                                          <!--記事　中身-->
                                                            </div>
                                                </div>
                                              </div>
                                            </div>
                                          </article>
								 <!--記事全体-->
									</div>
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