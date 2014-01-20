<?php

/**
 * Description of Core_View_Bare
 *
 * @author scraig
 */

class Core_View_Bare {
    
    public function init(){
        add_action('core_site_title', array($this, 'do_site_title'));
    }
    
    public function do_site_title(){
        get_template_part('views/templates/bare/site-title');
    }
    
}

?>
