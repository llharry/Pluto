<?php
/**
 * Template Name: Homepage
 */
?>

<?php
// Gets header.php
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page page_homepage width1">
    <div class="sliderBar">
        <div class="siteWidth">
            <div class="widget">

            </div>
        </div>
    </div>
    <div class="taglineBar">
        <div class="siteWidth">
            <div class="widget">
                <?php if(is_active_sidebar('tagline-widget')){dynamic_sidebar('tagline-widget');}?>
            </div>
        </div>
    </div>
    <div class="featureBar text-center">
        <div class="siteWidth">
            <div class="widgetWrapper width1 centerParent">
                <div class="centerChild">
                    <div class="width3 ">
                        <div class="widget">
                            <?php if(is_active_sidebar('feature-widget-1')){dynamic_sidebar('feature-widget-1');}?>
                        </div>
                    </div>
                    <div class="width3">
                        <div class="widget">
                            <?php if(is_active_sidebar('feature-widget-2')){dynamic_sidebar('feature-widget-2');}?>
                        </div>
                    </div>
                    <div class="width3">
                        <div class="widget">
                            <?php if(is_active_sidebar('feature-widget-3')){dynamic_sidebar('feature-widget-3');}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aboutBar">
        <div class="siteWidth">
            <div class="widget">
                <?php the_content() ?>
            </div>
        </div>
    </div>
    <div class="actionBar">
        <div class="siteWidth">
            <div class="widget width2">
                <?php if(is_active_sidebar('action-widget-1')){dynamic_sidebar('action-widget-1');}?>
            </div>
            <div class="widget width2">
                <?php if(is_active_sidebar('action-widget-2')){dynamic_sidebar('action-widget-2');}?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
