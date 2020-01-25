<?php /* Template Name: Promo */

get_header();

the_post();

?>

<main>
    <div class="promo-title"><?php echo get_the_title(); ?></div>

    <div class="promo-content">
        <?php echo do_shortcode(get_the_content()); ?>
    </div>
    
    <div class="promo-list">

    <?php $query = new WP_Query([ 'category_name' => 'promo' ]); ?>
    <?php if ($query->have_posts()): ?>

        <?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="article">
                <img class="article-image" src="<?php echo get_the_post_thumbnail_url(null, 'small') ?>">
                <div class="article-content">
                    <div class="article-title">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <?php echo get_the_title(); ?>
                        </a>
                    </div>
                    <div class="article-excerpt"><?php echo get_the_excerpt(); ?></div>
                    <a class="article-link" href="<?php echo get_the_permalink(); ?>">Read more</a>
                </div>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>

    </div>
</main>

<?php

get_footer();

?>
