<?php

class WPBakeryShortCode_Panco_Stones_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {


        $args = array(
            'numberposts'   => 0,
            'post_type'     => 'stone',
            'order' 		=> 'asc'
        );

        $posts = get_posts($args);

        $output = '';


        // Get Block Title
        $title = $atts['title'];

        if ($title) {
            $title = '<h2 class="main-title">'. $title .'</h2>';
        }

        // Get Block Description
        $desc = $atts['desc'];

        if ($desc) {
            $desc = '<div class="desc">'. $desc .'</div>';
        }


        // Wrapper
        $output .= '<div class="block block-stones">';
        $output .= '<div class="stones-wrapper">';

        // Title Section
        $output .= $title . $desc;

        // Content Section
        $output .= $this->render_posts($posts);

        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }

    protected function render_posts( $posts ) {

        if ( ! $posts ) {
            return '';
        }

        $html = '<div class="stones-container">';

        foreach ($posts as $post) {

            // Wrapper
            $html .= '<div class="stone-item">';

            // Title
            $html .= '<div class="img"><img src="'. $this->get_post_img($post->ID) .'" alt="stone preview"></div>';
            $html .= '<h3 class="name">' . $post->post_title . '</h3>';

            // Wrapper END
            $html .= '</div>';
        }

        $html .= '</div>';

        return $html;
    }

    protected function get_post_img( $id ) {
        return ( $url = get_the_post_thumbnail_url( $id ) ) && $url ? $url : '';
    }
}