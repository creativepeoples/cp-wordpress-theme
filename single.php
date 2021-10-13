<?php
get_header();
?>

	<main id="primary" class="site-main">

	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-text">
						<h1>Single Blog</h1>
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
					<div class="single-blog">
						<?php  
							if(has_post_thumbnail()) {
								?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="single-post-thumbnail.jpeg">
								<?php
							}
						?>
						<h1><?php the_title(); ?></h1>
						<div class="single-blog-content">
							<?php the_content(); ?>
						</div>
						<div class="comment-form-wrapper">
							<?php comment_form(); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</main>

	</main><!-- #main -->

<?php
get_footer();
