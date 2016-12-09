                             <?php
                                     if( get_field('noform') )
                                    {
                                    echo '<button type="button" class="btn btn-danger">締め切りました</button>';
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
                        受講料：10,800円(税込) ※お支払方法は「お振込」または「カード決済」です。
                      </p>
                    </div>