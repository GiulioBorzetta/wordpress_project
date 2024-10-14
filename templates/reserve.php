<?php
/*
Template Name: template reserve
*/
get_header(); 
?>

<main class="reserve-main">

    <section class="reserve-intro" data-aos="fade-up">
        <h1><?php echo get_theme_mod('reserve_title', 'Prenota il tuo posto'); ?></h1>
        <p><?php echo get_theme_mod('reserve_description', 'Completa il modulo sottostante per riservare il tuo posto!'); ?></p>
    </section>

    <section class="reserve-form-section" data-aos="fade-up">
        <h2><?php echo get_theme_mod('reserve_form_title', 'Modulo di Prenotazione'); ?></h2>
        <div class="reserve-form">
            <?php echo do_shortcode('[contact-form-7 id="2ee8177" title="Contact form 1"]'); ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>
