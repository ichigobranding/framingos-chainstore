<!--プロフィール全体-->
<div class="ibMenu profdiv">
            <div class="ibMenuHeader">
                <p><span class="ibMenuTitle">プロフィール</span></p>
            </div>
            <div class="ibMenuBody">
                  <!--プロフィール写真-->
                          <div class="ibProfileImageArea">
                            <div class="ibuserProfileImage">
                                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>profile">
                                <?php echo get_avatar( $id_or_email, 82, $default, $alt, $args ); ?>
                                </a></p>
                            </div>
                          </div>
                  <!--プロフィール写真-->
                  <!--プロフィール　ニックネーム-->
                            <div class="ibProfileImageArea-nickname">
                                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>profile"><?php the_author_meta( 'nickname' ); ?></a></p>
                            </div>
                                <p>自己紹介：<?php the_author_meta( 'description' ); ?>
                                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>profile">続きを見る</a></p>
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