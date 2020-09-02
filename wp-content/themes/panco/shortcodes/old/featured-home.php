<?php

class WPBakeryShortCode_Panco_Featured extends Panco_Shortcode
{

    protected function content($atts, $content = null)
    {

        $info_block = '';
        $atts['contact_form_id'] ? $contact_form = do_shortcode('[contact-form-7 id="' . $atts["contact_form_id"] . '" html_class="form banner-form"]') : $contact_form = '';

        if ($contact_form) {

            $atts['has_title'] && $atts['featured_type'] == 'only_form' ? $contact_form_title = '<h1 class="main-title black">' . $atts['title'] . '</h1>' : $contact_form_title = '';
            $contact_form = '<div class="banner-form">'. $contact_form_title .'<div class="block block-form">' . $contact_form . '</div></div>';
        }

        if ($atts['featured_type'] == 'def') {

            $atts['has_title'] ? $info_block .= '<h1 class="main-title black">' . $atts['title'] . '</h1>' : '';

            $content ? $info_block .= '<div class="desc">' . $content . '</div>' : '';

            $info_block .= '';

        } elseif ($atts['featured_type'] == 'contact') {
            // Icons
            $phone_icon = '<i class="icon"><?xml version="1.0" encoding="iso-8859-1"?>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="401.998px" height="401.998px" viewBox="0 0 401.998 401.998" style="enable-background:new 0 0 401.998 401.998;"
                             xml:space="preserve">
<g>
	<path d="M401.129,311.475c-1.137-3.426-8.371-8.473-21.697-15.129c-3.61-2.098-8.754-4.949-15.41-8.566
		c-6.662-3.617-12.709-6.95-18.13-9.996c-5.432-3.045-10.521-5.995-15.276-8.846c-0.76-0.571-3.139-2.234-7.136-5
		c-4.001-2.758-7.375-4.805-10.14-6.14c-2.759-1.327-5.473-1.995-8.138-1.995c-3.806,0-8.56,2.714-14.268,8.135
		c-5.708,5.428-10.944,11.324-15.7,17.706c-4.757,6.379-9.802,12.275-15.126,17.7c-5.332,5.427-9.713,8.138-13.135,8.138
		c-1.718,0-3.86-0.479-6.427-1.424c-2.566-0.951-4.518-1.766-5.858-2.423c-1.328-0.671-3.607-1.999-6.845-4.004
		c-3.244-1.999-5.048-3.094-5.428-3.285c-26.075-14.469-48.438-31.029-67.093-49.676c-18.649-18.658-35.211-41.019-49.676-67.097
		c-0.19-0.381-1.287-2.19-3.284-5.424c-2-3.237-3.333-5.518-3.999-6.854c-0.666-1.331-1.475-3.283-2.425-5.852
		s-1.427-4.709-1.427-6.424c0-3.424,2.713-7.804,8.138-13.134c5.424-5.327,11.326-10.373,17.7-15.128
		c6.379-4.755,12.275-9.991,17.701-15.699c5.424-5.711,8.136-10.467,8.136-14.273c0-2.663-0.666-5.378-1.997-8.137
		c-1.332-2.765-3.378-6.139-6.139-10.138c-2.762-3.997-4.427-6.374-4.999-7.139c-2.852-4.755-5.799-9.846-8.848-15.271
		c-3.049-5.424-6.377-11.47-9.995-18.131c-3.615-6.658-6.468-11.799-8.564-15.415C98.986,9.233,93.943,1.997,90.516,0.859
		C89.183,0.288,87.183,0,84.521,0c-5.142,0-11.85,0.95-20.129,2.856c-8.282,1.903-14.799,3.899-19.558,5.996
		c-9.517,3.995-19.604,15.605-30.264,34.826C4.863,61.566,0.01,79.271,0.01,96.78c0,5.135,0.333,10.131,0.999,14.989
		c0.666,4.853,1.856,10.326,3.571,16.418c1.712,6.09,3.093,10.614,4.137,13.56c1.045,2.948,2.996,8.229,5.852,15.845
		c2.852,7.614,4.567,12.275,5.138,13.988c6.661,18.654,14.56,35.307,23.695,49.964c15.03,24.362,35.541,49.539,61.521,75.521
		c25.981,25.98,51.153,46.49,75.517,61.526c14.655,9.134,31.314,17.032,49.965,23.698c1.714,0.568,6.375,2.279,13.986,5.141
		c7.614,2.854,12.897,4.805,15.845,5.852c2.949,1.048,7.474,2.43,13.559,4.145c6.098,1.715,11.566,2.905,16.419,3.576
		c4.856,0.657,9.853,0.996,14.989,0.996c17.508,0,35.214-4.856,53.105-14.562c19.219-10.656,30.826-20.745,34.823-30.269
		c2.102-4.754,4.093-11.273,5.996-19.555c1.909-8.278,2.857-14.985,2.857-20.126C401.99,314.814,401.703,312.819,401.129,311.475z"
    />
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
                            <g>
</g>
</svg>
                    </i>';
            $email_icon = '<i class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="16" viewBox="0 0 20 16">
                        <image id="envelope-of-white-paper" width="20" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAQCAMAAAAhxq8pAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAulBMVEWMYjn///+MYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjmMYjkAAAAh3SidAAAAPHRSTlMAAGjb5dnw2O/a1tL1QkcY9Ds9zLn76HFz6fy4ygGOowOk9pBb5MYSE8fjXSvVWFnUDL36/b5murvxa2cLDLXaAAAAAWJLR0Q90G1RWQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+MLFQwYF0TBscoAAACZSURBVBjTddDXEoJAEETRXtgFURQUs6iYEwYE8/z/d7mUWqTyPp6nmYai8lyqAqHpuUoGeBmZGKtwcLOaxZopkXQrjZZOEm0y6ok1VLIlOs1Wu/Ozbq8/cCS6w5Fmjr2YvMlUmw3dGIH5gpYrYL2h7Y6xL8LfkzgcBZ18JIjgHEZReAmQRuB6uyuf41OYfPQPi4M8BJ7F6V5vC70NkpjAFKQAAAAASUVORK5CYII="/>
                    </svg></i>';
            $fb_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="9.5" height="20.25" viewBox="0 0 9.5 20.25">
  <defs>
    <style>
      .cls-1 {
        fill: #3c5998;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path class="cls-1" d="M706.743,1063.5h-3.231v-2.1a0.865,0.865,0,0,1,.9-0.98h2.28v-3.47l-3.14-.01a3.961,3.961,0,0,0-4.28,4.25v2.31h-2.016v3.58h2.016v10.11h4.241v-10.11h2.861Z" transform="translate(-697.25 -1056.94)"/>
</svg>';
            $in_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19.94" viewBox="0 0 20 19.94">
  <defs>
    <style>
      .cls-1 {
        fill: #017bb5;
        fill-rule: evenodd;
      }
    </style>
  </defs>
  <path class="cls-1" d="M770.517,1077.03H753.478a1.452,1.452,0,0,1-1.477-1.42v-17.08a1.454,1.454,0,0,1,1.477-1.43h17.039a1.454,1.454,0,0,1,1.478,1.43v17.08A1.452,1.452,0,0,1,770.517,1077.03Zm-15.476-3.24h3.02v-9h-3.02v9Zm1.53-13.34a1.56,1.56,0,1,0-.04,3.11h0.021A1.561,1.561,0,1,0,756.571,1060.45Zm12.38,8.18c0-2.77-1.49-4.05-3.476-4.05a3.006,3.006,0,0,0-2.722,1.48v-1.27h-3.02c0.039,0.84,0,9,0,9h3.02v-5.03a2.017,2.017,0,0,1,.1-0.73,1.645,1.645,0,0,1,1.549-1.09c1.093,0,1.53.82,1.53,2.03v4.82h3.02v-5.16Zm-6.219-2.54,0.021-.03v0.03h-0.021Z" transform="translate(-752 -1057.09)"/>
</svg>';

            $ig_icon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="256px" height="256px" viewBox="0 0 256 256" version="1.1" preserveAspectRatio="xMidYMid">
    <g>
        <path d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z" fill="#0A0A08"></path>
    </g>
</svg>';

            // Atts Extraction
            $atts['has_title'] ? $main_title = '<div class="main-title">' . $atts['title'] . '</div>' : $main_title = '';
            $atts['contact_address'] ? $contact_address = '<div class="address">' . $atts['contact_address'] . '</div>' : $contact_address = '';
            $atts['contact_title'] ? $contact_title = '<h2 class="title">' . $atts['contact_title'] . '</h2>' : $contact_title = '';
            $atts['phone_nr'] ? $contact_phone = '<div class="phone-container"><a class="phone" href="tel:' . str_replace(' ', '', $atts["phone_nr"]) . '">' . $phone_icon . '<span>' . $atts['phone_nr'] . '</span></a></div>' : $contact_phone = '';
            $atts['email'] ? $contact_email = '<div class="email-container"><a class="email" href="mailto:' . $atts['email'] . '">' . $email_icon . '<span>' . $atts['email'] . '</span></a></div>' : $contact_email = '';
            $atts['fb_link'] ? $follow_fb = '<li><a class="fb" href="' . $atts['fb_link'] . '">' . $fb_icon . '</a></li>' : $follow_fb = '';
            $atts['in_link'] ? $follow_in = '<li><a class="in" href="' . $atts['in_link'] . '">' . $in_icon . '</a></li>' : $follow_in = '';
            $atts['ig_link'] ? $follow_ig = '<li><a class="ig" href="' . $atts['ig_link'] . '">' . $ig_icon . '</a></li>' : $follow_ig = '';

            $follow_content = '';

            if ($follow_fb || $follow_in) {
                // Wrapper
                $follow_content = '<div class="contact-block fw">';

                $follow_content .= '<div class="contact-box">';
                $follow_content .= '<h2 class="title">' . __('Follow', 'panco') . '</h2>';

                // Socials Display
                $follow_content .= '<ul class="soc">';
                $follow_content .= $follow_fb . $follow_in . $follow_ig;
                $follow_content .= '</ul>';

                $follow_content .= '</div>';

                // Wrapper End
                $follow_content .= '</div>';
            }

            // Wrapper begin
            $info_block .= '<div class="contacts-block">';
            $info_block .= '<div class="inner-wrapper">';

            // Contact Block 1
            $info_block .= '<div class="contact-block">';

            // Main Title
            $info_block .= $main_title;

            if ($contact_address) {
                $info_block .= '<div class="contact-box">';
                $info_block .= $contact_address;
                $info_block .= '</div>';
            }

            $info_block .= '<div class="contact-box">';
            $info_block .= $contact_title;
            $info_block .= '<div class="locate">' . do_shortcode('[kiyoh-klantenvertellen layout="default" show_summary="only_text"]') . '</div>';
            $info_block .= $contact_phone;
            $info_block .= $contact_email;
            $info_block .= '</div>';

            // Follow Content
            $info_block .= $follow_content;

            $info_block .= '</div>';

            // Wrapper End
            $info_block .= '</div>';
            $info_block .= '</div>';
        }

        // Processing some classes
        $atts['featured_type'] == 'only_form' ? $custom_class = "only-form" : $custom_class = '';

        $output = '';


        $output .= '<div class="banner-wrapper '. $custom_class .'">';

        // Info block

        if ($atts['featured_type'] != 'only_form') {

            $output .= '<div class="banner-info pt30">';
            $output .= $info_block;
            $output .= '</div>';

        }


        // Contact block
        $output .= $contact_form;

        $output .= '</div>';

        return $output;
    }

}