<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no"/>
        <?php wp_head(); ?>
        <link href="http://fonts.cdnfonts.com/css/bocklin" rel="stylesheet">
    </head>


    <body class="parallax">

<header class="parallax">



    <div class="menu_nav">

        

            <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) );  ?>

            <div class="logo">
                <a href="<?php echo home_url('/');?>">
                <!--    <h1><?php bloginfo('url'); ?></h1>-->
                    <img class="logoMucha" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                </a>
            </div>


            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );  ?>

       

    </div>
    
    <div class="menu_nav_resp">

    <div class="logo">
                <a href="<?php echo home_url('/');?>">
                <!--    <h1><?php bloginfo('url'); ?></h1>-->
                    <img class="logoMucha" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                </a>
            </div>

            <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) );  ?>

            


            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );  ?>

       

    </div>
    
    <h1>Alfons Mucha</h1>
        
</header>