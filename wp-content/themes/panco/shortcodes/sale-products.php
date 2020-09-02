<?php

class WPBakeryShortCode_Panco_Sale_Products extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $atts['title'] ? $title = '<h2 class="section-headline">'. $atts['title'] .'</h2>' : $title = '';

        $output = '';

        // Wrapper
        $output .= '<div class="site-container">';
        $output .= $title;
        $output .= '<section class="items-slider-wrap mt-10">';

        // Slider section
        $output .= '<div class="slider-container">';
        $output .= '<div class="item-slider home">';
        $output .= do_shortcode('[sale_products per_page="12" columns="4" orderby="date" order="ASC"]');
        $output .= '</div>';
        $output .= '</div>';

        // Wrapper End
        $output .= '</section>';
        $output .= '</div>';



        return $output;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}