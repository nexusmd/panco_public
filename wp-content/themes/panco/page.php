<?php get_header(); ?>
		<?php while ( have_posts() ) : the_post(); global $vc_is_inline;?>

            <?php if ( preg_match( '/vc_row/', get_the_content() ) || $vc_is_inline ) : ?>

					<?php the_content(); ?>

            <?php else: ?>

                <div class="single-post">
                    <?php the_title() ?>
                    <?php the_content() ?>
                </div>

			<?php endif; ?>
		<?php endwhile; ?>

<?php
get_footer();
