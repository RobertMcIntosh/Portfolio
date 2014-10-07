<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48091416-1', 'rmportfolio.info');
  ga('send', 'pageview');

</script>
<link rel="stylesheet" type="text/css" href="../../styles/styles.css">
<script type="text/javascript" src="../../js/mootools.js"></script>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/selectivizr-1.0.2/selectivizr.js"></script>
	<![endif]-->
<noscript>
	<link rel="stylesheet" type="text/css" href="../../styles/ZeroJs.css">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>RmPortfolio</title>
</head>
<body id="container">
	<div id="hc1" class="wbColumns">
		<div id="shortbdr">
			<div id="logo">
				<?php
				include_once ('logo.php');
				?>
			</div>
			<!-- end logo -->

			<div id="nav">
				<?php
				include_once ('nav.php');
				?>
			</div>
			<!-- end nav -->
		</div>
		<!--end shortbdr -->
	</div>
	<!-- end hc1-->

	<div id="hc2" class="wbColumns">
		<?php
		include_once ('../galleries/HC_Gallery.php');
		?>
	</div>

	<div id="scrollDwn">
		<a href="#hc3"> </a>
	</div>

	<div class="galleryPopUps" id="infoPopup">
		<?php
		include_once ('projectPopup.php');
		?>
	</div>

	<div id="hc3" class="wbColumns">
		<h1>Hearth Connection Co-pilot</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>Client, project definition</h2>
			<p>Hearth Connection is a nonprofit that serves to end long-term
				homelessness in Minnesota. Co-Pilot is Hearth Connection's data
				collection system.</p>

			<p>Hearth Connection works with other nonprofits, government agencies
				and health care entities to offer solutions to homelessness.</p>
		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div id="showMoreDeliverHC">
			<h2>Deliverables</h2>
			<ul>
				<li>Documentation of installation and debugging</li>
				<li>Feedback on deployment specifications</li>
			</ul>
		</div>

		<div id="showMoreDidHC">
			<h2>What I did</h2>
			<ul>
				<li>Deploy development environment</li>
				<li>Test software</li>
			</ul>
		</div>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>Design Glimpse</h2>
			<p>Brute force coding to me is: "Does this work? No. Does this work?
				No? Does this work? Yes?" and so on down the line until a solution
				is found. There are times in a project when I end up resorting to
				this development technique.</p>

			<p>It is not elegant, it feels very reactive, and very much like
				shooting in the dark. But it happens frequently enough for me to
				believe that this technique is part of the process and that I'm not
				the only one who is reduced to this sometimes. And in this project,
				I did this a lot.</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreObstacle">
			<h2>A Problem or Obstacle</h2>
			<p>The main problem was my lack of knowledge. This is where I
				realized that school had prepared me to be an academic, not a
				programmer.</p>

			<p>The lead developer is a friend of mine and he had asked me if I
				wanted tackle the project. I had my misgivings about being able to
				do the work and when I saw just how ignorant I was about the whole
				process all my fears came to light.</p>

			<p>After the initial panic, I contacted the project lead to let him
				know how I felt about having taken the job. He reassured me that it
				was all within my ability, that he'd be there to help and that I
				just needed to keep communicating with him.</p>

			<p>I often had a difficult time discerning if an error was in the
				documentation, in the software or in me. I was surprised at how
				infrequently the error was with me.</p>
		</div>
		<a href="#showMoreObstacle" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreOutcome">
			<h2>Project Outcome</h2>
			<p>The project took a bit longer than we scheduled because I had to
				learn on the fly. But the deliverables were handed in, I didn't lose
				one of my friends and the client was happy with my work.</p>

			<p>The whole experience was very much like having an uncle throw you
				off the dock to learn how to swim. I'm just happy I didn't drown.</p>
		</div>
		<a href="#showMoreOutcome" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreTech">
			<h2>Tech Used</h2>
			<ul>
				<li>Eclipse</li>
				<li>WAMP</li>
				<li>Tomcat</li>
				<li>VirtualBox</li>
				<li>Subclipse</li>
				<li>Fetch</li>
				<li>VirtualBox</li>
				<li>JAVA</li>
				<li>HTML/CSS</li>
				<li>PHP</li>
				<li>XML</li>
				<li>Javascript</li>
			</ul>
		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"> </a>
		</div>
	</div>
	<!-- end hc3 -->
	<!-- end container -->