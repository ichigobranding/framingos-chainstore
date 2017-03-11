<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/* contact form7 値引き渡し */
add_filter( 'wpcf7_special_mail_tags', 'my_special_mail_tags', 10 ,2 );
function my_special_mail_tags( $output, $name ) {
	if ( 'semiday' == $name )
		$output = get_post_meta( $post -> ID, 'semiday_check', true );
	return $output;
}
/* contact form7 値引き渡し */
/**
 * Register widgetized areas
 */
if ( ! function_exists('xsbf_widgets_init') ) :
add_action( 'widgets_init', 'xsbf_widgets_init' );
function xsbf_widgets_init() {

	// DWからのwidgets.
	// Put sidebar first as this is standard in almost all WordPress themes
		// 左
	register_sidebar( array(
		'name'          => __( 'freespase' ),
		'id'            => 'sidebar-6',
		'description' 	=> __( 'Main sidebar (right or left)' ),
		'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		// Page Top (After Header) Widget Area. Single column.
	register_sidebar( array(
		'name' 			=> __( 'messageboard-W' ),
		'id' 			=> 'sidebar-3',
		'description' 	=> __( 'Optional section after the header. This is a single column area that spans the full width of the page.', 'flat-bootstrap' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>',
		'after_widget' 	=> '</div><!-- container -->',
	) );

	// Page Bottom (Before Footer) Widget Area. Single Column.
	register_sidebar( array(
		'name' 			=> __( 'index-W' ),
		'id' 			=> 'sidebar-4',
		'description' 	=> __( 'Optional section before the footer. This is a single column area that spans the full width of the page.', 'flat-bootstrap' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>',
		'after_widget' 	=> '</div><!-- container -->',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description' 	=> __( 'Main sidebar (right or left)' ),
		'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// Put footer next as most themes put them here. Default # columns is 3.
	register_sidebar( array(
		'name' 			=> __( 'Footer' ),
		'id' 			=> 'sidebar-2',
		'description' 	=> __( 'Optional site footer widgets. Add 1-4 widgets here to display in columns.' ),
		'before_widget' => '<div id="%1$s" class="widget col-sm-4 clearfix %2$s">',
		'after_widget' 	=> "</div>",
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>',
	) );

	// Home Page (Only) Widget Area. Single Column.
	register_sidebar( array(
		'name' 			=> __( 'Home Page', 'flat-bootstrap' ),
		'id' 			=> 'sidebar-5',
		'description' 	=> __( 'Optional section that displays only on the home page. It appears whether the home page is static or the blog. This is a single column area that spans the full width of the page.', 'flat-bootstrap' ),
		//'before_widget' => '<div id="%1$s" class="section widget %2$s clearfix"><div class="container">',
		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix"><div class="container">',
		'before_title' 	=> '<h2 class="widget-title">',
		'after_title' 	=> '</h2>',
		'after_widget' 	=> '</div><!-- container --></div>',
	) );

//パスワードロック設定　　「保護中：」のテキストを消す
add_filter('protected_title_format', 'remove_protected');
  function remove_protected($title) {
  return '%s';
}

//パスワードロック設定　　注意書きを変更する
function my_password_form() {
  return
    '<img src="https://ichigo-branding.com/wp-content/uploads/2017/01/member-login.png">
     <div class="member-login-page">サポートプランのメンバー限定ページです。メンバーの方は、パスワードをご入力の上、ログインしてください。
    <form class="post_password" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
      <input name="post_password" type="password" size="24" class="dwpass"><br><br><br>
      <input type="submit" name="Submit" value="' . esc_attr__("ログイン") . '">
    </form>';
}
add_filter('the_password_form', 'my_password_form');


//パスワードロック設定　　１時間
function custom_postpass_time() {
    require_once ABSPATH . 'wp-includes/class-phpass.php';
    $hasher = new PasswordHash( 8, true );
    setcookie( 'wp-postpass_' . COOKIEHASH, $hasher->HashPassword( wp_unslash( $_POST['post_password'] ) ), time() + HOUR_IN_SECONDS, COOKIEPATH );
    wp_safe_redirect( wp_get_referer() );
    exit();
}
add_action( 'login_form_postpass', 'custom_postpass_time' );
register_nav_menu( 'footer-menu', 'フッターメニュー' );
} //end function
endif; // end ! function_exists