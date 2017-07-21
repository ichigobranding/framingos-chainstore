<div class="ibskinArticle33">
              <h2 class="re1511-ttl">
                <i class="fa fa-calendar"></i> セミナー情報<em class="re1511-ttlSmall">Seminar</em>
                <br>
              </h2>
                <div id="topnewsBox-new">
                 <div class="skinMessageBoard3-s" >
                  <ul>
                        <?php $args = array(
                            'posts_per_page' => '15', //表示件数。-1なら全件表示
                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                            'order' => 'DESC',
                            'post_type' => 'semi', //カスタム投稿タイプ
                            'tax_query' => array( //タクソノミー、タームの設定
                             array(
                            'taxonomy' => 'semibo', //タクソノミー名
                            'field' => 'slug', //基本的にslugに指定します（必須）
                            'terms' => 'semiup' //ターム（スラッグ名）
                          )
                        )
                        );
                        $domestic_post = get_posts($args);
                        if($domestic_post) : foreach($domestic_post as $post) : setup_postdata( $post ); ?>
                       <li class="magawaku">
                                                  <table class="magatable">
                                                    <tbody>
                                                      <tr>
                                                        <td class="daymaga-new"><?php the_field('semiday'); ?>　開催</td>
                                                        <td class="daymaga2-new">
                                                        <a href="<?php the_permalink(); ?>">
                                                          <?php the_title(); ?>
                                                        </a>
                                                        <?php get_template_part( 'new' ); ?>
                                                      </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                            </li>
                          <?php endforeach; ?>
                        <?php else : //記事が存在しない場合 ?>
                        <p>表示する記事がありません。</p>
                          <?php endif;
                          wp_reset_postdata(); ?>
                    </ul>
                       <!--<div class="iblistLink">
                        <a href="<?//php echo esc_url( home_url( '/' ) ); ?>/semiuplist">
                              一覧を見る
                        </a>
                      </div>-->
                 </div>
                </div>
                <!-- セミナー -->
</div>
<!--<a href="http://dearwoman-smaps.com/category/seminar">開催セミナー一覧を見る</a>-->