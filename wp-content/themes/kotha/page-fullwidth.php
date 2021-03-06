<?php
// Template Name: Full Width Page
?>
<?php get_header(); ?>

	<div class="st-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content', 'page' ); ?>

								<?php if (!get_theme_mod('kotha_page_comments')) : ?>
									<div class="padding-content white-color">
										<?php
											// If comments are open or we have at least one comment, load up the comment template
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;
										?>
									</div>
								<?php endif; ?>

							<?php endwhile; // end of the loop. ?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div> <!-- /col -->		
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.st-content -->

<?php get_footer(); ?>
