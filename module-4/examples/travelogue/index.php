<?php get_header(); ?>

<main>

<?php if (have_posts()): the_post(); ?>
<?php
    $categories = get_the_category();
    $first_category = $categories[0];
    $first_category_name = $first_category->name;
    $first_category_link = get_category_link($first_category->term_id);
?>
    <div class="featured-article">
        <img class="featured-article-image" src="<?php echo get_the_post_thumbnail_url(null, 'full') ?>">
        <div class="featured-article-metadata">
            <a class="category-link" href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
            - <?php echo get_the_date() ?>
            - <?php echo get_comments_number() ?> comments
        </div>
        <div class="featured-article-title">
            <a href="<?php echo get_the_permalink(); ?>">
                <?php echo get_the_title(); ?>
            </a>
        </div>
    </div>
<?php endif; ?>

<?php if (have_posts()): ?>
    <div class="article-list">

    <?php while (have_posts()): the_post(); ?>
    <?php
        $categories = get_the_category();
        $first_category = $categories[0];
        $first_category_name = $first_category->name;
        $first_category_link = get_category_link($first_category->term_id);
    ?>
        <div class="article">
            <img class="article-image" src="<?php echo get_the_post_thumbnail_url(null, 'small') ?>">
            <div class="article-content">
                <div class="article-title">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php echo get_the_title(); ?>
                    </a>
                </div>
                <div class="article-metadata">
                    <a class="category-link" href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
                    - <?php echo get_the_date() ?>
                    - <?php echo get_comments_number() ?> comments
                </div>
                <div class="article-excerpt"><?php echo get_the_excerpt(); ?></div>
                <a class="article-link" href="<?php echo get_the_permalink(); ?>">Read more</a>
            </div>
        </div>
    <?php endwhile; ?>

    </div>
<?php endif; ?>

</main>

<?php get_footer(); ?>
