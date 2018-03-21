<?php
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
                                                                  <b>過去のセミナー情報一覧</b>
                                                                </h1>
                                                          </div>
                                                      </div>
                                                            <div class="ibskinArticleBody2">
                                                            <!--記事　中身-->
                                              <ul class="magawaku2">
                                                  <?php
                                                      $wp_query = new WP_Query();
                                                      $param = array(
                                                          'paged' => $paged,
                                                          'posts_per_page' => '2', //表示件数。-1なら全件表示
                                                          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                                                          'order' => 'DESC',
                                                          'post_type' => 'semi', //カスタム投稿タイプ
                                                          'tax_query' => array( //タクソノミー、タームの設定
                                                           array(
                                                          'taxonomy' => 'semibo', //タクソノミー名
                                                          'field' => 'slug', //基本的にslugに指定します（必須）
                                                          'terms' => 'semikako' //ターム（スラッグ名）
                                                        )
                                                      )
                                                      );
                                                      $wp_query->query($param);
                                                      if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                                                  ?>
                                                <li class="magawaku">
                                                              <table class="magatable">
                                                                <tbody>
                                                                  <tr>
                                                                    <td class="daymagasemilis"><?php the_field('semiday'); ?>開催</td>
                                                                    <td class="daymaga2">

                                                                      <?php get_template_part( 'icon' ); ?>
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
                                                            <!--記事　中身-->
                                                            </div>
                                                </div>
                                              </div>
                                            </div>
                                          </article>
                 <!--記事全体-->
                <!-- pager -->
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                <!-- /pager -->
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