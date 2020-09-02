<?php

class WPBakeryShortCode_Panco_Thankyou extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        // Get Text Content
        $title = $atts['title'];
        $description = $atts['desc'];

        if ($title) {
            $title = '<h2 class="main-title">'. $title .'</h2>';
        }

        if ($description) {
            $description = '<div class="desc">'. $description .'</div>';
        }


        $output = '';
        // General Output
        $output .= '<div class="block block-single border">';
        $output .= '<div class="single-wrapper">';
        $output .= '<div class="main-icon"> 
                      <div class="icon-bg"><img src="'. get_template_directory_uri() .'/assets/img/step-icon-bg3.png" alt="icon-background"></div>
                      <div class="icon-img"><img src="'. get_template_directory_uri() .'/assets/img/thank-icon.png" alt="icon-checkmark"></div>
                    </div>
';

        $output .= $title . $description;
        $output .= '';

        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }

    protected function render_images( $images_id ) {

        if ( ! $images_id ) {
            $images_id = 451;
        }

        $html = '';

        $images = get_field('gallery', $images_id);

        foreach ( $images as $image ) {
            $html .='<div class="slide">
                        <div class="preview-image"> 
                            <img src="' . $image['url'] . '" alt="Voor na pancobehandelen"/> 
                        </div>
                     </div>';
        }

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}