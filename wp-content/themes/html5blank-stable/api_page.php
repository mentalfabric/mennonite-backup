<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

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

<?php
// Authorize Transaction example
function authTransaction() {
	global $url, $user, $password;
	echo "\nAuthorization Request\n";
	$client = new CardConnectRestClient($url, $user, $password);

	$request = array(
		'merchid'   => "496160873888",
		'accttyppe' => "VISA",
		'account'   => "4444333322221111",
		'expiry'    => "0914",
		'cvv2'      => "123",
		'amount'    => "100",
		'currency'  => "USD",
		'orderid'   => "12345",
		'name'      => "Test User",
		'address'    => "123 Test St",
		'city'      => "Testville",
		'region'    => "Test State",
		'country'   => "US",
		'postal'    => "11111",
		'tokenize'  => "Y",
	);

	$response = $client->authorizeTransaction($request);
	print var_dump($response);
	return $response["retref"];
}
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
