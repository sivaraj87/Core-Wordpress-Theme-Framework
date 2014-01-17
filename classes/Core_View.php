<?php


/**
 * Extend additional templates from here. This initiates the main layout.
 *
 * @author smiracle
 */
class Core_View extends Core{
    
    function init(){
        get_template_part('views/layout/main');
    }
}

?>
