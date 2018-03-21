            <div class="ibMenuHeader1-1">
                <h3 class="ibMenuTitle">インフォメーション</h3>
            </div>
<!-- 新着情報 -->
     <div id="topnewsBox-new5">
                  <ul>
                    <?php
                        $wp_query = new WP_Query();
                        $param = array(
                            'posts_per_page' => '4', //表示件数。-1なら全件表示
                            'post_type' => array('merumaga','newss','infomationame','merumaga2'), //カスタム投稿タイプの名称を入れる
                            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                            'order' => 'DESC'
                        );
                        $wp_query->query($param);
                        if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li>
                     <!-- <div class="timepad4"><?php //the_time('Y年n月j日(D)') ?></div>-->
                           <p><?php get_template_part( 'icon' ); ?>
                                           <span class="infoli">
                                                <!-- アメブロ直リンク -->
                                                <?php $post_type = get_post_type();
                                                if($post_type === 'infomationame'){ ?>
                                                  <a href="<?php the_field('ame-new-url'); ?>" target="_blank">
                                                        <?php the_title(); ?>
                                                  </a>
                                                <?PHP }else{ ?>
                                                  <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                  </a>
                                                <?php } ?>
                                                <!-- アメブロ直リンク -->
                                            </span>
                      <?php the_time('Y年n月j日(D)') ?><?php get_template_part( 'new' ); ?></p>
                    </li>
                    <?php endwhile; endif; ?>
                  </ul>
                      <div class="iblistLink3">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>newsslist">
                              一覧を見る
                        </a>
                      </div>
    </div>
      
<!-- 新着情報 -->

<!--</div>-->