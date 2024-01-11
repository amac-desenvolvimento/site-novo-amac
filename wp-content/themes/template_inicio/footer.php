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
            <span>Rua Espirito Santo, 434</span><br/>
            <span>Centro - Juiz de Fora/MG</span><br/>
            <span>Telefone: (32) 3112-3050</span><br/>
            <span>CEP: 36010-040</span>
        </div>
        <div class="child_container_footer websites">
            <span><a href="https://amac.com.br/wp-admin" class="link-footer">Área Restrita</a></span><br/>
            <span><a href="https://webmail.amac.org.br" class="link-footer">WebMail</a></span><br/>
            <span><a href="http://amac.org.br/transparencia/" class="link-footer">Transparência</a></span><br/>

        </div>

        <div class="child_container_footer contato">
            <span><a href="https://amac.org.br/contato/" class="link-footer">Fale Conosco</a></span><br/>
            <span><a href="https://amac.org.br/nossos-enderecos/" class="link-footer">Nossos Endereços</a></span><br/>
            <span><a href="https://amac.org.br/pagina/processo-seletivo/" class="link-footer">Trabalhe Conosco</a></span><br/>
            <span><a href= "#" class="link-footer">obs: Links passando por revisão</a></span><br/>

</div>
        <div class="child_container_footer politicas">
            <span><a href="#" class="link-footer">Politica de Privacidade</a></span><br/>
            <span><a href="#" class="link-footer">Politica e Uso</a></span><br/>
            <span><a href="http://antigosite-v1.amac.org.br" class="link-footer">Site Antigo - 1</a></span><br/>
            <span><a href="http://antigosite-v2.amac.org.br" class="link-footer">Site Antigo - 2</a></span><br/>
        </div>

    </div>
</footer>
<div style="font-size: 11px; text-align: end"> 
Desenvolvimento: Supervisão de Tecnologia da Informação  - Flaviene Melo - Alexsander Talles
</div>

<?php wp_footer() ?>
</body>

</html>




<!-- Print a link to this category -->
