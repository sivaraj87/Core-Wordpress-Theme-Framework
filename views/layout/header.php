
<div id="header">
    <div class="wrapper">
        <?php do_action('before_site_title'); ?>
        <?php do_action('core_site_title'); ?>
        <?php do_action('after_site_title'); ?>
        <p class="tagline"><?=get_bloginfo('description'); ?></p>
        <?php do_action('before_primary_nav'); ?>
        <div id="primaryNav" class="navigation">
            <?php if(has_nav_menu('primary')) wp_nav_menu('primary') ?>
        </div>
        <?php do_action('after_primary_nav'); ?>
    </div>
</div>