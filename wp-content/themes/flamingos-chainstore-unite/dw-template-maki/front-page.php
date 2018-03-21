<?php get_header(); ?>
<div class="link-b"><!-- リンクを黒に -->
<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
      	<div id="primary" class="content-area">
      		<main id="main" class="site-main" role="main">
      			<!-- topbana -->
      			<div class="row">
			           <div class="tbanana imgbtn col-md-12">
			                <h2 class="h2del"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/top-bana.png" alt="※"/></h2>
		            	</div>
		        </div>
		    			<!-- topbana -->

		    			<h1>テンプレートを保存しておく</h1>
				<div class="row">
						<div class="col-md-8">
							<div class="content-dw clearfix">
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p><b>テキストテキストテキストテキストテキスト</b></p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p><strong>テキストテキストテキストテキストテキスト</strong></p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
								<h3 class="bana-big0">
								タイトル２
								</h3>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
									<p>テキストテキストテキストテキストテキスト</p><br>
								<h3 class="bana-big0-1">
								タイトル３
								</h3>
								<?php get_template_part( 'ap-bana-big-wide' ); ?>
								<?php get_template_part( 'kasegu-merumaga' ); ?>
							</div><!--content-dw">-->
						</div>
					<div class="col-md-4">
					<?php get_template_part( 'sidebar' ); ?>
						<!--<?//php get_sidebar(); ?>-->
					</div><!-- side -->
				</div><!-- row -->
      		</main><!-- #main -->
      	</div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->
</div><!-- リンクを黒に -->
<?php get_footer(); ?>