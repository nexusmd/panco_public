<?php

class WPBakeryShortCode_Feedback_Slider extends Panco_Shortcode {

	protected function content( $atts, $content = null ) {

		$feedbacks = get_posts(
			array(
				'post_type'   => array( 'review' ),
				'numberposts' => -1
			)
		);

		$feedbacks_html = '';
		foreach ( $feedbacks as $feedback ) {

                $feedbacks_html .= '<div class="slide">
						<div class="testi-block">
							<div class="icon-block">
								<svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" xmlns:xlink="http://www.w3.org/1999/xlink">
									<image width="26" height="24" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAYCAMAAADTXB33AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA21BMVEXNABL////NABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABLNABIAAABJiinXAAAAR3RSTlMAACjD20UauK6xtB4E6/jHk76UgpUSmPwjLzYHJictBSV8jhG8kNGgokjgCN7qDKPt7vEJg+hOSt3X2NSWITthzFVethZQeMyW5J0AAAABYktHREjwAtTqAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4wMVDBkprMvW4QAAAMtJREFUKM+Nz9dWQjEQheEdDl0pShNRmkrvTbEg0vb7vxGhSE5gLvgv8601kwE8DoW8PgU/GQiGzgqGSR8c3sCdOnQbiYIxSKTiBO9kutfk7F8SSVNqR+kTZVy/e7DpYqCh7KMpZ5P73CebnvOmwtW73AOLNpXKppd/epUHvmmqyFQlaqxL5GEDzRbbTla/dbq9fu9YZKCvA4ajMSfAO/kx/Tzm/fr+UbsZM/qRZH9m7VJ7mvB3zu7ZNw5U12f+QaQFlyvItN4Idym1BUSXMLNB0V67AAAAAElFTkSuQmCC"/>
								</svg>
							</div>
							<div class="desc-block">'. $feedback->post_content .'</div>
						</div>
					</div>';
		}

		return '<section class="testimonials">
                    <div class="container">
                        <div class="top-wrapper">
                            <div class="main-title">'. $atts['title'] .'</div>
                            <div class="slider-nav">
                                <div class="custom-arrow testi-arrow slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="18.03"><defs><style>.cls-1 { fill: #1e1e1e; fill-rule: evenodd; }</style></defs><path id="Arrow" d="M.95 8.07h30.1a.94.94 0 1 1 0 1.9H.95a.94.94 0 1 1 0-1.9zm-.67.28L8.36.28A.95.95 0 0 1 9.7 1.62l-7.4 7.4 7.4 7.4a.95.95 0 0 1 0 1.34.97.97 0 0 1-.67.27.95.95 0 0 1-.67-.27L.28 9.7a.95.95 0 0 1 0-1.35z" class="cls-1"/></svg></div>
                                <div class="custom-arrow testi-arrow slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="18.03"><defs><style>.cls-1 { fill: #1e1e1e; fill-rule: evenodd; }</style></defs><path id="Arrow" d="M31.05 8.07H.95a.94.94 0 1 0 0 1.9h30.1a.94.94 0 1 0 0-1.9zm.67.28L23.64.28a.95.95 0 0 0-1.34 1.34l7.4 7.4-7.4 7.4a.95.95 0 0 0 0 1.34.97.97 0 0 0 .67.27.95.95 0 0 0 .67-.27l8.08-8.07a.95.95 0 0 0 0-1.35z" class="cls-1"/></svg></div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="inner-wrapper">
                                <div class="testi-slider">'
                                    . $feedbacks_html .
                                '</div>
                            </div>
                        </div>
                    </div>
                </section>';
	}

	protected function get_bg( $id ) {
		return ( $url = wp_get_attachment_url( $id ) ) && $url ? $url : '';
	}
}