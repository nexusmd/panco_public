<?php

class WPBakeryShortCode_Panco_Home_Features extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        if ( ( $features = json_decode( urldecode( $atts['features'] ), true ) ) && empty( $features ) ) {
            return esc_html__( 'Please add some features.', 'panco' );
        }

        return
            '<section class="main-features">
                <div class="container">
                    <div class="features">' .
                        $this->render_features( $features ) .
                    '</div>
                </div>
            </section>';
    }

    protected function render_features( $features ) {

        if ( ! $features ) {
            return '';
        }

        $html = '';

        foreach ( $features as $feature ) {
            $image = $this->get_img($feature['image']);

            if ($image) {
                $image = file_get_contents($image);
            }


            $html .='<h2 class="func-block anim">
                    <div class="st-icon">
                        <div class="bef">
                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="112"><defs><style>.cls-1 { fill: #fff; stroke: #d1d1d1; stroke-width: 1px; stroke-dasharray: 4 4; } .cls-2 { fill: #d1d1d1; fill-rule: evenodd; }</style></defs><path d="M5 5h102v102H5z" class="cls-1"/><path id="Rectangle_3_copy_3" d="M0 0h10v10H0V0zm102 102h10v10h-10v-10zm0-102h10v10h-10V0zM0 102h10v10H0v-10z" class="cls-2"/></svg></div>
                        ' . $image . '
                        </object>
                    </div>
                    <h2 class="title">
                        ' . $feature['title'] . '
                    </h2>
                    <div class="desc">
                        ' . $feature['desc'] . '
                    </div>
                </div>';
        }

        return $html;
    }

    protected function get_img( $id ) {
        return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
    }

}