<?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'Trabalhe Conosco' );
 
    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
</div>
<footer>
    <div class="container_footer">
        <div class="child_container_footer endereco">
            <span>Rua Espiirito Santo, 434</span><br/>
            <span>Centro - Juiz de Fora/MG</span><br/>
            <span>Telefone: (32) 3690-7940</span><br/>
            <span>CEP: 36010-040</span>
        </div>
        <div class="child_container_footer websites">
            <span><a href="#" class="link-footer">Área Restrita</a></span><br/>
            <span><a href="#" class="link-footer">WebMail</a></span><br/>
            <span><a href="#" class="link-footer">Transparência</a></span><br/>

        </div>

        <div class="child_container_footer contato">
            <span><a href="#" class="link-footer">Fale Conosco</a></span><br/>
            <span><a href="#" class="link-footer">Nossos Endereços</a></span><br/>
            <span><a href="http://10.35.0.12/site-novo-amac/?cat=20" class="link-footer">Trabalhe Conosco</a></span><br/>
            <span><a href= "#" class="link-footer">obs: Revisar links quando for pro ar</a></span><br/>

        </div>
        <div class="menu2">
                <nav class="navbar navbar-expand-md navbar-light bg-transparent" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                            aria-expanded="false"
                            aria-label="<?php esc_attr_e( 'Toggle navigation', 'template_inicio' ); ?>">
                            <span class="navbar-toggler-icon text-end"></span>
                        </button>
                        <?php
        wp_nav_menu( array(
            'theme_location'    => 'flaviene_lab_main_menu2',
            'depth'             => 7,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
                    </div>
                </nav>
            </div>
        <div class="child_container_footer politicas">
            <span><a href="#" class="link-footer">Politica de Privacidade</a></span><br/>
            <span><a href="#" class="link-footer">Politica e Uso</a></span><br/>
            <span><a href="#" class="link-footer">Arquivos 1</a></span><br/>
            <span><a href="#" class="link-footer">Arquivos 2</a></span><br/>
        </div>

    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>



 
<!-- Print a link to this category -->
