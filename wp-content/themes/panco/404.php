<?php get_header('black'); ?>

    <section class="block block-single">
        <div class="single-wrapper">
            <div class="main-icon">
                <div class="icon-bg"><img src="<?php echo get_theme_file_uri(); ?>/assets/img/step-icon-bg1.png" alt="Icon Background"></div>
                <div class="icon-img"><img src="<?php echo get_theme_file_uri(); ?>/assets/img/error-icon.png" alt="Icon Error"></div>
            </div>
            <div class="main-title"><?php _e('Page Not Found', 'error_page'); ?></div>
            <div class="desc"><?php _e('The Page You Requested Could Not Be Found', 'error_page'); ?></div>
            <div class="btn-wrapper"><a class="stl-btn1" href="<?php echo get_home_url();?>">
                    <?php _e('Back to home', 'error_page'); ?><i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35.93" height="14.118"
                             viewBox="0 0 35.93 14.118">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                        stroke: #fff;
                                        stroke-width: 0.1px;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id="Arrow" class="cls-1"
                                  d="M1540.28,743.308h-34.46a0.737,0.737,0,0,0,0,1.472h34.46A0.738,0.738,0,0,0,1540.28,743.308Zm0.49,0.215-5.97-6.28a0.665,0.665,0,0,0-.98,0,0.75,0.75,0,0,0,0,1.041l5.47,5.76-5.47,5.76a0.749,0.749,0,0,0,0,1.04,0.664,0.664,0,0,0,.98,0l5.97-6.28A0.77,0.77,0,0,0,1540.77,743.523Z"
                                  transform="translate(-1505.08 -736.988)"/>
                        </svg>
                    </i></a></div>
        </div>
    </section>

<?php
get_footer();
