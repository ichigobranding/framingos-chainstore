<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Template for displaying all single posts.
 *
 * @package flat-bootstrap
 */

get_header(); ?>
<!-- アドバンス　google map スクリプト -->
<style type="text/css">
.acf-map {
    width: 100%;
    height: 400px;
    border: #ccc solid 1px;
    margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $el (jQuery element)
*  @return  n/a
*/

function render_map( $el ) {

    // var
    var $markers = $el.find('.marker');

    // vars
    var args = {
        zoom        : 16,
        center      : new google.maps.LatLng(0, 0),
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };

    // create map               
    var map = new google.maps.Map( $el[0], args);

    // add a markers reference
    map.markers = [];

    // add markers
    $markers.each(function(){

        add_marker( $(this), map );

    });

    // center map
    center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $marker (jQuery element)
*  @param   map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    // create marker
    var marker = new google.maps.Marker({
        position    : latlng,
        map         : map
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content     : $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

        });
    }

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   map (Google Map object)
*  @return  n/a
*/

function center_map( map ) {

    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

    });

    // only 1 marker?
    if( map.markers.length == 1 )
    {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 15 );
    }
    else
    {
        // fit to bounds
        map.fitBounds( bounds );
    }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type    function
*  @date    8/11/2013
*  @since   5.0.0
*
*  @param   n/a
*  @return  n/a
*/

$(document).ready(function(){

    $('.acf-map').each(function(){

        render_map( $(this) );

    });

});

})(jQuery);
</script>
<!-- アドバンス　google map スクリプト -->

<div class="container conbg">
      <div id="main-grid2" class="row"><!-- .row -->
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
                    <div class="row">
                        <div class="col-md-10 col-md-push-1">
                          <div class="kiji-page">
                               <!--記事全体-->
                                            <div class="ibskinArticle">
                                              <div class="ibskinArticle2">
                                                <div class="ibskinArticle3">                                                      
                                                      <div class="ibskinArticleBody2">
                                                                <!--記事　中身-->
                                                                     <?php while ( have_posts() ) : the_post(); ?>   
            <?php endwhile; // end of the loop. ?>
                <div class="titleichiran3">
                    <h2 class="fontW6"><?php the_title(); ?></h2>
                </div>
      <table class="table">
            <tr class="tabeletitlebg"><th colspan="2">セミナー概要</th></tr>
            <tr>
            <td class="td_nowrap tabletitle" scope="row">セミナー名</td>
            <td><?php the_field('seminame'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">講師</td>
            <td>
                <!-- 講師名　リピーターフィールド -->
                <?php if( have_rows('syoukai') ): ?>
                        <?php while( have_rows('syoukai') ): the_row(); 
                            // vars
                            $image = get_sub_field('koushiimage');
                            $content = get_sub_field('koushiname');
                            $content2 = get_sub_field('koushipro');
                            ?> 
                            <div  class= "row　koushiwaku" > 
                              <div  class= "col-md-4 col-sm-6 col-xs-12 " ><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div> 
                                  <div  class= "col-md-8 col-sm-6 col-xs-12 " ><br>
                                            <b>講師名：<?php echo $content; ?></b><br>
                                            <?php echo $content2; ?><br><br><br><br><br><br>
                            </div>
                        <?php endwhile; ?>
                <?php endif; ?>
                <!-- 講師名　リピーターフィールド -->
            </td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">開催日時</td>
            <td><p><?php the_field('semiday'); ?><?php the_field('semitime'); ?><p></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">開催場所</td>
            <td><?php the_field('semiplace'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">住所</td>
            <td>
            <?php the_field('semiaddmain'); ?><br>
            <?php the_field('semiadd'); ?>

            <?php 
            $location = get_field('google_map');
            if( !empty($location) ):
            ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
            <?php endif; ?>
                <div class="right">
                        <a href="http://maps.google.com/maps?q=<?php echo $location['address']; ?>" target="_blank">Googleマップで開く</a>
                </div>
            </td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">受講料</td>
            <td><?php the_field('semimoney'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">お支払方法</td>
            <td><?php the_field('semipay'); ?></br>
                  <?php the_field('payshousai'); ?>
              </br><?php the_field('semiquestion'); ?>
            </td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">キャンセルポリシー</td>
            <td><?php the_field('semican'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">募集期間</td>
            <td><?php the_field('semidaytop'); ?>まで</br>※定員になり次第、募集を締め切らせていただきます</td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">受講定員</td>
            <td><?php the_field('semitei'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">主催</td>
            <td><?php the_field('semisyusai'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">備考</td>
            <td><?php the_field('semibiko'); ?></td>
            </tr>
            <tr>
            <td class="td_nowrap" scope="row">注意事項</td>
            <td><?php the_field('semityuui'); ?></td>
            </tr>
            <tr><td>申し込み・問い合わせ</td>
            <td>以下のフォームに入力後、送信をお願いいたし ます。</td>
            <tr class="tabeletitlebg"><th colspan="2"></th></tr>
            </table>
                 <!-- <div class="formcss">
                        <div class="naiyou2"><span class="glyphicon glyphicon-pencil icontopp"></span>このセミナーの予約お申込みはこちらからお願いいたします。</div>
                  </div>-->

                        <!-- 募集終了 -->
                            <?php
                            if( get_field('noform') )
                            {
                                echo '<div class="manseki">募集終了</div>
                              <br>
                              募集を終了いたしました。<br><br>
                              募集は、メルマガにて優先的にご案内しております。<br><br>
                              <b><a href="get_stylesheet_directory_uri()/mailmag">メルマガのご登録はこちらです。</a></b><br><br><br>';
                            }
                            if( get_field('semiend') )
                            {
                                echo '<div class="manseki">満席のため締め切りました</div>
                              <br>
                              募集を終了いたしました。<br><br>
                              募集は、メルマガにて優先的にご案内しております。<br><br>
                              <b><a href="get_stylesheet_directory_uri()/mailmag">メルマガのご登録はこちらです。</a></b><br><br><br>';
                            }

                            else
                            {
                                the_field('cunsulform'); 
                            }
                            ?>
                         <!-- 募集終了 -->


        <!-- <div class="right">
                 <a href="<?php bloginfo(); ?>/semi"><button type="button" class="btn bottom-shousai">セミナー・講演一覧に戻る</button></a>
        </div>--> 
            
                                                                <!--記事　中身-->
                                                            <div class="hensyuu">
                                                            <p style="text-align: right;"><?php edit_post_link( $link, $before, $after, $id ); ?></p>
                                                            </div>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                               <!--記事全体-->
                        </div><!--kiji page-->
                   </div><!--col-md-8 col-md-push-2-->
                </div> <!--row-->
          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- .row -->
</div><!-- .container -->
<?php get_footer(); ?>