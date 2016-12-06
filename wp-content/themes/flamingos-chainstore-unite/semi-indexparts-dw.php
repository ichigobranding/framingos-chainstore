<div class="ibskinArticle33">
              <h2 class="re1511-ttl">
                <i class="fa fa-calendar"></i> 募集中のセミナー<em class="re1511-ttlSmall">Seminar</em>
                <br>
              </h2>
                <div id="topnewsBox-new">
                 <div class="skinMessageBoard3-s" >
                  <ul>
                      <?php
                      $args = array('numberposts' => 6, 'category' => '147,133,134,4,27', 'orderby' => 'date', 'order' => 'asc');
                      $rand_posts = get_posts($args);
                      $ncount = 0;
                      $liClass = "";
                      foreach($rand_posts as $post) :
												$ncat = get_the_category();
												switch ($ncat[0]->term_id) {
													case 147:
                          case 133:
                          case 134:
                          case 4:
                          case 27:
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
                                         <span><?= get_post_meta($post->ID, 'date', true); ?> <span>開催</span>
                                        </td>
                                        <td class="daymaga2-new">
                                           <span class="topnewsTab <?= $nclass; ?>">
                                          <?= $nname; ?>
                                          </span>
                                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
                    <a href="<?php echo esc_url(); ?>category/seminar">開催セミナー一覧を見る</a>
                  </div>
                 </div>
                </div>
                <!-- セミナー -->
</div>
<!--<a href="http://dearwoman-smaps.com/category/seminar">開催セミナー一覧を見る</a>-->