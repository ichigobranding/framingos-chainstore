<!--事例紹介の記事-->
      <div class="ibMenuHeader-case">
      <span class="ibMenuTitle">事例紹介</span>
      </div>
      <div class="row">
              <ul>
                    <?php
                        $wp_query = new WP_Query();
                        $param = array(
                            'posts_per_page' => '6', //表示件数。-1なら全件表示
                            'post_type' => array('casefl'), //カスタム投稿タイプの名称を入れる
                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                            'order' => 'DESC'
                        );
                        $wp_query->query($param);
                        if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li>
                      <div class="col-md-12 col-xs-6 tescol">
                              <a href="<?php the_permalink(); ?>" class="skinArticleTitle" rel="bookmark">
                              <div class="casecss thumbnail img">
                              <?php the_post_thumbnail(); ?>
                              </div>
                              <div class="casecss">
                                  <?php the_title(); ?>
                              </a>
                              <?php get_template_part( 'new' ); ?>
                              </div>
                      </div><!--col-->
                    </li>
                    
                  </ul>
                    <?php endwhile; endif; ?>
                   </div><!--row-->
                                <div class="iblistLink">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/case">
                                        事例一覧を見る
                                        </a>
                                </div>
 <!--事例紹介の記事-->