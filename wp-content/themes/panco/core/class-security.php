<?php

class Panco_Security
{

    public function __construct()
    {
        add_filter('the_generator', array($this, 'wp_hide_version'));
        add_filter('mod_rewrite_rules', array($this, 'disable_xmlrpc_htaccess'));
        // Disallow file edit
        define( 'DISALLOW_FILE_EDIT', true );
    }



    /**
     * Hide Wordpress Version
     */
    public function wp_hide_version() {
        return '';
    }

    /**
     * Get .htaccess contents before being written to file and add custom rules
     */
    public function disable_xmlrpc_htaccess( $rules )
    {
        $my_content = <<<EOD
        \n # BEGIN My Added Content
        # Disable XML-RPC
        <Files xmlrpc.php>
            order deny,allow
            deny from all
            allow from 123.123.123.123
        </Files>
        # END XML-RPC\n 
EOD;
        return $rules . $my_content;
    }
}