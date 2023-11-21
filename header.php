<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ms
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="back-to-top"></div>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ms'); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                          rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                         rel="home"><?php bloginfo('name'); ?></a></p>
            <?php
            endif;
            $ms_description = get_bloginfo('description', 'display');
            if ($ms_description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $ms_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" type="button" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'ms'); ?></button>

        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <header class="header">
        <div class="ms-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="logo"/>
        </a>
        <nav class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => false
                )
            );
            ?>
            <span>
                <a href="tel:+48882126065">+48 882 126 065</a>
                <a href="mailto:zapytanie@msservices.pl">zapytanie@msservices.pl</a>
            </span>
        </nav>
        <button class="menu-button"><svg xmlns="http://www.w3.org/2000/svg" height="2.8rem" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></button>
        </div>
    </header>

    <div class="search-box" >
        <div>
            <button type="button" class="close-search">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
            <form action="/" method="get" id="search-form">
                <h2>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    </span>
                    Czego szukasz?</h2>
                <input type="text" name="s" placeholder="Wpisz szukaną frazę" id="search" value="<?php the_search_query(); ?>"/>
                <div id="search-results"></div>
            </form>
        </div>
    </div>

    <div class="mobile-navigation">
        <button class="close-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>close-circle-outline</title><path d="M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22C17.53,22 22,17.53 22,12C22,6.47 17.53,2 12,2M14.59,8L12,10.59L9.41,8L8,9.41L10.59,12L8,14.59L9.41,16L12,13.41L14.59,16L16,14.59L13.41,12L16,9.41L14.59,8Z" /></svg>
        </button>

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => false
                )
            );
            ?>
    </div>
