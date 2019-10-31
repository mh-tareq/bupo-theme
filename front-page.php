<?php get_header(); ?>
<div class="jumbotron">
    <h1><?php echo get_theme_mod('bupotheme_showbox_title_setting', 'Showbox Title') ?></h1>
    <p class="lead">
        <?php echo get_theme_mod(
            'showbox_des_setting',
            'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'
        ) ?>
    </p>
    <p>
        <a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('showbox_button_url', 'www.google.com') ?>" role="button">
            <?php echo get_theme_mod('showbox_button_title', 'Join Today') ?>
        </a>
    </p>
</div>
<!--BoX--->
<?php get_template_part('template-parts/box') ?>

<!---Fulwidth Content--->
<?php if (is_active_sidebar('fullwidth-widget')) { ?>
    <?php dynamic_sidebar('fullwidth-widget') ?>
<?php } ?>


<section class="row content-region-2 pt40 pb40">
    <div class="container">
        <div class="col-md-5">
            <img src="<?php echo get_theme_mod('content_section_background_image', get_bloginfo('template_directory') . '/img/blog1.jpg') ?>">
        </div>
        <div class="col-md-7">
            <h3>Theme Features</h3>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Clean Code</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Custom Showcase Area</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Bootstrap 3 Framework</li>
                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Multiple Color Choices</li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>