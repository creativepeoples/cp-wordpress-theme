<?php
get_header();
?>

	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text">
						<h1><?php the_title(); ?></h1>
						<p><?php bcn_display(); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php the_content(); ?>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
