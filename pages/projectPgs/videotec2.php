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
	<div id="vt1" class="wbColumns">
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
	<!-- end vt1-->

	<div id="vt2" class="wbColumns">
		<?php
		include_once ('../galleries/Videotec_Gallery.php');
		?>
	</div>

	<div id="scrollDwn">
		<a href="#vt3"> </a>
	</div>

	<div class="galleryPopUps" id="infoPopup">
		<?php
		include_once ('projectPopup.php');
		?>
	</div>

	<div id="vt3" class="wbColumns">
		<h1>Videotec2</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>Client, Project Definition</h2>
			<p>Architecture Minnesota, AMN, is the primary public outreach tool
				of American Institute of Architects, AIA. AMN created a video
				contest, VideoTec, to create more interest in their magazine.</p>

			<p>AMN needed four promotional videos for the contest to run on the
				magazine's website. The editor wanted the promos to reflect the
				theme and to serve as a source of inspiration for contest
				participants.</p>
		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div id="showMoreDeliverVideoTec">
			<h2>Deliverables</h2>
			<ul>
				<li>Promotional video</li>
			</ul>
		</div>

		<div class="showMoreLess" id="showMoreDid">
			<h2>What I did</h2>
			<ul>
				<li>Client interviews</li>
				<li>Led creation of storyboard and directed storytelling</li>
				<li>Established deliverables</li>
				<li>Photography</li>
				<li>Illustration</li>
				<li>Video</li>
				<li>Directed video shoot</li>
				<li>Composting video</li>
				<li>Video post production</li>
			</ul>
		</div>
		<a href="#showMoreDid" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>Design Glimpse</h2>
			<p>Besides the contest theme of transportation we were given a blank
				slate for the videos. I was given the lead of one of the videos and
				was lost as to what to create.</p>

			<p>So I interviewed the editor of the magazine to get more
				information about the magazine, the contest and its participants.
				From this interview, I got a much clearer view of my audience and
				the beginnings of my story.</p>

			<p>
				Then with a little inspiration from Corning's video A Day Made of
				Glass
				<!-- http://www.youtube.com/watch?v=6Cf7IL_eZ38-->
				I imagined how architects might be working in the near future.
			</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreObstacle">
			<h2>A Problem or Obstacle</h2>
			<p>This project took place early on in my involvement with the art
				collaborative IDEA and they were not familiar with storyboards or an
				agile development process. They were very much in the mindset of a
				waterfall process and it was a hard sell to get them to try this
				'new' design workflow.</p>

			<p>After seeing how well this process worked the group adopted this
				design process on all of our successive projects. I like to think
				our work got better as a result.</p>
		</div>
		<a href="#showMoreObstacle" class="showLink">More...</a>

		<div class="showMoreLess" id="showMoreOutcome">
			<h2>Project Outcome</h2>
			<p>Of the four videos we completed for the client this one ran on the
				AMN website's front page for six months, generating the largest
				amount of traffic of any content up to that point.</p>
		</div>

		<div class="showMoreLess" id="showMoreTech">
			<h2>Tech Used</h2>
			<ul>
				<li>Storyboard</li>
				<li>OminGraffle</li>
				<li>DSLR photo</li>
				<li>DSLR video</li>
				<li>Illustrator</li>
				<li>Photoshop</li>
				<li>After Effects</li>
			</ul>
		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"> </a>
		</div>
	</div>
	<!-- end #vt3 -->
	<!-- end container -->