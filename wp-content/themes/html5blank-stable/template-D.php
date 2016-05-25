<?php /* Template Name: D Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="row">
					<div class="b-header col-md-10">
						<h1>Something</h1>
					</div>
				</div>

				<div class="row">
					<div class="content col-md-10">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="row">
					<div class="b-header col-md-10">
						<h1>Something</h1>
					</div>
				</div>

				<div class="row">
					<div class="content col-md-10">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="row">
					<div class="b-header col-md-10">
						<h1>Something</h1>
					</div>
				</div>

				<div class="row">
					<div class="content col-md-10">
						<?php the_content(); ?>
					</div>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
