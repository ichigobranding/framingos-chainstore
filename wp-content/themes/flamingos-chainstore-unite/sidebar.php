<div id="secondary" class="widget-area image" role="complementary">
<div id="sideba">
<?php get_template_part( 'profileside' ); ?>
               <div class="imgbtn imgbtnpad-top">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/member">
                          <img src="<?php echo get_stylesheet_directory_uri() ?>/images/member-bana.png" alt="※"/>
                      </a>
               </div>

               <div class="imgbtn imgbtnpad-top">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/※">
                          <img src="<?php echo get_stylesheet_directory_uri() ?>/images/side-bana.png" alt="※"/>
                      </a>
               </div>

              <div class="imgbtn imgbtnpad">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/※">
                          <img src="<?php echo get_stylesheet_directory_uri() ?>/images/side-bana-long.png" alt="※"/>
                      </a>
               </div>
            <div class="sidewii">
              <?php if( is_active_sidebar('home1') ) dynamic_sidebar( 'home1' ); ?><br>
              <?php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?><br>
              <?php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?><br>
            </div>
</div>

<div class="clear"></div>

</div><!-- #secondary　最後 -->


