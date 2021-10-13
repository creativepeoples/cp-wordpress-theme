<?php
get_header();
?>

	<main id="primary" class="site-main">

		<section class="breadcrumb-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-text">
							<h1>Blog</h1>
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
						<div class="row">
							<?php while(have_posts()) : the_post(); ?>
							<div class="col-md-6">
								<div class="card blog-post" style="width: 18rem;">
									<?php if(has_post_thumbnail()) : ?>
									<a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap"></a>
									<?php endif; ?>
									<div class="card-body">
										<h5 class="card-title"><?php echo wp_trim_words( get_the_title(), 7, "..." ); ?></h5>
										<p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 15, "..." ); ?></p>
										<a href="<?php the_permalink(); ?>" class="btn btn-primary">View Post</a>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
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
