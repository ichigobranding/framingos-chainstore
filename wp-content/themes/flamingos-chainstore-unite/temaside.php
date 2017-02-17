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
<div class="clear"></div>
 <!--テーマ-->