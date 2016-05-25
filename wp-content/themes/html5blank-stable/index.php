<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1 id="blogtitle"><?php _e( 'Blog', 'html5blank' ); ?></h1>
			<div id="postcontent">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php //get_footer(); ?>



