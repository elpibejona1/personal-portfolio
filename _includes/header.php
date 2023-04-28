<header role="banner">
	<!-- Skip Link -->
	<a href="#" class="header__skip">Skip to Main Content <br>(Press Enter)</a>

	<div class="container container--header">
		<div class="row row--mid row--center">
			<!-- Logo -->
			<a class="header__logo" href="index.php">
				<?php include($directory . '_images/logo.svg'); ?>
			</a>

			<!-- Mobile Hamburger -->
			<button class="header__hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-haspopup="true">
				<?php include('_images/hamburger.svg'); ?>
			</button>
				
			<div class="header__menu">
				<!-- Primary Nav -->
				<nav class="header__primaryNav" aria-label="Navigation Menu">
					<a class="header__primaryNav__link" href="#about">About</a>
					<a class="header__primaryNav__link" href="#work">Work</a>
					<a class="header__primaryNav__link" href="#contact">Contact</a>
				</nav>
				<!-- <a class="header__download" aria-label="View Resume - Opens PDF in a new window" href="">Resume</a> -->
			</div>
		</div>
	</div>
</header>