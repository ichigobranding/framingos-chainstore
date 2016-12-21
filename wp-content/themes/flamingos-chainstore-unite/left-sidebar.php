<div class="leftsidebara">
    <!--フリースペース-->
      <?php if ( ! dynamic_sidebar( 'freespase' ) ) : ?>
      <?php endif; // end sidebar widget area ?>
    <!--フリースペース-->

<!--プロフィール全体-->
<div class="ibMenu profdiv">
            <div class="ibMenuHeader">
                <span class="ibMenuTitle">プロフィール</span>
            </div>
            <div class="ibMenuBody">
                  <!--プロフィール写真-->
                          <div class="ibProfileImageArea">
                            <div class="ibuserProfileImage">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>profile">
                                <?php echo get_avatar( $id_or_email, 82, $default, $alt, $args ); ?>
                                </a>
                            </div>
                          </div>
                  <!--プロフィール写真-->
                  <!--プロフィール　ニックネーム-->
                            <div class="ibProfileImageArea-nickname">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>profile"><?php the_author_meta( 'nickname' ); ?></a>
                            </div>
                                自己紹介：<?php the_author_meta( 'description' ); ?>
                                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>profile">続きを見る</a>
                  <!--プロフィール　ニックネーム-->
                  <!--プロフィール　簡易-->
                        <!--<div class="ibprofileDetailArea">
                              <ul class="ibskinSubList-pro">
                                  <li>
                                  自己紹介：<?//php the_author_meta( 'description' ); ?>
                                  <a href="<?//php echo esc_url( home_url( '/' ) ); ?>profile">続きを見る</a>
                                  </li>
                              </ul>
                        </div>-->
                  <!--プロフィール　簡易-->
            </div>
</div>                  
<!--プロフィール全体-->
<div class="clear"></div>
 <!--最新の記事-->
 <div class="ibMenu">
      <div class="ibMenuHeader">
      <span class="ibMenuTitle">最新の記事</span>
      </div>
      <div class="ibMenuBody">
          <?php get_template_part( 'blogul-sidebar' ); ?>
      </div>
 </div>
 <!--最新の記事-->

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
                                  $feed = fetch_feed('http://rssblog.ameba.jp/woman-pc/rss20.xml'); //取得したいRSS
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
                                               <a href="http://ameblo.jp/dearwoman-smaps/entrylist.html" target="blank">一覧を見る</a>
                                              </div>
                                    </ul>
                    </div>
  </div>       
        <!-- ameblo -->

  <div class="ibMenu">
      <div class="ibMenu2">
                <div class="ibMenuHeader">
                    <span class="ibMenuTitle">テーマ</span>
                </div>

               <div class="ibMenuBody ibskinSubList">

               <!--カスタムト投稿のテーマ-->  
                  <?php
                                // カスタム分類名
                                $taxonomy = 'message';

                                // パラメータ 
                                $args = array(
                                    // 子タームの投稿数を親タームに含める
                                    'pad_counts' => true,
                                  
                                    // 投稿記事がないタームも取得
                                    'hide_empty' => false
                                );

                                // カスタム分類のタームのリストを取得
                                $terms = get_terms( $taxonomy , $args );

                                if ( count( $terms ) != 0 ) {
                                    echo '<ul class="sidetema ibskinSubList">';
                                     
                                    // タームのリスト $terms を $term に格納してループ
                                    foreach ( $terms as $term ) {
                                    
                                        // タームのURLを取得
                                        $term = sanitize_term( $term, $taxonomy );
                                        $term_link = get_term_link( $term, $taxonomy );
                                        if ( is_wp_error( $term_link ) ) {
                                            continue;
                                        }
                                        
                                        // 子タームの場合はCSSクラス付与
                                        if( $term->parent != 0 ) {
                                            echo '<li class="children">';
                                        } else {
                                            echo '<li>';
                                        }
                                        
                                        // タームのURLと名称を出力
                                        echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>(' . $term->count . ')';
                                        echo '</li>';
                                    }
                                   
                                echo '</ul>';
                                }
                                ?>


                                <?php
                                // カスタム分類名
                                $taxonomy = 'tema';

                                // パラメータ 
                                $args = array(
                                    // 子タームの投稿数を親タームに含める
                                    'pad_counts' => true,
                                  
                                    // 投稿記事がないタームも取得
                                    'hide_empty' => false
                                );

                                // カスタム分類のタームのリストを取得
                                $terms = get_terms( $taxonomy , $args );

                                if ( count( $terms ) != 0 ) {
                                    echo '<ul class="ibskinSubList">';
                                     
                                    // タームのリスト $terms を $term に格納してループ
                                    foreach ( $terms as $term ) {
                                    
                                        // タームのURLを取得
                                        $term = sanitize_term( $term, $taxonomy );
                                        $term_link = get_term_link( $term, $taxonomy );
                                        if ( is_wp_error( $term_link ) ) {
                                            continue;
                                        }
                                        
                                        // 子タームの場合はCSSクラス付与
                                        if( $term->parent != 0 ) {
                                            echo '<li class="children">';
                                        } else {
                                            echo '<li>';
                                        }
                                        
                                        // タームのURLと名称を出力
                                        echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>(' . $term->count . ')';
                                        echo '</li><?php the_title() ?>';
                                    }
                                   
                                echo '</ul>';
                                }
                                ?>
            <!--カスタムト投稿のテーマ-->  
              </div>
      </div>
  </div>
 <!--テーマ-->
 <!--ブックマーク-->
      <div class="ibMenu">
              <div class="ibMenuHeader">
                  <span class="ibMenuTitle">ブックマーク</span>
              </div>
              <div class="ibMenuBody">
                  <ul class="ibskinSubList">
                      <li><a href="※" target="_blank" rel="nofollow">リンクテキスト</a></li>
                      <li><a href="※" target="_blank" rel="nofollow">リンクテキスト</a></li>
                  </ul>
              </div>
      </div>
 <!--ブックマーク-->
 
</div>