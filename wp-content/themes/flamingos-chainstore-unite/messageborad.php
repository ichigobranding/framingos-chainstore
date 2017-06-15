<div class="skinMessageBoard" >

<!-- 新着情報 -->

     <div class="skinMessageBoard3" >
                  <ul class="magawaku2">
                    <?php
                        $wp_query = new WP_Query();
                        $param = array(
                            'posts_per_page' => '15', //表示件数。-1なら全件表示
                            'post_type' => array('merumaga','newss','infomationame'), //カスタム投稿タイプの名称を入れる
                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                            'order' => 'DESC'
                        );
                        $wp_query->query($param);
                        if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li class="magawaku">
                                  <table class="magatable">
                                    <tbody>
                                      <tr>
                                        <td class="daymaga"><?php the_time('Y-n-j') ?></td>
                                        <td class="daymaga2">

                                            <?php get_template_part( 'icon' ); ?>

                                        <a href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                        </a>
                                        <?php get_template_part( 'new' ); ?>
                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                    </li>
                    <?php endwhile; endif; ?>
                  </ul>

                      <div class="iblistLink">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>newsslist">
                              一覧を見る
                        </a>
                      </div>
    </div>
      
<!-- 新着情報 -->

</div>