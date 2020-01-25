# Cheat Sheet

[:arrow_backward: Algebra / Web Designer / Module 4 - WordPress](./)

---

**Create a theme**

1. Create theme directory (e.g. 'my-theme') in /wp-content/themes
2. Add `style.css` and `index.php` to theme directory

The theme definition is contained as a comment in `style.css`. For example:

```css
/*
Theme Name: Twenty Seventeen
Theme URI: https://wordpress.org/themes/twentyseventeen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Twenty Seventeen brings your site to life with immersive featured
images and subtle animations. With a focus on business sites, it features multiple
sections on the front page as well as widgets, navigation and social menus, a logo,
and more. Personalize its asymmetrical grid with a custom color scheme and showcase
your multimedia content with post formats. Our default theme for 2017 works great
in many languages, for any abilities, and on any device.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: twentyseventeen
Tags: one-column, two-columns, right-sidebar, flexible-header, accessibility-ready,
custom-colors, custom-header, custom-menu, custom-logo, editor-style,
featured-images, footer-widgets, post-formats, rtl-language-support, sticky-post,
theme-options, threaded-comments, translation-ready
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
```

See:
- [WordPress theme development](https://codex.wordpress.org/Theme_Development)

**Template files**

| File | Description |
| - | - |
| `style.css` | Theme’s main stylesheet file. |
| `index.php` | Main template file. |
| `single.php` | Single post file. Used to display single posts only. |
| `archive.php` | Archive or Category template file. |
| `searchform.php` | Search form file. |
| `search.php` | Search results file. |
| `404.php` | 404 error page file. Will be displayed if no page can be found. |
| `comments.php` | Comments template file. |
| `footer.php` | Footer content file. |
| `header.php` | Header content file. |
| `sidebar.php` | Sidebar content file. |
| `page.php` | Single page file. Used for pages only. |

See:
- [WordPress template hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [WordPress cheat sheet](https://cdn.rawgit.com/hostinger/banners/b2416e91/tutorials/pdf/Wordpress-Cheat-Sheet-V-1.pdf)

**Theme functions**

Theme functions are added to `functions.php`.

```php
function my_theme_init() {
    // ...
}

add_action('init', 'my_theme_init');
```

**Thumbnails**

Inside `functions.php` theme init function:

```php
add_theme_support('post-thumbnails');
```

See:
- [WordPress theme support](https://developer.wordpress.org/reference/functions/add_theme_support/)

**Navigation menus**

Inside `functions.php` theme init function:

```php
register_nav_menus(array(
    'menu_1' => 'Menu 1'
));
```

Inside page template:

```php
if (has_nav_menu('menu_1')) {
    wp_nav_menu('menu_1');
}
```

**Post loop**

Single post:

```php
if (have_posts()) {
    the_post();
}
```
OR

```php
<?php if ( have_posts() ) : the_post(); ?>
    // Display post content
<?php endif; ?>
```

Multiple posts:

```php
if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
}
```

OR

```php
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    // Display post content
    <?php endwhile; ?>
<?php endif; ?>
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

OR

```php
<?php $query = new WP_Query(); ?>
<?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    // Display post content
    <?php endwhile; ?>
<?php endif; ?>
```

See:
- [Working with WP_Query: The Complete User's Guide](https://wpshout.com/courses/wp_query/)

**Template tags**

| Tag | Description |
| --- | --- |
| `the_content();` | Get post content. |
| `the_excerpt();` | Get the post excerpt. |
| `the_title();` | Get the title of the post. |
| `the_permalink();` | Display post link. |
| `the_category(', ');` | Display category of a post. |
| `the_author();` | Show post author. |
| `the_ID();` | Display post ID. |
| `edit_post_link();` | Show Edit link for a post. |
| `next_post_link(' %link ');` | Display next page URL. |
| `previous_post_link('%link');` | Display previous page URL. |
| `get_links_list();` | Retrieve blogroll links. |
| `wp_list_pages();` | Retrieve all pages. |
| `wp_get_archives();` | Retrieve archive for the site. |
| `wp_list_cats();` | Retrieve all categories. |
| `get_calendar();` | Show the built-in WordPress calendar. |
| `wp_register();` | Show register link. |
| `wp_loginout();` | Displays login or logout links (for registered users). |

See: [WordPress function reference](https://codex.wordpress.org/Function_Reference)

**Include tags**

| Tag | Description |
| --- | --- |
| `<?php get_header(); ?>` | Includes header.php and display its content. |
| `<?php get_sidebar(); ?>` | Includes sidebar.php. |
| `<?php get_footer(); ?>` | Includes the footer.php. |
| `<?php comments_template(); ?>` | Load specific template for comments. | 
