<article class="col-md-4 article-image">
	<header>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail(); ?>
			<?php } else { ?> 
				<img class="img-responsive" src="http://lorempixel.com/400/350" alt="<?php the_title(); ?>"/>
			<?php } ?>	
		</a>
		<h3 class="h4">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
	</header>
</article>