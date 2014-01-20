<?php do_action('core_custom_template_class'); ?>
<?php  get_template_part('views/layout/head'); ?>
<body <?php body_class() ?>>
    <div id="base" class="wrapper <?php do_action('core_base_classes') ?>">
        <?php do_action('core_before_header'); ?>
        <?php do_action('core_header'); ?>
        <?php do_action('core_before_main'); ?>
        <?php do_action('core_main'); ?>
        <?php do_action('core_before_footer'); ?>
        <?php do_action('core_footer'); ?>
    </div>
    <?php do_action('core_before_end'); ?>
</body>
