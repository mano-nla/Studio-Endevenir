<footer class="footer">
    <div class="footer-top">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo Studio Endevenir">
        </a>
        <ul> 
            <li><a href="#projet">Projets</a></li>
            <li><a href="#a-propos">À propos</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
    <div class="footer-bottom"> 
        <p>© 2026 — Studio Endevenir — Tous droits réservés</p>
        <?php wp_nav_menu(['theme_location'  => 'footer-menu','container'=> 'nav','container_class' => 'footer-nav','menu_class'=> 'footer-menu',]);?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>