<div id="content" role="main">
    <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
            <div class="featured-post">
                    <?php _e( 'Featured post', 'core' ); ?>
            </div>
            <?php endif; ?>
            <header class="entry-header">
                    <?php the_post_thumbnail(); ?>
                    <?php if ( is_single() ) : ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php else : ?>
                    <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h1>
                    <?php endif; // is_single() ?>
                    <?php if ( comments_open() ) : ?>
                            <div class="comments-link">
                                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'core' ) . '</span>', __( '1 Reply', 'core' ), __( '% Replies', 'core' ) ); ?>
                            </div><!-- .comments-link -->
                    <?php endif; // comments_open() ?>
            </header><!-- .entry-header -->

            <?php if ( is_search() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                    <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
            <?php else : ?>
            <div class="entry-content">
                    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'core' ) ); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'core' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
            <?php endif; ?>

            <footer class="entry-meta">
            <?php edit_post_link( __( 'Edit', 'core' ), '<span class="edit-link">', '</span>' ); ?>
            <?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
                    <div class="author-info">
                            <div class="author-avatar">
                                    <?php
                                    /** This filter is documented in author.php */
                                    $author_bio_avatar_size = apply_filters( 'core_author_bio_avatar_size', 68 );
                                    echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
                                    ?>
                            </div><!-- .author-avatar -->
                            <div class="author-description">
                                    <h2><?php printf( __( 'About %s', 'core' ), get_the_author() ); ?></h2>
                                    <p><?php the_author_meta( 'description' ); ?></p>
                                    <div class="author-link">
                                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                                                    <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'core' ), get_the_author() ); ?>
                                            </a>
                                    </div><!-- .author-link	-->
                            </div><!-- .author-description -->
                    </div><!-- .author-info -->
            <?php endif; ?>
            </footer><!-- .entry-meta -->
        </article><!-- #post -->
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