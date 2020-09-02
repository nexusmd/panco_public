<?php

class WPBakeryShortCode_Panco_Projects_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {


        wp_enqueue_style( 'lightbox-theme', get_template_directory_uri() . '/assets/dist/lightbox2/css/lightbox.min.css' );
        wp_enqueue_script( 'lightbox-script', get_template_directory_uri() . '/assets/dist/lightbox2/js/lightbox.min.js', array('jquery'), null, true );



        // Get Posts
        $atts['projects_qty'] ? $post_qty = $atts['projects_qty'] : $post_qty = 6;

        $args = array(
            'numberposts'   => $post_qty,
            'post_type'     => 'project'
        );

        $posts = get_posts($args);

        $output = '';


        // Get Block Title
        $title = $atts['title'];

        if ($title) {
            $title = '<h3 class="title">'. $title .'</h3>';
        }

        // Get Block Description
        $desc = $atts['desc'];

        if ($desc) {
            $desc = '<div class="desc">'. $desc .'</div>';
        }


        // Wrapper
        $output .= '<div class="block block-projects">';
        $output .= '<div class="projects-wrapper">';

        // Inner Content
        $output .= '<div class="inner-wrapper">';

        // Title Section
        $output .= $title . $desc;

        // Content Section
        $output .= $this->render_posts($posts);

        $output .= '</div>';

        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }

    protected function render_posts( $posts ) {

        if ( ! $posts ) {
            return '';
        }

        $html = '';

        foreach ($posts as $post) {
            // Get Vars
            $slides = get_field('gallery', $post->ID);
            $title = '<h2 class="title">' . $post->post_title . '</h2>';

            // Wrapper
            $html .= '<div class="project-block">';
            $html .= '<div class="inner-block">';

            // Title
            $html .= $title;

            // Slider
            $html .= '<div class="slider-wrapper">';
            $html .= '<div class="project-slider slider-dots">';
            foreach ($slides as $slide) {
                $html .= '<div class="slide"><div class="preview-image">';

                // Lightbox
                $html .= '<a class="project-'. $post->ID .'-image-link" href="'. $slide['url'] .'" data-lightbox="project-'. $post->ID .'-set" >';

                $html .= '<img class="project-'. $post->ID .'-image" src="'. $slide['url'] .'" alt="project image">';

                //Lightbox End
                $html .= '</a>';

                $html .= '</div></div>';
            }
            $html .= '</div>';
            $html .= '</div>';

            // Wrapper END
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}