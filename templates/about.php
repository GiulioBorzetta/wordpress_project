<?php
/*
Template Name: Pagina Chi Siamo
*/
get_header(); 
?>

<main class="about-main">

    <section class="hero-section" data-aos="fade-up">
        <div class="hero-content">
            <h1><?php echo get_theme_mod('about_title', 'Chi siamo'); ?></h1>
            <p><?php echo get_theme_mod('about_description', 'Scopri la nostra storia e il nostro impegno per un soggiorno indimenticabile.'); ?></p>
        </div>
    </section>

    <section class="info-section" data-aos="fade-up">
        <h2><?php echo get_theme_mod('info_hotel_title', 'Informazioni sull\'Hotel'); ?></h2>
        <p><?php echo get_theme_mod('info_hotel_description_1', 'La nostra struttura è a conduzione familiare ed è attiva da 3 generazioni. Da sempre è un punto di riferimento per il turismo ragusano e con il passaggio alla nuova generazione ha subito un profondo rinnovamento in armonia con la natura e le tradizioni del luogo.'); ?></p>
        <p><?php echo get_theme_mod('info_hotel_description_2', 'Pomelia è il primo hotel in Sicilia ad aver scelto di diventare Società Benefit.'); ?></p>
    </section>

    <section class="services-section-about" data-aos="fade-right">
        <h2><?php echo get_theme_mod('service_title_1', 'I nostri servizi'); ?></h2>
        <ul>
            <li data-aos="fade-up" data-aos-delay="100"><?php echo get_theme_mod('service_title_1', 'Camere confortevoli e ben arredate'); ?>: <?php echo get_theme_mod('service_description_1', 'Descrizione breve del servizio.'); ?></li>
            <li data-aos="fade-up" data-aos-delay="200"><?php echo get_theme_mod('service_title_2', 'Wi-Fi gratuito in tutta la struttura'); ?>: <?php echo get_theme_mod('service_description_2', 'Descrizione breve del servizio.'); ?></li>
            <li data-aos="fade-up" data-aos-delay="300"><?php echo get_theme_mod('service_title_3', 'Colazione inclusa ogni mattina'); ?>: <?php echo get_theme_mod('service_description_3', 'Descrizione breve del servizio.'); ?></li>
        </ul>
    </section>
    
    <section class="team-section" data-aos="fade-up">
        <h2>Il nostro team</h2>
        <div class="team-members">
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="team-member" data-aos="fade-up" data-aos-delay="<?php echo 100 * $i; ?>">
                    <h3><?php echo get_theme_mod("team_member_name_$i", "Nome Membro $i"); ?></h3>
                    <img src="<?php echo get_theme_mod("team_member_image_$i", ''); ?>" alt="<?php echo get_theme_mod("team_member_name_$i", 'Nome Membro'); ?>" style="width: 100px; height: auto;">
                    <p><?php echo get_theme_mod("team_member_description_$i", 'Descrizione breve del membro del team.'); ?></p>
                </div>
            <?php endfor; ?>
        </div>
    </section>

</main>

<?php
get_footer();
?>
