<?php get_header(); ?>

<div class="pageContainer">
	<div class ="col-9 centered">
	<section id="TitleContainer">
		<main role="main">
			<!-- section -->
			<section>

				<!-- article -->
				<article id="post-404">

					<h1 style="text-align: center;"><?php _e( 'Page not found', 'html5blank' ); ?></h1>
					<h3 style="text-align: center;">
						<a href="<?php echo home_url(); ?>"><?php _e( '<i class="fas fa-arrow-left"></i> Retour', 'html5blank' ); ?></a>
</h3>

				</article>
				<!-- /article -->

			</section>
			<!-- /section -->
		</main>

	</section>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
