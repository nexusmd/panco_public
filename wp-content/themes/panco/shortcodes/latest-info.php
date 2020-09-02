<?php

class WPBakeryShortCode_Panco_Latest_Info_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';

        // Get Text Content
        $title = $atts['title'];
        $description = $atts['desc'];

        if ($title) {
            $title = '<h5 class="section-headline">'. $title .'</h5>';
        }

        if ($description) {
            $description = '<p class="mb-4 mt-2">'. $description .'</p>';
        }

        $image = $this->get_bg($atts['image']);


        // Output Section
        $output .= '<div class="site-container">';
        $output .= '<section class="latest-info-wrap">';

        $output .= '<div class="hero-info">';

        $output .= $title;
        $output .= $description;
        $output .= $this->render_button($atts['button_data'] , $atts['button_style']);

        $output .= '</section></div>';
        // Button Section


        return $output;
    }

    protected function render_button( $button_data, $button_style = 'bg2' ) {

        if ( ! $button_data ) {
            return '';
        }

        $button_data = vc_build_link($button_data);

        if ( ! $button_data['title'] && ! $button_data['url'] ) {
            return '';
        }

        // Build anchor
        $title = $button_data['title'];
        $url = 'href="' . $button_data['url'] . '"';
        $button_data['target'] ? $target = 'target="' . $button_data['target'] . '"' : $target = '';
        $button_data['rel'] ? $rel = 'rel="' . $button_data['rel'] . '"' : $rel = '';

        $html = '<a class="button grey filled md" ' . $url . $rel . $target . '>' . $title . '</a>';

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}