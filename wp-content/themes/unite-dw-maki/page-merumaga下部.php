<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
                                                              <h1 class="entry-title">
                                                                  <?php the_title(); ?>
                                                              </h1><br>
                                                                <!--記事　中身-->
                                                                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                                  <?php the_content('詳細はこちら'); ?>
                                                                  <?php wp_link_pages(array('before' => '<p class="page-link"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
                                                                  
                                                                  <?php endwhile; else: ?>
                                                                  <p>Sorry, no posts matched your criteria.</p>
                                                                  <?php endif; ?>          
                                                                <!--記事　中身-->
                                                                <?php get_template_part('mailmag-page'); ?>
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
