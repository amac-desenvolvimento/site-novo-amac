<?php
/**
 * local da documantação
 */
get_header();
?>
<div class="space-blog"></div>
   <h2 class="text-center mt-3 mb-1">Campanha</h2>

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
 <div class="blog-body mb-5">
        <div class="foto">
            <?php the_post_thumbnail('medium', ['class' => 'rounded']); ?>
        </div>
        <div class="titulo">
        <a class = "title-blog fw-bold" href="<?php echo get_permalink(); ?>" ><?php the_title();?></a></span>
        </div>
        <div class="conteudo">
            <?php the_excerpt(); ?>
        </div>
        <div class="leia-mais">
            <a href="<?php echo get_permalink(); ?>" class="link-read-more-blog">Leia Mais...</a>
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
get_footer();
?>