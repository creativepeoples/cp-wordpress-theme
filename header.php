<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<?php 
					if(has_custom_logo()) {
						the_custom_logo();
					} else {
						?>
							<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
						<?php
					} 
				?>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<?php 
					wp_nav_menu( array(
						'theme_location' => 'mainmenu',
						'container' => 'ul',
						'menu_class' => 'navbar-nav ms-auto'
					) ) 
					?>
				</div>
			</div>
		</nav>
	</header>
