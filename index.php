<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>Contenuto non trovato.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
