<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php do_action('core_before_article_header'); ?>
    <?php do_action('core_article_header'); ?>
    <?php do_action('core_before_article_content'); ?>
    <?php do_action('core_article_content'); ?>
    <?php do_action('core_before_article_footer'); ?>
    <?php do_action('core_article_footer'); ?>
    <?php do_action('core_after_article_footer'); ?>
</article><!-- #post -->