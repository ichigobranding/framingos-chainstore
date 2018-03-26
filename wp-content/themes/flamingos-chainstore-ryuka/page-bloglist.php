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
						<!-- ブログ一覧 -->
						
									 <div class="ibskinArticlelist">
												<div class="ibskinArticleHeaderall">
														<b>ブログ一覧</b>
												</div>
										<div class="ibskinArticleBody2">
											<ul class="magawaku2">
												<?php
													$paged = get_query_var('paged') ? get_query_var('paged') : 1;
													$param = array(
														'posts_per_page' => '20', //表示件数。-1なら全件表示
														'post_type' =>array('blog-fl'),  //カスタム投稿タイプの名称を入れる
														'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
														'order' => 'DESC',
														'paged' => $paged
													);
													$wp_query = new WP_Query($param);
													if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
												?>
													
										                    <li class="magawaku">
										                                  <table class="magatable">
										                                    <tbody>
										                                      <tr>
										                                        <td class="daymaga"><?php the_time('Y-n-j') ?></td>
										                                        <td class="daymaga2">

										                                        <a href="<?php the_permalink(); ?>">
										                                          <?php the_title(); ?>
										                                        </a>
										                                        <?php get_template_part( 'new' ); ?>
										                                      </td>
										                                      </tr>
										                                    </tbody>
										                                  </table>
										                    </li>
										        <?php endwhile; endif; ?>
											</ul>
											
										</div>
									</div>
						<!-- ブログ一覧 -->

								<!-- pager -->
										<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
								<!-- /pager	-->
							</div><!-- kiji-page -->
						</div><!-- col-md-6 col-md-push-2 3clumn -->
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