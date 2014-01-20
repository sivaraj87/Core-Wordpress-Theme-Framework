<?php


/**
 * Extend additional templates from here. This initiates the main layout.
 *
 * @author smiracle
 */
class Core_View extends Core{
    
    public function init(){
        $this->setup_layout();
    }
    
    private function setup_layout(){
        $this->setup_actions();
        $this->setup_filters();
        get_template_part('views/layout/index');
    }
    
    private function setup_actions(){
        $this->setup_structure_actions();
        $this->setup_classes_actions();
    }
    
    private function setup_filters(){
        add_filter('core_article_header_classes_filter', array($this, 'add_article_header_filters'));
        add_filter('core_article_content_classes_filter', array($this, 'add_article_content_filters'));
        add_filter('core_article_title_filter', array($this, 'setup_article_title_filter'));
    }
    
    private function setup_structure_actions(){
        add_action('core_header', array($this, 'setup_header'));
        add_action('core_site_title', array($this, 'setup_site_title'));
        add_action('core_main', array($this, 'setup_main'));
        add_action('core_primary', array($this, 'setup_primary'));
        add_action('core_the_loop', array($this, 'setup_the_loop'));
        add_action('core_the_article', array($this, 'setup_article'));
        add_action('core_article_header', array($this, 'setup_article_header'));
        add_action('core_article_content', array($this, 'setup_article_content'));
        add_action('core_article_footer', array($this, 'setup_article_footer'));
        add_action('core_article_title', array($this, 'setup_article_title'));
    }
    
    private function setup_classes_actions(){
        add_action('core_main_classes', array($this, 'setup_main_classes'));
        add_action('core_primary_classes', array($this, 'setup_primary_classes'));
        add_action('core_article_header_classes', array($this, 'setup_article_header_classes'));
        add_action('core_article_content_classes', array($this, 'setup_article_content_classes'));
        add_action('core_article_footer_classes', array($this, 'setup_article_footer_classes'));
    }
    
    public function setup_header(){
        get_template_part('views/layout/header');
    }
    
    public function setup_main_classes($classes){
        $classes = apply_filters('core_apply_article_header_filter_classes', $classes);
        echo $this->implodeThisIfArray($classes);        
    }
    
    
    public function setup_main(){
        get_template_part('views/layout/main');
    }
    
    public function setup_site_title(){
        get_template_part('views/layout/site-title');
    }
    
    public function setup_primary(){
        get_template_part('views/layout/primary');
    }
    
    public function setup_primary_classes(){
        $classes = apply_filters('core_apply_article_header_filter_classes', $classes);
        echo $this->implodeThisIfArray($classes);    
    }
    
    public function setup_the_loop(){
        get_template_part('views/layout/loop');
    }
    
    public function setup_article(){
        get_template_part('views/layout/article');
    }
    
    public function setup_article_header(){
        get_template_part('views/layout/article-header');
    }
    
    public function add_article_header_filters($classes){
       $classes[] = 'entry-header';
       return $classes;
    }
    
    public function setup_article_header_classes($classes){
        $classes = apply_filters('core_article_header_classes_filter', $classes);
        echo $this->implodeThisIfArray($classes);        
    }
    
    public function setup_article_content(){
        get_template_part('views/layout/article-content');
    }
    
    public function setup_article_content_classes($classes){
        $classes = apply_filters('core_article_content_classes_filter', $classes);
        echo $this->implodeThisIfArray($classes);       
    }
    
    public function add_article_content_filters($classes){
        $classes[] = 'entry-content';
        return $classes;
    }
    
    public function setup_article_footer(){
        get_template_part('views/layout/article-footer');
    }
    
    public function setup_article_footer_classes($classes){
        $classes = apply_filters('core_article_footer_classes_filter', $classes);
        echo $this->implodeThisIfArray($classes);       
    }
    
    public function setup_article_title_filter(){
        include(locate_template('views/layout/article-title.php'));
    }
    
    public function setup_article_title(){
        $articleTite = apply_filters('core_article_title_filter', $classes);
        echo $articleTitle;
    }
    
    
    private function implodeThisIfArray($array){
        
        if(is_array($array)){            
            return implode(', ', $array);
        } else{
            return;
        }
        
    }
    
}

?>
