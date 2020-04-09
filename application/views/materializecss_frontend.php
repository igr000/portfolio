<!-------------------------------------------------------------------------
-- Materializecss_frontend.php contains the content of the website. -------
---------------------------------------------------------------------------
-- Author: Irene Gayle Roque ----------------------------------------------
-------------------------------------------------------------------------->
<!-- Header - Home ----------------------------->
<header id="home">
	<!-- Navigation Bar ------------------------>
	<nav>
		<div class="nav-wrapper black lighten-5">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#work">Work Experience</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
			</ul>
		</div>
	</nav>
	<!-- Navigation Bar End -------------------->

	<!-- Header Image -------------------------->
	<img src="<?php echo base_url('assets/images/header.jpg'); ?>">
	
	<!-- Texts and button in front of header image ---------------->
	<div class="header container">	
		<div class="row">
			<div class="col s5 push-s7">
				<h1 class="white-text left-align" id="header-text1">Hi, I am Gayle!</h1>
				<h5 class="white-text left-align" id="header-text2">Web Developer and Video Editor</h5>
				<button class="white pulse"><a href="#front-end-footer">Let's get in touch</a></button>
				<div class="contact container">
					<div class="row">
						<div class="col m4 left-align">
					        <a href="http://www.github.com/igr000"><img src="<?php echo base_url('assets/images/github-logo.png'); ?>" class="responsive-img circle"></a>
					    </div>
					    <div class="col m4 left-align">
					        <a href="https://www.linkedin.com/in/irene-gayle-r-9240aa134/"><img src="<?php echo base_url('assets/images/linkedin-logo.png'); ?>" class="responsive-img circle"></a>
					    </div>
					    <div class="col m4 left-align">
					        <a href="https://www.behance.net/irenegayleroque"><img src="<?php echo base_url('assets/images/behance.png'); ?>" class="responsive-img circle"></a>
					    </div>						
					</div>
				</div>
			</div>		
		</div>		
	</div>
	<!--End of Texts and button in front of header image ----------->
</header>
<!-- Header - Home End ------------------------->

<!-- Main Content ------------------------------>
<main>
	<!-- Work Experience Section ---------------------->
	<section id="work">
		<h3 class="center-align" id="work-title">Work Experience</h3>
		<div class="work container">
			<div class="row">
				<div class="col s4 right-align">
					<div id="left-col-space">	    
					</div>
					<div class="left-col-work">
						<h6>July 2019 - October 2019</h6>
					    <h5>WEB DEVELOPER INTERN</h5>
					    <h6>DevKinetics</h6>					    
					</div>
					<div id="left-col-space2">	    
					</div>
					<div class="left-col-work">
						<h6>October 2018 - October 2019</h6>
					    <h5>GRAPHIC DESIGNER/VIDEO EDITOR</h5>
					    <h6>Freelance</h6>					    
					</div>
				</div>
				<div class="col s4 center-align" id="divider">
					<img src="<?php echo base_url('assets/images/divider.png')?>">	
				</div>
				<div class="col s4 left-align">
					<div class="right-col-work">
						<h6>October 2019 - Present</h6>
					    <h5>WORDPRESS DEVELOPER</h5>
					    <h6>Color Your Life</h6>
					</div>	
					<div id="right-col-space">	    
					</div>
					<div class="right-col-work">
						<h6>March 2019 - March 2019</h6>
					    <h5>VIDEO EDITOR</h5>
					    <h6>Scale Your Empire/Build Live Give</h6>
					</div>
					<div id="right-col-space2">	    
					</div>
					<div class="right-col-work">
						<h6>June 2018 - October 2018</h6>
					    <h5>TRANSCRIPTIONIST</h5>
					    <h6>QA World</h6>
					</div>	
				</div>				
			</div>	
		</div>	
	</section>
	<!-- Work Experience Section End ----------------------->

    <!-- Portfolio Section --------------------------------->
	<section id="portfolio" class="grey darken-4">
		<div class="portfolio container">
			<div class="row">
				<div class="col s12">
					<h3 class="white-text center-align" id="portfolio-title">Portfolio</h3>
					
                    <!-- Carousel of portfolio ---------------------------------->
					<div id="front-end-carousel" class="carousel carousel-slider">
					    <a href="https://www.behance.net/irenegayleroque" class="carousel-item"><img src="<?php echo base_url('assets/images/portfolio/banner.jpg'); ?>" height="560" width="315"></a>
						<a href="https://www.behance.net/irenegayleroque" class="carousel-item"><img src="<?php echo base_url('assets/images/portfolio/newlogo6.jpg'); ?>" height="560" width="315"></a>
						<a href="https://www.behance.net/irenegayleroque" class="carousel-item"><img src="<?php echo base_url('assets/images/portfolio/shirt-front.jpg'); ?>"  height="560" width="315"></a>
						<a href="https://www.behance.net/irenegayleroque" class="carousel-item"><img src="<?php echo base_url('assets/images/portfolio/shirt-back.jpg'); ?>"  height="560" width="315"></a>
						<a href="https://www.behance.net/irenegayleroque" class="carousel-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/9u_mB_2Z9EM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<a href="https://www.behance.net/irenegayleroque" class="carousel-item"><iframe width="560" height="315" src="https://www.youtube.com/embed/tD1CQNFOUAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>					
					</div>
					<!-- End of Carousel of portfolio ---------------------------->

					<!-- Button linked to Behance account ---------->
					<div class="col s12 center-align"><button class="white pulse center-align"><a href="https://www.behance.net/irenegayleroque">View all in Behance</a></button></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio Section End ----------------------------->

</main>
<!-- Main Content End -------------------------->

<!-- Footer ------------------------------------>
<footer id="front-end-footer" class="grey darken-1">
	<div class="footer container">
		<div class="row">
			<!-- Form to get info from potential clients ---------->
			<div class="col s12 center-align">
				<form>
					<h3 class="white-text">Need a Web Developer or Video Editor?</h3>
				    <h5 class="white-text">Hire Me Now! Let's Get In Touch!</h5>
				    <input type="text" name="subject" placeholder="Web Developer or Video Editor">
					<input type="email" name="email" placeholder="Enter your email"><br>
					<input type="text" name="description" placeholder="Enter the description of the type of job you'd like to be done."><br>
					<button class="white center-align" style="font-size: 20px;">Submit</button>
				</form>
			</div>
			<!-- End of Form to get info from potential clients ---->

			<!-- Logos with links ------------------>
			<div class="col s3 push-s5 center-align">
				<div class="contact container">
					<div class="row">
						<div class="col m4">
					        <a href="http://www.github.com/igr000"><img src="<?php echo base_url('assets/images/github-logo.png'); ?>" class="responsive-img circle"></a>
					    </div>
					    <div class="col m4">
					        <a href="https://www.linkedin.com/in/irene-gayle-r-9240aa134/"><img src="<?php echo base_url('assets/images/linkedin-logo.png'); ?>" class="responsive-img circle"></a>
					    </div>
					    <div class="col m4">
					        <a href="https://www.behance.net/irenegayleroque"><img src="<?php echo base_url('assets/images/behance.png'); ?>" class="responsive-img circle"></a>
					    </div>	
					</div>
				</div>				
			</div>
			<!-- End of Logos with links ------------>

            <!-- Copyright ----------------------------->
			<div class="col s12 center-align white-text">
				© Copyright 2020 | Irene Gayle Roque
				<br>
				<!-- Goes back to header -------->
				<a href="#home">Go Back to Top</a>				
			</div>
			<!-- Copyright End ------------------------->
		</div>
	</div>
</footer>
<!-- Footer End ---------------------------------------->