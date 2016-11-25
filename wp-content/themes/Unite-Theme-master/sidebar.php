<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Sidebar positioned on the right. If no widgets added, display some as samples.
 *
 * @package flat-bootstrap
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		


<div id="sidebar">
 
 <center>

  <a href="http://dearwoman-smaps.com/dvd"><img src="http://dearwoman-smaps.com/wp-content/themes/smaps_201412/images/sidebnr-dvdlp.png" /></a><br><br>

 </center>
              <?php if( is_active_sidebar('home1') ) dynamic_sidebar( 'home1' ); ?><br>
              <?php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?><br>
              <?php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?><br>
</div>

<div class="clear"></div>


  <!--    <?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>

      <div id="search" class="widget widget_search">
        <br />
        <?php get_search_form(); ?>
      </div>

      <div id="pages" class="widget widget_pages">
        <h2 class="widget-title"><?php _e( 'Site Content', 'flat-bootstrap' ); ?></h2>
        <ul>
          <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
        </ul>
      </div>

      <div id="tag_cloud" class="widget widget_tag_cloud">
        <h2 class="widget-title"><?php _e( 'Categories', 'flat-bootstrap' ); ?></h2>
          <?php wp_tag_cloud( array( 'separator' => ' ', 'taxonomy' => 'category' ) ); ?>
      </div>

    <?php endif; // end sidebar widget area ?>-->

  </div><!-- #secondary　最後 -->


