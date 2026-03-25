<?php get_template_part('template_parts/header-single'); ?>

<section class="single-hero" style="background-color: <?php echo esc_attr(get_post_meta(get_the_ID(), 'couleur_principale', true)); ?>;">
    <div class="single-hero-overlay"></div>
    <div class="single-hero-content"> 
        <div class="single-hero-content-nav">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo Studio Endevenir">
            </a>
            <a href="<?php echo home_url('/'); ?>#projet" class="single-hero-content-nav-link"> ← Retour aux projets </a>
        </div>
        <div class="single-hero-content-data">
            // tes infos dynamiques
        </div>
    </div>
</section>

<?php get_footer(); ?>