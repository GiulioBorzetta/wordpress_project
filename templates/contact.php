<?php
/*
Template Name: template contact
*/
get_header(); 
?>

<main class="contact-main">

    <section class="contact-intro" data-aos="fade-up">
        <h1><?php echo get_theme_mod('contact_title', 'Contattaci'); ?></h1>
        <p><?php echo get_theme_mod('contact_description', 'Hai domande? Siamo qui per aiutarti! Compila il modulo sottostante e ti risponderemo il prima possibile.'); ?></p>
    </section>

    <section class="contact-form-section" data-aos="fade-up">
        <h2><?php echo get_theme_mod('contact_form_title', 'Modulo di Contatto'); ?></h2>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="7586ee6" title="Contact"]'); ?>
        </div>
    </section>

</main>

<?php
get_footer();
?>
