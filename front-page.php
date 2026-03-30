<?php get_header(); ?>

<section class="front-page-hero">
	<div class="front-page-hero-overlay"> </div>
	<div class="front-page-hero-content"> 
		<p class="front-page-hero-subtitle">Webdesign & développement Wordpress sur mesure</p>
		<h1 class="front-page-hero-title"> Je conçois des sites web <br> avec soin, <br> <span class="front-page-hero-opacity"> pensés pour des projets <br> qui ont du sens. </span> </h1>
		<div class="front-page-hero-bottom"> 
			<div>	
				<a class="primary-button" href="#projet">Voir mes projets → </a>
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
		<p>Un site web sur mesure créé <span class="front-page-intro-accent">avec soin</span>, pour mettre en lumière <span class="front-page-intro-accent">ton univers</span> et donner <span class="front-page-intro-accent">du sens</span> à ta présence en ligne.” </p>
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
			<p>Bonjour, je suis Manoëlle, webdesigneuse et développeuse WordPress freelance. </p>
			<P>Mon but est de t'accompagner dans la création d'un site web aligné à tes valeurs, pensé pour révéler ce que tu fais vraiment.</p>
			<div class="dropdown-menu">
    			<div class="dropdown-menu-item">
        			<button class="dropdown-menu-item-title">
            			Mon parcours
            			<span class="dropdown-menu-item-icon">+</span>
        			</button>
        			<div class="dropdown-menu-item-content">
            			<p>Avant de concevoir des sites web, j'étais diététicienne en libéral et en clinique. Un parcours que j'ai ensuite enrichi d'une expérience en agence de développement logiciel, entre support technique et prestation client.</p>
						<p>C'est ce chemin de reconversion qui m'a amenée vers la création de sites web. Ce que j'aimais dans mes vies professionnelles précédentes, je le retrouve ici : écouter, comprendre un besoin, et accompagner quelqu'un pour transformer son projet en quelque chose de concret et de visible.</p>
        			</div>
    			</div>
    			<div class="dropdown-menu-item">
        			<button class="dropdown-menu-item-title">
            			Ma vision
            			<span class="dropdown-menu-item-icon">+</span>
        			</button>
        			<div class="dropdown-menu-item-content">
            			<p>Je crois qu'avoir une belle présence en ligne ne doit pas être réservé qu'aux grandes structures ayant des budgets conséquents.</p>
						<p>Les indépendants, praticiens de la santé et du bien-être et tous ceux qui exercent un métier de l'humain, méritent un site web qui reflète la qualité de ce qu'ils font et la sincérité de leur approche.</p>
						<p>Mon rôle est de rendre ça accessible : un site web sur mesure, pensé avec toi et pour toi, qui parle à tes clients avant même que tu aies prononcé un mot.</p>
        			</div>
    			</div>
    			<div class="dropdown-menu-item">
        			<button class="dropdown-menu-item-title">
            			Mon approche
            			<span class="dropdown-menu-item-icon">+</span>
        			</button>
        			<div class="dropdown-menu-item-content">
            			<p>On commence par un échange, le but est d'instaurer une collaboration dans laquelle tu te sens à l'aise.</p>
						<p>Je prends le temps de comprendre ton activité, ce qui te tient à cœur et ce que tu veux faire ressentir à tes visiteurs qui arrivent sur ton site. C'est seulement à partir de là qu'on construit.</p>
						<p>Concrètement, on définit ensemble la structure, je m'occupe des maquettes et du développement, et surtout on valide à chaque étape. </p>
						<p>À la livraison, tu connais déjà ton site, parce qu'on en a parlé tout au long du projet. Je t'accompagne dans sa prise en main et te transfère mon savoir pour que tu puisses te l'approprier pleinement.</p>
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
				<a href="#" data-open-modal class="primary-button">Me contacter → </a>
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