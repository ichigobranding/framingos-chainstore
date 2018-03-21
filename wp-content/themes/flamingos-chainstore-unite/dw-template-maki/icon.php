<span class="<?php $terms = wp_get_object_terms($post->ID,'message'); foreach($terms as $term){echo $term->slug . '';} ?>">

<?php $terms = wp_get_object_terms($post->ID,'message'); foreach($terms as $term){echo $term->name . '';} ?>

</span> 