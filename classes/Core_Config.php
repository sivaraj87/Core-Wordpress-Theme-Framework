<?php

/**
 * 
 *
 * @author smiracle
 */
class Core_Config {
     
    public function init(){
        if(is_admin()) $this->adminConfigInit();
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
