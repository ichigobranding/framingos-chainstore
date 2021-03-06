<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page wrapper" class="hfeed site">
	<div class="container header-area">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header col-sm-12" role="banner">

				<div class="site-branding col-md-6">
					<div class="bname-top">
						<h2 class="site-title-hide"><?php bloginfo( 'name' ); ?></h2>
					</div>
					<?php if( get_header_image() != '' ) : ?>

						<div id="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							<!--<h4 class="site-description"><?php //bloginfo( 'description' ); ?></h4>>-->
						</div><!-- end of #logo -->

					<?php endif; // header image was removed ?>

					<?php if( !get_header_image() ) : ?>

						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
						<!--<h4 class="site-description"><?php //bloginfo( 'description' ); ?></h4>-->

					<?php endif; // header image was removed (again) ?>
				</div>

			<div class="col-md-4 col-md-offset-2">
				<h1 class="site-title-hide2">H1テキストテキストテキスト</h1>
				<!-- スマホ telmail -->
					<?php if (wp_is_mobile()) :?>
						<?php get_template_part( 'tellmail' ); ?>
					<?php else: ?>
						<?php get_template_part( 'tellmail' ); ?>
					<?php endif; ?>
				<!-- スマホ telmail -->
			</div>

		</header><!-- #masthead -->
	</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="bar-menu">メニュー</span>
		            </button>

		        </div>
				<?php
		            wp_nav_menu( array(
		                //'theme_location'    => 'primary',
		                'depth'             => 2,
		                'menu' => 'topmenu-fl',
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class' => 'nav nav-justified cenmenu', //<ul> class 中央寄せ
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav><!-- .site-navigation -->
<!-- パンくずヘッダー -->
<div id="colophon-topbreadcrumb" role="contentinfo">
	<div class="container">
	<?php get_template_part( 'breadcrumb-ib' ); ?>
	</div>
</div>
<!-- パンくずヘッダー -->
	<div id="content" class="site-content container"><?php
            global $post;
            if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
                $layout_class = get_post_meta($post->ID, 'site_layout', true);
            }
            else{
                $layout_class = of_get_option( 'site_layout' );
            }
            ?>
            <div class="row <?php echo $layout_class; ?>">
