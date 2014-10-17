			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
								<?php dynamic_sidebar( 'footer1' ); ?>
							<?php else : ?>
								<div class="no-widgets">
									<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<?php if ( is_active_sidebar( 'footer2' ) ) : ?>
								<?php dynamic_sidebar( 'footer2' ); ?>
							<?php else : ?>
								<div class="no-widgets">
									<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<?php if ( is_active_sidebar( 'footer3' ) ) : ?>
								<?php dynamic_sidebar( 'footer3' ); ?>
							<?php else : ?>
								<div class="no-widgets">
									<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div id="inner-footer" class="container">

					<?php bones_footer_links(); ?>

					<nav role="navigation">
						<?php  ?>
					</nav>

					<p class="source-org copyright text-center" >&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>
		</div> <?php // Fin de ID Container?>

		<div id="player">
			<?php if ( is_active_sidebar( 'player' ) ) : ?>
				<?php dynamic_sidebar( 'player' ); ?>
			<?php else : ?>
				<div class="no-widgets">
					<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
				</div>
			<?php endif; ?>
		</div>
		<?php // all js scripts are loaded in library/bones.php ?>
		<!-- 
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/senna/senna-min.js"></script>
		 -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/senna/senna-debug.js"></script>	
		
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
