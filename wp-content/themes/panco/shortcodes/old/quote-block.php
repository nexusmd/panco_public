<?php

class WPBakeryShortCode_Panco_Quote_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';
        $wrap_style = '';
        $splash_output = '';

        // Splash Generator
        if ($atts['has_splash'] && $atts['splash_img'] ) {
            $splash_output = '<div class="block block-splash">
                                <div class="splash-img">
                                    <img src="'. $this->get_bg($atts["splash_img"]) .'" alt="splash background">
                                </div>
                             </div>';
        }

        // Get Icon
        $icon = $this->get_bg($atts['block_icon']);

        if ($icon) {
            $icon = '<div class="icon"><img src="'. $icon .'" alt="Quote Icon" /></div>';
        } else {
            $icon = '<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="106" height="116" viewBox="0 0 106 116">
                        <image id="panco-behandelen-diamant_2x" data-name="panco-behandelen-diamant@2x" width="106" height="116" xlink:href="data:img/png;base64,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"></image>
                     </svg></div>';
        }

        // Check For Custom Bg
        $custom_bg = $this->get_bg($atts['block_bg']);

        if ($custom_bg) {
            $wrap_style .= "background-image: url('". $custom_bg ."')";
        }


        $wrap_style ? $wrap_style = 'style="'. $wrap_style .'"' : '';

        // Get Text Content
        $title = $atts['title'];

        if ($title) {
            $title = '<h2 class="title">'. $title .'</h2>';
        }
        // Get Number Content
        $number = $atts['number'];

        if ($number) {
            $number = '<div class="number">'. $number . '</div>';
        }

        // Wrapper
        $output .= '<div class="block block-quote">';
        $output .= $splash_output;

        // Inner Content
        $output .= '<div class="quote-wrapper">';
        $output .= '<div class="quote-container" '. $wrap_style .'>';
        $output .= '<div class="inner-box">';

        // Title Section
        $output .= $icon;

        $output .= '<div class="info">';
        $output .= $title;
        $output .= $number;
        $output .= '</div>';

        // Inner Content END
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';

        // Wrapper END
        $output .= '</div>';

        return $output;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}