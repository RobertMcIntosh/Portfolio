<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-48091416-1', 'rmportfolio.info');
  ga('send', 'pageview');
</script>
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/mootools.js"></script>
<script src="js/modernizr.custom.68624.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr-1.0.2/selectivizr.js"></script>
<![endif]-->
<script type="text/javascript" src="js/custom.js"></script>
<noscript>
	<link rel="stylesheet" type="text/css" href="styles/ZeroJs.css">
</noscript>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>RmPortfolio</title>
</head>

<body id="container">
	<div id="hm1" class="wbColumns">
		<div id="shortbdr">
			<div id="logo">
				<a href="?content=home"> <span id="rob">ROBERT</span><br> <span
					id="mci">McINTOSH</span> <span id="tagline">designer/developer</span>
				</a>
			</div>
			<!-- end logo -->

			<div id="nav">
				<ul>
					<li>
						<a class="navLinks" href="?content=skills">
							skills
						</a>
					</li>
					<li>
						<a class="navLinks" href="?content=projects">
							projects
						</a>
					</li>
					<li>
						<a class="navLinks" href="?content=about">
							about
						</a>
					</li>
					<li>
						<a id="contactHm" class="navLinks" href="?content=contact">
							contact
						</a>
					</li>
					<li>
						<a id="navResume" title="download" class="navLinks"
						href="assets/docs/McIntoshResume.pdf">
							resume
						</a>
					</li>
					<!--<li class="navLinks" id="infoBtn">
						<a title="design glimpse" href="#infoPopup"></a>
						-->
					</li>
				</ul>
			</div>
			<!-- end nav -->
		</div>
		<!--end shortbdr -->
	</div>
	<!-- end hm1-->

	<!-- selects which pages to display -->
	<?php
	$content = 0;
	if(isset($_GET["content"]))
		$content = $_GET["content"];
	switch($_GET['content'])
	{
		case "home": include_once ('pages/home.php'); break;
		case "skills": include_once ('pages/skills.php'); break;
		case "projects": include_once ('pages/projects.php'); break;
		case "about": include_once ('pages/about.php'); break;
		case "contact": include_once ('pages/contact.php'); break;
		default: include_once ('pages/home.php'); break;
	}
	?>

	<div id="infoPopup">
		<a href="#page" class="lbClose" id="infoClose"> x Close </a>
		<!-- selects info popups -->
		<?php
		$content = 0;
		if(isset($_GET["content"]))
			$content = $_GET["content"];
		switch($_GET['content'])
		{
			case "home": include_once ('pages/popups/homePopUp.php'); break;
			case "skills": include_once ('pages/popups/skillsPopUp.php'); break;
			case "projects": include_once ('pages/popups/projectsPopUp.php'); break;
			case "about": include_once ('pages/popups/aboutPopUp.php'); break;
			case "contact": include_once ('pages/popups/contactPopUp.php'); break;
			default: include_once ('pages/popups/homePopup.php'); break;
		}
		?>
	</div>
	<!-- end popup -->
</body>
</html>