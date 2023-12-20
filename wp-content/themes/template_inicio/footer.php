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
