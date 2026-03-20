<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <header class="header">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
        </a>  
        <ul class="header-nav"> 
            <li><a class="glass-button" href="#projet">Projets</a></li>
            <li><a class="glass-button" href="#a-propos">À propos</a></li>
            <li><a class="glass-button" href="#contact">Contact</a></li>
        </ul>
    </header>