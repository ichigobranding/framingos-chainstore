<ul class="blogulpad">
    <?php
        $wp_query = new WP_Query();
        $param = array(
            'posts_per_page' => '10', //表示件数。-1なら全件表示
            'post_type' => array('blog-fl'), //カスタム投稿タイプの名称を入れる
            'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
            'order' => 'DESC',
        );
        $wp_query->query($param);
        if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
    ?>
      <li class="">
      <!--記事全体-->
      <article>
        <div class="ibskinArticleblog">
          <div class="ibskinArticleBody2">
          <!--記事　中身-->
                    <div class="row">
                      <div class="col-md-5 toumei">
                        <a href="<?php the_permalink(); ?>" class="skinArticleTitle" rel="bookmark">
                          <div class="casecss thumbnail img">
                            <?php the_post_thumbnail(); ?>
                          </div>
                        </a>
                      </div>
                      <div class="col-md-7 timepad">
                        <div class="timepad2">
                          <time datetime="2016-08-12" pubdate="pubdate"><?php echo get_the_date(); ?></time>
                          <?php get_template_part( 'new' ); ?>
                        </div>
                        <h1 class="blogultitle">
                            <a href="<?php the_permalink(); ?>" class="ibskinArticleTitle" rel="bookmark">
                              <?php the_title(); ?>
                            </a>
                        </h1>
                        <!--テーマ：<?php //echo get_the_term_list( $id,tema, $before, $sep, $after ); ?>-->
                        <div class="nainai">
                          <?php echo wp_trim_words( get_field('blog-nakami'), 80, '...' ); ?>
                        <!--<?//php the_field('blog-nakami'); ?>-->
                        <!--<?//php the_excerpt(); ?>-->
                        </div>
                      </div>
                    </div>
                    <!--記事　中身-->
                <div class="hensyuulink">
                  <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                </div>
          </div>
        </div>
      </article>
   <!--記事全体-->
</li>
<?php endwhile; endif; ?>
</ul>
<div class="iblistLink">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>bloglist">
      記事一覧へ
  </a>
</div>