<footer>
    <div class="footer-content">
        <div class="footer-links">
            <h4><?php echo get_theme_mod('footer_info_title', 'Informazioni'); ?></h4>
            <ul>
                <li><a href="<?php echo get_theme_mod('footer_link_chi-siamo', site_url('/about')); ?>">Chi Siamo</a></li>
                <li><a href="<?php echo get_theme_mod('footer_link_mission', site_url('/mission')); ?>">Mission & Vision</a></li>
                <li><a href="<?php echo get_theme_mod('footer_link_contatti', site_url('/contact')); ?>">Contattaci</a></li>
                <li><a href="<?php echo get_theme_mod('footer_link_politica-sulla-privacy', site_url('/politica-sulla-privacy')); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo get_theme_mod('footer_link_termini-e-condizioni', site_url('/termini-e-condizioni')); ?>">Termini e Condizioni</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h4><?php echo get_theme_mod('footer_social_title', 'Seguici su'); ?></h4>
            <ul>
                <li><a href="<?php echo get_theme_mod('footer_facebook'); ?>" target="_blank">Facebook</a></li>
                <li><a href="<?php echo get_theme_mod('footer_instagram'); ?>" target="_blank">Instagram</a></li>
                <li><a href="<?php echo get_theme_mod('footer_twitter'); ?>" target="_blank">Twitter</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-end">&copy; <?php echo date('Y'); ?> Hotel Pomelia - Designed by Giulio Borzetta</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
