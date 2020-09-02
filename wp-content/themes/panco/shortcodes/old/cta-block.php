<?php

class WPBakeryShortCode_Panco_Cta_Button_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';


        // Get Block Title
        $title = $atts['title'];

        if ($title) {
            $title = '<h2 class="title">'. $title .'</h2>';
        }

        // Get Block Description
        $desc = $atts['desc'];

        if ($desc) {
            $desc = '<div class="desc">'. $desc .'</div>';
        }

        // Get Bg
        $container_class = 'relation-container';
        $container_style = '';

        if ($atts['has_bg']) {
            $container_class .= ' with-bg';
        }


        if ($atts['bg_img']) {
            $custom_bg = $this->get_bg($atts['bg_img']);
            $container_style = "background-image: url('". $custom_bg ."')";
        }

        $container_atts = 'class="' . $container_class . '" style="' . $container_style . '"';
        // Wrapper
        $output .= '<div class="block block-relation">';
        $output .= '<div class="relation-wrapper">';
        $output .= '<div '. $container_atts .'>';


        // Inner Content
        $output .= '<div class="inner-box">';

        // Title Section
        $output .= $title . $desc;

        // Button Section
        $output .= $this->render_button($atts['button_data'] , $atts['button_style']);

        $output .= '</div>';

        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }

    protected function render_button( $button_data, $button_style = 'bg2' ) {

        if ( ! $button_data ) {
            return '';
        }

        $icon = '<i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35.93" height="14.118" viewBox="0 0 35.93 14.118">
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
                    </i>';

        $button_data = vc_build_link($button_data);

        if ( ! $button_data['title'] && ! $button_data['url'] ) {
            return '';
        }

        // Build anchor
        $title = $button_data['title'];
        $url = 'href="' . $button_data['url'] . '"';
        $button_data['target'] ? $target = 'target="' . $button_data['target'] . '"' : $target = '';
        $button_data['rel'] ? $rel = 'rel="' . $button_data['rel'] . '"' : $rel = '';


        $html = '<a class="stl-btn2 '. $button_style .'" ' . $url . $rel . $target . '>' . $title . $icon . '</a>';

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}