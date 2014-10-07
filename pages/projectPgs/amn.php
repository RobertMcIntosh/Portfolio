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
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="../../styles/ie8AndUp.css" />
<![endif]-->
<noscript>
	<link rel="stylesheet" type="text/css" href="../../styles/ZeroJs.css">
</noscript>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>RmPortfolio</title>
</head>
<body id="container">
	<div id="amn1" class="wbColumns">
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
	<!-- end amn1-->

	<div id="amn2" class="wbColumns">
		<?php
		include_once ('../galleries/AMN_Gallery.php');
		?>
	</div>

	<div id="scrollDwn">
		<a href="#amn3"></a>
	</div>

	<div class="galleryPopUps" id="infoPopup">
		<?php
		include_once ('projectPopup.php');
		?>
	</div>

	<div id="amn3" class="wbColumns">
		<h1>Architecture MN Magazine</h1>

		<div class="showMoreLess" id="showMoreClient">
			<h2>Client, project definition</h2>
			<p>Architecture Minnesota, AMN, is the primary public outreach tool
				of American Institute of Architects, AIA.</p>

			<p>AMN created a publication to help consumers understand the process
				of hiring and working with architects.</p>

			<p>I shot environmental portraits of clients and architects in the
				completed structures.</p>
		</div>
		<a href="#showMoreClient" class="showLink">More...</a>

		<div id="showMoreDeliverAMN">
			<h2>Deliverables</h2>
			<ul>
				<li>Raw image files<br>
				</li>
			</ul>
		</div>

		<div class="showMoreLess" id="showMoreGlimpse">
			<h2>Design Glimpse</h2>
			<p>If you aren't familiar, tethered shooting is the process of
				connecting a camera with a USB cable directly to a computer to view
				images as soon as they are shot.</p>

			<p>One advantage of this technique is that you're able to view images
				full size to check for image quality on a full-sized monitor.</p>

			<p>Once I heard that the editor would be on location with us, I knew
				that I would use this technique to ensure he got exactly the images
				he needed and eliminate any chance of failure.</p>
		</div>
		<a href="#showMoreGlimpse" class="showLink">More...</a>


		<div id="showMoreDidAMN">
			<h2>What I Did</h2>
			<ul>
				<li>Location photo shoots</li>
			</ul>
		</div>

		<div class="showMoreLess" id="showMoreTech">
			<h2>Tech Used</h2>
			<ul>
				<li>DSLR</li>
				<li>Studio lights</li>
				<li>Photo Mechanic</li>
				<li>Photoshop</li>
				<li>Lots-o-charm</li>
			</ul>
		</div>
		<a href="#showMoreTech" class="showLink">More...</a>

		<div id="scrollUp">
			<a href="#logo"></a>
		</div>
	</div>
	<!-- end metro23 -->
	<!-- end container -->