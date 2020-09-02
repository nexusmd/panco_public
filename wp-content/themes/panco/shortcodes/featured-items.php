<?php

class WPBakeryShortCode_Panco_Featured_Items extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $output = '';

        $featured_items = json_decode( urldecode( $atts['items'] ), true );

        $output .= '<div class="site-container">
                        <section class="featured-items">
                            <div class="inner-wrap">';

        $output .= $this->render_featured_items($featured_items);

        $output .= '        </div>
                        </section>
                    </div>';

        return $output;
    }

    protected function render_featured_items ($items) {
        $html = '';

        foreach ($items as $item) {
            // Get Text Content
            $title = $item['title'];
            $description = $item['desc'];

            if ($title) {
                $title = '<h2 class="title">'. $title .'</h2>';
            }

            if ($description) {
                $description = '<h4 class="subtitle">'. $description .'</h4>';
            }

            $image = $this->get_bg($item['image']);


            // Output Section
            $html .= '<div class="featured-item" style="background-image: url('. $image .')">
                        <img src="'. $image .'" class="photo" alt="Featured"/>';

            $html .= '<div class="item-info">
                        <div class="box">';

            $html .= $title;
            $html .= $description;
            $html .= $this->render_button($item['button_data'] , $item['button_style']);

            $html .= '</div> </div> </div>';
            // Button Section

        }
        return $html;

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

        $html = '<a class="button white filled" ' . $url . $rel . $target . '>' . $title . '</a>';

        return $html;
    }

    protected function get_bg( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }
}