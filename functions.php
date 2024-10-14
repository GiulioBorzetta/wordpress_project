<?php
function customize_hero_section($wp_customize) {
    $wp_customize->add_section('hero_section', array(
        'title'       => __('Sezione Home-Header', 'hotel-pomelia'),
        'description' => __('Modifica la sezione hero della homepage', 'hotel-pomelia'),
        'priority'    => 20,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default'   => 'Benvenuto nel nostro hotel!',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_title_control', array(
        'label'    => __('Titolo Home-Header', 'hotel-pomelia'),
        'section'  => 'hero_section',
        'settings' => 'hero_title',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default'   => 'Vuoi prenotare una stanza?',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_description_control', array(
        'label'    => __('Descrizione Home-Header', 'hotel-pomelia'),
        'section'  => 'hero_section',
        'settings' => 'hero_description',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('hero_button_link', array(
        'default'   => site_url('/prenota'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_button_link_control', array(
        'label'    => __('Link del pulsante', 'hotel-pomelia'),
        'section'  => 'hero_section',
        'settings' => 'hero_button_link',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('hero_button_text', array(
        'default'   => 'Scopri di più',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('hero_button_text_control', array(
        'label'    => __('Testo del pulsante', 'hotel-pomelia'),
        'section'  => 'hero_section',
        'settings' => 'hero_button_text',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('hero_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image_control', array(
        'label'    => __('Immagine Hero', 'hotel-pomelia'),
        'section'  => 'hero_section',
        'settings' => 'hero_image',
    )));
}

add_action('customize_register', 'customize_hero_section');

function personalizza_homepage($wp_customize) {
    $wp_customize->add_section('about_section', array(
        'title' => __('Sezione Chi Siamo - HomePage', 'hotel-pomelia'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('about_title', array(
        'default' => 'Chi siamo',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_title', array(
        'label' => __('Titolo Chi Siamo', 'hotel-pomelia'),
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_image', array(
        'default' => 'URL_DEFAULT_IMMAGINE',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => __('Immagine Chi Siamo', 'hotel-pomelia'),
        'section' => 'about_section',
        'settings' => 'about_image',
    )));

    $wp_customize->add_setting('about_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_description', array(
        'label' => __('Descrizione Chi Siamo', 'hotel-pomelia'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_section('services_section', array(
        'title' => __('Sezione Servizi', 'hotel-pomelia'),
        'priority' => 40,
    ));

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("service_title_$i", array(
            'default' => "Servizio $i",
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("service_title_$i", array(
            'label' => __("Titolo Servizio $i", 'hotel-pomelia'),
            'section' => 'services_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("service_description_$i", array(
            'default' => 'Descrizione breve del servizio.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("service_description_$i", array(
            'label' => __("Descrizione Servizio $i", 'hotel-pomelia'),
            'section' => 'services_section',
            'type' => 'textarea',
        ));
    }
}
add_action('customize_register', 'personalizza_homepage');

function personalizza_booking_section($wp_customize) {
    $wp_customize->add_section('booking_section', array(
        'title' => __('Sezione Prenotazione - HomePage', 'hotel-pomelia'),
        'priority' => 50,
    ));

    $wp_customize->add_setting('booking_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'booking_image', array(
        'label' => __('Immagine Prenotazione', 'hotel-pomelia'),
        'section' => 'booking_section',
        'settings' => 'booking_image',
    )));

    $wp_customize->add_setting('booking_title', array(
        'default' => 'Prenota la tua stanza',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('booking_title', array(
        'label' => __('Titolo Prenotazione', 'hotel-pomelia'),
        'section' => 'booking_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('booking_description', array(
        'default' => 'Scopri la nostra ospitalità e prenota la tua stanza per un soggiorno indimenticabile. Approfitta delle nostre offerte e servizi esclusivi!',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('booking_description', array(
        'label' => __('Descrizione Prenotazione', 'hotel-pomelia'),
        'section' => 'booking_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('booking_link', array(
        'default' => site_url('/prenota'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('booking_link', array(
        'label' => __('Link Prenotazione', 'hotel-pomelia'),
        'section' => 'booking_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'personalizza_booking_section');

function personalizza_cta($wp_customize) {
    $wp_customize->add_section('cta_section', array(
        'title' => __('Sezione Call to Action', 'hotel-pomelia'),
        'priority' => 60,
    ));

    $wp_customize->add_setting('cta_title', array(
        'default' => 'Hai domande?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cta_title', array(
        'label' => __('Titolo della Sezione CTA', 'hotel-pomelia'),
        'section' => 'cta_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('cta_description', array(
        'default' => 'Non esitare a contattarci per qualsiasi informazione o richiesta. Siamo qui per aiutarti a pianificare la tua esperienza ideale.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('cta_description', array(
        'label' => __('Descrizione della Sezione CTA', 'hotel-pomelia'),
        'section' => 'cta_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('cta_button_link', array(
        'default' => site_url('/contact'),
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('cta_button_link', array(
        'label' => __('Link del pulsante CTA', 'hotel-pomelia'),
        'section' => 'cta_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'personalizza_cta');

function personalizza_info_hotel($wp_customize) {
    $wp_customize->add_section('info_hotel_section', array(
        'title' => __('Informazioni sull\'Hotel', 'hotel-pomelia'),
        'priority' => 70,
    ));

    $wp_customize->add_setting('info_hotel_title', array(
        'default' => 'Informazioni sull\'Hotel',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('info_hotel_title', array(
        'label' => __('Titolo della Sezione', 'hotel-pomelia'),
        'section' => 'info_hotel_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('info_hotel_description_1', array(
        'default' => 'La nostra struttura è a conduzione familiare ed è attiva da 3 generazioni. Da sempre è un punto di riferimento per il turismo ragusano e con il passaggio alla nuova generazione ha subito un profondo rinnovamento in armonia con la natura e le tradizioni del luogo.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('info_hotel_description_1', array(
        'label' => __('Descrizione 1', 'hotel-pomelia'),
        'section' => 'info_hotel_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('info_hotel_description_2', array(
        'default' => 'Pomelia è il primo hotel in Sicilia ad aver scelto di diventare Società Benefit.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('info_hotel_description_2', array(
        'label' => __('Descrizione 2', 'hotel-pomelia'),
        'section' => 'info_hotel_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'personalizza_info_hotel');

function personalizza_about_page($wp_customize) {
    $wp_customize->add_section('team_section', array(
        'title' => __('Sezione Team', 'hotel-pomelia'),
        'priority' => 80,
    ));

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("team_member_name_$i", array(
            'default' => "Nome Membro $i",
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("team_member_name_$i", array(
            'label' => __("Nome Membro del Team $i", 'hotel-pomelia'),
            'section' => 'team_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("team_member_description_$i", array(
            'default' => 'Descrizione breve del membro del team.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("team_member_description_$i", array(
            'label' => __("Descrizione Membro del Team $i", 'hotel-pomelia'),
            'section' => 'team_section',
            'type' => 'textarea',
        ));

        $wp_customize->add_setting("team_member_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "team_member_image_$i", array(
            'label' => __("Immagine Membro del Team $i", 'hotel-pomelia'),
            'section' => 'team_section',
            'settings' => "team_member_image_$i",
        )));
    }
}
add_action('customize_register', 'personalizza_about_page');

function personalizza_mission_vision($wp_customize) {
    $wp_customize->add_section('mission_vision_section', array(
        'title' => __('Missione e Visione', 'hotel-pomelia'),
        'priority' => 90,
    ));

    $wp_customize->add_setting('mission_title', array(
        'default' => 'La nostra Missione',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mission_title', array(
        'label' => __('Titolo Missione', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('mission_description1', array(
        'default' => 'Creare un ecosistema di turismo responsabile, ridurre l\'impatto sul pianeta, contribuire alla crescita e allo sviluppo sostenibile del territorio siciliano.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('mission_description1', array(
        'label' => __('Descrizione Missione 1', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('mission_description2', array(
        'default' => "La nostra missione è quella di offrire ai nostri ospiti un'esperienza autentica, immersa nella cultura siciliana, rispettando l'ambiente e le comunità locali. Ci impegniamo a utilizzare pratiche sostenibili, a collaborare con produttori locali e a promuovere un turismo consapevole e responsabile.",
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('mission_description2', array(
        'label' => __('Descrizione Missione 2', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('mission_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mission_image', array(
        'label' => __('Immagine Missione', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'settings' => 'mission_image',
    )));

    $wp_customize->add_setting('vision_title', array(
        'default' => 'La nostra Visione',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vision_title', array(
        'label' => __('Titolo Visione', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('vision_description1', array(
        'default' => 'Contribuire a rendere il turismo più sostenibile e in armonia con la natura.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vision_description1', array(
        'label' => __('Descrizione Visione 1', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('vision_description2', array(
        'default' => 'La nostra visione è quella di diventare un punto di riferimento nel settore del turismo sostenibile in Sicilia. Vogliamo ispirare i nostri ospiti a viaggiare in modo responsabile, valorizzando la bellezza naturale e culturale della nostra terra. Ci sforziamo di creare un impatto positivo, sia per i visitatori che per la comunità locale.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('vision_description2', array(
        'label' => __('Descrizione Visione 2', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('vision_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vision_image', array(
        'label' => __('Immagine Visione', 'hotel-pomelia'),
        'section' => 'mission_vision_section',
        'settings' => 'vision_image',
    )));
}
add_action('customize_register', 'personalizza_mission_vision');

function customize_reserve_page($wp_customize) {
    $wp_customize->add_section('reserve_section', array(
        'title' => __('Prenota', 'hotel-pomelia'),
        'priority' => 100,
    ));

    $wp_customize->add_setting('reserve_title', array(
        'default' => 'Riserva il tuo posto',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reserve_title_control', array(
        'label' => __('Titolo della Sezione', 'hotel-pomelia'),
        'section' => 'reserve_section',
        'settings' => 'reserve_title',
    )));

    $wp_customize->add_setting('reserve_description', array(
        'default' => 'Completa il modulo sottostante per riservare il tuo posto!',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reserve_description_control', array(
        'label' => __('Descrizione della Sezione', 'hotel-pomelia'),
        'section' => 'reserve_section',
        'settings' => 'reserve_description',
    )));

    $wp_customize->add_setting('reserve_form_title', array(
        'default' => 'Modulo di Riserva',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reserve_form_title_control', array(
        'label' => __('Titolo del Modulo', 'hotel-pomelia'),
        'section' => 'reserve_section',
        'settings' => 'reserve_form_title',
    )));
}
add_action('customize_register', 'customize_reserve_page');

function contact_page_customizer_settings($wp_customize) {
    $wp_customize->add_section('contact_page_section', array(
        'title' => __('Contattaci', 'hotel-pomelia'),
        'priority' => 110,
    ));

    $wp_customize->add_setting('contact_title', array(
        'default' => 'Contattaci',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_title_control', array(
        'label' => 'Titolo della Sezione Contattaci',
        'section' => 'contact_page_section',
        'settings' => 'contact_title',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_description', array(
        'default' => 'Hai domande? Siamo qui per aiutarti! Compila il modulo sottostante...',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_description_control', array(
        'label' => 'Descrizione della Sezione Contattaci',
        'section' => 'contact_page_section',
        'settings' => 'contact_description',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('contact_form_title', array(
        'default' => 'Modulo di Contatto',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_form_title_control', array(
        'label' => 'Titolo del Modulo di Contatto',
        'section' => 'contact_page_section',
        'settings' => 'contact_form_title',
        'type' => 'text',
    ));
}
add_action('customize_register', 'contact_page_customizer_settings');

function personalizza_footer($wp_customize) {
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer', 'hotel-pomelia'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('footer_info_title', array(
        'default' => 'Informazioni',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_info_title', array(
        'label' => __('Titolo Informazioni', 'hotel-pomelia'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_social_title', array(
        'default' => 'Seguici su',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_social_title', array(
        'label' => __('Titolo Social', 'hotel-pomelia'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
    
    $pages = [
        'chi-siamo' => 'Chi Siamo',
        'servizi' => 'I Nostri Servizi',
        'contatti' => 'Contattaci',
        'politica-sulla-privacy' => 'Privacy Policy',
        'termini-e-condizioni' => 'Termini e Condizioni',
    ];

    foreach ($pages as $slug => $default) {
        $wp_customize->add_setting("footer_link_$slug", array(
            'default' => site_url("/$slug"),
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("footer_link_$slug", array(
            'label' => __("$default Link", 'hotel-pomelia'),
            'section' => 'footer_section',
            'type' => 'url',
        ));
    }

    $socials = [
        'facebook' => 'Facebook',
        'instagram' => 'Instagram',
        'twitter' => 'Twitter',
    ];

    foreach ($socials as $slug => $label) {
        $wp_customize->add_setting("footer_$slug", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("footer_$slug", array(
            'label' => __("$label Link", 'hotel-pomelia'),
            'section' => 'footer_section',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'personalizza_footer');

function carica_stili_e_script_tema() {
    wp_enqueue_style('style-principale', get_stylesheet_uri());
    wp_enqueue_style('thema-css', get_template_directory_uri() . './assets/css/thema.css');
    wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . './assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'carica_stili_e_script_tema');



