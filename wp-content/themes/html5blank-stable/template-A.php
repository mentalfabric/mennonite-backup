<?php /* Template Name: A Template */ get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<div class="row">
			<div class="carousel col-md-12">
				<h1>Get a free quote today!</h1>
				<div class="c-row row">
					<div class="c-link col-md-2 col-md-offset-4">
						<a href="/">Link One</a>
					</div>
					<div class="c-link-2 col-md-2">
						<a href="/">Link Two</a>
					</div>
				</div>
			</div>
		</div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


				<div class="row">
					<div class="content col-md-10">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="icons">
							<a href="/" data-toggle="tooltip" data-placement="bottom" title="Hover over icons for quick blurb" class="icon-1"><?php echo types_render_field("icon-1", array()); ?></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="icons">
							<a href="/" data-toggle="tooltip" data-placement="bottom" title="Hover over icons for quick blurb" class="icon-2"><?php echo types_render_field("icon-2", array()); ?></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="icons">
							<a href="/" data-toggle="tooltip" data-placement="bottom" title="Hover over icons for quick blurb" class="icon-3"><?php echo types_render_field("icon-3", array()); ?></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="icons">
							<a href="/" data-toggle="tooltip" data-placement="bottom" title="Hover over icons for quick blurb" class="icon-4"><?php echo types_render_field("icon-4", array()); ?></a>
						</div>
					</div>
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
<div class="clearfix"></div>
<?php get_footer(); ?>
