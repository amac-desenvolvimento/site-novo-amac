<?php
/**
 * local da documentação
 */
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
        $categorypost = get_the_category();
        ?>
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
get_footer();
?>