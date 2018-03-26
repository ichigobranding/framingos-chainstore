<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package unite
 */

get_header(); ?>

<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

        <div class="row">
            <div class="col-md-6 col-md-push-3">
                <div class="kiji-page">

<h2 class="notfound">お探しのページは見つかりません。</h2>

<!-- 新着情報 -->
<?php get_template_part( 'messageborad' ); ?>
<!-- 新着情報 -->

                <?php get_template_part( 'blogul' ); ?>
              </div><!-- kiji-page -->
            </div><!-- col-md-6 col-md-push-2 3clumn -->
              <div class="col-md-3 col-md-pull-6">
                <?php get_template_part( 'left-sidebar' ); ?>
              </div>
          <div class="col-md-3 sidebarpadd">
            <?php get_sidebar(); ?>
          </div>
        </div>

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>