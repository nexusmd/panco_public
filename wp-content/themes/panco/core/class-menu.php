<?php

class Panco_Menu {

	public function __construct() {
		add_action( 'nav_menu_submenu_css_class', array( $this, 'nav_menu_submenu_css_class' ) );
		add_action( 'nav_menu_css_class', array( $this, 'nav_menu_css_class' ) );
		add_action( 'nav_menu_link_attributes', array( $this, 'nav_menu_link_attributes' ), 10, 2 );
		add_action( 'nav_menu_item_title', array( $this, 'nav_menu_item_title' ), 10, 2 );
        add_filter( 'get_custom_logo', array( $this, 'change_custom_logo_class' ) );
	}

    /**
     * Change default Wordpress SubMenu Classes
     *
     * @param $classes
     * @return array
     */
	public function nav_menu_submenu_css_class( $classes ) {
		$classes[] = 'dropdown-menu';
		return $classes;
	}

    /**
     * Change default Wordpress Menu Classes
     *
     * @param $classes
     * @return array
     */
	public function nav_menu_css_class( $classes ) {
		if ( false !== array_search( 'menu-item-has-children', $classes ) ) {
			$classes[] = 'dropdown';
		}

        if (in_array('current_page_item', $classes) ){
            $classes[] = 'active';
        }

		return $classes;
	}

    /**
     * Change default Wordpress Menu Atts
     *
     * @param $atts
     * @param $item
     * @return mixed
     */
	public function nav_menu_link_attributes( $atts, $item ) {

		if ( false === array_search( 'menu-item-has-children', $item->classes ) ) {
			return $atts;
		}

		$atts['class'] = 'dropdown-toggle';
		$atts['href'] = '#';
		$atts['data-toggle'] = 'dropdown';
		$atts['role'] = 'button';
		$atts['aria-haspopup'] = 'true';
		$atts['aria-expanded'] = 'false';

		return $atts;
	}

    /**
     * Change default Wordpress Menu Title
     *
     * @param $title
     * @param $item
     * @return string
     */
	public function nav_menu_item_title( $title, $item ) {

		if ( false === array_search( 'menu-item-has-children', $item->classes ) ) {
			return $title;
		}

		return $title . '<span class="caret"></span>';
	}

    /**
     * Change default Wordpress Custom Logo Class
     *
     * @param $html
     * @return mixed
     */
	public function change_custom_logo_class( $html ) {

        $html = str_replace( 'custom-logo', 'white', $html );
        $html = str_replace( 'custom-logo-link', 'white-logo-link', $html );

        return $html;
    }

}