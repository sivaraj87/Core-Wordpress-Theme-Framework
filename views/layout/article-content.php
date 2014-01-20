<?php if ( is_search() ) : // Only display Excerpts for Search ?>
<div class="<?php do_action('core_article_content_classes'); ?>">
        <?php the_excerpt(); ?>
</div><!-- .entry-summary -->
<?php else : ?>
<div class="<?php do_action('core_article_content_classes'); ?>">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'core' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'core' ), 'after' => '</div>' ) ); ?>
</div><!-- .entry-content -->
<?php endif; ?>