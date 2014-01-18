<?php  get_template_part('views/layout/header'); ?>
<body <?php body_class() ?>>
    <div id="base" class="wrapper <?php do_action('base_classes') ?>">
        <?php do_action('before_header'); ?>
        <div id="header">
            <div class="wrapper">
                <?php do_action('before_site_title'); ?>
                <h1 class="title "><?=get_bloginfo('name'); ?></h1>
                <?php do_action('after_site_title'); ?>
                <p class="tagline"><?=get_bloginfo('description'); ?></p>
                <?php do_action('before_primary_nav'); ?>
                <div id="primaryNav" class="navigation">
                    <?php if(has_nav_menu('primary')) wp_nav_menu('primary') ?>
                </div>
                <?php do_action('after_primary_nav'); ?>
            </div>
        </div>
        <?php do_action('before_main'); ?>
        <div id="main" class="<?php do_action('main_classes') ?>">
            <div class="wrapper">
                <div id="primary" class="<?php do_action('primary_classes') ?>">
                    <?php get_template_part('views/layout/content'); ?>
                </div>
                <div id="secondary" class="<?php do_action('secondary_classes') ?>">

                </div>
            </div>
        </div>
        <div id="footer" class="<?php do_action('footer_classes') ?>">
            <?php wp_footer(); ?>
        </div>
    </div>

</body>
