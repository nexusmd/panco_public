<?php
define('PANCO_DIR', trailingslashit(get_template_directory()));
define('PANCO_STYLESHEET_URL', trailingslashit(get_stylesheet_directory_uri()));
define('PANCO_VERSION', wp_get_theme()->Version);
/**
 * Panco load core
 *
 * @param $class
 */
function panco_autoload($class)
{

    if (class_exists($class) || stripos($class, 'PANCO_') === false) {
        return;
    }

    $name = str_replace(array('panco_', '_'), '-', strtolower($class));
    $path = PANCO_DIR . "core/class{$name}.php";

    if (file_exists($path)) {
        include($path);
    }
}

spl_autoload_register('panco_autoload');

new Panco_Bootstrap();


require_once "templates/woocommerce/woo-controller.php";


