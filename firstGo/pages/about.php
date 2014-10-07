<div id="blueHorz">
	<h2 id="stories">Stories</h2>
	<h2 id="about">about</h2>
	<h2>learn a bit about him</h2>
</div>

<div id="aboutBlueVert1" class="wbColumns">
	<a href="#intro">about</a><br> <br> 
	<a href="#how">how I got here</a><br><br> 
	<a href="#enjoy">what I enjoy most</a>
</div>

<div id="aboutBlueVert2" class="wbColumns">
	<div id="intro">
		<p>Thanks for checking out my portfolio. IÕm usre you noticed it's a
			bit different from other portfolios, I want to highlight my process
			more than just stuff I've made. It's the design process I love, not
			the tools. If you're looking for a specialist who only does 'x' I'm
			probably not your guy. I'm a hybrid who finds the right tool for the
			job at hand. I am not the hammer that only sees nails. Sometimes a
			hammer will work, but sometimes the nail needs a saw, or pliers, or a
			catspaw. The right tool depends on the job and I love my toolbox, not
			just one tool.</p>
	</div>
	
	<div id="how">
		<p>How I got here I stumbled upon programming while earning my
			business degree I knew I wanted to be programmer. But I didn't know
			what that really meant. So, I conducted informational interviews with
			programmers, researched school degree descriptions and compared those
			findings with job postings. From my research I realized that there
			was a large gap between school degrees and the work force. That led
			me to Metropolitan State University to design my own degree. Yup,
			even designed my own degree. Based on my analysis and the things I
			enjoy, I designed my degree to be comprised of the ICS major
			requirements mixed with communication and design. I've been sneaking
			out of the ivy tower for few years now putting my new found knowledge
			to use outside academia. As a result I've gained experience: hand
			coding programing languages and scripts visual communication in a
			variety of mediums interviewing stakeholders establish business
			objectives creation of personas use case scenarios creation of mood
			board performing quantitative and qualitative research storyboarding
			prototyping usability testing interaction design wireframing writing
			functional specifications handing in deliverables</p>
	</div>
	
	<div id="enjoy">
		<h2>What I enjoy most</h2>
		<p>I design and I really enjoy the process regardless of the medium.
			I've voided a lot of warranties from my phone to my camera flashes.

			Whenever I come across something that isn't quite right or that I
			could make do something more, I have a knack for looking at the root
			of the issue so I can discover how to make it better or simply
			something more. I do some research and then I crack 'er open and see
			what I can do. Testing and feedback beyond my little bubble of
			assumptions is probably the most exciting part of the design process
			to me. It's where the rubber hits the road and any and all
			preconceptions get tossed out the window. The promise of success or
			the crush of failure are all rolled up in some of those moments. BTW,
			I enjoy the failures, it's were I really learn about myself and how I
			work. I love sitting with a client at the very beginning of a
			project, collaborating, doing research and presenting ideas and
			discovering what it is that they envision for a project. I know it's
			kinda odd for someone who for fun hacked a Kinect to be a UI for a
			Mac; ya know, a programmer talking and making eye contact. I enjoy
			sitting on way point between business, technology and users and I
			really thrive in a collaborative environment. I'd really like to be
			part of a team where I can be apart of the whole process.</p>
	</div>
</div>

<script>
$("#aboutBlueVert1 a").click(function(e) 
{
  $("#aboutBlueVert2 div").hide();
  $(this.hash).show();
  e.preventDefault();
});
$("#aboutBlueVert2 div:not(#intro)").hide();  //show only london initially
</script>


