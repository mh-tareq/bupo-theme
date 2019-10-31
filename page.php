<?php get_header(); ?>
<div class="breadcrumb">
    <?php the_breadcrumb(); ?>
</div>

<div class="row">
    <div class="col-md-<?php echo is_active_sidebar('sidebar') ? 9 : 12 ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article <?php post_class('content-area') ?>>
                    <div class="content__thumbnail">
                        <?php if (has_post_thumbnail()) { ?>
                            <?php the_post_thumbnail() ?>
                        <?php } ?>
                    </div>
                    <div class="content__title">
                        <h1><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a></h1>
                    </div>
                    <div class="content__meta">
                        On: <?php the_date(); ?> |
                        By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a> |
                        At <a href="<?php get_the_category() ?>"><?php the_category(', ') ?></a> |
                    </div>
                    <div class="content__article">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile;
            else : ?>
            <?php esc_html__('Sorry No Posts Fount', 'bupo') ?>
        <?php endif; ?>
    </div>
    <?php if (is_active_sidebar('sidebar')) { ?>
        <div class="col-md-3 primary-sidebar">
            <?php dynamic_sidebar('sidebar') ?>
        </div>
    <?php } ?>
</div>
<!--- If comments are open or we have at least one comment, load up the comment template.--->
<?php if (comments_open() || get_comments_number()) :
    comments_template();
endif; ?>
<?php get_footer(); ?>