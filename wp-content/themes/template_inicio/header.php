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
            <div class="menu1">
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
