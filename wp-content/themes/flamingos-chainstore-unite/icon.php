<span class="<?php $terms = wp_get_object_terms($post->ID,'message'); foreach($terms as $term){echo $term->slug . '';} ?>">
<?php
$args = array('fields'=>'names'); // オプション
$terms = wp_get_post_terms( $post->ID, 'message', $args);
?>


</span> 