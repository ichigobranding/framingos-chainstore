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