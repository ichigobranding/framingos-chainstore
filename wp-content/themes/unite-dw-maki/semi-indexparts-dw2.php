            <div class="ibMenuHeader1">
                <h3 class="ibMenuTitle">セミナー、イベント情報</h3>
            </div>
                <div id="topnewsBox-new5">
                  <ul>
                      <?php
                      $args = array('numberposts' => 6, 'category' => '147,133,134,4,27,163', 'orderby' => 'date', 'order' => 'desc');
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
                      <li>
                                  <table class="magatable">
                                    <tbody>
                                      <tr>
                                        <td class="daymaga-new">
                                            <a href="<?php the_permalink(); ?>" class="skinArticleTitle" rel="bookmark">
                                            <?php the_post_thumbnail(); ?>
                                            </a>
                                        </td>
                                        <td class="daymaga2-new">
                                          <p><span class="timepad3"><?= get_post_meta($post->ID, 'date', true); ?> <span>開催</span></p>
                                          <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php echo mb_substr(strip_tags($post-> post_title),0,32).'...'; ?>
                                          </a>
                                          <?php get_template_part( 'new' ); ?></p>
                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                      </li>
                      <?php endforeach; ?>
                  </ul>
                </div>