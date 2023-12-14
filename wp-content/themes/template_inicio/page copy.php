<?php
/**
 * local da documantação
 */
get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="text-center w-100 mt-3">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="post-title text-center">
            <?php the_title(); ?>
        </div>
        <div class=single-content-blog>
            <div class="single-post">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile;
    endif;
    ?>
</div>


<?php
get_footer();
?>