<?php
/**
 * Panco Mapping
 */


// Panco Hero Info
vc_map(array(
    'name' => __('Hero Info Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_hero_info',
    'params' => array(
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),

        // Desc
        array(
            'heading' => __('Block Description', 'panco'),
            'type' => 'textarea',
            'param_name' => 'desc',
        ),
        array(
            'heading' => __('Image', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'image',
        ),
        array(
            'heading' => __('Button Config', 'panco'),
            'type' => 'vc_link',
            'param_name' => 'button_data',
        ),
    )
));

// Panco Featured Items
vc_map(array(
    'name' => __('Featured Items', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_featured_items',
    'params' => array(
        // Advantages
        array(
            'heading' => __('Featured Items', 'panco'),
            'type' => 'param_group',
            'param_name' => 'items',
            'params' => array(

                array(
                    'heading' => __('Block Title', 'panco'),
                    'type' => 'textfield',
                    'param_name' => 'title',
                ),
                // Desc
                array(
                    'heading' => __('Block Description', 'panco'),
                    'type' => 'textarea',
                    'param_name' => 'desc',
                ),
                array(
                    'heading' => __('Image', 'panco'),
                    'type' => 'attach_image',
                    'param_name' => 'image',
                ),
                array(
                    'heading' => __('Button Config', 'panco'),
                    'type' => 'vc_link',
                    'param_name' => 'button_data',
                ),
            )
        )
    )
));

// Panco Products Latest Slider
vc_map(array(
    'name' => __('Latest Products', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_latest_products',
    'params' => array(
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
    )
));

// Panco Products Sale Slider
vc_map(array(
    'name' => __('Sale Products', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_sale_products',
    'params' => array(
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
    )
));

// Panco Info Block
vc_map(array(
    'name' => __('Info Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_latest_info_block',
    'params' => array(
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Block Description', 'panco'),
            'type' => 'textarea',
            'param_name' => 'desc',
        ),
        array(
            'heading' => __('Button Config', 'panco'),
            'type' => 'vc_link',
            'param_name' => 'button_data',
        ),
    )
));

// Panco Newsletter Info
vc_map(array(
    'name' => __('Hero Newsletter Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_newsletter_info',
    'params' => array(
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),

        // Desc
        array(
            'heading' => __('Block Description', 'panco'),
            'type' => 'textarea',
            'param_name' => 'desc',
        ),
        array(
            'heading' => __('Image', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'image',
        ),
        array(
            'heading' => __('Button Config', 'panco'),
            'type' => 'vc_link',
            'param_name' => 'button_data',
        ),
    )
));

/**
 * OLD
 */

// Panco Video Container
vc_map(array(
    'name' => __('Video Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_video_block',
    'params' => array(
        // Splash Settings
        // Has Splash
        array(
            'type'        => 'checkbox',
            'heading'     => __('Has Splash'),
            'param_name'  => 'has_splash',
            'admin_label' => true,
            'std'         => 0, // Your default value
            'group' => 'Design'
        ),
        // Splash Image
        array(
            'heading' => __('Splash Image', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'splash_img',
            'dependency' => Array('element' => 'has_splash', 'not_empty' => TRUE),
            'group' => 'Design'
        ),

        // Default Content
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Shadow Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'shadow_title',
        ),
        array(
            'heading' => __('Title Logo', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'title_logo',
        ),
        array(
            'heading' => __('Block Video', 'panco'),
            'description' => __('It requires the embed link ex: https://player.vimeo.com/video/343676331?title=0&amp;byline=0&amp;portrait=0', 'panco'),
            'type' => 'textfield',
            'param_name' => 'video_url',
        ),
    )
));

// Panco Advantages Block
vc_map(array(
    'name' => __('Advantages Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_advantages_block',
    'params' => array(

        // Default Content
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Block Description', 'panco'),
            'type' => 'textarea',
            'param_name' => 'desc',
        ),

        // Left Image
        array(
            'heading' => __('Featured Image', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'feat_img',
        ),

        // Advantages
        array(
            'heading' => __('Advantages', 'panco'),
            'type' => 'param_group',
            'param_name' => 'advantages',
            'params' => array(
                array(
                    'heading' => __('Advantage', 'panco'),
                    'type' => 'textfield',
                    'param_name' => 'advantage_title',
                    'admin_label' => true,
                ),
            )
        )

    )
));

// Panco Methods Block
vc_map(array(
    'name' => __('Methods Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_methods_block',
    'params' => array(

        // Default Content
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Block Description', 'panco'),
            'type' => 'textarea',
            'param_name' => 'desc',
        ),
        // Methods
        array(
            'heading' => __('Steps', 'panco'),
            'type' => 'param_group',
            'param_name' => 'methods',
            'params' => array(
                array(
                    'heading' => __('Icon Image', 'panco'),
                    'type' => 'attach_image',
                    'param_name' => 'method_img',
                ),
                array(
                    'heading' => __('Icon Image Background', 'panco'),
                    'type' => 'attach_image',
                    'param_name' => 'method_img_bg',
                ),
                array(
                    'heading' => __('Step Title', 'panco'),
                    'type' => 'textfield',
                    'param_name' => 'method_title',
                    'admin_label' => true,
                ),
                array(
                    'heading' => __('Step Description', 'panco'),
                    'type' => 'textarea',
                    'param_name' => 'method_desc',
                ),
            )
        )

    )
));

// Panco Quote Block
vc_map(array(
    'name' => __('Quote Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_quote_block',
    'params' => array(
        // Splash Settings
        // Has Splash
        array(
            'type'        => 'checkbox',
            'heading'     => __('Has Splash'),
            'param_name'  => 'has_splash',
            'admin_label' => true,
            'std'         => 0, // Your default value
            'group' => 'Design'
        ),
        // Splash Image
        array(
            'heading' => __('Splash Image', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'splash_img',
            'dependency' => Array('element' => 'has_splash', 'not_empty' => TRUE),
            'group' => 'Design'
        ),

        // Default Content
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Block Number', 'panco'),
            'type' => 'textfield',
            'param_name' => 'number',
        ),
        array(
            'heading' => __('Block Icon', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'block_icon',
            'description' => 'Not required. Only if you want a custom icon'
        ),
        array(
            'heading' => __('Custom Background', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'block_bg',
            'description' => 'Not required. Only if you want a custom background'
        ),

    )
));

// Panco About Slider
vc_map(array(
    'name' => __('About Slider', 'panco'),
    'description' => __('This is a vertical slider', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_about_slider',
    'params' => array(
        array(
            'heading' => __('Block Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Block Description', 'panco'),
            'type' => 'textarea_html',
            'param_name' => 'content',
        ),
        array(
            'heading' => __('Slides', 'panco'),
            'type' => 'dropdown',
            'param_name' => 'images_id',
            'value' => wp_list_pluck(
                get_posts( array('post_type' => 'slideshows', 'numberposts' => 0) ),
                'ID',
                'post_title'
            ),
        )
    )
));

// Panco Demonstration Block
vc_map(array(
    'name' => __('Demonstration Form Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_demo_form_block',
    'params' => array(

        array(
            'heading' => __('Contact Form 7 ID', 'panco'),
            'type' => 'textfield',
            'param_name' => 'form_id',
        ),
        array(
            'heading' => __('Custom Background', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'block_bg',
            'description' => 'Not required. Only if you want a custom background'
        ),

        // Splash Settings
        // Has Splash
        array(
            'type'        => 'checkbox',
            'heading'     => __('Has Splash'),
            'param_name'  => 'has_splash',
            'admin_label' => true,
            'std'         => 0, // Your default value
            'group' => 'Design'
        ),
        // Splash Image
        array(
            'heading' => __('Splash Image', 'panco'),
            'type' => 'attach_image',
            'param_name' => 'splash_img',
            'dependency' => Array('element' => 'has_splash', 'not_empty' => TRUE),
            'group' => 'Design'
        ),

    )
));

// Panco CTA Block
vc_map(array(
    'name' => __('CTA Block', 'panco'),
    'category' => 'Panco',
    'base' => 'panco_cta_button_block',
    'params' => array(
        array(
            'heading' => __('Title', 'panco'),
            'type' => 'textfield',
            'param_name' => 'title',
        ),
        array(
            'heading' => __('Description', 'panco'),
            'type' => 'textarea',
            'param_name' => 'desc',
        ),
        array(
            'heading' => __('Button Config', 'panco'),
            'type' => 'vc_link',
            'param_name' => 'button_data',
        ),

        // Design
        array(
            'heading' => __('Button Style', 'panco'),
            'type' => 'dropdown',
            'param_name' => 'button_style',
            'value' => array(
                'Blue' => 'bg1',
                'Yellow' => 'bg2',
            ),
            'group' => 'Design',
        ),
        array(
            'type'        => 'checkbox',
            'heading'     => __('Has Background'),
            'param_name'  => 'has_bg',
            'std'         => 0, // Your default value
            'group' => 'Design'
        ),
        array(
            'type'        => 'attach_image',
            'heading'     => __('Background Image'),
            'param_name'  => 'bg_img',
            'group' => 'Design',
            'dependency' => Array('element' => 'has_bg', 'not_empty' => TRUE)
        ),
    )
));