<?php
/**
 * local da documantação
 */
get_header();
?>
<div class="space-blog"></div>
<h3 class="text-center mt-3 mb-5"> Parceiros </h3>

<?php
$args = array(
    'category__in' => array(get_query_var('cat')),
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'desc'
);
$blog = new WP_Query($args);
if ($blog->have_posts()) :
    ?>
    <div class="container" >
        <div class= "row row-cols-1 row-cols-md-4">
        <?php
        while ($blog->have_posts()) :
            $blog->the_post();
            ?>
            
                <div class= "col">
                    <div class="card" style="max-width: 18rem;">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        <div class="card-body">   
                            <p class = "title-blog fw-bold"> <a href="<?php echo get_permalink(); ?>" ><?php the_title(); ?></a> - <span class = "date-blog"><?php echo get_the_date(); ?></span></p>  
                        </div>
                        <div class= "blog-content">
                            <?php the_excerpt(); ?>
                            <a href="<?php echo get_permalink(); ?>" class="link-read-more">Ler Mais</a>
                        </div>
                    </div>
                </div>
            
                <?php
            endwhile;
            ?>
       
        <?php
        wp_reset_postdata();
        ?>
            </div>
 </div>
<?php
    else:
        echo "<h3 class='text-center'> Em breve informacoes sobre nossos parceiros</h3>";
    endif;
    ?>


<?php
the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => __('Anterior', 'textdomain'),
    'next_text' => __('Próxima', 'textdomain'),
));
?>


<?php
get_footer();
?>