<header role="banner">
	<!-- Skip Link -->
	<a href="#" class="header__skip">Skip to Main Content <br>(Press Enter)</a>

	<div class="container container--header">
		<div class="row row--mid row--center">
			<!-- Logo -->
			<a class="header__logo" href="<?php echo $directory;?>index.php">
				<?php include($directory . '_images/global/logo.svg'); ?>
			</a>

			<!-- Mobile Hamburger -->
			<button class="header__hamburger" aria-label="Toggle mobile menu" aria-expanded="false" aria-haspopup="true">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="25.06" viewBox="0 0 32 25.06">
					<line id="bot" x1="29.5" y1="22.56" x2="2.5" y2="22.56" style="fill: none;stroke: #fff;stroke-linecap: round;stroke-width: 5px"/>
					<line id="middle" x1="29.5" y1="12.53" x2="2.5" y2="12.53" style="fill: none;stroke: #fff;stroke-linecap: round;stroke-width: 5px"/>
					<line id="top" x1="29.5" y1="2.5" x2="2.5" y2="2.5" style="fill: none;stroke: #fff;stroke-linecap: round;stroke-width: 5px"/>
				</svg>
			</button>
				
			<!-- Primary Nav -->
			<nav class="header__primaryNav" aria-label="Primary Navigation Menu">
				<a href="">About</a>
				<a href="">Work</a>
				<a href="">Contact</a>
			</nav>

			<a class="header__download" href="">Resume</a>
		</div>
	</div>
</header>