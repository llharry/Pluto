<?php
// Gets header.php
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page_singlePost">
    <?php
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0];
    ?>
    <div class="titleBar width1" style="background-image: url('<?php echo $thumb_url ?>');">
        <div class="titleBloc width1" >
            <span class="postTitle">
                <div class="siteWidth">
                    <h1><?php the_title()?></h1>
                </div>
            </span>
        </div>
    </div>
    <div class="contentBar">
        <div class="siteWidth">
            <div class="contentBloc">
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
