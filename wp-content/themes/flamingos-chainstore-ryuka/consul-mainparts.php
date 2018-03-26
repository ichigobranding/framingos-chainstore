<?php the_field('consulnakami'); ?>
<table class="table-bosyuu">
            <tr class="tabeletitlebg"><th colspan="2">募集概要</th></tr>
            <tr>
            <td class="td_nowrap tabletitle" scope="row">開催日時</td>
            <td><span class="conday"><?php the_field('consulday'); ?><?php the_field('constart'); ?></span></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">開催場所</td>
            <td><?php the_field('consulplace'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">住所</td>
            <td><?php the_field('conadd'); ?><?php the_field('semiadd'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">料金</td>
            <td><?php the_field('consulpay'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">お支払方法</td>
            <td><?php the_field('payway'); ?>
                  <a href="get_stylesheet_directory_uri()/contact">何かご不明な点、ご質問がありましたらお気軽にお問い合わせください。</a>
            </td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">キャンセルポリシー</td>
            <td>
                  <?php the_field('kpr'); ?>
            </td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">定員</td>
            <td><?php the_field('contei'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">主催</td>
            <td><?php the_field('consyusai'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">備考</td>
            <td><?php the_field('conbiko'); ?></td>
            </tr>
            <tr><td>お問い合わせ</td>
            <td><a href="get_stylesheet_directory_uri()/contact">こちらのメールフォーム</a>にてお問合せ下さい。</br>
            </td>
            <tr class="tabeletitlebg"><th colspan="2"></th></tr>
            </table>
                  <div class="formcss">
                        <!--<div class="naiyou2"><span class="glyphicon glyphicon-pencil icontopp"></span>コンサルティングの予約お申込みはこちらからお願いいたします。</div>-->
                  </div>   

                        <!-- 募集終了 -->
                            <?php
                            if( get_field('noform') )
                            {
                                echo '<div class="manseki">募集終了</div>
                              <br>
                              募集を終了いたしました。<br><br>
                              募集は、メルマガにて優先的にご案内しております。<br><br>
                              <b><a href="get_stylesheet_directory_uri()/mailmag">メルマガのご登録はこちらです。</a></b><br><br><br>';
                            }
                            else
                            if( get_field('semiend') )
                            {
                                echo '<div class="manseki">満席のため締め切りました</div>
                              <br>
                              募集を終了いたしました。<br><br>
                              募集は、メルマガにて優先的にご案内しております。<br><br>
                              <b><a href="get_stylesheet_directory_uri()/mailmag">メルマガのご登録はこちらです。</a></b><br><br><br>';
                            }
                            else
                            {
                                the_field('conform22'); 
                            }
                            ?>
                         <!-- 募集終了 -->