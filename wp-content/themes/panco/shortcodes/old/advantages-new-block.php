<?php

class WPBakeryShortCode_Panco_Advantages_New_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $advantages = json_decode( urldecode( $atts['advantages'] ), true );

        $output = '';

        // Get Text Content
        $title = $atts['title'];
        $description = $atts['desc'];
        $featured_image = $atts['feat_img'];

        // Get Title
        if ($title) {
            $title = '<div class="title">'. $title .'</div>';
        }

        // Get Description
        if ($description) {
            $description = '<div class="desc">'. $description .'</div>';
        }

        // Get Featured Image
        if ($featured_image) {
            $featured_image = '<div class="image"><img src="'. $this->get_bg($featured_image) .'" alt="Featured Image"/></div>';
        }

        // General Output
        $output .= '<div class="block block-text">';
        $output .= '<div class="text-wrapper">';

        // Title and Description
        $output .= $title;
        $output .= $description;

        // Advanced Container
        $output .= '<div class="custom-container">';
        $output .= '<div class="custom-block">';

        // Image Display
        $output .= $featured_image;

        // Advantages Display
        $output .= $this->render_advantages($atts['advantages_id']);

        $output .= '</div>';
        $output .= '</div>';

        $output .= '</div>';
        $output .= '</div>';


        return $output;
    }

    protected function render_advantages( $advantages_id ) {

        if ( ! $advantages_id ) {
            $advantages_id = 169;
        }

        $advantages = get_field('advantage', $advantages_id);

        if ( ! $advantages ) {
            $advantages = '';
        }

        $html = '<div class="info"> <ul>';
        foreach ( $advantages as $advantage ) {

            $html .= '<li>' . $advantage['title'] . '</li>';

        }
        $html .= '</ul> </div>';

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}