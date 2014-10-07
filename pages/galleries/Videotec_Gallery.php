<input id="slide1" class="radioInput" name="slider" type="radio"
	checked="checked">
<label for="slide1"></label>
<input
	id="slide2" class="radioInput" name="slider" type="radio">
<label for="slide2"></label>

<div class="slides">
	<div class="carousel">
		<div id="firstItem" class="item">
			<div class="carItem">
				<ul class="lbGallery">
					<li><a href="#img1"> <img
							src="../../assets/images/VT2StoryThumb.jpg" alt="storyboard"> <span>Initial
								Storyboard</span>
					</a>
						<div class="lbPopup" id="img1">
							<img id="AMStory" src="../../assets/images/VT2Story.jpg"
								alt="storyboard" /> <a href="#img2" class="lbPrev"> &#060;
								&#160; Prev &#160; </a> <a href="#img2" class="lbNext"> &#160;
								Next &#160; &#062; </a> <a href="#page" class="lbClose"> x Close
							</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- end carItem -->
		</div>
		<!-- end item -->
		<div class="item">
			<div class="carItem">
				<ul class="lbGallery">
					<li><a href="#img2"> <img src="../../assets/images/VT2Thumb.jpg"
							alt="promo video"> <span>Promo Video</span>
					</a>
						<div class="lbPopup" id="img2">
							<video controls preload="auto" width="600" height="auto">
								<source src="../../assets/video/VTPromo.mp4" type="video/mp4"></source>
								<source src="../../assets/video/VTPromo.ogv" type="video/ogg"></source>
								<object data="../../assets/video/VTPromo.mp4" width="600"
									height="450">
									<embed src="../../assets/video/VTPromo.swf" width="600"
										height="450">		
								</object>
							</video>

							<a href="#img1" class="lbPrev"> &#060; &#160; Prev &#160; </a> <a
								href="#img1" class="lbNext"> &#160; Next &#160; &#062; </a> <a
								href="#page" class="lbClose"> x Close </a>
						</div>
					</li>
				</ul>
			</div>
			<!-- end carItem -->
		</div>
		<!-- end item -->
	</div>
	<!-- end carousel-->
</div>
<!-- end slides -->
