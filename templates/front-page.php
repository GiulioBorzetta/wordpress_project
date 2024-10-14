<?php
/*
Template Name: front-page Template
*/
get_header(); 
?>

<main class="home-main">

    <section class="hero-section" data-aos="fade-up">
        <div class="hero-image-container" data-aos="fade-in" data-aos-delay="200">
            <div class="hero-content" data-aos="zoom-in" data-aos-delay="400">
                <h1><?php echo get_theme_mod('hero_title', 'Benvenuto nel nostro hotel!'); ?></h1>
                <p><?php echo get_theme_mod('hero_description', 'Vuoi prenotare una stanza?'); ?></p>
                <a href="<?php echo get_theme_mod('hero_button_link', site_url('/prenota')); ?>" class="btn" data-aos="fade-up" data-aos-delay="600">
                    <?php echo get_theme_mod('hero_button_text', 'Scopri di più'); ?>
                </a>
            </div>
            <img src="<?php echo get_theme_mod('hero_image', 'URL_DEFAULT_IMMAGINE'); ?>" alt="Immagine Hero" class="hero-image" />
        </div>
    </section>

    <section id="chi-siamo" class="about-section" data-aos="fade-up">
        <h2 data-aos="fade-right"><?php echo get_theme_mod('about_title', 'Chi siamo'); ?></h2>
        <div class="about-content" data-aos="fade-up">
            <div class="about-text" data-aos="fade-right">
                <p><?php echo get_theme_mod('about_description', 'La nostra struttura è a conduzione familiare ed è attiva da 3 generazioni. Da sempre è un punto di riferimento per il turismo ragusano e con il passaggio alla nuova generazione ha subito un profondo rinnovamento in armonia con la natura e le tradizioni del luogo.'); ?></p>
                <a href="<?php echo site_url('/about'); ?>" class="btn"><?php echo get_theme_mod('about_button_text', 'Leggi di più'); ?></a>
            </div>
            <div class="about-image" data-aos="fade-left">
                <img src="<?php echo get_theme_mod('about_image', 'URL_DEFAULT_IMMAGINE'); ?>" alt="Immagine Chi Siamo" />
            </div>
        </div>
    </section>

    <section class="services-section" data-aos="fade-up">
        <h2 data-aos="fade-right">I nostri servizi</h2>
        <div class="services-grid">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="service-item" data-aos="zoom-in" data-aos-delay="<?php echo 200 * $i; ?>">
                    <h3><?php echo get_theme_mod("service_title_$i", "Servizio $i"); ?></h3>
                    <p><?php echo get_theme_mod("service_description_$i", 'Descrizione breve del servizio.'); ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="booking-section" data-aos="fade-up">
        <h2 data-aos="fade-right"><?php echo get_theme_mod('booking_title', 'Prenota la tua stanza'); ?></h2>
        <div class="booking-content" data-aos="fade-up">
        <div class="booking-image" data-aos="fade-left">
                <img src="<?php echo get_theme_mod('booking_image', 'URL_DEFAULT_IMMAGINE'); ?>" alt="Immagine Prenotazione" />
            </div>
            <div class="booking-text" data-aos="fade-right">
                <p><?php echo get_theme_mod('booking_description', 'Scopri la nostra ospitalità e prenota la tua stanza per un soggiorno indimenticabile. Approfitta delle nostre offerte e servizi esclusivi!'); ?></p>
                <a href="<?php echo get_theme_mod('booking_link', site_url('/prenota')); ?>" class="btn"><?php echo get_theme_mod('booking_button_text', 'Prenota ora'); ?></a>
            </div>
        </div>
    </section>

    <section class="cta-section" data-aos="fade-up">
        <div class="cta-content" data-aos="zoom-in">
            <h2><?php echo get_theme_mod('cta_title', 'Hai domande?'); ?></h2>
            <p><?php echo get_theme_mod('cta_description', 'Non esitare a contattarci per qualsiasi informazione o richiesta. Siamo qui per aiutarti a pianificare la tua esperienza ideale.'); ?></p>
            <a href="<?php echo get_theme_mod('cta_button_link', site_url('/contact')); ?>" class="btn" data-aos="fade-up" data-aos-delay="200">
                Contattaci
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
?>
