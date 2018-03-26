<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package flat-bootstrap
 */
get_header(); ?>
<div class="container">
<div id="main-grid" class="row">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>
					  <h2 class="pagetittle">スポットコンサルティング スケジュール一覧</h2>
						<div class="semiwaku2">
								<ul class="sumawaku">
									<?php
										$paged = get_query_var('paged') ? get_query_var('paged') : 1;
										$param = array(
											'posts_per_page' => '12', //表示件数。-1なら全件表示
											'post_type' => 'consul', //カスタム投稿タイプの名称を入れる
											'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
											'order' => 'ASC',
											'paged' => $paged
										);
										$wp_query = new WP_Query($param);
										if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
									?>
											<div class="semiwaku3">
																			<!-- 残りわずか -->
												<?php
												if( get_field('noform_before') )
												{
												echo '<button type="button" class="btn btn-wazuka semiformbtn">残りわずか</button><br>';
												}
												else
												{
												}
												?>
												<!-- 残りわずか -->
													<li>
														<div class="semiwaku">
																<?php get_template_part('consul-parts'); ?>
																	<div class="right4">
																		<div class="btn bottom-shousai">
																			<a href="<?php the_permalink(); ?>">
																				お申込みはコチラ
																			</a>
																		</div>
																	</div>
														</div>
													</li>
											</div>
										<?php endwhile; endif; ?>
								</ul>
						 </div>
								<!-- pager -->
										<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
								<!-- /pager	-->
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>