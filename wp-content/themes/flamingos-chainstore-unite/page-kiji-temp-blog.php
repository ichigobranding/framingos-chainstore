<div class="kiji-page">
   <!--記事全体-->
                                    
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">  
                                                            <div class="ibskinArticleBody2">
                                                                      <!--記事　中身-->

                                                                          <?php while ( have_posts() ) : the_post(); ?>

                                                                          <?php get_template_part( 'content', 'page' ); ?>
                                                          <!--記事info-->
                                                                  <div class="ibarticleDetailArea">
                                                                      <time datetime="2016-08-12" pubdate="pubdate"><?php echo get_the_date(); ?></time><?php get_template_part( 'new' ); ?>
                                                                      <br />
                                                                        テーマ：<?php echo get_the_term_list( $id,tema, $before, $sep, $after ); ?>
                                                                  </div>
                                                          <!--記事info-->
                                                                          <?php the_field('blog-nakami'); ?>

                                                                          <?php endwhile; // end of the loop. ?>
                                                                      
                                                                      <!--記事　中身-->
                                                                  <div class="hensyuulink">
                                                                  <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                                  </div>
                                                            </div>
                                                </div>
                                              </div>
                                            </div>
                                <div class="iblistLink">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>bloglist">
                                              ブログ一覧へ
                                        </a>
                                </div>
      <!--記事全体-->
</div>