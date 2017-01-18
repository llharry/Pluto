<?php
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 *
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <?php //CDN STUFF ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js">

  <?php //Contained stuff ?>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>

  <?php
  // Fires the 'wp_head' action and gets all the scripts included by wordpress, wordpress plugins or functions.php
  // using wp_enqueue_script if it has $in_footer set to false (which is the default)
  wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">



</head>
<body <?php body_class(); ?>>
	<div class="headerBar width1">
		<div class="siteWidth">
			<div class="width1">
				<a href="<?php echo get_site_url(); ?>">
					<img class="headerImage" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/logo.png"/>
				</a>
			</div>
        </div>
        <div class="width1 menuBar">
            <div class="siteWidth">
                <?php ubermenu( 'main' , array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
        </div>
	</div>
