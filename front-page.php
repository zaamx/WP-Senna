<?php
/*
 Template Name: Home Senna
*/
?>
<?php get_header('home'); ?>

	<div id="cta" class="cta" data-senna-surface> 
		<div id="cta-default" class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="h3">Contenido <span>Contenido 2</span></h2>
				</div>
			</div>
		</div>
	</div>

	<div id="higlights" data-senna-surface>
		<div id="higlights-default"  class="container-fluid">
			<div class="row">
						<?php $args = array(
						'post_type' => 'post', 
						'posts_per_page' => 3,
						'post_status' => 'publish',
						'tag' => 'destacados'
						);
						$queryDestacados = new WP_Query( $args ); ?>
						<?php if ($queryDestacados -> have_posts()) : while ($queryDestacados -> have_posts()) : $queryDestacados -> the_post(); ?>

						<?php get_template_part( 'template-parts/post', 'artImage' ); ?>
						<?php endwhile; ?>
					<?php else : ?>
					<?php endif; wp_reset_query();?>
			</div>
			
		</div>
	</div>
	

	<div id="content" class="container">

		<div id="inner-content" class="row">

			<?php get_sidebar('home'); ?>

			<div id="main" class="col-md-9" role="main" data-senna-surface>
				<div id="main-default" >

					<h2 class="h3">NOTICIAS RECIENTES</h2>

					<div id="lista" >
						<?php $args = array(
								'post_type' => 'post', 
								'posts_per_page' => 3,
								'post_status' => 'publish'
							);
							$todospost = new WP_Query( $args ); ?>
							<?php if ($todospost -> have_posts()) : while ($todospost -> have_posts()) : $todospost -> the_post(); ?>
									<article id="post-<?php the_ID(); ?>"  role="article" >

										<header class="article-header row">
											<div class="col-md-3">
												<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
													<?php if ( has_post_thumbnail() ) { ?>
														<?php the_post_thumbnail(); ?>
													<?php } else { ?> 
														<img class="img-responsive" src="http://lorempixel.com/400/350" alt="<?php the_title(); ?>"/>
													<?php } ?>	
												</a>
											</div>
											<div class="col-md-9">
												<h3 class="h4 entry-title">
													<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
												</h3>
												<p class="byline vcard">
													<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
												</p>
												<p>
													<?php the_excerpt(); ?>
												</p>
											</div>
										</header>
										<hr>

									</article>
							<?php endwhile; ?>
							<?php  // bones_page_navi(); ?>
							<?php else : ?>
							<!-- aqui no hay nada -->

							<?php endif; wp_reset_query();?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="cta2" class="cta" data-senna-surface>
		<div id="cta2-default"  class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="h3">Contenido <span>Contenido 2</span></h2>
				</div>
			</div>
		</div>
	</div>

	<div id="listEvents"  data-senna-surface>
		<div id="listEvents-default"  class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="h3">Eventos</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php $args = array(
					'post_type' => 'post', 
					'posts_per_page' => -1,
					'post_status' => 'publish',
					'tag' => 'eventos'
					);
					$queryEventos = new WP_Query( $args ); ?>
					<?php if ($queryEventos -> have_posts()) : while ($queryEventos -> have_posts()) : $queryEventos -> the_post(); ?>
			
						<?php get_template_part( 'template-parts/format', 'event' ); ?>

					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; wp_reset_query();?>
				</div>
			</div>

		</div>
	</div>

	<div id="listGal" data-senna-surface>
		<div id="listGal-default"  class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="h3">Galeria</h2>
				</div>
			</div>
			<div class="row">
				<?php $args = array(
				'post_type' => 'post', 
				'posts_per_page' => 4,
				'post_status' => 'publish',
				'tag' => 'galeria'
				);
				$queryGaleria = new WP_Query( $args ); ?>
				<?php if ($queryGaleria -> have_posts()) : while ($queryGaleria -> have_posts()) : $queryGaleria -> the_post(); ?>

				<?php get_template_part( 'template-parts/post', 'artImage' ); ?>
		
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; wp_reset_query();?>
			</div>
		</div>
	</div>
	<div id="listVids"  data-senna-surface>
		<div id="listVids-default" class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="h3">Videos</h2>
				</div>
			</div>
			<div class="row">
				<?php $args = array(
				'post_type' => 'post', 
				'posts_per_page' => 2,
				'post_status' => 'publish',
				'tag' => 'videos'
				);
				$queryVideos = new WP_Query( $args ); ?>
				<?php if ($queryVideos -> have_posts()) : while ($queryVideos -> have_posts()) : $queryVideos -> the_post(); ?>

				<?php get_template_part( 'template-parts/post', 'artImage' ); ?>
		
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; wp_reset_query();?>
			</div>

		</div>
	</div>
<?php get_footer(); ?>