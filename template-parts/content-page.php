<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
if ( !is_front_page() ) : ?>
<div id="page-sub-wrap">
<div class="DJ__BannerTile__processed banner-tile tile color-black analytics-container" data-title="Homepage Banner - Hope Changes Lives">
   <div class="banner-tile__bg">
	   <picture>
		   <source media="(min-width: 1920px)" srcset="">
		   <source media="(min-width: 1281px) and (max-width: 1920px)" 
		   <?php if(has_header_image()) { ?>srcset="<?php header_image(); ?>" <?php } else { ?>srcset="https://placeimg.com/1440/710/any" <?php } ?>>
		   <source media="(min-width: 415px) and (max-width: 1280px)" srcset="">
		   <source media="(max-width: 414px)" srcset="">
		   <img <?php if(has_header_image()) { ?>src="<?php header_image(); ?>" <?php } else { ?>
			src="https://placeimg.com/1440/710/any" <?php } ?>
			width="100%" height="auto" alt="Hope Changes Lives">
		</picture>
	</div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-8 medium-offset-2">
				<div class="banner-tile__content">
					<?php the_title( '<h1 class="banner-tile__headline">', '</h1>' ); ?>
					<div class="banner-tile__desc"><?php echo get_post_meta($post->ID, 'hero_text', true); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php endif; ?>

	<div id="bodyContent">
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php 
        get_sidebar();
    ?>
	</div>
	<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
