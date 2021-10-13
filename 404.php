<?php
get_header();
?>

	<main id="primary" class="site-main">

	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text">
						<h1>404 Error</h1>
						<p><?php bcn_display(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="error-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h3>You entered a wrong url. <i class="far fa-sad-cry"></i></h3>
					<p>Go back to <a href="<?php echo home_url('/'); ?>">Home</a></p>
				</div>
			</div>
		</div>
	</section>

	</main><!-- #main -->

<?php
get_footer();
