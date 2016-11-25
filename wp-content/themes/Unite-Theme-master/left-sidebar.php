<div class="leftsidebara">
<!--フリースペース-->
<?php if ( ! dynamic_sidebar( 'left-sidebar' ) ) : ?>
<?php endif; // end sidebar widget area ?>
<!--フリースペース-->
                        <div class="freespaceArea subModulef">
                              <!--メルマガ--><div style="padding:10px; border: 2px dashed #c41840;">【７４３名受講 起業に向けて何から始めればいいの？】<br>
                              <strong><a href="<?php echo esc_url( home_url( '/' ) ); ?>seminar-mail">起業や独立開業に向けたファーストステップ講座１０日間無料メールセミナー</a></strong></div><br>
                              <div style="padding:10px; border: 2px dashed #c41840;">【２３１２名が受講 そもそも起業って何？】<br>
                              <strong><a href="http://ameblo.jp/dearwoman-smaps/entry-12059113071.html" target="_blank">起業のいろはが学べる女性起業セミナー２２日間無料メールセミナー</a></strong></div><br>
                              

<!--プロフィール全体-->

<div class="ibMenu">
            <div class="ibMenuHeader">
                <span class="ibMenuTitle">プロフィール</span>
            </div>

            <div class="ibMenuBody">
                  <!--プロフィール写真-->
                          <div class="ibProfileImageArea">
                            <div class="ibuserProfileImage">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>tsujitomoko">
                                <?php echo get_avatar( $id_or_email, 82, $default, $alt, $args ); ?>
                                </a>
                            </div>
                          </div>
                  <!--プロフィール写真-->
                  <!--プロフィール　ニックネーム-->
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>tsujitomoko"><?php the_author_meta( 'nickname' ); ?>
                                 <br>プロフィール</a>
                              
                  <!--プロフィール　ニックネーム-->
                  <!--プロフィール　簡易-->
                        <div class="ibprofileDetailArea">
                              <ul class="ibskinSubList-pro">
                                  <li>
                                  自己紹介：<?php the_author_meta( 'description' ); ?>
                                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>tsujitomoko">続きを見る</a>
                                  </li>
                              </ul>
                        </div>
                  <!--プロフィール　簡易-->
            </div>
</div>                  

<!--プロフィール全体-->


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
                                  $feed = fetch_feed('http://feedblog.ameba.jp/rss/ameblo/dearwoman-smaps/rss20.xml'); //取得したいRSS
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
                                                <br>
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
                      <li><a href="http://smaps-co.jp" target="_blank" rel="nofollow">株式会社スマップス</a></li>
                      <li><a href="http://ameblo.jp/kabutobirkin/entry-12003543663.html" target="_blank" rel="nofollow">辻朋子の人生経営道</a></li>
                  </ul>
              </div>
      </div>
 <!--ブックマーク-->

 
 <!--DVD下-->


                                    <div style="padding:6px 0 0 0;">
                                           <center>                             
                                          <!--DVD1--><a href="<?php echo esc_url( home_url( '/' ) ); ?>dvd-6step"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/dvd1.png" alt="起業までの全体的な流れとは？" width="180px"/><br>
                                          <b>起業準備キットですぐに起業の準備がスタートできる！</a></b><br><br><br>
                                          <!--DVD2--><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/seminar-idea"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/dvd2.png" alt="起業ネタってどうやって探せばいいの？" border="0" width="180px"/><br>
                                          <b>起業ネタの悩みを解決して起業実現に向けてステップアップできる！</a></b><br><br><br>
                                          <!--DVD3--><a href="<?php echo esc_url( home_url( '/' ) ); ?>dvd-sales"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/dvd3.png" alt="売上 商品 価格 集客戦略　女性の起業" border="0" width="180" /><br>
                                          <b>売上を意識した商品のつくり方と価格の決め方がわかります！</a></b><br><br><br>
                                          <!--DVD4--><a href="<?php echo esc_url( home_url( '/' ) ); ?>dvd-merumaga"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/dvd4.png" alt="メルマガのいろはがわかるので、すぐにはじめられます。" width="180"/><br><b>メルマガのいろはがわかるので、すぐにはじめられます。</a></b><br><br><br>
                                          <!--セミナー--><div style="padding:10px; border:1px solid #c41840;"><a href="http://ameblo.jp/dearwoman-smaps/entry-12132722417.html" target="_blank"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/ph1.png" alt="セミナー" width="157px" border="0" /><br>
                                          あなたの「起業したい！」が実現できます。</a></div><br>
                                          <!--個別相談--><div style="padding:10px; border:1px solid #c41840;"><a href="http://ameblo.jp/dearwoman-smaps/entry-12005541090.html" target="_blank"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/ph2.png" alt="個別相談" width="157px" border="0" /><br>
                                          起業、独立、開業の疑問、経営の悩みを解決します！</a></div><br>
                                          <!--バナー1--><div align="center"><a href="http://ameblo.jp/dearwoman-smaps/entry-12038407874.html" target="_blank"><img border="0" src="<?php bloginfo('template_directory');?>_dw_responsive/images/ph3.png" alt="" width="180px"></a></div><br>
                                          <div style="padding:10px; border:1px solid #c41840;"><a href="http://ameblo.jp/dearwoman-smaps/entry-12078353912.html" target="_blank"><img src="<?php bloginfo('template_directory');?>_dw_responsive/images/ph4.jpg"  alt="鹿児島市ビジネススキル 南日本新聞" border="0" width="157px"/><br>鹿児島で「女性のための起業・経営講座」の講師を務めました。(2015.9.26)</a></div><br>
                                          </center>
                                    </div>
                              <!--囲みメニュー--><div style="padding:10px; border:1px dashed #c41840;"><strong>女性起業を支援します！<br>
                              DearWOMAN 女性起業家コンサルタント辻朋子</strong><br>
                              <br>
                              株式会社スマップス<br>
                              東京都中央区銀座２－１２－１２深山ビル５Ｆ<br>
                              電話番号　<a href="tel:0362641886">０３－６２６４－１８８６</a><br>
                              ファックス番号　０３－６２６４－１８８７<br>
                              営業時間　平日９時～１６時(起業セミナー・個別相談は土日も開催しています)<br>
                              <br>
                              ・<a href="http://ameblo.jp/dearwoman-smaps/entry-12005515493.html" target="_blank">起業や独立開業に向けたファーストステップメールセミナー</a><br>
                              ・<a href="http://ameblo.jp/dearwoman-smaps/entry-12059113071.html" target="_blank">起業のいろはがわかる無料メール講座</a><br>
                              ・<a href="http://dearwoman-smaps.com/seminar-ol" >起業情報満載！無料動画セミナー</a><br>
                              ・<a href="http://ameblo.jp/dearwoman-smaps/entry-12005508929.html" target="_blank">あなたの女性起業家度を診断！</a> <br>
                              ・<a href="http://ameblo.jp/dearwoman-smaps/entry-12044115164.html" target="_blank">起業で自分のスタイルをつくって自由な生き方を手に入れる方法</a><br>
                              ・<a href="http://ameblo.jp/dearwoman-smaps/entry-12005541090.html" target="_blank">個別相談</a><br>
                              ・<a href="http://dearwoman-smaps.com/" >ホームページ</a><br>
                              ・<a href="http://dearwoman-smaps.com/access" >アクセス</a><br>
                              ・<a href="http://dearwoman-smaps.com/contact">お問い合わせ</a><br>
                              </font></div>　　<br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br><!--//.menu_frame-->
                        </div><!--//#freespace-->

</div>