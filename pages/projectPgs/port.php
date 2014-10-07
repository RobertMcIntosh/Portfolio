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
	<div id="port1" class="wbColumns">
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
	<!-- end hga1-->

	<div class="galleryPopUps" id="infoPopup">
		<a href="#page" class="lbClose" id="infoClose"> x Close </a>
		<h1>Design Decisions</h1>
		<p id="popUpFooter">This page is for folks looking for a bit of
			insight to how I make decisions.</p>
	</div>

	<div id="port2" class="wbColumns">
		<h1>This Site</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>My First Idea for My Portfolio</h2>
			<p>I love interactive design, even mystery meat navigation. I figured
				I could build some unusual interactive elements into my portfolio
				site. It is my portfolio after all.</p>

			<p>I briefly considered my audience and came up with a white board
				theme. It was going to have virtual Post-it Notes that would use
				HTML drag and drop, allowing the user to drag the Post-its around on
				the white board.</p>

			<p>With the wireframe firmly in mind, I jumped straight into
				Illustrator and built a mockup.</p>

			<p>I then coded my first iteration. I liked how things were coming
				along, but something bugged me: I only briefly considered my
				audience and I was building the site for me, not my audience.</p>

			<p>This started a big research project for me, after which I
				completely redesigned my site to what you see now, a site with me
				out of the way.</p>

			<p>
				You can see a working <a href="../../firstGo/index.php"
					target="_blank">first version</a> here in a new window. Bear in
				mind it's a first iteration. The links don't work and it's pretty
				rough around the edges still, but you'll get the idea.

		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreDeliver">
			<h2>Layout and Desgin</h2>
			<p>WordPress and the responsive movement have led to some really
				uninspired layouts. Big, long, liquid rectangles that have the meta
				tags applied to them.</p>

			<p>When I see this layout I think of suburban strip malls: dull and
				indistinguishable from any other strip mall.</p>

			<p>The same principle applies to the WordPress/Responsive layout.
				When I design I want to get away from the strip mall design and move
				toward something with a more distinctive look.</p>
		</div>
		<a href="#showMoreDeliver" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreDid">
			<h2>Font Selection</h2>
			<p>I wanted fonts that showed a bit of personality, modern, clean
				with a touch of warmth. I chose CaviarDreamsRegular to fill that
				role.</p>

			<p>I like the large x size, the skewed letter e and the short
				descenders. I think these little idiosyncrasies add the touch of
				warmth I was aiming for. I assigned it as the key player: it appears
				in the nav and heading elements.</p>

			<p>For the paragraph font I choose CaslonClassico because it echoes
				the x height and descender of CaviarDreamsRegular while not being
				too similar. And CaslonClassico is a no-nonsense, just-the-facts
				vehicle I wanted to deliver my main content message.</p>
		</div>
		<a href="#showMoreDid" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>PHP and Reusing Code</h2>
			<p>Even though this is a pretty lightweight site I still have my
				backend programmer mindset: reuse code and come up with the elegant
				solution.</p>

			<p>Most of my code is modular and I use PHP switch statements and
				include_once to call the server for the bits of unique code for each
				new page.</p>

			<p>I do this because I find it much easier to make changes to the
				content or the applications structure. And I have much less code to
				write and maintain.</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreObstacle">
			<h2>Progressive Enhancement</h2>
			<p>I hand coded this site from scratch, all 5400 lines of it. Most of
				the animations are via CSS. I included JavaScript to demonstrate I can write it, but honestly I prefer to find an HTML or CSS solution.</p>

			<p>I don't see the logic in building something for the ideal user and
				then scrambling to fix it for everyone else as things break, aka
				graceful degradation.</p>

			<p>Instead, I like the idea of building something solid and then
				going up from there to the ideal user.</p>

			<p>I believe that a progressive build solves many of the problems
				that arise from a degradation build and I like to find the
				bulletproof solution first.</p>
		</div>
		<a href="#showMoreObstacle" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreOutcome">
			<h2>Comic Sans Haters</h2>
			<p>Comic Sans has its place, unfortunately it's used incorrectly and
				too often. Wait! Hear me out.</p>

			<p>I think people don't like Comic Sans because it's used incorrectly
				and too often. Well, so is the beloved Helvetica.</p>

			<p>Nothing says fascist font the way Helvetica does, and Helvetica is
				everywhere.</p>

			<p>If a designer is looking to say "restroom sign" or "IRS tax form"
				then Helvetica is the right choice.</p>

			<p>Otherwise I think Helvetica should be used like Comic Sans: once
				in a great while, under the appropriate conditions and only after
				another font can't be found to replace it. I have about a thousand
				fonts; I can find a replacement.</p>

			<p>In one of my design classes we had to create a clothing line in
				Illustrator. One of my classmates came up with footy pajamas for
				adults. He had a fun whimsical design reflected in the layout, the
				colors, everything.</p>

			<p>Except for his font, which was some scripty font more suited to a
				funeral parlor. Footy pajamas for adults is a near perfect fit for,
				yup, Comic Sans. I got booed when I suggested it.</p>
		</div>
		<a href="#showMoreOutcome" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreTech">
			<h2>Bragging Points about this Build</h2>
			<ul class="portBrag">
				<li>These were built with pure CSS:</li>
				<li class="portLi">-flip animation on the projects splash page</li>
				<li class="portLi">-the slideshow on each individual project page</li>
				<li class="portLi">-the lightbox popup</li>
				<li class="portLi">-the info popup on each page</li>
				<li class="portLi">-the navigation, the drop down and flyout</li>
			</ul>

			<ul class="portBrag">
				<li>I wrote the JS for:</li>
				<li class="portLi">-the content toggle on the about page</li>
				<li class="portLi">-the more/less toggle on the project pages so
					that "there can be only be one" open at a time</li>
			</ul>

			<p>The site is responsive, even though I believe most people viewing
				it will be at a desktop. Go ahead and resize the widow, it's fun.
				Well, not fun per se. At least I hope you have better definition of
				fun.</p>

		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"> </a>
		</div>
	</div>
	<!-- end hga3 -->
	<!-- end container -->