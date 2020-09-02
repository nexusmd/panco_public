<?php

class Panco_Bootstrap {

	public function __construct() {

		add_action( 'after_setup_theme', array( $this, 'after_setup_theme' ) );
		//add_action( 'widgets_init', array( $this, 'widgets_init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'vc_before_init', array( $this, 'vc_before_init' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_custom_image_sizes' ) );
        add_action( 'customize_register', array($this, 'my_register_additional_customizer_settings') );

        // Listo Extension


        new Panco_Menu();
        new Panco_Security();
	}

    /**
     * Initialization And Theme setup
     */
	public function after_setup_theme() {

		load_theme_textdomain( 'panco' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

        add_theme_support('woocommerce');

		register_nav_menus(
			array(
				'header'    => __( 'Header', 'panco' ),
				'f_left'  => __( 'Footer Left', 'panco' ),
				'f_mid' => __( 'Footer Middle', 'panco' ),
				'f_right'     => __( 'Footer Right', 'panco' ),
			)
		);

		add_theme_support(
			'html5', array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support(
			'custom-logo', array(
				'width'      => 250,
				'height'     => 250,
				'flex-width' => true,
			)
		);

        add_theme_support(
            'custom-logo', array(
                'height' => 100,
                'width' => 400,
                'flex-height' => true,
                'flex-width' => true,
                'header-text' => array('site-title', 'site-description'),
            )
        );
	}

    /**
     * Define if is in frontend editor
     *
     * @return bool
     */
    public function is_vc_build()
    {
        return function_exists( 'vc_is_inline' ) && vc_is_inline() ? true : false;
    }

    /**
     * Register Sidebards
     */
    public function widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Blog Sidebar', 'panco' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'panco' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

    /**
     * Register and Load Scripts
     */
	public function wp_enqueue_scripts() {

        // Base Theme Style
        wp_enqueue_style( 'panco-style', get_stylesheet_uri() );

        // Fonts
        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
        // Normalize
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
        // General Fonts
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
        // Responsive
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

        // Libs
        wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/libs/slick/slick.css' );
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/libs/slick/slick-theme.css' );


        if (!$this->is_vc_build()) {
            // jQuery update
            wp_deregister_script('jq-script');
            wp_enqueue_script( 'jq-script', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.4.1', true );

            wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/libs/slick.min.js', array('jquery'), null, true );
        }

        wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.1, true );



        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

    /**
     * VisualComposer extend
     *
     * @throws Exception
     */
	public function vc_before_init() {

		if ( ! class_exists( 'Vc_Manager' ) ) {
			return;
		}

		foreach ( glob( PANCO_DIR . 'shortcodes/*.php' ) as $shortcode ) {
			require_once( PANCO_DIR . 'shortcodes/' . basename( $shortcode ) );
		}

		require_once( PANCO_DIR . 'core/vc-maps.php' );

	}

    /**
     * Custom Post Type Registration
     */
	public function register_post_types() {

	}

    /**
     * Custom Image Sizes
     */
	public function register_custom_image_sizes() {
        add_image_size( 'project_crop_thumbnails', 400, 250, true );
        add_theme_support( 'project_crop_thumbnails');

    }

    /**
     * WP Customizer Options
     *
     * @param $wp_customize
     */
    public function my_register_additional_customizer_settings($wp_customize)
    {

        // Black Logo
        $wp_customize->add_setting('custom_black_logo', array(
            'default-image' => '',
            'transport' => 'refresh',
            'height' => 180,
            'width' => 300,
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_black_logo_control', array(
            'label' => __('Black Logo', 'panco'),
            'section' => 'title_tagline',
            'settings' => 'custom_black_logo',
            'priority' => 7,
        )));

        // Footer Logo
        $wp_customize->add_setting('custom_footer_logo', array(
            'default-image' => '',
            'transport' => 'refresh',
            'height' => 180,
            'width' => 300,
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_footer_logo_control', array(
            'label' => __('Footer Logo', 'panco'),
            'section' => 'title_tagline',
            'settings' => 'custom_footer_logo',
            'priority' => 8,
        )));

        // Phone Number Field
        $wp_customize->add_setting('header_phone_nr', array(
                'default' => '+31 (0)6 857 659 97',
            )
        );

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_phone_nr', array(
            'label' => __('Header Phone Nr.', 'panco'),
            'description' => __('Phone Number Displayed in the Header', 'panco'),
            'settings' => 'header_phone_nr',
            'priority' => 9,
            'section' => 'title_tagline',
            'type' => 'text',
        )));

        // Contact Form Field
        $wp_customize->add_setting('footer_cf7_id', array(
                'default' => '286',
            )
        );

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_cf7_id', array(
            'label' => __('Footer CF7 ID', 'panco'),
            'description' => __('Contact Form Displayed in footer', 'panco'),
            'settings' => 'footer_cf7_id',
            'priority' => 9,
            'section' => 'title_tagline',
            'type' => 'text',
        )));
    }

}