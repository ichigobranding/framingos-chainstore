<span class="<?php $terms = wp_get_object_terms($post->ID,'message'); foreach($terms as $term){echo $term->slug . '';} ?>">
                 
<?php echo get_the_term_list( $id,message, $before, $sep, $after ); ?>

</span> 


