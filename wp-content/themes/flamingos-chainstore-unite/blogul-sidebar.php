              <ul class="ibskinSubList">
                    <?php
                        $wp_query = new WP_Query();
                        $param = array(
                            'posts_per_page' => '12', //表示件数。-1なら全件表示
                            'post_type' => array('blog-fl'), //カスタム投稿タイプの名称を入れる
                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                            'order' => 'DESC'
                        );
                        $wp_query->query($param);
                        if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li>
                              <a href="<?php the_permalink(); ?>" class="skinArticleTitle" rel="bookmark">
                                                      <?php the_title(); ?>
                                                    </a>
                              <?php get_template_part( 'new' ); ?>            
               
                    </li>
                    <?php endwhile; endif; ?>
                  </ul>

                                <div class="iblistLink">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/bloglist">
                                        一覧を見る
                                        </a>
                                </div>

                 