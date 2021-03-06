<div class="ibskinArticle33">
            <!-- コンサル一覧 -->
              <h2 class="re1511-ttl">
                <i class="fa fa-calendar"></i> 募集中の個別相談<em class="re1511-ttlSmall">Consulting</em>
              </h2>
                <div id="topnewsBox-new">
                 <div class="skinMessageBoard3-s" >
                <ul class="sumawaku2">
                  <?php
                      $wp_query = new WP_Query();
                      $param = array(
                          'posts_per_page' => '7', //表示件数。-1なら全件表示
                          'post_type' => 'consul', //カスタム投稿タイプの名称を入れる
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
                                          <p><?php the_field('consulday'); ?> 開催</p>
                                        </td>
                                        <td class="daymaga2-new">
                                          <p><span class="topnewsTab <?= $nclass; ?>">
                                                          <!-- 募集終了 -->
                                                            <?php
                                                                   if( get_field('noform') )
                                                                  {
                                                                  echo '<span class="syuryo-icon">募集終了</span>';
                                                                  }
                                                                  else
                                                                  {
                                                                  echo '';
                                                                  }
                                                            ?>
                                                          <!-- 募集終了 -->
                                          </span>
                                          <!--<a href="<?//php echo esc_url( home_url( '/' ) ); ?>/archives/form/consul" title="<?//php the_title(); ?>">-->
                                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
                   <!-- <div class="iblistLink2">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/spot-consulting">募集日程一覧を見る</a>
                  </div>-->
                 </div>
                </div>
   <!-- コンサル一覧 -->
</div>