<?php

class WPBakeryShortCode_Panco_Demo_Form_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';
        $contact_form = '';
        $splash_output = '';

        // Splash Generator
        if ($atts['has_splash'] && $atts['splash_img'] ) {
            $splash_output = '<div class="block block-splash">
                                <div class="splash-img">
                                    <img src="'. $this->get_bg($atts["splash_img"]) .'" alt="splash background">
                                </div>
                             </div>';
        }

        if ($atts['form_id']) {
            $contact_form = do_shortcode('[contact-form-7 id="' . $atts["form_id"] . '" html_class="form demo-form"]');
        }

        // Wrapper
        $output .= '<div class="block block-demonstration">';

        $output .= $splash_output;

        // Inner Content
        $output .= '<div class="demonstration-wrapper">';
        $output .= '<div class="block block-form">';

        // Title Section

        $output .= $contact_form;

        // Inner Content END
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