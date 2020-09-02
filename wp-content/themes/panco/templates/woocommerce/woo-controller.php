<?php

/**
 * Sale Rewrite
 */

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    return '<span class="sale">' . $percentage . '</span>';
}

/**
 * Thumbnail Rewrite
 */
add_action('woocommerce_before_single_product', function(){
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
    add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 11);
});

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    }
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
        global $post, $woocommerce;
        $output = '<div class="img-wrap">';

        if ( has_post_thumbnail() ) {
            $output .= get_the_post_thumbnail( $post->ID, $size, 'class="photo"' );
        } else {
            $output .= wc_placeholder_img( $size );
            // Or alternatively setting yours width and height shop_catalog dimensions.
            // $output .= '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
        }
        $output .= '</div>';
        return $output;
    }
}

/**
 * Title Rewrite
 */

add_action('woocommerce_before_single_product', function(){
    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
    add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 11);
});

if ( ! function_exists( 'woocommerce_template_loop_product_title' ) ) {
    function woocommerce_template_loop_product_title() {
        echo woocommerce_get_product_title();
    }
}

if ( ! function_exists( 'woocommerce_get_product_title' ) ) {
    function woocommerce_get_product_title(  ) {
        global $post, $woocommerce;

        $output = '<div class="item-info">';
        $output .= '<strong class="title">'. $post->post_title .'</strong>';

        return $output;
    }
}

/**
 * Price Rewrite
 */

add_action('woocommerce_before_single_product', function(){
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
    add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
});

if ( ! function_exists( 'woocommerce_template_loop_price' ) ) {
    function woocommerce_template_loop_price() {
        echo woocommerce_get_product_price();
    }
}

if ( ! function_exists( 'woocommerce_get_product_price' ) ) {
    function woocommerce_get_product_price(  ) {
        global $post, $woocommerce;

        $product = wc_get_product($post->ID);

        $output = '';

        if ($product->is_on_sale()) {

            $output .= '<span class="price">
                            <span class="old">'. $product->get_regular_price() .' '. get_woocommerce_currency_symbol() .'</span>
                            <span class="new">'. $product->get_sale_price() .' '. get_woocommerce_currency_symbol() .'</span>
                        </span>';
        } else {
            $output .= '<span class="price">'. $product->get_price() .' '. get_woocommerce_currency_symbol() .'</span>';
        }

        $output .= '</div>';


        return $output;
    }
}

/**
 * Remove add to cart button
 */

add_action('woocommerce_before_single_product', function(){
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 11);
});
