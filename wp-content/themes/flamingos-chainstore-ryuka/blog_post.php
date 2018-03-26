<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="robots" content="noindex,nofollow,noarchive" />
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body>
<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                          <div class="kiji-page">
                               <!--記事全体-->
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      <div class="ibskinArticleBody2">
                                                                <!--記事　中身-->
                                                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                                <?php if ( get_post_meta($post->ID,'満席',TRUE) == '満席'): ?>
                                                                <p><span class="manseki">こちらの募集は終了致しました</span></p>
                                                                <?php endif; ?>
                                                                <?php if ( get_post_meta($post->ID,'開催日時',TRUE) ): ?>
                                                                <p class="semi_date">開催日時：<?php echo get_post_meta($post->ID,'開催日時',TRUE); ?></p>
                                                                <?php endif; ?>
                                                                
                                                                <?php the_content('詳細はこちら'); ?>
                                                                
                                                                <!--カスタムフィールド2-->
                                                                <table id="data">
                                                                <tr><th colspan="2">概要</th></tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row"><?php echo get_post_meta($post->ID,"種類",true); ?></td>
                                                                <td><?php echo get_post_meta($post->ID,"セミナー名",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">開催日時</td>
                                                                <td><?php echo get_post_meta($post->ID,"開催日時",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">開催場所</td>
                                                                <td><?php echo get_post_meta($post->ID,"開催場所",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">住所</td>
                                                                <td><?php echo get_post_meta($post->ID,"住所",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">コンサルティング料</td>
                                                                <td><?php echo get_post_meta($post->ID,"受講料",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">お支払方法</td>
                                                                <td><?php echo get_post_meta($post->ID,"お支払方法",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">キャンセルポリシー</td>
                                                                <td>
                                                                <?php
                                                                $post_type = get_post_meta($post->ID,"種類",true);
                                                                if($post_type == "セミナー（有料）" ){
                                                                  echo "セミナー受講料をお支払いただいた後のキャンセルは、セミナー開催日の前々日までにキャンセルのご連絡をいただいた場合、セミナー受講料を返金させていただきます。";
                                                                }elseif($post_type == "コンサルティング" ){
                                                                  echo "コンサルティング料をお支払いただいた後のキャンセルは、コンサルティング日の前々日までにキャンセルのご連絡をいただいた場合、コンサルティング料を返金させていただきます。あらかじめご了承ください。";
                                                                }
                                                                ?>
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">募集期間</td>
                                                                <td><?php echo get_post_meta($post->ID,"募集期間",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">定員</td>
                                                                <td><?php echo get_post_meta($post->ID,"受講定員",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">主催</td>
                                                                <td><?php echo get_post_meta($post->ID,"主催",true); ?></td>
                                                                </tr>
                                                                <tr>
                                                                <td class="td_nowrap" scope="row">備考</td>
                                                                <td><?php echo get_post_meta($post->ID,"備考",true); ?></td>
                                                                </tr>
                                                                <tr><td>お問い合わせ</td>
                                                                <td>お電話又は<a href="/contact">こちらのメールフォーム</a>にてお問合せ下さい。</br>
                                                                TEL　03-6264-1886　（担当：木村）</td>
                                                                </table>    
                                                                
                                                                <!--カスタムフィールド2-->
                                                                <?php if ( get_post_meta($post->ID,'満席',TRUE) == '満席'): ?>
                                                                <p><span class="manseki">募集を終了しました</span></p>
                                                                <?php else: ?>
                                                                <div class="formNavi">お申込みは以下のフォームからお願い致します</div>
                                                                <?php 
                                                                $post_type = get_post_meta($post->ID,"種類",true);
                                                                if($post_type == "セミナー（有料）" ){
                                                                  echo do_shortcode( '[contact-form-7 id="10410" title="有料セミナー申し込み"]' );
                                                                }elseif($post_type == "コンサルティング" ){
                                                                  echo do_shortcode( '[contact-form-7 id="7215" title="コンサルティング申し込み個別ページ別フォーム"]' );
                                                                }else{
                                                                  echo do_shortcode( '[contact-form-7 id="10408" title="無料セミナー申し込み"]' );
                                                                }
                                                                ?>
                                                                
                                                                <?php endif; ?>
                                                                
                                                                <?php endwhile; else: ?>
                                                               
                                                                <p>募集が見当たりませんでした。</p>
                                                                
                                                                <?php endif; ?>

                                                                <!--記事　中身-->
                                                            <div class="hensyuu">
                                                            <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                            </div>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                               <!--記事全体-->
                        </div><!--kiji page-->
                   </div><!--col-md-8 col-md-push-2-->
                </div> <!--row-->
            </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->
<?php wp_footer(); ?>
</body>
</html>