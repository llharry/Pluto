<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 */

// Gets header.php
get_header();
?>

<?php while(have_posts()) : the_post(); ?>

	title: <?php the_title(); ?><br />
	ID: <?php the_ID(); ?><br />
	time: <?php the_time(get_option('date_format')); ?><br />
	excerpt: <?php the_excerpt(); ?><br />
	link: <a href="<?php the_permalink(); ?>">link</a><br />
	<hr />

<?php endwhile; ?>

<?php
// Gets footer.php
get_footer();
?>

