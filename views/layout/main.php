<?php get_template_part('views/layout/header'); ?>
<body <? body_class() ?>>
    <div id="base" class="wrapper <? do_action('base_classes') ?>">
        <? do_action('before_header'); ?>
        <div id="header">
            <div class="wrapper">
                <? do_action('before_site_title'); ?>
                <h1 class="title "><?=get_bloginfo('name'); ?></h1>
                <? do_action('after_site_title'); ?>
                <p class="tagline"><?=get_bloginfo('description'); ?></p>
                <? do_action('before_primary_nav'); ?>
                <div id="primaryNav" class="navigation">
                    <? if(has_nav_menu('primary')) wp_nav_menu('primary') ?>
                </div>
                <? do_action('after_primary_nav'); ?>
            </div>
        </div>
        <? do_action('before_main'); ?>
        <div id="main" class="<? do_action('main_classes') ?>">
            <div class="wrapper">
                <div id="primary" class="<? do_action('primary_classes') ?>">

                </div>
                <div id="secondary" class="<? do_action('secondary_classes') ?>">

                </div>
            </div>
        </div>
        <div id="footer" class="<? do_action('footer_classes') ?>">
            <? wp_footer(); ?>
        </div>
    </div>

</body>
