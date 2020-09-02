<?php

class WPBakeryShortCode_Panco_Video_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';


        if ($atts['has_splash'] && $atts['splash_img'] ) {
            $splash_output = '<div class="block block-splash">
                                <div class="splash-img">
                                    <img src="'. $this->get_bg($atts["splash_img"]) .'" alt="splash background">
                                </div>
                             </div>';
        }

        // Get Text Content
        $title = $atts['title'];

        if ($title) {

            $title_image = $atts['title_logo'];
            $title_image ? $title_image = '<div class="logo"><img src="'. $this->get_bg($title_image) .'" alt="title-logo"></div>' : '';

            $shadow_title = $atts['shadow_title'];
            $shadow_title ? $shadow_title = '<div class="shadow-title">' . $shadow_title . '</div>' : '';

            $title = '<div class="main-title">'. $title . $title_image . $shadow_title .'</div>';
        }

        // Wrapper
        $output .= '<div class="block block-video with-splash">';
        $output .= $splash_output;

        // Inner Content
        $output .= '<div class="video-wrapper">';

        // Title Section
        $output .= $title;

        // Video Section
        $output .= $this->render_video($atts['video_url']);

        $output .= '</div>';

        $output .= '</div>';

        return $output;
    }

    protected function render_video( $video ) {

        if ( ! $video ) {
            return '';
        }


        $html = '';

        $html .= '<div class="video-container"> <div class="video-box"> <div class="embed-responsive embed-responsive-16by9">';
        $html .= '<iframe class="embed-responsive-item" src="'. $video .'" width="1280" height="580" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $html .= '</div> </div> </div>';

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}