 <!-- ameblo -->
  <div class="ibMenu">
                <div class="ibMenuHeader">
                    <span class="ibMenuTitle">アメブロ 最新の記事</span>
                </div>
                    <div class="ibMenuBody">
                            <?php
                                //以下3行の項目を任意に変更
                                  $display_posts_count = 10; //実際に表示したい記事件数
                                  $get_posts_count = 15; //取得する記事件数（PR記事を含むので$display_posts_countより少し多めに設定）
                                  ////////////////////////////////////////////////////////////////////
                                  ////////////////////////////////////////////////////////////////////
                                  ///下部の一覧も編集する//////////////////////////////////////////////
                                  ////////////////////////////////////////////////////////////////////
                                  $feed = fetch_feed('http://rssblog.ameba.jp/woman-pc/rss20.xml'); 
                                  ////////////////////////////////////////////////////////////////////
                                  ///下部の一覧も編集する//////////////////////////////////////////////
                                  ////////////////////////////////////////////////////////////////////
                                  ////////////////////////////////////////////////////////////////////
                                  ////////////////////////////////////////////////////////////////////
                                //
                                  $counter = 0; //ループ回数カウンター
                                  include_once(ABSPATH . WPINC . '/feed.php');
                                  if (!is_wp_error( $feed ) ) : //エラーがなければ
                                      date_default_timezone_set('Asia/Tokyo'); //タイムゾーンを日本時間に設定
                                       $maxitems = $feed->get_item_quantity($get_posts_count); //取得件数
                                       $feed_items = $feed->get_items(0, $maxitems); //指定件数分の配列作成
                                  endif;
                            ?>
                                    <ul class="ibskinSubList">
                                          <?php
                                          if ( $feed_items == 0 )  echo '<li>新しい記事はないようです</li>';
                                            else foreach ( $feed_items as $item ) :
                                              if( !preg_match('/^PR:/', $item->get_title() ) && $counter < $display_posts_count ): //PR記事の除外 && 表示件数が設定件数を超えないかチェック
                                          ?>
                                          <li><a href="<?php echo $item->get_permalink(); ?>" target="blank"><?php echo $item->get_title(); ?></a><?php get_template_part( 'new' ); ?> 
                                          </li>
                                          <?php $counter++;
                                                endif;
                                                endforeach; ?>
                                              <div class="iblistLink">
                                              <!-- ///////////////////////////////////////-->
                                              <!-- アメブロの一覧を変更する ///////////////////-->
                                              <!-- ///////////////////////////////////////-->
                                               <a href="http://ameblo.jp/ichigo-meishi/entrylist.html" target="blank">
                                               <!-- ///////////////////////////////////////-->
                                               <!-- アメブロの一覧を変更する ///////////////////-->
                                               <!-- ///////////////////////////////////////-->
                                               一覧を見る</a>
                                              </div>
                                    </ul>
                    </div>
  </div>
<div class="clear"></div>
        <!-- ameblo -->