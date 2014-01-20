<div id="content" role="main" class="<?php do_action('core_main_classes') ?>">
    <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php do_action('core_before_the_article'); ?>
                <?php do_action('core_the_article'); ?>
                <?php do_action('core_after_the_article'); ?>
            <?php endwhile; ?>

    <?php else : ?>

        <article id="post-0" class="post no-results not-found">

        <?php if ( current_user_can( 'edit_posts' ) ) :
                // Show a different message to a logged-in user who can add posts.
        ?>
                <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'No posts to display', 'core' ); ?></h1>
                </header>

                <div class="entry-content">
                        <p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'core' ), admin_url( 'post-new.php' ) ); ?></p>
                </div><!-- .entry-content -->

        <?php else :
                // Show the default message to everyone else.
        ?>
                <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'Nothing Found', 'core' ); ?></h1>
                </header>

                <div class="entry-content">
                        <p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'core' ); ?></p>
                        <?php get_search_form(); ?>
                </div><!-- .entry-content -->
        <?php endif; // end current_user_can() check ?>

        </article><!-- #post-0 -->

    <?php endif; // end have_posts() check ?>

</div><!-- #content -->