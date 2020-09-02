<?php

class Panco_Shortcode extends WPBakeryShortCode {
	public function __construct( $atts = array( 'base' => '' ) ) {
		parent::__construct( $atts );
	}

	protected function prepareAtts( $atts ) {
		$atts = vc_map_get_attributes( $this->getShortcode(), $atts );

		$return = array();
		if ( is_array( $atts ) ) {
			foreach ( $atts as $key => $val ) {
				$return[ $key ] = str_replace( array(
					'`{`',
					'`}`',
					'``',
				), array(
					'[',
					']',
					'"',
				), $val );
			}
		}

		return $return;
	}
}