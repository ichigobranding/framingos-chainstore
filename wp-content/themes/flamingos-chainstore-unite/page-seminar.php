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
                                            <div class="ibskinArticle-all">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      
                                                      <div class="ibskinArticleBody2">
                                                                <!--記事　中身-->
                                                              <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
          <?php endwhile; // end of the loop. ?>
                    <div class="menu_area">        
                        <div class="menu_title">
                           <div class="menu_title_en3">
                            <!-- <span class="glyphicon glyphicon-file icontopp2  gold"></span> セミナー・勉強会　スケジュール一覧-->
                          </div>
                          <div class="menu_title_jp">
                          
                          </div>
                        </div>
                    </div>
            <div class="semiwaku2">
                <ul class="sumawaku">
                  <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $param = array(
                      'posts_per_page' => '10', //表示件数。-1なら全件表示
                      'post_type' => 'semi', //カスタム投稿タイプの名称を入れる
                      'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                      'order' => 'des',
                      'paged' => $paged
                    );
                    $wp_query = new WP_Query($param);
                    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                  ?>
                      <div class="semiwaku3">

                                                          <!-- 満席 -->
                                                             <!--<?php
                                                                  //if( get_field('semiend') )
                                                                  {
                                                                  //iecho '<button type="button" class="btn btn-danger">満席のため締め切りました</button>';
                                                                  }
                                                                 //ielse
                                                                  //iif( get_field('noform') )
                                                                  {
                                                                  //iecho '<button type="button" class="btn btn-danger">募集終了</button>';
                                                                  }
                                                                  //ielse
                                                                  {
                                                                  //iecho '';
                                                                  }
                                                            ?>-->
                                                          <!-- 満席 -->
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