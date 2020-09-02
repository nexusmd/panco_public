<?php

class WPBakeryShortCode_Panco_Testimonials_Block extends Panco_Shortcode {

    protected function content( $atts, $content = null ) {

        $atts['testimonials_qty'] ? $testimonials_qty = $atts['testimonials_qty'] : $testimonials_qty = 25;


        return do_shortcode('[kiyoh-klantenvertellen layout="slider" do_show_reviews="yes" show_reviews_amount="'. $testimonials_qty .'" start_with_review="1" show_review_rating="no" limit_review_length="100"]');
        
    }


}