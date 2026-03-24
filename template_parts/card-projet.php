<a href="<?php the_permalink(); ?>" class="card-projet-link">
    <article class="card-projet-container"> 
        <?php $couleur = get_post_meta(get_the_ID(), 'couleur_principale', true); ?>
        <div class="card-projet-container-image" style="background-color: <?php echo esc_attr($couleur); ?>;">
            <?php if ( has_post_thumbnail() ) : ?>
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>        
        </div>
        <div class="card-projet-container-content">
            <h3> <?php the_title(); ?> </h3>
            <div class="card-projet-container-content-type">
			<?php $type_projet_terms = get_the_terms( get_the_ID(), 'type-projet' );
			if ( ! empty( $type_projet_terms ) && ! is_wp_error( $type_projet_terms ) ) {
    			foreach ( $type_projet_terms as $term ) {
					echo esc_html( $term->name ) . ' ';}
			} ?>
            </div>
            <p class="card-projet-container-content-date"><?php the_time('M Y'); ?></p>
        </div>
    </article>
</a>