<?php get_header(); ?>
	<div id="cta" data-senna-surface> 
		<div id="cta-default" class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h3 class="headSingle"><?php the_title(); ?></h3>
				</div>
			</div>
		</div>
	</div>
	

	<div id="higlights"  data-senna-surface>
		<div id="higlights-default"  class="container-fluid">
		</div>
	</div>
			<div id="content" class="container">
				<div id="inner-content" class="row">
						<?php get_sidebar(); ?>
						<div id="main" class="col-md-9" role="main" data-senna-surface>
							<div id="main-default" >

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<?php
										/*
										 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
										 *
										 * So this function will bting in the needed template file depending on what the post
										 * format is. The different post formats are located in the post-formats folder.
										 *
										 *
										 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
										 * A SPECIFIC POST FORMAT.
										 *
										 * If you want to remove post formats, just delete the post-formats folder and
										 * replace the function below with the contents of the "format.php" file.
										*/
										get_template_part( 'post-formats/format', get_post_format() );
									?>

								<?php endwhile; ?>

								<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
											</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
											</footer>
									</article>

								<?php endif; ?>

							</div>
						</div>
				</div>

			</div>

<?php get_footer(); ?>
