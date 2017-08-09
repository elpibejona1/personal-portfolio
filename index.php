<!DOCTYPE html>
<?php require("_assets/common.php"); ?>
<html lang="en">
<head>
<? $includeFile->includeContent(0,'topInc'); ?>
</head>
<body>
<? $includeFile->includeContent(0,'header'); ?>

<div class="screen screen--1" data-screen="1" id="home">
	<div class="nameSquare">
		<h1 class="nameSquare__heading">Jon Guiles</h1>
		<h2 class="nameSquare__tagLine">Front-End Web Developer</h2>
		<p class="nameSquare__scroll nameSquare__scroll--1"><i class="fa fa-angle-down"></i><br><i class="fa fa-angle-down"></i><br><i class="fa fa-angle-down"></i></p>
	</div>
	<div class="fullContainer">
		<video class="screen--1__video" loop muted autoplay poster="_images/screen1/poster.jpg" src="_video/screen1/intro-short.mp4" type="video/mp4" preload="metadata" playsinline>
		</video>
	</div>
</div>
<div class="screen screen--2" data-screen="2" id="skills">
	<div class="nameSquare">
		<h1 class="nameSquare__heading">Jon Guiles</h1>
		<h2 class="nameSquare__tagLine">Development Skills</h2>
		<p class="nameSquare__scroll"><i class="fa fa-angle-down"></i><br><i class="fa fa-angle-down"></i><br><i class="fa fa-angle-down"></i></p>
	</div>
	<div class="container">
		<div class="row">
			<div class="box box--skills box--skills--1 box--firstRow"></div>
			<div class="box box--skills box--skills--2 box--firstRow"></div>
			<div class="box box--skills box--skills--3 box--firstRow"></div>
			<div class="box box--skills box--skills--4 box--firstRow"></div>
		</div>
		<div class="row">
			<div class="box box--skills box--skills--5 skills--first"></div>
			<div class="box box--skills box--skills--6 box--empty"></div>
			<div class="box box--skills box--skills--7 box--empty"></div>
			<div class="box box--skills box--skills--8"></div>
		</div>
		<div class="row">
			<div class="box box--skills box--skills--9 box--lastRow"></div>
			<div class="box box--skills box--skills--10 box--lastRow"></div>
			<div class="box box--skills box--skills--11 box--lastRow">
				<span>REACT</span>
			</div>
			<div class="box box--skills box--skills--12 box--lastRow"></div>
		</div>
	</div>
</div>
<div class="screen screen--3" data-screen="3" id="work">
	<div class="nameSquare nameSquare--work">
		<h1 class="nameSquare__heading">Jon Guiles</h1>
		<h2 class="nameSquare__tagLine nameSquare__tagline--samples">Work Samples - <br>CRI&nbsp;Communications</h2>
		<p class="nameSquare__scroll"><i class="fa fa-angle-down"></i><br><i class="fa fa-angle-down"></i><br><i class="fa fa-angle-down"></i></p>
	</div>
	<div class="container">
		<div class="row">
			<div class="box box--work box--work--1 box--firstRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">General Motors 2016&nbsp;SR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Site buildout lead</li>
							<li>Responsive styling (to mobile)</li>
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www.gmsustainability.com/home.html#home">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--2 box--firstRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Regions 2016 AR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Site buildout lead</li>
							<li>Responsive styling (to tablet)</li>
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www.corporatereport.com/Regions2016AnnualReview/">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--3 box--firstRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Regions 2015 AR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Site buildout team member</li>
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www.corporatereport.com/Regions2015AnnualReview/index.php">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--4 box--firstRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Hilton 2016 AR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Responsive styling (to mobile)</li>
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www.corporatereport.com/hilton/2016/ar/">View Site</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="box box--work box--work--5" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Cox Enterprises 2016 CSR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Site buildout team member</li>
						</ul>
						<a target="_blank" href="http://coxcsrreport.com/">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--6 box--empty" onclick="void(0)">
				
			</div>
			<div class="box box--work box--work--7 box--empty" onclick="void(0)">
				
			</div>
			<div class="box box--work box--work--8" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Smucker's 2016 CRR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Site buildout team member</li>
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://corporateresponsibility.jmsmucker.com/">View Site</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="box box--work box--work--9 box--lastRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Rockwell Collins 2016 AR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www3.rockwellcollins.com/annualreport/2016/">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--10 box--lastRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Campbell's 2016 CRR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www.campbellcsr.com/">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--11 box--lastRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Mohawk 2016 AR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Responsive styling (to tablet)</li>
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://www.corporatereport.com/mohawk/2016/ar/">View Site</a>
					</div>
				</div>
			</div>
			<div class="box box--work box--work--12 box--lastRow" onclick="void(0)">
				<div class="box__info">
					<div class="box__info__content">
						<h3 class="box__info__title">Waste Management 2016&nbsp;SR</h3>
						<p class="box__info__myRole">My role:</p>
						<ul class="list">
							<li>Cross browser/device testing and debugging</li>
						</ul>
						<a target="_blank" href="http://sustainability.wm.com/index.php">View Site</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="screen screen--5" data-screen="5" id="about">
	<div class="nameSquare nameSquare--wide">
		<h1 class="nameSquare__heading">Jon Guiles</h1>
		<h2 class="nameSquare__tagLine">About / Contact</h2>
	</div>
	<div class="container">
		<div class="row row--about">
			<img src="_images/screen5/profile.jpg" alt="" class="about__profile">
			<p class="about__blurb">I am a Front-End Web Developer that specializes in using JavaScript, JQuery, AJAX, HTML5, and CSS3 to construct high-quality, responsive web content. <br><br> I am currently privileged to work as a part of the Corporate Reports Inc. Interactive Web Development Team. I also freelance for local non-profit organizations in the Atlanta Area. I enjoy learning new skills and I am always looking for ways to improve my craft. If you would like to contact me for a freelance oportunity, please don't hesitate to do so by clicking on the links below.</p>
		</div>
		<div class="row">
			<div class="about__buttonWrapper">
				<div class="about__button about__button--contact">
					<a href="#">Contact</a>
				</div>
			</div>
			<div class="about__buttonWrapper">
				<div class="about__button about__button--download">
					<a target="_blank" href="_pdf/Resume_jguiles.pdf">Download Resume</a>
				</div>
			</div>
		</div>
	</div>
	<div class="formContainer">
		<div class="contactForm" id="contactForm">
			<div class="form__close">
				<?php include('_images/screen5/close.svg'); ?>
			</div>
			<form class="form" name="contact" action="">
				<fieldset>
					<div class="formWrapper formWrapper--half formWrapper--1">
						<label class="form__label form__label--label" for="name" id="name_label">Name</label>
						<input class="form__input" placeholder="Name" type="text" name="name" id="name" value="" />
						<label class="form__label form__label--error" for="name" id="nameError">This field is required.</label>
					</div>
					<div class="formWrapper formWrapper--half formWrapper--2">
						<label class="form__label form__label--label" for="email" id="email_label">Email</label>
						<input class="form__input" placeholder="Email" class="form__input" type="text" name="email" id="email" size="30" value=""/>
						<label class="form__label form__label--error" for="email" id="emailError">This field is required.</label>
					</div>

					<div class="formWrapper formWrapper--full formWrapper--3">
						<label class="form__label form__label--label" for="message" id="messageLabel">Message:</label>
						<textarea placeholder="Message..." class="form__input" name="message" id="message" rows="7" cols="30"></textarea>
						<label class="form__label form__label--textarea form__label--error" for="message" id="messageError">This field is required.</label>
					</div>
					<input class="form__submit" type="submit" name="submit" id="submit_btn" value="Send email" />
				</fieldset>
			</form>
			<div class="form__success">
				<h2>Contact Form Submitted.</h2>
				<p>We will be in touch soon.</p>
			</div>
		</div>
	</div>
</div>

<? $includeFile->includeContent(0,'botInc'); ?>
</body>
</html>