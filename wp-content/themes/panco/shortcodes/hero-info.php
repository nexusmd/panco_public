<?php

class WPBakeryShortCode_Panco_Hero_Info extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';

        // Get Text Content
        $title = $atts['title'];
        $description = $atts['desc'];

        if ($title) {
            $title = '<h1 class="title">'. $title .'</h1>';
        }

        if ($description) {
            $description = '<h4 class="subtitle">'. $description .'</h4>';
        }

        $image = $this->get_bg($atts['image']);


        // Output Section
        $output .= '<div class="hero" style="background-image: url('. $image .')">
                        <img src="'. $image .'" class="photo" alt="Hero Image"/>';

        $output .= '<div class="hero-info">';

        $output .= $title;
        $output .= $description;
        $output .= $this->render_button($atts['button_data'] , $atts['button_style']);

        $output .= '</div> </div>';
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

        $html = '<a class="button white filled lg" ' . $url . $rel . $target . '>' . $title . '</a>';

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}