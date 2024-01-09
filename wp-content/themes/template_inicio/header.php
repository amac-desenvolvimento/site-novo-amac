<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>AMAC - Associacao Municipal de Apoio Comunitario</title>
</head>

<body>
    <header>
<!-- Inicio Off-Canvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenus" aria-labelledby="offcanvasMenusLabel">
    <button type="button" class="btn-close text-reset close-canvas" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div id="menu1-offcanvas" class="menu-1-offcanvas">
    <nav class="navbar navbar-expand-md navbar-light bg-transparent" role="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'flaviene_lab_main_menu1',
                    'depth' => 1,
                    'container' => 'div',
                    'container_class' => 'navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
                ?>   
        </nav>
    </div>
</div>
<!-- Final Off-Canvas -->

    <div class="header">
        <div class="logo mb-2 ms-5">
                <a href="<?php echo home_url('/'); ?>">
                    <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                    <?php else: ?>
                    <?php bloginfo('title') ?>
                    <?php bloginfo('description') ?>
                    <?php endif; ?>
                </a>
            </div>
            
        <div class="a-canvas">
            <a data-bs-toggle="offcanvas" href="#offcanvasMenus" role="button" aria-controls="offcanvasMenus">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bars.png" style="width:48px; height: auto;">
            </a>
        </div>
            <div class="menu1">
                <nav class="navbar navbar-expand-md navbar-light bg-transparent" role="navigation">
                    <div class="container">
                        <?php
        wp_nav_menu( array(
            'theme_location'    => 'flaviene_lab_main_menu1',
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
        </div>  
    
    </div>
        </header>
    <div class="wrapper">
