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
 							  <!--記事全体-->
                                          <article>
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      <div class="ibskinArticleHeader">
                                                          <div class="ibskinArticleTitle">
                                                                <h1>
                                                                  <b>「女性が起業で、自分のスタイルをつくって自由な生き方を手に入れる方法」配信しました。(<?php echo get_the_date('n月j日'); ?>号)</b>
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
																	
																			<strong>
																				<span style="color: #ff0000;">
																				<?php the_title(); ?>
																				</span>
																			</strong><br><br>

																			メルマガにご登録されている方はぜひ読んで、起業家マインドを身につけて、ブラッシュアップしてくださいね。<br><br>

																			<a href="<?php echo esc_url( home_url( '/' ) ); ?>mailmag">
																				<strong><span style="color: #0000ff;"><span style="color: #0000ff;">メルマガの登録がまだお済みでないあなたはこちらです！</span></span></strong></a>


																		<?php endwhile; // end of the loop. ?>
																		<br><br><br><br>
																		<p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
														                                                                      
	                                                          <!--記事　中身-->
	                                               
                                                            </div>
                                                </div>
                                              </div>
                                            </div>
                                          </article>
								 <!--記事全体-->
		                                <div class="iblistLink">
		                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>newss">
		                                       新着情報一覧を見る
		                                        </a>
		                                </div>



									</div>






						</div>
							<div class="col-md-3 col-md-pull-6">
								<?php get_template_part( 'left-sidebar' ); ?>
							</div>
					<div class="col-md-3">
						<?php get_sidebar(); ?>
					</div>
				</div>

      		</main><!-- #main -->
      	</div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>