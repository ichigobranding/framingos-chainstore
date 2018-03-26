<!-- セミナースケジュール　-->
		<div class="semiwaku-index"><!-- semiwaku3-->
												<div class="menu_title2">
													<div class="menu_title_en2">
														<span class="glyphicon glyphicon-list-alt glypad"></span>セミナー・教室一覧<span class="menu_smalltitle">Seminar・Class</span>
													</div>
												</div>
			<div class="ichiranwakuwaku2"><!-- ichiranwakuwaku-->
								<ul class="sumawaku2">
									<?php
									    $wp_query = new WP_Query();
									    $param = array(
									        'posts_per_page' => '7', //表示件数。-1なら全件表示
									        'post_type' => 'semi', //カスタム投稿タイプの名称を入れる
									        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
									        'order' => 'ASC'
									    );
									    $wp_query->query($param);
									    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
									?>
									<li class="semiul">
											<div class="semiwaku"> <!-- semiwaku -->
														<div class="row"><!-- row -->
															  <div class="col-xs-12 col-sm-12 col-md-12"><!-- col-xs-12 col-sm-11 col-md-11-->
															  			<div class="titleichiran1">	<!-- titleichiran1-->
															  				<div class="semititletopheaderindex"><!-- semititletopheader-->
															  			    	<a href="<?php the_permalink(); ?>">
															  				  <?php the_field('semiday'); ?>開催
															  				  	<!-- アイコン　セミナー・教室 -->
	 																			  <?php
													                                     if( get_field('semi-icon') )
													                                    {
													                                    echo '<span class="class-icon"> 教　室 </span>';
													                                    }
													                                    else
													                                    {
													                                    echo '<span class="semi-icon">セミナー</span>';
													                                    }
													                              ?>
													                            <!-- アイコン　セミナー・教室 -->
																                            <!-- 満席 -->
																                              <?php
																                                     if( get_field('semiend') )
																                                    {
																                                    echo '【満席】</span>';
																                                    }
																									else
																                                    if( get_field('noform') )
																                                    {
																                                    echo '【募集終了】';
																                                    }
																                                    else
																                                    {
																                                    echo '';
																                                    }
																                              ?>
																                            <!-- 満席 -->
															  						<?php the_title(); ?>
															  					</a>
															  				</div><!-- semititletopheader-->
															  			</div><!-- titleichiran1-->	
															  </div><!-- col-xs-12 col-sm-11 col-md-11-->
														</div><!-- row -->
											</div><!-- semiwaku -->
									</li>
									<?php endwhile; endif; ?>
								</ul>
								<div class="ichiranright">
									<a href="<?php the_permalink(); ?>/semi">
										<div class="btn bottom-shousai">
											セミナー・教室の一覧へ
										</div>
									</a>
								</div>
			</div><!-- ichiranwakuwaku-->
		</div><!-- semiwaku3-->
<!-- セミナースケジュール　-->