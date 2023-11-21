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
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <header class="header">
        <div class="ms-container">
        <a href="/" class="logo">
            <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="logo"/>
        </a>
        <nav class="main-navigation">
            <ul>
                <li><button class="search-button search-icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button></li>
                <li><a href="/o-nas">O nas</a></li>
                <li class="submenu">
                    <a href="/uslugi/">Usługi</a>
                    <ul>
                        <li><a href="/uslugi#merchandising">Merchandising</a></li>
                        <li><a href="/uslugi#outsourcing">Outsourcing sił sprzedaży</a></li>
                        <li><a href="/uslugi#promocja">Promocje sprzedaży</a></li>
                        <li><a href="/uslugi#badania">Badania i audyty</a></li>
                        <li><a href="/uslugi#usluga">Usługa rekrutacyjna</a></li>
                    </ul>
                </li>
                <li><a href="/career/">Kariera</a></li>
                <li><a href="/blog">Nowości</a>
                <li><a href="#contact">Kontakt</a></li>
                <li><a href="https://www.youtube.com/@msservicessp.zo.o.4313" class="button-icon"><svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg></a></li>
                <li><a href="https://www.linkedin.com/company/ms-services/" class="button-icon"><svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a></li>
                <li><a href="https://www.facebook.com/MSServices.kariera" class="button-icon"><svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a></li>
                <li><a href="https://www.instagram.com/msservices.pl/" class="button-icon"><svg xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a></li>
            </ul>
<!--            <ul class="lang">-->
<!--                <li><a href="#">PL</a></li>-->
<!--                <li><a href="#">EN</a></li>-->
<!--            </ul>-->
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
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
            <form action="/" method="get" id="search-form">
                <h2>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
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

        <ul>
            <li><a href="/o-nas">O nas</a></li>
            <li><a href="/uslugi/">Usługi</a></li>
            <li><a href="/career/">Kariera</a></li>
			<li><a href="/blog/">Nowości</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
    </div>
