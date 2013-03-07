<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="stylesheet" href="css/supersized.css" type="text/css" />
        <!-- Pulled from http://code.google.com/p/html5shiv/ -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
		<script src="js/jquery.js">
		</script>
		<script src="js/js.js">
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js">
		</script>
		<script type="text/javascript" src="js/supersized.3.2.7.js">
		</script>
		<script type="text/javascript" src="js/supersized.3.2.7.min.js">
		</script>
		<script type="text/javascript">
			
 
         
			jQuery(function($){
				
				$.supersized({
				
					// Size & Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components
					slides 					:  	[			// Slideshow Images
														{image : 'images/room.png', title : 'Image Credit: Maria Kazvan'},
															// Slideshow Images
														{image : 'images/tree-hme.png', title : 'Image Credit: Maria Kazvan'}
												]
					
					
				});
		    });
           
		    //document.getElementById('curve').style.width = document.width;
		
		</script>
       
	</head>
	<body>
		<!-- main container -->
		<div class='wrapper'>
			<!-- header -->
			<header class='header'>
				<img id="curve" src="images/home_02.png" style=" width: 100%;" />
				<p class="top-txt">
					Breathtaking sea views... ... Right in town
				</p>
				<nav id="outer-nav">
					<nav id="top-nav">
						<ul>
							<li>
								<a href="#">ACCOMMODATION</a>
							</li>
							<li>
								<a href="#">LOCATION</a>
							</li>
							<li>
								<a href="#">THINGS TO DO</a>
							</li>
							<li>
								<a href="#">ABOUT</a>
							</li>
							<li>
								<a href="#">GALLERY</a>
							</li>
							<li>
								<a href="#">CONTACT</a>
							</li>
						</ul>
					</nav>
					<input type="button" id="bookbtn" value="BOOK NOW"/>
				</nav>
			</header>
			<!-- mid container - includes main content area and right sidebar -->
			<section id="mid_container">
				<aside id="side-mod">
					 <jdoc:include type="modules" name="position-7" style="xhtml" />
				</aside>
                 <article id="mid-comp">
        <jdoc:include type="component" />
        </article>
			</section>
			<!-- footer -->
			<footer class='footer'>
				<div class="footer-logos">
					<img src="images/foot-logo1.png"/>
					<img src="images/foot-logo2.png"/>
					<img src="images/foot-logo3.png"/>
				</div>
				<nav id="footer-nav">
					<ul>
						<li>
							<a href="#"><img src="images/fb.png" /></a>
						</li>
						<li>
							<a href="#">Contact|</a>
						</li>
						<li>
							<a href="#">Privacy Policy|</a>
						</li>
						<li>
							<a href="#">Booking Terms</a>
						</li>
					</ul>
				</nav>
			</footer>
		</div>
	</body>

</html>