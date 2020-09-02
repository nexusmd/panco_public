<?php

class WPBakeryShortCode_Panco_Advantages_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        // Device detector
        $detectDevice = new Mobile_Detect;

        if ($detectDevice->isMobile()) {
            return;
        }

        $advantages = json_decode( urldecode( $atts['advantages'] ), true );

        $output = '';

        // Get Text Content
        $title = $atts['title'];
        $description = $atts['desc'];
        $featured_image = $atts['feat_img'];

        // Get Title
        if ($title) {
            $title = '<div class="main-title">'. $title .'</div>';
        }

        // Get Description
        if ($description) {
            $description = '<div class="desc">'. $description .'</div>';
        }

        // Get Featured Image
        if ($featured_image) {
            $featured_image = '<div class="image-wrapper"><img src="'. $this->get_bg($featured_image) .'" alt="Featured Image" /></div>';
        }

        // General Output
        $output .= '<div class="block block-advantages">';
        $output .= '<div class="advantages-wrapper">';

        // Title and Description
        $output .= $title;
        $output .= $description;

        // Advanced Container
        $output .= '<div class="advantages-container">';

        // Image Display
        $output .= '<div class="advantage-block">';
        $output .= $featured_image;
        $output .= '</div>';

        // Advantages Display
        $output .= '<div class="advantage-block">';
        $output .= $this->render_advantages($advantages);
        $output .= '</div>';

        $output .= '</div>';

        $output .= '</div>';
        $output .= '</div>';


        return $output;
    }

    protected function render_advantages( $advantages ) {

        if ( ! $advantages ) {
            return '';
        }

        $html = '<ul class="check-list">';

        // Get Marker
        $advantages_marker = '<svg xmlns="http://www.w3.org/2000/svg" width="13.031" height="10.06" viewBox="0 0 13.031 10.06">
  <defs>
    <style>
      .cls-1 {
        fill: #c52444;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path id="Icon" class="cls-1" d="M968.477,3012.81l-7.074,7.49-2.859-3.03a0.869,0.869,0,0,0-1.273,0,1,1,0,0,0,0,1.35l3.5,3.7a0.884,0.884,0,0,0,1.272,0s0-.01,0-0.01l7.708-8.15a1,1,0,0,0,0-1.35A0.868,0.868,0,0,0,968.477,3012.81Z" transform="translate(-957 -3012.53)"></path>
</svg>';

        foreach ( $advantages as $advantage ) {
            $html .='<li><i class="icon">'. $advantages_marker .'</i>'. $advantage['advantage_title'] .'</li>';
        }

        $html .= '</ul>';
        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}