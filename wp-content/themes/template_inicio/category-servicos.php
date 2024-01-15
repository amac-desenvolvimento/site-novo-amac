<?php
/**
 * local da documantação
 */
get_header();
?>
<div class="space-blog"></div>
   <h2 class="text-center mt-3 mb-5">Serviços</h2>


 <!-- Serviços -->
<div class="container-servicos-page mb-5">
    <?php
    $args_servicos = array(
        'posts_per_page' => 8,
        'category__in' => array(4),
        'orderby' => 'ID',
	    'order' => 'ASC',
    );
    $servicos = new WP_Query($args_servicos);
    if ($servicos->have_posts()) :
        while ($servicos->have_posts()) :
            $servicos->the_post();
            ?>
            <?php $the_content = apply_filters('the_content', get_the_content()); ?>
            <!-- html -->

            <div class="content-servicos card border border-0">
                <?php
                if (has_post_thumbnail()):
                    
                the_post_thumbnail('thumbnail', array('class' => 'img-fluid card-img-top'));
                
                else:
                   
                    echo "<img src='http://10.35.0.12/site-novo-amac/wp-content/uploads/2023/11/fundo-sem-foto.png'class='card-img-top'>";
                    
                endif;
                ?>
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>">  <h5 class="card-title fw-light text-center"><?php the_title(); ?></h5></a>
                    
                </div>
            </div>

            <?php
        endwhile;

        wp_reset_postdata();
    endif;
    ?>
</div>

<?php
get_footer();
?>