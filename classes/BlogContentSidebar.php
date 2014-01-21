<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogContentSidebar_View
 *
 * @author smiracle
 */
class BlogContentSidebarView extends Core_View{
    
    public function init(){
        $this->setup_layout();
    }
    
    private function setup_layout(){
        add_action('core_the_comments', array($this, 'setup_the_comments'));
    }
    
    public function setup_the_comments(){
        get_template_part('views/templates/blog-content-sidebar/comments');
    }
    
}

?>
