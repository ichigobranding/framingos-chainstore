<!-- コンサルスケジュール　-->
		<div class="semiwaku-index"><!-- semiwaku3-->
												<div class="menu_title2">
													<div class="menu_title_en2">
														<span class="glyphicon glyphicon-list-alt glypad"></span>個別指導・相談<span class="menu_smalltitle">Consulting</span>
													</div>
													<div class="menu_title_jp2">
														
													</div>
												</div>
			<div class="ichiranwakuwaku2"><!-- ichiranwakuwaku-->		
								<ul class="sumawaku2">
									<?php
									    $wp_query = new WP_Query();
									    $param = array(
									        'posts_per_page' => '1', //表示件数。-1なら全件表示
									        'post_type' => 'consul', //カスタム投稿タイプの名称を入れる
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
														  				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/archives/form/consul">
														  				  <?php the_field('consulday'); ?>開催
														  				  	<!-- アイコン　個別指導 -->
 																			  <?php
												                                     if( get_field('consul-icon') )
												                                    {
												                                    echo '<span class="skype-icon">スカイプ・電話指導</span>';
												                                    }
												                                    else
												                                    {
												                                    echo '<span class="consul-icon">銀座 対面個別指導</span>';
												                                    }
												                              ?>
												                            <!-- アイコン　個別指導 -->															                            <!-- 満席 -->
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
											<a href="<?php the_permalink(); ?>/consul">
												<div class="btn bottom-shousai">
													募集一覧へ
												</div>
											</a>
								</div>
			</div><!-- ichiranwakuwaku-->
		</div><!-- semiwaku3-->
<!-- コンサルスケジュール　-->