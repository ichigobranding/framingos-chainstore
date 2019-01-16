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
<!-- OGP -->
<meta property="og:type" content="blog">
<?php
if (is_single()){//単一記事ページの場合
if(have_posts()): while(have_posts()): the_post();
  echo '<meta property="og:description" content="'.mb_substr(get_the_excerpt(), 0, 100).'">';echo "\n";//抜粋を表示
endwhile; endif;
  echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事タイトルを表示
  echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事URLを表示
} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
  echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログの説明文を表示
  echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのタイトルを表示
  echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのURLを表示
}
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか調べる
if (is_single()){//単一記事ページの場合
  if (has_post_thumbnail()){//投稿にサムネイルがある場合の処理
    $image_id = get_post_thumbnail_id();
    $image = wp_get_attachment_image_src( $image_id, 'full');
    echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
  } else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {//投稿にサムネイルは無いが画像がある場合の処理
    echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
  } else {//投稿にサムネイルも画像も無い場合の処理
    $ogp_image = get_template_directory_uri().'/images/og-image.jpg';
    echo '<meta property="og:image" content="'.$ogp_image.'">';echo "\n";
  }
} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
  if (get_header_image()){//ヘッダーイメージがある場合は、ヘッダーイメージを
    echo '<meta property="og:image" content="'.get_header_image().'">';echo "\n";
  } else {//ヘッダーイメージがない場合は、テーマのスクリーンショット
    echo '<meta property="og:image" content="'.get_template_directory_uri().'/screenshot.png">';echo "\n";
  }
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:locale" content="ja_JP" />
<meta property="fb:admins" content="ADMIN_ID">
<meta property="fb:app_id" content="APP_ID">
<!-- /OGP -->

</head>

<body <?php body_class(); ?>>
<div id="page wrapper" class="hfeed site">
	<div class="container header-area">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header col-sm-12" role="banner">

				<div class="site-branding col-md-6">
					<div class="bname-top">
						<span class="site-title-hide"><?php bloginfo( 'name' ); ?></span>
					</div>
					<?php if( get_header_image() != '' ) : ?>

						<div id="logo">
							 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							 	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
							 	<!--<img src="<?php //header_image(); ?>"  height="<?php //echo get_custom_header()->height; ?>" width="<?php //echo get_custom_header()->width; ?>" alt="<?php //bloginfo( 'name' ); ?>"/>-->
							 		
							 </a> 
							<!--<h4 class="site-description"><?php //bloginfo( 'description' ); ?></h4>>-->
						</div><!-- end of #logo -->

					<?php endif; // header image was removed ?>

					<?php if( !get_header_image() ) : ?>

						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<!--<h4 class="site-description"><?php //bloginfo( 'description' ); ?></h4>-->

					<?php endif; // header image was removed (again) ?>
				</div>

			<div class="col-md-4 col-md-offset-2">
				<h1 class="site-title-hide">SEO h1タイトル</h1>
				<?php get_template_part( 'tellmail' ); ?>
				<!-- スマホ telmail -->
				<!--<?php //if (wp_is_mobile()) :?>
					<?php //else: ?>
						<?php //get_template_part( 'tellmail' ); ?>
					<?php //endif; ?>-->
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
