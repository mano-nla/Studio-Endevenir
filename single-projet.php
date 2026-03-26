<?php get_template_part('template_parts/header-single'); ?>

<section class="single-hero" style="--couleur-projet: <?php echo esc_attr(get_post_meta(get_the_ID(), 'couleur_principale', true)); ?>;">    
    <div class="single-hero-overlay"></div>
    <div class="single-hero-logo">
    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'small'); ?>" alt="Logo du projet">
    <?php endif; ?>
    </div>

    <div class="single-hero-content"> 
        <div class="single-hero-content-nav">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo Studio Endevenir">
            </a>
            <a href="<?php echo home_url('/'); ?>#projet" class="single-hero-content-nav-link"> ← Retour aux projets </a>
        </div>
        <div class="single-hero-content-data">
            <div class="single-hero-content-main">
                <h2 class="single-hero-content-data-main-type">
                    <?php $type_projet_terms = get_the_terms( get_the_ID(), 'type-projet' );
			        if ( ! empty( $type_projet_terms ) && ! is_wp_error( $type_projet_terms ) ) {
                        foreach ( $type_projet_terms as $term ) {
                            echo esc_html( $term->name ) . ' ';}
                            } ?>
                </h2>
                <h1 class="single-hero-content-data-main-title"> <?php the_title(); ?> </h1>
            </div>
            <div class="single-hero-content-data-aside"> 
                <p class="single-hero-content-data-aside-date"><?php the_time('M Y'); ?></p>
                <?php 
                $lien_site = get_post_meta(get_the_ID(), 'lien_du_site', true);
                $lien_github = get_post_meta(get_the_ID(), 'lien_github', true);
                ?>
                <?php if ($lien_site) : ?>
                    <a href="<?php echo esc_url($lien_site); ?>" target="_blank" rel="noopener noreferrer" class="single-hero-content-data-aside-link"> Voir le site → </a>
                <?php endif; ?>
                <?php if ($lien_github) : ?>
                    <a href="<?php echo esc_url($lien_github); ?>" target="_blank" rel="noopener noreferrer" class="single-hero-content-data-aside-link"> Voir sur GitHub → </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="single-detail" style="--couleur-projet: <?php echo esc_attr(get_post_meta(get_the_ID(), 'couleur_principale', true)); ?>;"> 
    <div class="single-detail-items reveal"> 
        <p class="single-detail-items-subtitle"> Contexte </p>
        <h2 class="single-detail-items-title"> Le projet </h2>
        <p class="single-detail-items-text"> <?php echo esc_html(get_post_meta(get_the_ID(), 'contexte', true)); ?> </p>
    </div>
    <div class="single-detail-items reveal"> 
        <p class="single-detail-items-subtitle"> Objectif </p>
        <h2 class="single-detail-items-title"> La mission </h2>
        <p class="single-detail-items-text"> <?php echo esc_html(get_post_meta(get_the_ID(), 'objectif', true)); ?> </p>
    </div>
    <div class="single-detail-items reveal"> 
        <p class="single-detail-items-subtitle"> Solution </p>
        <h2 class="single-detail-items-title"> L'approche </h2>
        <p class="single-detail-items-text"> <?php echo esc_html(get_post_meta(get_the_ID(), 'solution', true)); ?> </p>
    </div>
    <div class="single-detail-items reveal"> 
        <p class="single-detail-items-subtitle"> Technologies </p>
        <h2 class="single-detail-items-title"> La stack </h2>
        <div class="single-detail-items-technologies">
            <?php 
            $technologie_terms = get_the_terms(get_the_ID(), 'technologie');
            if (!empty($technologie_terms) && !is_wp_error($technologie_terms)) {
                foreach ($technologie_terms as $term) {
                    echo '<span class="single-detail-items-technologie">' . esc_html($term->name) . '</span>';
                }
            } 
            ?>
        </div>
    </div>
</section>

<section class="single-content reveal" style="--couleur-projet: <?php echo esc_attr(get_post_meta(get_the_ID(), 'couleur_principale', true)); ?>;"> 
       <div class="single-detail-items"> 
        <p class="single-detail-items-subtitle"> Galerie </p>
        <h2 class="single-detail-items-title"> Visuel du projet </h2>        
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>
