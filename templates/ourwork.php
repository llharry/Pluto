<?php
/**
 * Template Name: Our Work
 */
?>
<?php
// Gets header.php
get_header(); ?>
<div class="page page_postsPage">
    <div class="siteWidth ">
        <div class="width1">
            <!-- Get Posts -->
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>

            <?php
            //Init loop counter
            $loopCounter = 0;

            //Query shit
            $latest_blog_posts = new WP_Query( array( 'category_name' => 'our-work', 'posts_per_page' => 10, 'paged' => $paged, 'post_status'=> 'publish' ) );
            if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
                //Get Thumbnail URL
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb1_url = $thumb_url_array[0];
                if (substr($thumb1_url, -12) == '/default.png') {
                    $thumb1_url = '';
                }
                if (class_exists('Dynamic_Featured_Image')) {
                    global $dynamic_featured_image;
                    //You can now loop through the image to display them as required
                    $thumb2_url = $dynamic_featured_image->get_nth_featured_image(2, $post->ID)['full'];
                    //print("THUMB ONE:" . $thumb1_url);
                    //print("     THUMB TWO:" . $thumb2_url);
                    if(is_null($thumb2_url)){
                        $thumb2_url = $thumb1_url;
                    }
                }


                //increment loop counter for flipcard ids
                $loopCounter++;
            ?>

            <a href="<?php echo get_permalink() ?>">
            <div class="cardWrapper width2">
                <div class="card" id="post<?php echo $loopCounter;?>">
                    <div class="front" style="background-image: url('<?php echo $thumb1_url ?>')">
                        <div class="contents">
                            <h3><?php echo the_title()?></h3>
                        </div>
                    </div>
                    <div class="back" style="background-image: url('<?php echo $thumb2_url ?>')">
                        <div class="contents">
                            <p><?php echo the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <script type="text/javascript">
                $("#post<?php echo $loopCounter?>").flip({
                    axis: 'y',
                    trigger: 'hover'
                });
            </script>
            <?php endwhile; ?>

            <?php endif;?>
            <div class="width1 text-center">
                <?php posts_nav_link(); ?>
            </div>
        </div>

        <!--
        <div class="width3">
            <-?php if ( is_active_sidebar( 'page_sidebar' ) ) : ?>
            <div class="pageSidebar width1 widget-area" role="complementary">
                <-?php dynamic_sidebar( 'page_sidebar' ); ?>
            </div>
            <-?php endif; ?>
        </div>
        -->
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
