<?php get_header(); ?>

<div class="main-content archive-page ">
    <div class="container blog-archive-wrapper">
        <div class="col-xs-12 page-title archive-title">
            <h1>
                <?php if ( is_home() && ! is_front_page() ) : ?>
                   <?php _e( 'Blog Jukebox.', 'panco' ); ?>
                <?php else : ?>
                    <?php _e( 'Posts', 'panco' ); ?>
                <?php endif; ?>
            </h1>
        </div>

        <div class="col-xs-12 col-md-8 archive-posts">
            <div class="row">

                <?php if ( have_posts() ) : global $wp_query; $i = 0; ?>

                    <?php while ( have_posts() ) : the_post(); $i++; ?>

		                <?php if ( 1 === $i ) : ?>

                            <div class="col-xs-12 featured-area blog-last-post">
                                <div class="last-post-inner">
                                    <div class="featured-post-header">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="Post Thumbnail">
                                        </a>
                                    </div>
                                    <div class="featured-post-footer col-xs-12">
                                        <h5 class="post-title">
                                            <a href="<?php the_permalink(); ?>">
	                                            <?php the_title(); ?>
                                            </a>
                                        </h5>
                                        <p class="meta">
                                            <span class="category">
                                                <?php echo panco_terms( 'category' ); ?>
                                            </span>
	                                        <?php if ( get_post_meta( $post->ID, 'panco_read_time', true ) ) : ?>
                                                |
                                                <span class="duration"><?php echo get_post_meta( $post->ID, 'panco_read_time', true ); ?> <?php esc_html_e( 'Min Read', 'panco' ); ?></span>
	                                        <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

		                <?php else: ?>

			                <?php if ( 2 === $i ) : ?>

                                <div class="col-xs-12 page-title archive-title">
                                    <h1><?php esc_html_e( 'Recent Episodes.', 'panco' ); ?></h1>
                                </div>

                                <div class="col-xs-12 post-grid blog-post-grid">
                                    <div class="row post-grid-inner">

			                <?php endif; ?>

                            <div class="col-xs-12 col-sm-6 col-md-6 post-grid-item">
                                <div class="grid-item-header">
                                    <img src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="Post Thumbnail">
                                </div>
                                <div class="grid-item-footer col-xs-12">
                                    <h5 class="post-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h5>
                                    <p class="meta">
                                        <span class="category">
                                            <?php echo panco_terms( 'category' ) ?>
                                        </span>
                                        <?php if ( get_post_meta( $post->ID, 'panco_read_time', true ) ) : ?>
                                            |
                                            <span class="duration"><?php echo get_post_meta( $post->ID, 'panco_read_time', true ); ?> <?php esc_html_e( 'Min Read', 'panco' ); ?></span>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>

			                <?php if ( ( $wp_query->current_post + 1 ) == ( $wp_query->post_count ) ) : ?>
                                    </div>
                                </div>
                            <?php endif; ?>

		                <?php endif; ?>

                    <?php endwhile; ?>

                    <?php
                        the_posts_pagination(
                            array(
                                'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page', 'panco' ) . '</span>',
                                'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'panco' ) . '</span>',
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'panco' ) . ' </span>',
                            )
                        );
                    ?>

			    <?php endif; ?>
		    </div>
	    </div>
        <?php get_template_part( 'sidebar-tpl' ); ?>
    </div>
</div>

<?php
get_footer();
