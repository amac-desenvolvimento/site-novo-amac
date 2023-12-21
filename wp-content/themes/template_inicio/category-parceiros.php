<?php
/**
 * local da documantação
 */
get_header();
?>
<div class="space-blog"></div>
   <h2 class="text-center mt-3 mb-1">Parceiros</h2>

<?php
$args = array(
    'category__in' => array(get_query_var('cat')),
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'desc'
);
$blog = new WP_Query($args);
if ($blog->have_posts()) :
while ($blog->have_posts()) :
    $blog->the_post();
    ?>
 <div class= "blog-body mx-auto mt-4">
  
    <div class= "blog-title mt-3">
    <p class = "title-blog fw-bold"> <a href="<?php echo get_permalink(); ?>" ><?php the_title();?></a> - <span class = "date-blog"><?php echo get_the_modified_date(); ?></span></p>  
    </div>
    <div class= "blog-content">
    <?php the_excerpt(); ?>
    <a href="<?php echo get_permalink(); ?>" class="link-read-more">Leia Mais...</a>
    </div>
    

</div>
   <?php
  
endwhile;

wp_reset_postdata();

endif;

?>
</div>

</div>

<?php
the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Anterior', 'textdomain' ),
    'next_text' => __( 'Próxima', 'textdomain' ),
    ) );
?>


<?php
get_footer();
?>