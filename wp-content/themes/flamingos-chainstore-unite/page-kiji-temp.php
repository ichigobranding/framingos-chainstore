<div class="kiji-page">
   <!--記事全体-->
                                    
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">  
                                                            <div class="ibskinArticleBody2">
                                                                      <!--記事　中身-->
                                                                      
                                                                          <?php while ( have_posts() ) : the_post(); ?>

                                                                          <?php get_template_part( 'content', 'page' ); ?>
                                                                          <?php the_field('blog-nakami'); ?>

                                                                          <?php endwhile; // end of the loop. ?>
                                                                      
                                                                      <!--記事　中身-->
                                                                  <br><br><br><br>
                                                                  <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>

                                                            </div>
                                                </div>
                                              </div>
                                            </div>
      <!--記事全体-->
</div>