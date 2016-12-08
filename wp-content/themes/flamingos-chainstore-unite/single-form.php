<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package flat-bootstrap
 */
get_header(); ?>
<div class="container">
<div id="main-grid" class="row">
		 <div d="primary" class="col-md-8 col-md-offset-2">
		<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="titleichiran3">
                    	<?php the_title(); ?>
                	</div>
                	<br>
                	<?php the_field('consulnakami'); ?><br><br>
					<?php endwhile; // end of the loop. ?>
                        <!-- 募集終了 -->
                            <?php
                            if( get_field('cunsul-unyo') )
                            {
                                echo '<div class="manseki"> 【募集終了】</div>
<br>
募集を終了いたしました。<br><br>
募集は、メルマガにて優先的にご案内しております。<br><br>
<b><a href="https://24auto.biz/ichigo-branding/touroku/hp.htm" target="blank">メルマガのご登録はこちらです。</a></b><br><br><br>';
                            }

                            else
                            {
                                the_field('cunsulform'); 
                            }
                            ?>
                         <!-- 募集終了 -->
						<br><br><br><br>
					<p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p><br>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>