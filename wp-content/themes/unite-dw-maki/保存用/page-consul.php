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
                        <div class="col-md-10 col-md-push-1">
                          <div class="kiji-page">
                               <!--記事全体-->
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      <div class="ibskinArticleBody2">
                                                                <!--記事　中身-->
                                                             
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
          <?php endwhile; // end of the loop. ?>
            <!--<h2 class="pagetittle">個別指導・パーソナルトレーニング 日程一覧</h2>-->
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
                          <li>
                            <div class="semiwaku">
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-8">
                                        <?php get_template_part('consul-parts'); ?>
                                      </div>
                                      <div class="col-xs-12 col-md-4">
                                        <div class="btn bottom-shousai right4">
                                          <a href="<?php the_permalink(); ?>">
                                            お申込みはコチラ
                                          </a>
                                        </div>
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
                <!-- /pager -->
                                                                <!--記事　中身-->
                                                            <div class="hensyuu">
                                                            <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                            </div>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                               <!--記事全体-->
                        </div><!--kiji page-->
                   </div><!--col-md-8 col-md-push-2-->
                </div> <!--row-->
      		</main><!-- #main -->
      	</div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>