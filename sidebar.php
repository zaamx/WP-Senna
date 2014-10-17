<div id="sidebar1" class="sidebar col-md-3" role="complementary" data-senna-surface>
		<div id="sidebar1-default">
		<!-- Barra lateral para cargar el loop de posts -->
		<div id="lista" >
			<ul class="lista-articulos" >
				<?php $args = array(
					'post_type' => 'post', 
					'posts_per_page' => -1,
					'post_status' => 'publish'
				);
				$todospost = new WP_Query( $args ); ?>
				<?php if ($todospost -> have_posts()) : while ($todospost -> have_posts()) : $todospost -> the_post(); ?>
					<li>
						<article id="post-<?php the_ID(); ?>"  role="article">

							<header class="article-header">

								<h1 class="h2 entry-title">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</h1>
								<p class="byline vcard">
									<?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
								</p>

							</header>

						</article>
					</li>
				<?php endwhile; ?>
				<?php  // bones_page_navi(); ?>
				<?php else : ?>
				<!-- aqui no hay nada -->

				<?php endif; wp_reset_query();?>
			</ul>
		</div>
		<!-- Seccion main donde cargare los posts -->

		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar1' ); ?>

		<?php else : ?>

			<?php
				/*
				 * This content shows up if there are no widgets defined in the backend.
				*/
			?>

			<div class="no-widgets">
				<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
			</div>

		<?php endif; ?>
		</div>
</div>
