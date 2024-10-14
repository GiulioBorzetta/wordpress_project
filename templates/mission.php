<?php
/*
Template Name: template mission
*/
get_header(); 
?>

<main class="mission-main">

    <section class="mission-section" data-aos="fade-up">
        <div class="content-container">
            <div class="text-content" data-aos="fade-right">
                <h1><?php echo get_theme_mod('mission_title', 'La nostra Missione'); ?></h1>
                <p><?php echo get_theme_mod('mission_description1', 'Creare un ecosistema di turismo responsabile, ridurre l\'impatto sul pianeta, contribuire alla crescita e allo sviluppo sostenibile del territorio siciliano.'); ?></p>
                <p><?php echo get_theme_mod('mission_description2', "La nostra missione è quella di offrire ai nostri ospiti un'esperienza autentica, immersa nella cultura siciliana, rispettando l'ambiente e le comunità locali. Ci impegniamo a utilizzare pratiche sostenibili, a collaborare con produttori locali e a promuovere un turismo consapevole e responsabile."); ?></p>
            </div>
            <div class="image-content" data-aos="fade-left">
                <img src="<?php echo get_theme_mod('mission_image', 'URL_IMMAGINE_DEFAULT'); ?>" alt="Missione" />
            </div>
        </div>
    </section>

    <section class="vision-section" data-aos="fade-up">
        <div class="content-container">
            <div class="image-content" data-aos="fade-right">
                <img src="<?php echo get_theme_mod('vision_image', 'URL_IMMAGINE_DEFAULT'); ?>" alt="Visione" />
            </div>
            <div class="text-content" data-aos="fade-left">
                <h2><?php echo get_theme_mod('vision_title', 'La nostra Visione'); ?></h2>
                <p><?php echo get_theme_mod('vision_description1', 'Contribuire a rendere il turismo più sostenibile e in armonia con la natura.'); ?></p>
                <p><?php echo get_theme_mod('vision_description2', "La nostra visione è quella di diventare un punto di riferimento nel settore del turismo sostenibile in Sicilia. Vogliamo ispirare i nostri ospiti a viaggiare in modo responsabile, valorizzando la bellezza naturale e culturale della nostra terra. Ci sforziamo di creare un impatto positivo, sia per i visitatori che per la comunità locale."); ?></p>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
