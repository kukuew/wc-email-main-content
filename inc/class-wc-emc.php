<?php
/**
 * WooCommerce Email Main Content setup
 */

defined( 'ABSPATH' ) || exit;

class WC_EMC {

    protected static $_instance;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        $this->includes();
        $this->init_hooks();
    }

    public function includes() {

    }

    private function init_hooks() {

    }


}