                            <!--記事　中身-->                                            
                <div class="row">
                                <ul>
                                <?php
                                  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                  $param = array(
                                    'posts_per_page' => '15', //表示件数。-1なら全件表示
                                    'post_type' =>array('casefl'),  //カスタム投稿タイプの名称を入れる
                                    'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                                    'order' => 'DESC',
                                    'paged' => $paged
                                  );
                                  $wp_query = new WP_Query($param);
                                  if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                                ?>
                    <li>
                      <div class="col-md-4 col-xs-6 tescol2">
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
                              </div><!-- row -->
                        <!-- pager -->
                            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                        <!-- /pager -->
                                                                <!--記事　中身-->
                               <!--記事全体-->
                   </div><!--col-md-8 col-md-push-2-->
                </div> <!--row-->