<?php


/**
 * Extend additional templates from here. This initiates the main layout.
 *
 * @author smiracle
 */
class Core_View extends Core{
    
    public function init(){
        $this->setup_layout();
        $this->add_bare_base_template();
        get_template_part('views/layout/index');
    }
    
    private function setup_layout(){
        add_action('core_header', array($this, 'setup_header'));
        add_action('core_main', array($this, 'setup_main'));
        add_action('core_conten', array($this, 'setup_content'));
    }
    
    private function add_bare_base_template(){
        require_once get_template_directory().'/classes/Core_View_Bare.php';
        $bare = new Core_View_Bare();
        $bare->init();
    }
    
    public function setup_header(){
        get_template_part('views/layout/header');
    }
    
    public function setup_main(){
        get_template_part('views/layout/main');
    }
}

?>
