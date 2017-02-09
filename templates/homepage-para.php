<?php
/**
 * Template Name: Homepage - Parallax
 */
?>

<?php
// Gets header.php
get_header('blank'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="parallax">
        <div class="parallax-group">
            <div class="main">
                <div class="centerParent fullScreen">
                    ...
                </div>
            </div>
            <div class="back">
                <div class="centerParent fullScreen">
                    ...
                </div>
            </div>
        </div>

        <div class="parallax-group">
            <div class="main">
                <div class="centerParent fullScreen">
                    ...
                </div>
            </div>
            <div class="back">
                <div class="centerParent fullScreen">
                    ...
                </div>
            </div>
        </div>
        <div class="maincontent">

        </div>
    </div>

<?php endwhile; endif; ?>
<?php get_footer('blank'); ?>
