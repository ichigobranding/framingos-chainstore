<div class="ibskinArticle33">
              <h2 class="re1511-ttl">
                <i class="fa fa-calendar"></i> 募集中のセミナー<em class="re1511-ttlSmall">Seminar</em>
                <br>
              </h2>
                <div id="topnewsBox-new">
                 <div class="skinMessageBoard3-s" >
                  <ul>
                    <?php
                      $wp_query = new WP_Query();
                      $param = array(
                          'posts_per_page' => '7', //表示件数。-1なら全件表示
                          'post_type' => 'semi', //カスタム投稿タイプの名称を入れる
                          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                          'order' => 'ASC'
                      );
                      $wp_query->query($param);
                      if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                  ?>
                      <li<?= $liClass; ?>>
                                  <table class="magatable">
                                    <tbody>
                                      <tr>
                                        <td class="daymaga-new">
                                         <span><?php the_field('semidaytop'); ?> <span>開催</span>
                                        </td>
                                        <td class="daymaga2-new">
                                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                           <span class="topnewsTab <?= $nclass; ?>">
                                                          <!-- 満席 -->
                                                            <?php
                                                                   if( get_field('noform') )
                                                                  {
                                                                  echo '【募集終了】';
                                                                  }
                                                                 else
                                                                  if( get_field('semiend') )
                                                                  {
                                                                  echo '【満席】';
                                                                  }
                                                                  else
                                                                  {
                                                                  echo '';
                                                                  }
                                                            ?>
                                                          <!-- 満席 -->
                                          </span>                                          
                                            <?php echo mb_substr(strip_tags($post-> post_title),0,32).'...'; ?>
                                          </a>
                                          <?php get_template_part( 'new' ); ?>
                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                      </li>
                     <?php endwhile; endif; ?>
                  </ul>
                  <div class="iblistLink2">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/semi">開催一覧を見る</a>
                  </div>
                 </div>
                </div>
                <!-- セミナー -->
</div>
<!--<a href="http://dearwoman-smaps.com/category/seminar">開催セミナー一覧を見る</a>-->