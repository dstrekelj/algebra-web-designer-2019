<?php get_header(); ?>

<main>

<?php if (have_posts()): the_post(); ?>
<?php
    $categories = get_the_category();
    $first_category = $categories[0];
    $first_category_name = $first_category->name;
    $first_category_link = get_category_link($first_category->term_id);
?>
    <div class="single-article">
        <img class="single-article-image" src="<?php echo get_the_post_thumbnail_url(null, 'full') ?>">
        <div class="single-article-metadata">
            <a class="category-link" href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
            - <?php echo get_the_date() ?>
            - <?php echo get_comments_number() ?> comments
        </div>
        <div class="single-article-title">
            <?php echo get_the_title() ?>
        </div>
        <div class="single-article-content">
            <?php echo the_content() ?>
        </div>
    </div>
<?php endif; ?>

</main>

<?php get_footer(); ?>
