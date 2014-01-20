
<div id="main" class="<?php do_action('main_classes') ?>">
    <div class="wrapper">
        <div id="primary" class="<?php do_action('primary_classes') ?>">
            <?php get_template_part('views/layout/content'); ?>
        </div>
        <?php get_template_part('/views/layout/secondary'); ?>
    </div>
</div>