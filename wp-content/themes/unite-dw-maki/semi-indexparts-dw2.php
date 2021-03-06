            <div class="ibMenuHeader1">
                <h3 class="ibMenuTitle">セミナー、イベント情報</h3>
            </div>
                <div id="topnewsBox-new5">
                  <ul class="sumawaku2">
                  <?php
                      $wp_query = new WP_Query();
                      $param = array(
                          'posts_per_page' => '3', //表示件数。-1なら全件表示
                          'post_type' => 'semi', //カスタム投稿タイプの名称を入れる
                          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                          'order' => 'desc'
                      );
                      $wp_query->query($param);
                      if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                  ?>
                  <li class="semiul">
                      <table class="magatable">
                                    <tbody>
                                      <tr>
                                        <td class="daymaga-new">
                                            <a href="<?php the_permalink(); ?>" class="skinArticleTitle" rel="bookmark">
                                            <?php the_post_thumbnail(); ?>
                                            </a>
                                        </td>
                                        <td class="daymaga2-new">
                                          <p><span class="timepad3"><?php the_field('semiday'); ?> <span>開催</span></p>
                                          <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php echo mb_substr(strip_tags($post-> post_title),0,32).'...'; ?>
                                          </a>
                                          <?php get_template_part( 'new' ); ?></p>
                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                  </li>
                  <?php endwhile; endif; ?>
                </ul>
                </div>