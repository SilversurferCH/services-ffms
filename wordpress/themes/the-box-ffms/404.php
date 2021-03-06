<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package thebox
 * @since thebox 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<article id="post-0" class="post hentry error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Uups! Diese Seite konnte nicht gefunden werden.', 'thebox' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
				
					<p><?php _e( 'Es sieht so aus, als gäbe es unter dieser Adresse nichts zu finden. Wie wärs mit der Suchfunktion?', 'thebox' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->
			<article id="post-0" class="post hentry error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'thebox' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
				
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'thebox' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_sidebar('sidebar-1'); ?>
<?php get_footer(); ?>

