<!DOCTYPE html>
<?php require("_assets/common.php"); ?>
<html lang="en">
<head>
<? $includeFile->includeContent(0,'topInc'); ?>
</head>
<body>
<? $includeFile->includeContent(0,'header'); ?>

<div class="nameSquare">
	<h1 class="nameSquare__heading">Jon Guiles</h1>
	<h2 class="nameSquare__tagLine">Front-End Web Developer</h2>
	<div class="scroll">
		<p>SCROLL</p>
		<i class="fa fa-angle-down" aria-hidden="true"></i>
	</div>
</div>

<div class="screen screen--1 active" data-screen="1" id="home">
	<div class="fullContainer">
		<video class="screen--1__video" loop muted autoplay poster="_images/screen1/poster.jpg">
			<source src="_video/screen1/intro-short.mp4" type="video/mp4">
		</video>
	</div>
</div>
<div class="screen screen--2" data-screen="2" id="skills">
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
			<div class="box box--skills box--skills--11 box--lastRow"></div>
			<div class="box box--skills box--skills--12 box--lastRow"></div>
		</div>
	</div>
</div>
<div class="screen screen--3" data-screen="3" id="work">
	<div class="container">
		<div class="row">
			<div class="box box--work box--work--1 box--firstRow">
				<div class="box__info">
					<h3 class="box__info__title">Regions 2016 AR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Site buildout lead</li>
						<li>Responsive styles (tablet)</li>
						<li>Cross browser/device debugging</li>
					</ul>
					<a target="_blank" href="http://www.corporatereport.com/Regions2016AnnualReview/">View Site</a>
				</div>
			</div>
			<div class="box box--work box--work--2 box--firstRow">
				<div class="box__info">
					<h3 class="box__info__title">General Motors 2016 SR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Site buildout lead</li>
						<li>Responsive styles (mobile)</li>
						<li>Cross browser/device debugging</li>
					</ul>
					<a href="#">Launches May 2016</a>
				</div>
			</div>
			<div class="box box--work box--work--3 box--firstRow">
				<div class="box__info">
					<h3 class="box__info__title">Regions 2015 AR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Site buildout team</li>
						<li>Cross browser/device debugging</li>
					</ul>
					<a target="_blank" href="http://www.corporatereport.com/Regions2015AnnualReview/index.php">View Site</a>
				</div>
			</div>
			<div class="box box--work box--work--4 box--firstRow"">
				<div class="box__info">
					<h3 class="box__info__title">Hilton 2016 AR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Responsive styles (mobile)</li>
						<li>Cross browser/device debugging</li>
					</ul>
					<a target="_blank" href="http://www.corporatereport.com/hilton/2016/ar/">View Site</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="box box--work box--work--5">
				<div class="box__info">
					<h3 class="box__info__title">Cox Enterprises 2016 CSR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Site buildout team</li>
					</ul>
					<a target="_blank" href="http://coxcsrreport.com/">View Site</a>
				</div>
			</div>
			<div class="box box--work box--work--6 box--empty">
				
			</div>
			<div class="box box--work box--work--7 box--empty">
				
			</div>
			<div class="box box--work box--work--8">
				<div class="box__info">
					<h3 class="box__info__title">Smucker's 2016 CRR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Site buildout team</li>
						<li>Cross browser/device testing</li>
					</ul>
					<a target="_blank" href="http://corporateresponsibility.jmsmucker.com/">View Site</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="box box--work box--work--9 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Rockwell Collins 2016 AR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Cross browser/device testing</li>
					</ul>
					<a target="_blank" href="http://www3.rockwellcollins.com/annualreport/2016/">View Site</a>
				</div>
			</div>
			<div class="box box--work box--work--10 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Campbell's 2016 CRR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Cross browser/device debugging</li>
					</ul>
					<a target="_blank" href="http://www.campbellcsr.com/">View Site</a>
				</div>
			</div>
			<div class="box box--work box--work--11 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Mohawk 2016 AR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Responsive Styles (Tablet)</li>
						<li>Cross browser/device debugging</li>
					</ul>
					<a target="_blank" href="http://www.corporatereport.com/mohawk/2016/ar/">View Site</a>
				</div>
			</div>
			<div class="box box--work box--work--12 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Waste Management 2016 SR</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Cross browser/device debugging</li>
					</ul>
					<a target="_blank" href="http://sustainability.wm.com/index.php">View Site</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="screen screen--4" data-screen="4" id="personal">
	<div class="container">
		<div class="row">
			<div class="box box--personal box--personal--1 box--firstRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--2 box--firstRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--3 box--firstRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--4 box--firstRow"">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="box box--personal box--personal--5">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--6 box--empty">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--7 box--empty">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--8">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="box box--personal box--personal--9 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--10 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--11 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
			<div class="box box--personal box--personal--12 box--lastRow">
				<div class="box__info">
					<h3 class="box__info__title">Lorem ipsum.</h3>
					<p class="box__info__myRole">Roles:</p>
					<ul class="list">
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
						<li>Lorem ipsum dolor sit.</li>
					</ul>
					<a href="#">View Site</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="screen screen--5" data-screen="5" id="about">
	<div class="formContainer">
		<div class="form__close">
			<?php include('_images/screen5/close.svg'); ?>
		</div>
		<?php
		$action=$_REQUEST['action'];
		if ($action=="")    /* display the contact form */
		    {
		    ?>
		    <form class="form"  action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="action" value="submit">
				<div class="formWrapper formWrapper--half formWrapper--1">
					<input placeholder="Name" class="form__input" name="name" type="text" value="" size="30"/>
					<label class="form__label" for="name">Name:</label>
				</div>
				<div class="formWrapper formWrapper--half formWrapper--2">
					<input placeholder="Email" class="form__input" name="email" type="text" value="" size="30"/>
					<label class="form__label" for="email">Email:</label>
				</div>
				<div class="formWrapper formWrapper--full formWrapper--3">
					<textarea placeholder="Message..." class="form__input" name="message" rows="7" cols="30"></textarea>
					<label class="form__label form__label--textarea" for="message">Message:</label>
				</div>
				<input class="form__submit" type="submit" value="Send email"/>
		    </form>
		    <?php
		    } 
		else                /* send the submitted data */
		    {
		    $name=$_REQUEST['name'];
		    $email=$_REQUEST['email'];
		    $message=$_REQUEST['message'];
		    if (($name=="")||($email=="")||($message==""))
		        {
				echo "All fields are required, please fill <a href=\"\">the form</a> again.";
			    }
		    else{		
			    $from="From: $name<$email>\r\nReturn-path: $email";
		        $subject="Message sent using your contact form";
				mail("jonguiles@gmail.com", $subject, $message, $from);
				echo "Email sent!";
			    }
		    }  
		?>
	</div>
	<div class="container">
		<div class="row row--about">
			<img src="_images/screen5/profile.jpg" alt="" class="about__profile">
			<p class="about__blurb">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora odit, impedit similique saepe earum, repudiandae voluptatum dolore dolorem vero, esse omnis dicta eaque iste est labore quos odio. Similique illum officia unde, voluptate quam possimus atque dolore nobis in. Numquam laborum nostrum blanditiis distinctio a sint et, laboriosam. Nisi mollitia, quis molestias alias magni odit adipisci quibusdam maxime voluptatem, autem omnis iste labore aliquid accusamus placeat nihil assumenda asperiores repellat dignissimos ab corporis maiores repudiandae consequuntur! Id eligendi amet, iure repudiandae inventore unde debitis maiores voluptate dolor nam voluptatum aliquam veritatis molestias cumque sequi, optio ab eos, consequuntur. Sapiente, ea magni nostrum. Id placeat distinctio nulla obcaecati quidem tempora, numquam corporis qui. Porro, iste maiores sunt quo ullam sint quibusdam rerum labore aut minima nobis fugiat libero ipsa non dolore temporibus nesciunt voluptatibus quasi quaerat! Neque quis quisquam accusamus amet velit asperiores ea, inventore officiis quo beatae voluptatum a odit?</p>
		</div>
		<div class="row">
			<div class="about__buttonWrapper">
				<div class="about__button about__button--contact">
					<a href="#">Contact</a>
				</div>
			</div>
			<div class="about__buttonWrapper">
				<div class="about__button about__button--download">
					<a href="#">Download Resume</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="screen screen--6" data-screen="6">
	<div class="container">
		<div class="row row--form">
			<?php
			$action=$_REQUEST['action'];
			if ($action=="")    /* display the contact form */
			    {
			    ?>
			    <form class="form"  action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="action" value="submit">
					<div class="formWrapper formWrapper--half formWrapper--1">
						<input placeholder="Name" class="form__input" name="name" type="text" value="" size="30"/>
						<label class="form__label" for="name">Name:</label>
					</div>
					<div class="formWrapper formWrapper--half formWrapper--2">
						<input placeholder="Email" class="form__input" name="email" type="text" value="" size="30"/>
						<label class="form__label" for="email">Email:</label>
					</div>
					<div class="formWrapper formWrapper--full formWrapper--3">
						<textarea placeholder="Message..." class="form__input" name="message" rows="7" cols="30"></textarea>
						<label class="form__label form__label--textarea" for="message">Message:</label>
					</div>
					<input class="form__submit" type="submit" value="Send email"/>
			    </form>
			    <?php
			    } 
			else                /* send the submitted data */
			    {
			    $name=$_REQUEST['name'];
			    $email=$_REQUEST['email'];
			    $message=$_REQUEST['message'];
			    if (($name=="")||($email=="")||($message==""))
			        {
					echo "All fields are required, please fill <a href=\"\">the form</a> again.";
				    }
			    else{		
				    $from="From: $name<$email>\r\nReturn-path: $email";
			        $subject="Message sent using your contact form";
					mail("jonguiles@gmail.com", $subject, $message, $from);
					echo "Email sent!";
				    }
			    }  
			?>
		</div>
	</div>
</div> -->

<? $includeFile->includeContent(0,'botInc'); ?>
</body>
</html>