<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-fluid">
            <div class="site-info">
			<?php if ( is_active_sidebar( 'footer-0' )) : ?>
                        <div class="widget-col footer-0"><?php dynamic_sidebar( 'footer-0' ); ?></div>
                    <?php endif; ?>
            </div><!-- close .site-info -->
						<?php get_template_part( 'footer-widget' ); ?>
		</div>
	</footer><!-- #colophon -->
	<div id="copyRight">
		<p>&copy; 3D-PharmXchange <?php echo date("Y"); ?></p>
	</div>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
