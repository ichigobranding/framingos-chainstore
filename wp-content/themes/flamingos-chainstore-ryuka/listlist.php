
<!--リスト一覧 -->
                  <ul class="magawaku2">
 				<?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li class="magawaku">
                                  <table class="magatable">
                                    <tbody>
                                      <tr>
                                        <td class="daymaga"><?php the_time('Y-n-j') ?></td>
                                        <td class="daymaga2">

                                        <a href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                        </a>
                                        <?php get_template_part( 'new' ); ?>
                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                    </li>
                    <?php endwhile; endif; ?>
                  </ul>
<!--リスト一覧 -->
