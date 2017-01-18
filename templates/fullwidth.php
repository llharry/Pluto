<?php
/**
 * Template Name: Full Width Page
 */
?>
<?php
// Gets header.php
get_header(); ?>
<div class="page page_fullwidth">
    <div class="siteWidth pageBloc">
        <div class="width1">
            <?php /*get posts*/
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            } ?>
        </div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
