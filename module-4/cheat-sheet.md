# Cheat Sheet

[:arrow_backward: Algebra / Web Designer / Module 4 - WordPress](./)

---

**Create a theme**

1. Create theme directory (e.g. 'my-theme') in /wp-content/themes
2. Add style.css and index.php to theme directory

style.css
```css
/*
Theme Name: My Theme
Author: John Doe
Version: 1.0
*/
```

See:
- [WordPress theme development](https://codex.wordpress.org/Theme_Development)

**Create a template**

See:
- [WordPress template hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)

**Post loop**

Single post:

```php
if (have_posts()) {
    the_post();
}
```

Multiple posts:

```php
if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
}
```

Query posts:

```php
$query = new WP_Query();

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
    }
}
```

**PHP and HTML**

```php
<?php
if (have_posts()) {
    the_post();
?>
<h1><?php echo get_the_title(); ?></h1>
<?php
}
?>
```

OR:

```php
<?php if (have_posts()): the_post(); ?>
<h1><?php echo get_the_title(); ?></h1>
<?php endif; ?>
```

See: [WordPress coding standard best practices](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/#brace-style)

**Common functions**

| Data | Value | Echo | Description |
| --- | --- | --- | --- |
| permalink | get_permalink() | the_permalink() | Post permalink |
| excerpt | get_the_excerpt() | the_excerpt() | Post content excerpt |
| thumbnail | get_the_post_thumbnail() | - | Post featured image (thumbnail) |
| title | get_the_title() | the_title() | Post title | 

See: [WordPress function reference](https://codex.wordpress.org/Function_Reference)