<?php get_header(); ?>
    <div class="single-post-page main-content podcast-single">

		<?php while ( have_posts() ) : the_post(); ?>

            <!--  Page Content-->
            <div class="single-post-content">
                <?php the_title() ?>
                <?php the_content() ?>
            </div>
		<?php endwhile; ?>
    </div>
<?php
get_footer();
