<!DOCTYPE html>
<?php require("_assets/common.php"); ?>
<html lang="en">
<head>
<?php # FIXME: Update '<h1>','<title>'
 $cri->includeContent(0,'topInc','','Jon Guiles, WAS'); ?>
<!-- FIXME: Update canonical tag
<link rel="canonical" href="https://www.domain.com/" />
-->
</head>
<body>
<?php $cri->includeContent(0,'header'); ?>

<main tabindex="-1">
	<div class="homeIntro" aria-hidden="true">
		<div class="homeIntro__logo">
			<?php include('_images/global/logo.svg'); ?>
		</div>
	</div>
	<div class="homeScreen homeScreen--1">
		<div class="container">
			<div class="row row--mid">
				<div class="homeScreen__content centered">
					<h1 class="heading heading--first">Welcome</h1>
					<p>My name is <span>Jon Guiles</span>.</p>
					<p>I am a <span>front-end developer</span>, <span>educator</span>, and <span>web accessibility specialist</span>.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="#about" class="homeScreen homeScreen--2">
		<div class="container">
			<div class="row">
				<div class="homeScreen__content">
					<h2 class="heading">About Me:</h2>
					<div class="flex flex--top">
						<div class="homeAboutCopy">
							<h3 class="subHeading">I am a developer.</h3>
							<p>I am privileged to work for <a href="https://www.cricommunications.com">Corporate Reports, Inc.</a>, where I get to use HTML, CSS, and JavaScript to create websites for a variety of Fortune-500 clients. I especially enjoy adding interest to our sites with the <a href="https://greensock.com/">Greensock Animation Platform</a> and working closely with graphic designers to achieve pixel-perfect results.</p>
						
							<h3 class="subHeading">I am an educator.</h3>
							<p>I have 8 years of experience teaching high school foreign language. During that time, I especially enjoyed training my fellow teachers on effective curriculum development strategies.
							<p>At Corporate Reports, I've led sessions on web accessibility best practices and a workshop on the ins and outs of the Webex messaging app. I am passionate about adult learning theory and enjoy helping teams improve through quality training.</p>
						
							<h3 class="subHeading">I am a Web Accessibility Specialist.</h3>
							<p>I received my WAS certification from the <a href="https://www.accessibilityassociation.org/">International Association of Accessibility Professionals</a> in February, 2022. At Corporate Reports, I led our development team in modifying our workflow to incorporates accessibility in all its phases. I am the goto person at our company for any web accessibility questions. </p>
						</div>
						<div class="homeAboutImage">
							<img src="_images/home/profile.jpg" alt="Jon Guiles">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="#work" class="homeScreen homeScreen--3">
		<div class="container">
			<div class="row">
				<div class="homeScreen__content">
					<h2 class="heading">Work Samples:</h2>
					<div class="sample sample--1 flex flex--center flex--mid">
						<div class="sample__copy">
							<h3 class="subHeading"><a href="https://corporatereport.com/assurant/2022/ar/">Assurant, Inc. Annual Report</a></h3>
							<p>How do you add interest to an online annual report? In this case, the design called for a variety of animation treatments to the Assurant hexagons used throughout the site. I used the Greensock Animation Platform for the intro on the home page, in the site header to expand the navigation menu, and throughout to expand the decorative hexagon graphics when they scroll into&nbsp;view.</p>
							<ul class="sample__copy__tech flex">
								<li>GSAP</li>
								<li>WCAG 2.1</li>
								<li>Responsive CSS</li>
								<li>jQuery/JavaScript</li>
							</ul>
						</div>
						<a href="https://corporatereport.com/assurant/2022/ar/" class="sample__img">
							<img src="_images/home/sample1.png" alt="Assurant 2022 Annual Report">
						</a>
					</div>
					<div class="sample sample--2 flex flex--center flex--mid flex--reverse">
						<div class="sample__copy">
							<h3 class="subHeading"><a href="https://www.lamresearch.com/esg-report/">Assurant, Inc. Annual Report</a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur inventore sapiente dignissimos. Laborum fugit aliquam repudiandae eius, inventore obcaecati tenetur voluptatibus eaque quod et illum ratione quibusdam dignissimos exercitationem placeat iusto qui molestias. Quis saepe repellendus, accusantium dolorum necessitatibus est eum. Recusandae dignissimos consequatur.</p>
							<ul class="sample__copy__tech flex">
								<li>GSAP</li>
								<li>WCAG 2.1</li>
								<li>Responsive CSS</li>
								<li>jQuery/JavaScript</li>
							</ul>
						</div>
						<a class="sample__img" href="https://www.lamresearch.com/esg-report/">
							<img src="_images/home/sample2.png" alt="Lam Research 2021 ESG Report">
						</a>
					</div>
					<!-- <div class="sample sample--3 flex flex--center flex--mid">
						<div class="sample__copy">
							<h3></h3>
							<p></p>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
						<div class="sample__img">
							<img src="" alt="">
							<ul>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div id="#contact" class="homeScreen homeScreen--4">
		<div class="container">
			<div class="row">
				<div class="homeScreen__content">
					<h2 class="heading">Contact Me:</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="homeBotContent flex flexCol flexCol--mid">
		<a href="https://www.linkedin.com/in/jonguiles/" aria-label="Check out my LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
		<a href="mailto:jonguiles@gmail.com" aria-label="Send me an email"><i class="fa-regular fa-envelope"></i></a>
		<div class="homeBotContent__line"></div>
	</div>
</main>

<?php $cri->includeContent(0,'footer'); ?>	
<?php $cri->includeContent(0,'ieSplash'); ?>
<?php $cri->includeContent(0,'botInc'); ?>
</body>
</html>