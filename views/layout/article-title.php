<?php if ( is_single() ) : ?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<?php else : ?>
<h1 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
</h1>
<?php endif; // is_single() ?>