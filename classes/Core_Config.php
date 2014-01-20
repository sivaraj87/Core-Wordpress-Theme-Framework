<?php

/**
 * 
 *
 * @author smiracle
 */
class Core_Config {
     
    public function init(){
        if(is_admin()) $this->adminConfigInit();
        add_action('wp_head', array($this, 'add_ie_html5_shim'));
    }
    
    /**
     * Initiates the Core_Config_Admin class
     */
    private function adminConfigInit(){
        require_once TEMPLATEPATH.'/classes/Core_Config_Admin.php';
        Core_Config_Admin::init();
    }
    
    // add ie conditional html5 shim to header
    function add_ie_html5_shim () {
        '<!--[if lt IE 9]>';
        '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
        '<![endif]-->';
    }  
    
}

?>
