<?php /* Template Name: Contact */

get_header();

the_post();

?>

<main>
    <div class="contact-title"><?php echo get_the_title(); ?></div>

    <div class="contact-content">
        <?php echo do_shortcode(get_the_content()); ?>
    </div>
</main>

<?php

get_footer();

?>
