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
                                                      <div class="ibskinArticleHeader-consul">
                                                          <h2 class="fontW6"><?php the_title(); ?></h2>
                                                          <div class="※">
                                                                    <!--記事　中身-->
                                                           <?php while ( have_posts() ) : the_post(); ?> 
                                                                <?php get_template_part( 'consul-mainparts' ); ?>

                                                                  <?php endwhile; // end of the loop. ?>
                                                                    <!--記事　中身-->
                                                                <div class="hensyuu">
                                                                <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                                </div>
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