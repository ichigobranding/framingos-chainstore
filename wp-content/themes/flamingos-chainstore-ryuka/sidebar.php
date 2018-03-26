<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Sidebar positioned on the right. If no widgets added, display some as samples.
 *
 * @package flat-bootstrap
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
<!--無料カスンセリング-->
<div class="imgbtn"><a href="https://ryuka-kampo.com/counseling"><img class="alignnone size-full wp-image-330" src="<?php echo get_stylesheet_directory_uri() ?>/images/side-bana.png" alt="side-bana3"/></a></div><br>
<!--無料カスンセリング-->
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
<!-- テーマ -->
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

<div id="sideba">
               <!--<div class="imgbtn imgbtnpad-top">
                      <a href="<?//php echo esc_url( home_url( '/' ) ); ?>/member">
                          <img src="<?//php echo get_stylesheet_directory_uri() ?>/images/member-bana.png" alt="※"/>
                      </a>
               </div>-->

               <!--<div class="imgbtn imgbtnpad-top">
                      <a href="<?//php echo esc_url( home_url( '/' ) ); ?>/※">
                          <img src="<?//php echo get_stylesheet_directory_uri() ?>/images/side-bana.png" alt="※"/>
                      </a>
               </div>

              <div class="imgbtn imgbtnpad">
                      <a href="<?//php echo esc_url( home_url( '/' ) ); ?>/※">
                          <img src="<?//php echo get_stylesheet_directory_uri() ?>/images/side-bana-long.png" alt="※"/>
                      </a>
               </div>-->
            <div class="sidewii">
              <?php if( is_active_sidebar('home1') ) dynamic_sidebar( 'home1' ); ?><br>
              <?php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?><br>
              <?php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?><br>
            </div>
</div>

<div class="clear"></div>

  </div><!-- #secondary　最後 -->


