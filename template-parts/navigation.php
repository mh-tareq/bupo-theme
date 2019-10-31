<div class="header clearfix">
    <nav>
        <?php wp_nav_menu(array(
            'theme_location'    => 'primary_menu',
            'menu_class'    => 'nav nav-pills pull-right'
        )) ?>
    </nav>
    <?php if (has_custom_logo()) { ?>
        <?php the_custom_logo(); ?>
    <?php } else { ?>
        <?php bloginfo('title') ?>
    <?php } ?>
</div>