<?php get_header(); ?>

<div class="wrap">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'panco' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'panco' ); ?></h1>
		<?php endif; ?>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();

			endwhile;

			the_posts_pagination(
				array(
					'prev_text'          =>  '<span class="screen-reader-text">' . __( 'Previous page', 'panco' ) . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'panco' ) . '</span>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'panco' ) . ' </span>',
				)
			);

		else :
		?>
			<p>
                <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'panco' ); ?>
            </p>
			<?php
				get_search_form();

		endif;
		?>

		</main>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
