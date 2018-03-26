<div class="kiji-page">

 <!--記事全体-->
                                          <article>
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">
                                                      <div class="ibskinArticleHeader">
                                                          <div class="ibskinArticleTitle">
                                                                <h1>
                                                                  <b><?php the_title(); ?></b>
                                                                </h1>
                                                          </div>
                                                      </div>

                                                      
                                                      <div class="ibskinArticleBody2">

                                                          <!--記事info-->
                                                                          <div class="ibarticleDetailArea">
                                                                              <time datetime="2016-08-12" pubdate="pubdate"><?php echo get_the_date(); ?></time><?php get_template_part( 'new' ); ?>
                                                                              <br /><?php get_template_part( 'tema' ); ?>
                                                                          </div>
                                                          <!--記事info-->

                                                                <!--記事　中身-->
                                                                
                                                                      <?php the_field('blog'); ?>


                                                                            <?php
                                                                            if (have_posts()) : while (have_posts()) : the_post(); ?>

                                                                                    <?php the_content(); ?>
                                                                                    
                                                                            <?php endwhile; else: ?> 
                                                                                  <p>記事が見つかりませんでした。</p>
                                                                            <?php endif; ?>
                                                                
                                                                <!--記事　中身-->
                                                            <br><br><br><br>
                                                            <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>

                                                      </div>
                                              

                                                </div>
                                              </div>
                                            </div>
                                          </article>
   <!--記事全体-->

                                   <div class="iblistLink">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>bloglist">
                                              ブログ一覧へ
                                        </a>
                                </div>
</div>

