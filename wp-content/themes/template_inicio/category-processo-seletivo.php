<?php
/**
 * local da documantação
 */
get_header();
?>
<div class="space-blog"></div>
   <h2 class="text-center mt-3 mb-1">Processos Seletivos</h2>
  <p class="text-center mt-3 mb-1"><a href="http://antigosite-v2.amac.org.br/trabalhe-na-amac.html">Para acesso aos processos seletivos anteriores e abertos 001 ao 019 - Clique Aqui</a></p>
<?php
   $args = array(
      'category__in' => array(get_query_var('cat')),
      'posts_per_page' => 200,
      'orderby' => 'date',
      'order' => 'desc'
   );
?>
<div class="corpo-pagina">
   <div class="coluna-processos">
   <?php
      $blog = new WP_Query($args);
      if ($blog->have_posts()) :
      while ($blog->have_posts()) :
         $blog->the_post();
   ?>

   <div class="blog-corpo-processos">
      <div class= "blog-title mt-3">
         <p class = "title-blog fw-bold"> <a href="<?php echo get_permalink(); ?>" ><?php the_title();?></a> - <span class = "date-blog"><?php echo get_the_date(); ?></span></p>  
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
   <div class="coluna-sidebar"> 
      <h4> Processos em Andamento </h4>   
      <?php dynamic_sidebar( 'home_right_1' ); ?>
   </div>

</div>



<?php
get_footer();
?>