<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

<div class="container conbg">
	  <div id="main-grid2" class="row"><!-- .row -->
		<div id="primary" class="content-area">
		  <main id="main" class="site-main" role="main">
					<div class="row">
						<div class="col-md-8 col-md-push-2">
						  <div class="kiji-page">
							   <!--記事全体-->
											<div class="ibskinArticle">
											  <div class="ibskinArticle2">
												<div class="ibskinArticle3">
													  <div class="ibskinArticleBody2">
																<!--記事　中身-->

				<div class="titleichiran3">
					<h2 class="fontW6"><?php the_title(); ?></h2>
				</div>
				<?php the_field('semibun'); ?>
	  <table class="table-bosyuu">
			<tr class="tabeletitlebg"><th colspan="2">募集概要</th></tr>
			<tr>
			<td class="td_nowrap tabletitle" scope="row">募集名</td>
			<td><?php the_title(); ?><!--<?//php the_field('seminame'); ?>--></td>
			</tr>
			<!--<tr>
			<td class="td_nowrap" scope="row">講師</td>
			<td>
				<?//php the_field('koushimei'); ?>
			</td>
			</tr>-->
			<tr>
			<td class="td_nowrap" scope="row">開催日時</td>
			<td><p><?php the_field('semiday'); ?>　<?php the_field('semitime'); ?><p></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">開催場所</td>
			<td><?php the_field('semiplace'); ?></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">住所</td>
			<td>
			<?php the_field('semiaddmain'); ?><br>
			<?php the_field('semiadd'); ?>
			</td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">料金</td>
			<td><?php the_field('semimoney'); ?></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">お支払方法</td>
			<td><?php the_field('semipay'); ?></br>
				  <?php the_field('payshousai'); ?>
			  </br><?php the_field('semiquestion'); ?>
			</td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">キャンセルポリシー</td>
			<td><?php the_field('semican'); ?></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">募集期間</td>
			<td><?php the_field('semidaykikan'); ?></br>※定員になり次第、募集を締め切らせていただきます</td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">定員</td>
			<td><?php the_field('semitei'); ?></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">主催</td>
			<td><?php the_field('semisyusai'); ?></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">備考</td>
			<td><?php the_field('semibiko'); ?></td>
			</tr>
			<tr>
			<td class="td_nowrap" scope="row">注意事項</td>
			<td><?php the_field('semityuui'); ?><?php the_field('semitest'); ?></td>
			</tr>
			<tr><td>問い合わせ</td>
			<td>お電話又は<a href="get_stylesheet_directory_uri()/contact">こちらのメールフォーム</a>にてお問合せ下さい。</td>
			<tr class="tabeletitlebg"><th colspan="2"></th></tr>
			</table>


		<?php while ( have_posts() ) : the_post(); ?>
			<!--<?//php the_content(); ?>-->
			<!-- 募集終了 -->
							<?php
							 if( get_field('noform') )
							 {
							 	the_field('semiyudo');
							 }
							 else
							 {
							   the_content();
							 }
							?>
						 <!-- 募集終了 -->
			<?php endwhile; // end of the loop. ?>

				 <!-- <div class="formcss">
						<div class="naiyou2"><span class="glyphicon glyphicon-pencil icontopp"></span>このセミナーの予約お申込みはこちらからお願いいたします。</div>
				  </div>-->

						
		<!-- <div class="right">
				 <a href="<?//php bloginfo(); ?>/semi"><button type="button" class="btn bottom-shousai">セミナー・講演一覧に戻る</button></a>
		</div>-->

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
<?php get_footer(); ?>
