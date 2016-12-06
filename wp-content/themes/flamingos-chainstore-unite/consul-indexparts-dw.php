<div class="ibskinArticle33">
            <!-- コンサル一覧 -->
              <h2 class="re1511-ttl">
                <i class="fa fa-calendar"></i> 募集中の個別相談<em class="re1511-ttlSmall">Consulting</em>
                <br>
              </h2>
                <div id="topnewsBox-new">
                 <div class="skinMessageBoard3-s" >
                  <ul>
                      <?php
                      $args = array('numberposts' => 5, 'category' => '144,10', 'orderby' => 'date', 'order' => 'asc');
                      $rand_posts = get_posts($args);
                      $ncount = 0;
                      $liClass = "";
                      foreach($rand_posts as $post) :
                                                $ncat = get_the_category();
                                                switch ($ncat[0]->term_id) {
                                                    case 144:
                                                    case 10:
                                                        $nname = '個別相談';
                                                        $nclass = 'newsTab-consul';
                                                        break;
                                                }
                          $ncount = ++$ncount;
                          if($ncount == 6){ $liClass = ' class="last2"'; }
                          $ndate = $post->post_date;
                      ?>
                    <li<?= $liClass; ?>>
                                  <table class="magatable">
                                    <tbody>
                                      <tr>
                                        <td class="daymaga-new">
                                          <?= get_post_meta($post->ID, 'date', true); ?> 開催　
                                        </td>
                                        <td class="daymaga2-new">
                                          <span class="topnewsTab <?= $nclass; ?>"><?= $nname; ?></span>
                                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/spot-consulting" title="<?php the_title(); ?>">
                                            <?php echo mb_substr(strip_tags($post-> post_title),0,32).'...'; ?>
                                          </a>
                                          <?php get_template_part( 'new' ); ?>
                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                    </li>
                      <?php endforeach; ?>

                  </ul>
                  <div class="iblistLink2">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/spot-consulting">個別相談の日程一覧を見る</a>
                  </div>
                 </div>
                </div>
   <!-- コンサル一覧 -->
</div>