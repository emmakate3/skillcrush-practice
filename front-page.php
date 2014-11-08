<?php
/**
 * The template for displaying my homepage
 *
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
 ?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<section class="landing-page">
		<div class="container">
			<img src="upload/Skillcrush_Brooklyn_Bridge">
			<div class="author-intro">
				<div class="content">
					<h1 class="title">
						Hi, I’m Emily.<br>
						I love building websites.
					</h1>
					<p>I’m the lead developer at <a href="http://skillcrush.com/">Skillcrush</a> as well as an instructor in Ruby and JavaScript. I got my start as an administrative assistant in the IT department at the Broad Institute of Harvard and MIT and worked my way up to software engineer!</p>
					<p>When I’m not at Skillcrush (which is most of the time), I can usually be found on my bike, practicing French, enjoying a cocktail at my favorite neighborhood bar or playing Zelda.</p>
				</div>
				<div class="social-btns">
					<a href="" class="soc-icon tw"></a>
					<a href="" class="soc-icon fb"></a>
					<a href="" class="soc-icon ln"></a>
					<a href="" class="soc-icon db"></a>
				</div>
				<a href="" class="btn">View My Blog </a>
			</div>
		</div>
	</section><!-- #landing page -->

<?php get_footer(); ?>