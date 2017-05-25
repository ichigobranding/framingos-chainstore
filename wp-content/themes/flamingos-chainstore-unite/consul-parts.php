                              <?php
                                     if( get_field('noform') )
                                    {
                                    echo '<p><span style="color: #ff0000;"><strong>【募集終了】</strong></span></p>';
                                    }
                                    else
                                    {
                                    }
                              ?>
                              <!-- 満席 -->
                    <div class="conpa">
                      <p>
                        <span class="pinkfont">日時：<?php the_field('consulday'); ?><?php the_field('constart'); ?></span><br>
                        場所：<?php the_field('consulplace'); ?><br>
                        受講料：<?php the_field('consulpay'); ?><br>
                        ※お支払方法は「お振込」または「カード決済」です。
                      </p>
                    </div>