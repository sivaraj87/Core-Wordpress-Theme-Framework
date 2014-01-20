<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContentSidebar_view
 *
 * @author scraig
 */

class ContentSidebar_view {
    
    public function init(){
        add_action('core_after_content', array($this, 'core_sidebar_right'));
    }
    
    public function core_sidebar_right(){
        get_template_part('views/templates/content-sidebar/sidebar');
    }
}

?>
