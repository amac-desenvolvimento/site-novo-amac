<?php
/**
 * local da documantação
 */
get_header();
?>

<div class="corpo_site">
<!-- div slider -->

<div class= 'container_slider'>
<?php if( function_exists('wd_slider') ) { wd_slider(1); } ?>
</div>


<!-- div alerta -->
<div class="container-alerta mt-4 mb-4">
<?php
$args = array('category_name' => 'alerta');
$alerta = new WP_Query($args);
?>

<?php
if ($alerta->have_posts()) {
    echo "<span class='titulo-alerta'>- Avisos Importantes -</span>";
    while ($alerta->have_posts()) {
        $alerta->the_post();
        ?>

        <div class="me-5 ms-5">
            <a href="<?php echo get_permalink()?>"><?php the_title(); ?></a>
        </div>
        
    <?php }
}
?>
</div>
<!-- div estatistica -->
<div class="mt-2">
    <div class="container_estatistica">
        <div class="child_container_estatistica endereco">
            <h2 class="mb-1">3.467</h2>
            <span>crianças atendidas pela creches</span><br />
            <small>por mês</small>
        </div>

        <div class="child_container_estatistica websites">
            <h2 class="mb-1">511</h2>
            <span>Adolescentes atendidos pelo PROMAD</span><br/>
            <small>por ano</small>

        </div>

        <div class="child_container_estatistica contato">
            <h2 class="mb-1">3.148</h2>
            <span>Atendimentos nos Centros de Convivência</span><br />
            <small>por mês</small>
        </div>

        <div class="child_container_estatistica politicas">
            <h2><a style="color:#ffffff;" href="https://amac.org.br/sobre/">Conheça a AMAC</a></h2><br />
        </div>

    </div>

</div>

<!-- Serviços -->
<div class="container-servicos">
    <?php
    $args_servicos = array(

        'posts_per_page' => 40,
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



<!-- Artigos -->
<div class="container-artigo mt-5">
    <?php
    $args_artigo = array(
        'posts_per_page' => 3,
        'category__in' => array(6),
    );

    $artigo = new WP_Query($args_artigo);
    ?>
    <div class="title-section">
        <p >Notícias, Artigos e Afins</p>
      <a href="https://amac.org.br/pagina/blog/"> <span style="font-size:12pt;">Para mais notícias...</span> </a>
    </div>
    <?php
    if ($artigo->have_posts()) :

        while ($artigo->have_posts()) :
            $artigo->the_post();
            ?>

            <div class="details-content-artigo">

                <div class="title-artigo">
                    <p class="text-break"><?php the_title(); ?></p>
                </div>
                <div class="content-artigo">
                    <p class="text-break p-content-artigo">
                        <?php the_excerpt(); ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <div class="mt-3">
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