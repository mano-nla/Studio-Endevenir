<?php get_header(); ?>

<section class="front-page-hero">
	<div class="front-page-hero-overlay"> </div>
	<div class="front-page-hero-content"> 
		<p class="front-page-hero-subtitle">Webdesign & développement Wordpress</p>
		<h1 class="front-page-hero-title"> Je conçois des sites web <br> avec soin, <br> <span class="front-page-hero-opacity"> pensés pour des projets <br> qui ont du sens. </span> </h1>
		<div class="front-page-hero-bottom"> 
			<div>	
				<a class="primary-button" href="#projet">Voir mes projets</a>
				<a class="front-page-hero-bottom-cta glass-button" href="#" data-open-modal>Me contacter</a>
			</div>
			<p class="front-page-hero-bottom-author"> Manoëlle Ancion <br> <span class="front-page-hero-opacity"> Studio Endevenir </span></p>
		</div>
	</div>
</section>
<section class="front-page-section front-page-intro">
	<div class="front-page-intro-content">
		<h2 class="front-page-intro-subtitle reveal"> Ma philosophie </h2>
		<p>“Studio Endevenir, ce sont des sites web conçus avec <span class="front-page-intro-accent">intention</span>, pensés pour refléter <span class="front-page-intro-accent">ton identité</span> et valoriser ce que tu fais.</p>
		<p>Un espace digital créé <span class="front-page-intro-accent">avec soin</span>, pour mettre en lumière <span class="front-page-intro-accent">ton univers</span> et donner <span class="front-page-intro-accent">du sens</span> à ta présence en ligne.” </p>
	</div>
	<p class="front-page-intro-signature"> Manoëlle </p>
</section>
<section id="projet" class="front-page-section">
	<div class="front-page-section-header reveal"> 
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon_beige.svg" alt="Favicon en version beige" class="front-page-section-header-favicon">	
		<h2 class="front-page-section-header-subtitle glass-card"> Projets</h2>
	</div>
	<p class="front-page-projets-description">Mes derniers projets, <br>où chaque site est conçu pour <br><span>révéler ton identité.</span></p>
	<div class="front-page-projets-cards"> 
		<div class="swiper projets-swiper">
    		<div class="swiper-wrapper">
    		    <?php
        		$args = array(
            		'post_type'      => 'projet',
            		'posts_per_page' => -1, 
            		'orderby'        => 'date',
            		'order'          => 'DESC',
        		);
        		$my_query = new WP_Query( $args );
        		if ( $my_query->have_posts() ) {
            		while ( $my_query->have_posts() ) {
                		$my_query->the_post();
                		echo '<div class="swiper-slide">';
                		get_template_part( 'template_parts/card-projet' );
                		echo '</div>';
            		}
        		}
        		wp_reset_postdata();
        		?>
    		</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</section>
<section id="a-propos" class="front-page-section">
	<div class="front-page-section-header reveal"> 
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon_beige.svg" alt="Favicon en version beige" class="front-page-section-header-favicon">
		<h2 class="front-page-section-header-subtitle glass-card"> À propos</h2>
	</div>
	<div class="front-page-a-propos-content"> 
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo_manoelle.jpeg" alt="Photo de Manoëlle Ancion" class="front-page-a-propos-content-photo">
		<div class="front-page-a-propos-content-presentation">
			<p>Bonjour, je suis Manoëlle, webdesigneuse et développeuse WordPress. </p>
			<P>Mon but est de t'accompagner dans la création d'un site aligné à tes valeurs, pensé pour révéler ce que tu fais vraiment.</p>
			<div class="dropdown-menu">
    			<div class="dropdown-menu-item">
        			<button class="dropdown-menu-item-title">
            			Mon parcours
            			<span class="dropdown-menu-item-icon">+</span>
        			</button>
        			<div class="dropdown-menu-item-content">
            			<p>Avant de concevoir des sites web, j'accompagnais des patients en tant que diététicienne — en libéral et en clinique. Ce que j'aimais dans ce métier, c'était écouter, comprendre, et trouver avec chaque personne ce qui lui correspondait vraiment.</p>
						<p>C'est ce même fil conducteur qui m'a amenée vers le web. Créer un site, c'est aussi une forme d'accompagnement : comprendre un projet, une identité, des besoins — et les traduire en quelque chose de visible, de fonctionnel, de juste.</p>
        			</div>
    			</div>
    			<div class="dropdown-menu-item">
        			<button class="dropdown-menu-item-title">
            			Ma vision
            			<span class="dropdown-menu-item-icon">+</span>
        			</button>
        			<div class="dropdown-menu-item-content">
            			<p>Je crois que chaque projet mérite un site qui lui ressemble vraiment — pas un template par défaut, mais un espace pensé pour refléter ce que tu fais et pourquoi tu le fais.</p>
						<p>Un bon site, pour moi, c'est un site qui te représente avec intention.</p>
        			</div>
    			</div>
    			<div class="dropdown-menu-item">
        			<button class="dropdown-menu-item-title">
            			Mon approche
            			<span class="dropdown-menu-item-icon">+</span>
        			</button>
        			<div class="dropdown-menu-item-content">
            			<p>Je ne commence jamais par le design. Je commence par toi — ton activité, tes valeurs, ce que tu veux transmettre, à qui.</p>
						<p>On construit ensemble, par étapes. Pas de jargon, pas de livrable sorti de nulle part. Le résultat est un site que tu t'appropries facilement — parce qu'il a été pensé avec toi, pas juste pour toi.</p>
        			</div>
    			</div>
			</div>
		</div>
	</div>
	<p class="carousel-title"> Compétences </p>
	<div class="carousel">
    	<div class="carousel-items">
        	<span class="glass-card">WordPress</span>
       	 	<span class="glass-card">HTML</span>
     		<span class="glass-card">CSS</span>
   	 		<span class="glass-card">SASS</span>
    	 	<span class="glass-card">JavaScript</span>
       		<span class="glass-card">PHP</span>
     		<span class="glass-card">SCF</span>
   	 		<span class="glass-card">CPT</span>
        	<span class="glass-card">Figma</span>
       		<span class="glass-card">Elementor</span>
    		<span class="glass-card">SEO</span>
    		<span class="glass-card">WordPress</span>
       	 	<span class="glass-card">HTML</span>
       		<span class="glass-card">CSS</span>
     		<span class="glass-card">SASS</span>
   	 		<span class="glass-card">JavaScript</span>
       	 	<span class="glass-card">PHP</span>
       		<span class="glass-card">SCF</span>
     		<span class="glass-card">CPT</span>
    		<span class="glass-card">Figma</span>
       	 	<span class="glass-card">Elementor</span>
        	<span class="glass-card">SEO</span>
    	</div>
	</div>
</section>
<section id="contact" class="front-page-section">
	<div class="front-page-section-header reveal"> 
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon_beige.svg" alt="Favicon en version beige" class="front-page-section-header-favicon">	
		<h2 class="front-page-section-header-subtitle glass-card"> Contact</h2>
	</div>
	<div class="front-page-contact"> 
		<div class="front-page-contact-overlay"> </div>
		<div class="front-page-contact-content"> 
			<div class="front-page-contact-content-main"> 
				<p class="front-page-contact-content-main-intro"> Un projet en tête ? </p>
				<p class="front-page-contact-content-main-title"> Rendons cela <br> <span> concret </span></p>
				<p class="front-page-contact-content-main-subtitle"> Des idées mais tu ne sais pas par où commencer ? <br>Tu veux un site qui te ressemble enfin ? </p>
				<a href="#" data-open-modal class="primary-button">Me contacter</a>
			</div>
			<div class="front-page-contact-content-links"> 
				<a href="https://github.com/mano-nla" class="glass-button" target="_blank" rel="noopener noreferrer">GitHub</a>
				<a href="https://www.linkedin.com/in/mano%C3%ABlle-ancion-d%C3%A9veloppeuse-web/" class="glass-button" target="_blank" rel="noopener noreferrer">LinkedIn</a>
				<a href="https://www.instagram.com/studio_endevenir/" class="glass-button" target="_blank" rel="noopener noreferrer">Instagram</a>
				<a href="mailto:studio.endevenir@gmail.com" class="glass-button" target="_blank" rel="noopener noreferrer">Email</a>
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>