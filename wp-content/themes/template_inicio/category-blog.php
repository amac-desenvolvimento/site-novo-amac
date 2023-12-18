<?php
/**
 * local da documantação
 */
get_header();
?>
<div class="space-blog"></div>
    <h3 class="text-center mb-1">Notícias, Artigos e Afins </h3>
    <?php
    $args = array(
        'category__in' => array(6),
        'posts_per_page' => 200,
        'orderby' => 'date',
        'order' => 'desc'
    );
    $blog = new WP_Query($args);
    if ($blog->have_posts()) :
    while ($blog->have_posts()) :
        $blog->the_post();
        ?>
    <div class= "blog-body mx-auto">
        <div class= "blog-title mt-3 mb-1">
        <span class="me-2"> <a class = "title-blog fw-bold" href="<?php echo get_permalink(); ?>" ><?php the_title();?></a></span>  -
        <span class = "category-blog ms-2 me-2"><?php the_category( ',  ');?></span>  -
        <span class = " ms-2 date-blog"><?php echo get_the_date(); ?></span> 
        </div>
        <div class= "blog-image text-center">
        <?php the_post_thumbnail('medium', ['class' => 'rounded']); ?>
        </div>
        <div class= "blog-content mt-3 mb-2">
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
get_footer();
?>