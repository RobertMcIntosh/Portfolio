<div id="about1" class="wbColumns">
	<ul>
		<li><a href="#how">How I got here</a></li>
		<li><a href="#enjoy">What I enjoy most</a></li>
	</ul>
</div>

<div id="about2" class="wbColumns">
	<div id="intro">
		<h2>Thanks for checking out my portfolio</h2>
		<p>I'm sure you noticed it's a bit different from other portfolios. I
			want to highlight my process more than just stuff I've made.</p>

		<p>It's the design process I love, not the tools.</p>
	</div>

	<div id="how">
		<h2>Fortuitously</h2>
		<p>I stumbled upon programming while working toward a business degree.
			I conducted informational interviews with programmers, researched
			school degree descriptions and compared those findings with job
			postings.</p>

		<p>From my research I realized that there was a large gap between
			school degrees and the workforce.</p>

		<p>That led me to Metropolitan State University where I was able to
			design my own degree.</p>

		<p>I designed my degree to be comprised of the Information Computer
			Science major requirements mixed with communications and design.</p>
	</div>

	<div id="enjoy">
		<h2>Collaboration</h2>
		<h3>Testing</h3>
		<p>Testing and feedback beyond my little bubble of assumptions is
			probably the most exciting part of the design process to me. It's
			where the rubber hits the road and any and all preconceptions get
			tossed out the window.</p>

		<h3>People</h3>
		<p>To me technology is really about communication, no matter the
			medium. HTML, video, photography or what have you, it's all about
			making a connection with the user.</p>

		<h3>Design</h3>
		<p>I design and I really enjoy the process regardless of the medium.
			It's in my blood and something I couldn't stop if I tried.</p>

		<h3>Waypoint</h3>
		<p>I'm comfortable traversing between business, technology and users
			and I really thrive in a collaborative environment.</p>
	</div>
</div>
<script>
$("#about1 a").click(function(e)
{
  $("#about2 div").hide();
  $(this.hash).show();
  e.preventDefault();
});
$("#about2 div:not(#intro)").hide();  //show only initially
</script>
