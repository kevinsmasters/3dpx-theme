<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<div id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="entry-header">
					<h1 style="color:#c20e1a"><?php esc_html_e( 'Hmm, something went wrong there.', 'wp-bootstrap-starter' ); ?></h1><div class="blockquote">We're sorry but the page or resource you are looking for has moved or ceased to exist on our website.</div>
				</header><!-- .page-header -->
			<div id="bodyContent">
				<div class="entry-content">
					<p><?php esc_html_e( 'You may find what you are looking for in the navigation menu above, by visiting our home page, or searching again.', 'wp-bootstrap-starter' ); ?></p>
					<p><a class="btn btn-primary" href="/">Go to the homepage</a> <a class="btn btn-secondary" href="/contact-us/">Contact Us</a></p>
					<?php
						//get_search_form();

					?>

				</div><!-- .page-content -->
				<aside id="secondary" class="widget-area">
					<img src="https://massnervekit.a2hosted.com/massnerv/wp-content/uploads/2022/03/search-icon.png" alt="search icon">
				</aside>
</div>
			</section><!-- .error-404 -->

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
