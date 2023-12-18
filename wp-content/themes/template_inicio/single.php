<?php
/**
 * local da documentação
 */
get_header();
?>
         <?php
        $categorypost = get_the_category();
        ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
        <div class="image-main-blog text-center">
                <?php the_post_thumbnail('full', ['class' => 'image-main-page']); ?>

        </div>
        <div class="post-title text-center">
           <h2 class= mb-5><?php the_title(); ?></h2>
        </div>
        <div class="single-content-blog" >
            <div class="single-post">
                
                    <?php the_content(); ?>
            
            </div>
        <?php endwhile;
    endif;
    ?>  
<?php
$categories = get_the_category();
$categories_slug = $categories[0]->slug;

if ( $categories_slug !="processo-seletivo" ) {;
?>
	<hr class="hr-line-artigo">
    <div class="artigos-relacao mt-4">
        <h4 class="pt-2">+ Noticias, Artigos e afins </h4>
        <?php
        foreach ($categorypost as $categoryspost) {
            echo $categoryspost->id;
            $args = array(
                'cat' => 6,
                'category__in' => array(6),
                'posts_per_page' => 3,
            );
        }
        $blog = new WP_Query($args);
        if ($blog->have_posts()) :
            while ($blog->have_posts()) :
                $blog->the_post();
                ?>
                <a class="fw-bold title-artigo-relacionados" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <span class = "category-blog-relacionado"><?php the_category(', '); ?></span>
                <?php
                the_excerpt();
                ?>
                <div class="mt-1 mb-1">
                    <a href="<?php echo get_permalink(); ?>" class="link-read-more">Leia Mais...</a>
                </div>
                <?php
            endwhile;

            wp_reset_postdata();
        endif;
        ?>     
    </div> 
    <div class="single-sidebar">
<?php comments_template('/comments.php'); ?> 
    </div>
</div>	
<?php 
} else { 
    echo "<p class='font-weight-bold'><a href='http://10.35.0.12/site-novo-amac/?cat=20'>Retorne a listagem de Processos Seletivos</a></p>";
   
}
?>

<?php
get_footer();
?>