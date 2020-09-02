<?php

class WPBakeryShortCode_Panco_About_Slider extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $images = json_decode( urldecode( $atts['images_id'] ), true );

        $output = '';

        // Get Text Content
        $title = $atts['title'];
        $description = $content;

        if ($title) {
            $title = '<div class="main-title">'. $title .'</div>';
        }

        if ($description) {
            $description = '<div class="desc">'. $description .'</div>';
        }

        // Get Slider Controls
        $slider_controls = '<div class="slider-controls">
                    <div class="slider-control slider-prev">
                      <svg xmlns="http://www.w3.org/2000/svg" width="10.81" height="20.37" viewBox="0 0 10.81 20.37">
                        <defs>
    <style>
      .cls-1 {
        fill: #15202d;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path id="Forma_1" data-name="Forma 1" class="cls-1" d="M1039.88,4836.85a1.2,1.2,0,0,1-1.8,0l-8.27-8.83a1.456,1.456,0,0,1,0-1.94l8.27-8.84a1.218,1.218,0,0,1,1.8,0,1.429,1.429,0,0,1,0,1.93l-7.37,7.88,7.37,7.88A1.416,1.416,0,0,1,1039.88,4836.85Z" transform="translate(-1029.44 -4816.88)"/>
</svg>

                    </div>
                    <div class="slider-control slider-next"><svg xmlns="http://www.w3.org/2000/svg" width="10.81" height="20.37" viewBox="0 0 10.81 20.37">
  <defs>
    <style>
      .cls-1 {
        fill: #15202d;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path id="Forma_1" data-name="Forma 1" class="cls-1" d="M1569.91,4836.85a1.214,1.214,0,0,0,1.81,0l8.26-8.83a1.428,1.428,0,0,0,0-1.94l-8.26-8.84a1.229,1.229,0,0,0-1.81,0,1.451,1.451,0,0,0,0,1.93l7.37,7.88-7.37,7.88A1.438,1.438,0,0,0,1569.91,4836.85Z" transform="translate(-1569.53 -4816.88)"/>
</svg>

                    </div>
                  </div>';

        // General Output
        $output .= '<div class="block block-about">';
        $output .= '<div class="about-wrapper">';
        $output .= '<div class="inner-wrapper">';

        // Text Side
        $output .= '<div class="about-block"> <div class="inner-block">';
        $output .= $title . $description;
        $output .= '</div></div>';

        // Slider Area
        $output .= '<div class="about-block with-slider"> <div class="inner-block">';

        $output .= '<div class="about-slider-container">';
        $output .= $slider_controls;
        $output .= '<div class="about-slider">';
        $output .= $this->render_images( $images );
        $output .= '</div> </div>';

        $output .= '</div></div>';

        // General Output End
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }

    protected function render_images( $images_id ) {

        if ( ! $images_id ) {
            $images_id = 486;
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