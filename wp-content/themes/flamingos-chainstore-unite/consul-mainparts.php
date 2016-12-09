                             <?php
                                     if( get_field('noform') )
                                    {
                                    echo '<button type="button" class="btn btn-danger">締め切りました</button>';
                                    }
                                    else
                                    {
                                    }
                              ?>
                              <!-- 満席 -->       
 <!--<div class="semititletopheader">こんな方々がコンサルティング（相談）にいらしています。 </div>
<?php the_field('conwho'); ?>
<div class="semititletopheader">コンサルティングを受けるメリット </div>
<?php the_field('consulplus'); ?>-->
<table class="table">
            <tr class="tabeletitlebg"><th colspan="2">コンサルティング概要</th></tr>
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
            <td class="td_nowrap" scope="row">コンサルティング料</td>
            <td><?php the_field('consulpay'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">お支払方法</td>
            <td>・コンサルティング料のお支払い方法は「お振込」または「カード決済」です。<br>
・お振込口座及びカード決済の手続きにつきましては、お申込み後メールでご案内します。なおカード決済はPayPalのサイトより行っていただきます。あらかじめご了承ください。※PayPalサイト → <a href="https://www.paypal.jp/jp/home/" target="_blank">https://www.paypal.jp/jp/home/</a></br>
<a href="<?php bloginfo('template_directory');?>/contact">・コンサルティング料のお支払方法等に何かご不明な点、ご質問がありましたらお気軽にお問い合わせください。</a>
            </td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">キャンセルポリシー</td>
            <td>
コンサルティング料をお支払いただいた後のキャンセルは、コンサルティング日の前々日までにキャンセルのご連絡をいただいた場合、コンサルティング料を返金させていただきます。あらかじめご了承ください。
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
            <td><a href="<?php bloginfo('template_directory');?>/contact">こちらのメールフォーム</a>にてお問合せ下さい。</br>
            </td>
            <tr class="tabeletitlebg"><th colspan="2"></th></tr>
            </table>
                  <div class="formcss">
                        <div class="naiyou2"><span class="glyphicon glyphicon-pencil icontopp"></span>コンサルティングの予約お申込みはこちらからお願いいたします。</div>
                  </div>   
				<!-- 満席 -->
						<?php
						if( get_field('noform') )
						{
						    echo '<div class="manseki">募集終了</div>';
						}
						else
						{
						    the_field('consulform');
						}
						?>
				<!-- 満席 -->