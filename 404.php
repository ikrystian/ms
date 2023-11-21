<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ms
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="page-content error-404-content">
                <img src="<?php echo get_template_directory_uri(); ?>/img/404.webp" />
                <h1 class="page-title"><?php esc_html_e( 'Nie znaleziono strony', 'ms' ); ?></h1>

            </div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
