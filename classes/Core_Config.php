<?php

/**
 * 
 *
 * @author smiracle
 */
class Core_Config {
     
    public function init(){
        if(is_admin()) $this->adminConfigInit();
        add_action('get_stylesheets', array('Core_config', 'add_stylesheets'));
    }
    
    public function add_stylesheets(){
        echo "<link href='".get_template_directory()."/lib/topcoat".get_option('topcoat-theme')."' rel='stylesheet' type='text/css'>";
    }
    
    /**
     * Initiates the Core_Config_Admin class
     */
    private function adminConfigInit(){
        require_once TEMPLATEPATH.'/classes/Core_Config_Admin.php';
        Core_Config_Admin::init();
    }
    
}

?>
