<!DOCTYPE html>
<html lang="en">
<head>
<?php include('_includes/topInc.php'); ?>
<link rel="canonical" href="https://www.jonguiles.com/" />
</head>
<body>
<?php include('_includes/header.php'); ?>

<main tabindex="-1">
	<div class="homeIntro" aria-hidden="true">
		<div class="homeIntro__logo">
			<?php include('_images/logo.svg'); ?>
		</div>
	</div>
	<div class="homeScreen homeScreen--1">
		<div class="container">
			<div class="row row--mid">
				<div class="homeScreen__content homeScreen__content--centered">
					<h1 class="heading heading--first">Welcome</h1>
					<p>My name is <span>Jon Guiles</span>.</p>
					<p>I am a <span>front-end developer</span>, <span>educator</span>, and <span>web accessibility specialist</span>.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="homeScreen homeScreen--2 homeScreen--about" data-id="#about">
		<div class="container">
			<div class="row">
				<div class="homeScreen__content">
					<h2 tabindex="-1" class="heading heading--about">About Me:</h2>
					<div class="homeScreen--2__flex">
						<div class="homeAboutImage">
							<img src="_images/profile.jpg" alt="Jon Guiles">
						</div>
						<div class="homeAboutCopy">
							<div class="homeAboutCopy__section">
								<h3 class="subHeading">I am a developer.</h3>
								<p>I am privileged to work for <a href="https://www.cricommunications.com">Corporate Reports, Inc.</a>, where I get to use HTML, CSS, and JavaScript to create shareholder communication websites for Fortune-500 clients. I especially enjoy adding interest to our sites with the <a href="https://greensock.com/">Greensock Animation Platform</a> and working closely with graphic designers to achieve pixel-perfect results.</p>
							</div>
						
							<div class="homeAboutCopy__section">
								<h3 class="subHeading">I am an educator.</h3>
								<p>I have 8 years of experience teaching high school foreign language. During that time, I enjoyed training fellow teachers on effective curriculum development strategies.
								<p>At Corporate Reports, I've led sessions on web accessibility best practices and a workshop on the Webex messaging app. I am passionate about adult learning theory and enjoy helping teams improve through quality training.</p>
							</div>
						
							<div class="homeAboutCopy__section">
								<h3 class="subHeading">I am a Web Accessibility Specialist.</h3>
								<p>I received my WAS certification from the <a href="https://www.accessibilityassociation.org/">International Association of Accessibility Professionals</a> 2022. At Corporate Reports, I led our development team in modifying our workflow to incorporate accessibility in all its phases. I am the goto person at our company for any web accessibility questions. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="homeScreen homeScreen--3 homeScreen--work" data-id="#work">
		<div class="container">
			<div class="row">
				<div class="homeScreen__content">
					<h2 tabindex="-1" class="heading heading--work">Work Samples:</h2>
					<div class="sample sample--1 sample--odd">
						<div class="sample__img sample__img--odd">
							<img src="_images/sample1.png" alt="Assurant 2022 Annual Report">
						</div>
						<div class="sample__copy sample__copy--odd">
							<h3 class="subHeading">Assurant, Inc. Annual Report</h3>
							<p>How do you add interest to an annual report? I used the Greensock Animation Platform to animate the imagery on the home page, to expand the navigation menu, and throughout to add interest to the hexagon graphics.</p>
							<p class="sample__copy__reportLink"><a href="https://corporatereport.com/assurant/2022/ar/">View the Assurant report</a></p>
							<ul class="sample__copy__tech sample__copy__tech--odd">
								<li><strong>GSAP</strong></li>
								<li>WCAG 2.1</li>
								<li>Responsive CSS</li>
								<li>jQuery / JavaScript</li>
							</ul>
						</div>
					</div>
					<div class="sample sample--2 sample--even">
						<div class="sample__img sample__img--even">
							<img src="_images/sample2.png" alt="Lam Research 2021 ESG Report">
						</div>
						<div class="sample__copy sample__copy--even">
							<h3 class="subHeading">Lam Research ESG Report</h3>
							<p>Making an ESG report accessible involves many facets. To accomplish this, I followed the <a href="https://www.w3.org/TR/WCAG21/">WCAG 2.1</a> guidelines. This includes using semantic HTML, <a href="https://www.w3.org/WAI/standards-guidelines/aria/">WAI-ARIA</a> to tag elements for screen readers, and adding meaningful alt text for simple and complex imagery. I then tested the site using automated browser tools, screen readers, and zooming in the browser.</p>
							<p class="sample__copy__reportLink"><a href="https://www.lamresearch.com/esg-report/">View the Lam Research report</a></p>
							<ul class="sample__copy__tech sample__copy__tech--even">
								<li>GSAP</li>
								<li><strong>WCAG 2.1</strong></li>
								<li>Responsive CSS</li>
								<li>jQuery / JavaScript</li>
							</ul>
						</div>
					</div>
					<div class="sample sample--3 sample--odd">
						<div class="sample__img sample__img--odd">
							<img src="_images/sample3.png" alt="Hilton 2020 Annual Report">
						</div>
						<div class="sample__copy sample__copy--odd">
							<h3 class="subHeading">Web Accessibility Training</h3>
							<p>For developers that were unfamiliar with WCAG 2.1 requirements, I developed a four hour lesson on accessibility best practices and on the implications they should have on our process. This presentation was a springboard for the creation of a development plan that incorporated accessibility in all of its&nbsp;phases.</p>
							<p class="sample__copy__reportLink"><a href="https://docs.google.com/presentation/d/e/2PACX-1vRoRsZ-gYB1LXy5W-ED9Em-5RhURRl3FjiUwdNsPRsTdU3xftJCQ-Ol7RHnlkuW7w/pub?start=false&loop=false&delayms=3000">View the training slides</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="homeScreen homeScreen--4 homeScreen--contact" data-id="#contact">
		<div class="container">
			<div class="row row--mid row--center">
				<div class="homeScreen__content">
					<h2 tabindex="-1" class="heading heading--contact">Contact Me:</h2>
					<p>Want to discuss web development, accessibility, or curriculum design? Feel free to connect with me through <a href="https://www.linkedin.com/in/jonguiles/">my LinkedIn profile</a> or <a href="mailto:jonguiles@gmail.com">send me an email</a>.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="homeBotContent">
		<a href="https://www.linkedin.com/in/jonguiles/" aria-label="Check out my LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
		<a href="mailto:jonguiles@gmail.com" aria-label="Send me an email"><i class="fa-regular fa-envelope"></i></a>
		<div class="homeBotContent__line"></div>
	</div>
</main>

<?php include('_includes/botInc.php'); ?>
</body>
</html>