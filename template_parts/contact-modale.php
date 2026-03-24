<div class="modal" id="modal-contact">
    <div class="modal-overlay" data-close-modal></div>
    <div class="modal-content">
        <div class="modal-content-header">
            <p>Parlons de ton projet</p> 
            <p> Dis-moi tout, je te réponds dans les 48h !</p>
        </div>
        <div class="modal-content-form">
            <?php 
                if ( function_exists('wpcf7_contact_form') ) {
                    echo do_shortcode('[contact-form-7 id="c8d37ba" title="Formulaire de contact"]');
                }
            ?>        
        </div>
    </div>
</div>