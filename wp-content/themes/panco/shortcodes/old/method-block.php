<?php

class WPBakeryShortCode_Panco_Methods_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $methods = json_decode( urldecode( $atts['methods'] ), true );

        $output = '';

        // Get Text Content
        $title = $atts['title'];
        $description = $atts['desc'];

        // Get Title
        if ($title) {
            $title = '<div class="main-title">'. $title .'</div>';
        }

        // Get Description
        if ($description) {
            $description = '<div class="subtitle">'. $description .'</div>';
        }

        // General Output
        $output .= '<div class="block block-method">';
        $output .= '<div class="method-wrapper">';

        // Title and Description
        $output .= $title;
        $output .= $description;

        // Advanced Container
        $output .= '<div class="methods-container">';

        // Steps Display
        $output .= '<div class="steps-wrapper">';
        $output .= $this->render_steps($methods);
        $output .= '</div>';

        // Advanced Container End
        $output .= '</div>';

        // General Output End
        $output .= '</div>';
        $output .= '</div>';


        return $output;
    }

    protected function render_steps( $methods ) {

        if ( ! $methods ) {
            return '';
        }

        $html = '';

        $number = 1;
        // Get Marker
        foreach ( $methods as $method ) {

            // Get attributes
            $icon_bg = $method['method_img_bg'];
            $icon_img = $method['method_img'];
            $number % 2 ? $block_side = 'right' : $block_side = 'left';

            // Wrap
            $html .='<div class="step-line '. $block_side .'"><div class="step-block">';

            // Icon Side
            $html .= '<div class="icon-block">';
            $html .= '<div class="icon-bg"><img src="'. $this->get_bg($icon_bg) .'" alt="Icon Background"></div>';
            $html .= '<div class="icon-image"><img src="'. $this->get_bg($icon_img) .'" alt="Icon Image"></div>';
            $html .= '</div>';

            // Text Side
            $html .='<div class="info-block">';
            $html .='<div class="top-line">';
            $html .='<div class="number">'. $number++ .'</div>';
            $html .='<h2 class="title">'. $method['method_title'] .'</h2>';
            $html .='</div>';
            $html .='<div class="desc">'. $method['method_desc'] .'</div>';
            $html .='';
            $html .='</div>';

            // Wrap End
            $html .='</div></div>';
        }

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}