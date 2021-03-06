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
                                            <div class=""><!--<div class="ibskinArticle">-->
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      <div class="ibskinArticleHeader">
                                                          <div class="ibskinArticleTitle">
                                                                <h1 class="entry-title">
                                                                  <?php the_title(); ?>
                                                                </h1>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="ibskinArticleBody2">
                                                                <!--記事　中身-->
                 <ul class="magawaku2">
                  <?php
                      $wp_query = new WP_Query();
                      $param = array(
                          'posts_per_page' => '7', //表示件数。-1なら全件表示
                          'post_type' => 'semi', //カスタム投稿タイプの名称を入れる
                          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                          'order' => 'desc'
                      );
                      $wp_query->query($param);
                      if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                  ?>
                    <div class="semiwaku3">
                          <li>
                            <div class="semiwaku">
                              <div class="titleichiran5">
                                  <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                  </a>
                              </div>
                            </div>
                          </li>
                      <?php get_template_part('semi-parts'); ?>
                                  <div class="right">
                                    <div class="btn bottom-shousai">
                                      <a href="<?php the_permalink(); ?>">
                                        詳細はこちら
                                      </a>
                                    </div>
                                  </div>
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