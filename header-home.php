<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body  data-senna <?php body_class(); ?>>

	
		<header class="header" role="banner">

			<div id="inner-header">

				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
				<!-- <h1 id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1> -->

				<?php // if you'd like to use the site description you can un-comment it below ?>
				<?php // bloginfo('description'); ?>

				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				  <div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="<?php echo home_url(); ?>">
								<?php bloginfo('name'); ?>
							</a>
					</div>
						<?php bones_main_nav(); ?>
					</div>
				</nav>

			</div>
		</header>

		<div id="slider" data-senna-surface>
			<div id="slider-default">
				<div id="corousel-chematrix" class="carousel slide" data-ride="carousel">
					<?php $numID = 0; ?>
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php $args = array(
						// 'post_type' => 'post', 
						'posts_per_page' => 5,
						'post_status' => 'publish',
						'tag' => 'slides'
						);
						$SlideIndQuery = new WP_Query( $args ); ?>
						<?php if ($SlideIndQuery -> have_posts()) : while ($SlideIndQuery -> have_posts()) : $SlideIndQuery -> the_post(); ?>

							<li class="item-carousel" data-target="#corousel-chematrix" data-slide-to="<?php echo $numID; ?>"></li>
							<?php  $numID++ ?>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; wp_reset_query();?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?php $args = array(
						'posts_per_page' => 5,
						'post_status' => 'publish'
						// 'tag' => 'slides'
						);
						$SlideIndQuery = new WP_Query( $args ); ?>
						<?php if ($SlideIndQuery -> have_posts()) : while ($SlideIndQuery -> have_posts()) : $SlideIndQuery -> the_post(); ?>

							<div class="item" id="slide-<?php the_ID(); ?>">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('full', array( 'class'	=> "img-slideshow"));
								} else { ?>

									<img src="http://placehold.it/1600x400" class="img-slideshow" alt="<?php the_title_attribute(); ?>" >
								<?php } ?>
								
								<div class="carousel-caption">
									<?php the_title(); ?>
									<?php the_excerpt(); ?>
								</div>
							</div>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; wp_reset_query();?>
						
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#corousel-chematrix" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#corousel-chematrix" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					jQuery('.carousel-indicators').find('.item-carousel:first').addClass('active');
					jQuery('.carousel-inner').find('.item:first').addClass('active');
				});
				
			</script>
		</div>

		<div id="container">

			
