<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "sankalp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database );

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";
	
	$query = 'Select * from contact';
	$result = mysqli_query($conn,$query);
		while($row=mysqli_fetch_array($result)){
			//print_r($row);
		}
		if(isset($_POST['submit']))
		{
			//echo($_POST['name']."<br/>\n");
			//echo($_POST['email']."<br/>\n");
			//echo($_POST['comment']."<br/>\n");
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comment = $_POST['comment'];
			
			//echo $name;
			//echo $email;
			//echo $comment;
			
			$sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$comment')";
			$result = mysqli_query($conn,$sql);
			if($result){
				echo "<script>alert('Data Inserted Sucessfully!')</script>";
			}
			else{
				echo "<script>alert('Somthing Went Wrong!')</script>";

			}
		}
?>
<html>
	<head>
		<title>Sankalp Class</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Coaching Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--Google Fonts-->
		<link href="//fonts.googleapis.com/css?family=Hind:400,300" rel="stylesheet" type="text/css">
		<link href="//fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
		<!--google fonts-->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/val.js"></script>
			<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
		</script>
		<!-- //end-smoth-scrolling -->
		<!-- animated-css -->
				<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
				<script src="js/wow.min.js"></script>
				<script>
				 new WOW().init();
				</script>
		<!-- animated-css -->

		<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/bootstrap.min.js"></script>

		

	</head>

	<body>
		
<!--banner start here-->
	<div class="banner" id="home">
	<div class="container">
		<div class="banner-main wow bounceInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInDown;">
	        <h1>|| Sankalp Classes || </h1>
	         <span class="bann-line"> </span>
	         <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
	           <a href="#about" class="scroll"><span class="mover"> </span></a>
		</div>
	</div>
</div>
<!--banner start here-->
<!--header start here-->
	<!-- NAVBAR
		================================================== -->
<div class="header fixed">
	<div class="fixed-header">	

		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar navbar-inverse navbar-static-top">
		             <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarshow" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			              <div class="logo wow slideInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInLeft;">
			                    <a class="navbar-brand" href="index.html"><img src="images/sankalp2.jpg"></a>
			              </div>
			          </div>
		            <div id="navbarshow" class="navbar-collapse collapse">
		            <nav class="cl-effect-1">
		              <ul class="nav navbar-nav">
		               <li><a href="#home" class="active scroll">Home</a></li>
		                <li><a href="#about" class="scroll">About</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#portfolio" class="scroll">Portfolio</a></li>
						<li><a href="#contact" class="scroll">Contact</a></li>						
		              </ul>
		            </nav>
		            <!-- script-for sticky-nav -->
		<script> 
		$(document).ready(function() {
			 var navoffeset=$(".header").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header").addClass("fixed");
				}else{
					$(".header").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->

		            </div> 
		            <div class="clearfix"> </div>
		             </nav>
		          </div>
		           <div class="clearfix"> </div>
		    </div>
	 </div>
</div>
<!--header end here-->
<!--about start here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			<div class="about-top wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
				<h2>About</h2>
				<span class="heading-line"> </span>
				<p>Nemo enim ipsam voluptatem quia.</p>
			</div>
			<div class="about-bottom">
				<div class="col-md-6 about-left wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
					<h4>Our Success</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
					<div class="about-grid">
						<div class="about-icon">
							<a href="#" class="#"> <span class="learn"> </span> </a>
						</div>
						<div class="about-text">
							<h5>Nor again is there anyone</h5>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
						</div>
					   <div class="clearfix"> </div>
					</div>
					<div class="about-grid">
						<div class="about-icon">
							<a href="#" class="#"> <span class="degr"> </span> </a>
						</div>
						<div class="about-text">
							<h5>Nor again is there anyone</h5>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
						</div>
					   <div class="clearfix"> </div>
					</div>
					<div class="about-grid">
						<div class="about-icon">
							<a href="#" class="#">  <span class="ab-badge"> </span> </a>
						</div>
						<div class="about-text">
							<h5>Nor again is there anyone</h5>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
						</div>
					   <div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 about-right wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
					<img src="images/ab.jpg" class="img-responsive" alt="">
				</div>
			   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--about end here-->
<!---728x90--->
<!--team start here-->
<div class="team">
	<div class="container">
		<div class="team-main">
			<div class="team-top wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
				<h3>Our Team</h3>
				<span class="heading-line"> </span>
				<p>Nemo enim ipsam voluptatem quia.</p>
			</div>
			<div class="team-bottom wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
			  <div class="col-md-3 team-grids">
			    <!-- normal -->
			    <div class="ih-item circle effect5"><a href="#">
			        <div class="img" style="margin-left: -30px;"><img src="images/t1.jpg" alt="img" class="img-responsive"></div>
			        <div class="info">
			          <div class="info-back">
			            <h3>Malorum</h3>		          
			          </div>			          
			        </div></a></div>
			        <div class="team-bottom">
			        	  <p>On the other hand, we denounce with righteous indignation.</p>
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
			        </div>
			        
			    <!-- end normal -->
			   </div>
			  <div class="col-md-3 team-grids">
			   <!-- normal -->
			    <div class="ih-item circle effect5"><a href="#">
			        <div class="img" style="margin-left: -30px;"><img src="images/t2.jpg" alt="img" class="img-responsive"></div>
			        <div class="info">
			          <div class="info-back">
			            <h3>Bonorum</h3>		           	            
			          </div>
			        </div></a></div>
			        <div class="team-bottom">
			        	  <p>On the other hand, we denounce with righteous indignation.</p>
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
			        </div>
			    <!-- end normal -->		 
			  </div>
			  <div class="col-md-3 team-grids">
			    <!-- normal -->
			    <div class="ih-item circle effect5"><a href="#">
			        <div class="img" style="margin-left: -30px;"><img src="images/t3.jpg" alt="img" class="img-responsive"></div>
			        <div class="info">
			          <div class="info-back">
			            <h3>Finibus</h3>			       
			          </div>
			        </div></a></div>
			        <div class="team-bottom">
			        	  <p>On the other hand, we denounce with righteous indignation.</p>
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
			        </div>
			    <!-- end normal -->
			  </div>
			   <div class="col-md-3 team-grids">
			    <!-- normal -->
			    <div class="ih-item circle effect5"><a href="#">
			        <div class="img" style="margin-left: -30px;"><img src="images/t4.jpg" alt="img" class="img-responsive"></div>
			        <div class="info">
			          <div class="info-back">
			            <h3>Rackham</h3>		           
			          </div>
			        </div></a></div>
			        <div class="team-bottom">
			        	  <p>On the other hand, we denounce with righteous indignation.</p>
			        	  <ul>
			        	  	<li><a href="#" class="fa"> </a></li>
			        	  	<li><a href="#" class="tw"> </a></li>
			        	  	<li><a href="#" class="g"> </a></li>
			        	  </ul>
			        </div>
			    <!-- end normal -->			 
			  </div>
			</div>
		</div>
	</div>
</div>
<!--team end here-->
<!--services start here-->
<div class="service" id="services">
	<div class="container">
		<div class="service-main">
			<div class="service-top wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
				<h3>Services</h3>
				<span class="heading-line"> </span>
				<p>Nemo enim ipsam voluptatem quia.</p>
			</div>
			<div class="services-bottom">
			   <div class="serice-layer wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
				<div class="col-md-6 services-grid">
					<div class="col-md-6 serv-img">
						<a href="#"><img src="images/s1.jpg" alt="" class="img-responsive"></a>
							<div class="blog-discription">
							  <div class="theme-border">
								<div class="tg-display-table">
									<div class="tg-display-table-cell">
										<div class="blog-title">
											<h4><a href="index.html">Coaching</a></h4>
											<ul class="blod-meta">											
												<li>Dated: March 20, 2016</li>
												<div class="clearfix"> </div>
											</ul>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 serv-text">
						<h4>Neque porro quisquam</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-grid">
					<div class="col-md-6 serv-img">
						<a href="#"><img src="images/s2.jpg" alt="" class="img-responsive"></a>
						<div class="blog-discription">
							  <div class="theme-border">
								<div class="tg-display-table">
									<div class="tg-display-table-cell">
										<div class="blog-title">
											<h4><a href="index.html">Coaching</a></h4>
											<ul class="blod-meta">											
												<li>Dated: March 20, 2016</li>
												<div class="clearfix"> </div>
											</ul>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 serv-text">
						<h4>Et iusto dignissimos ducimus</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
		     </div>
		     <div class="serice-layer wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
				<div class="col-md-6 services-grid">
					<div class="col-md-6 serv-img">
						<a href="#"><img src="images/s3.jpg" alt="" class="img-responsive"></a>
						<div class="blog-discription">
							  <div class="theme-border">
								<div class="tg-display-table">
									<div class="tg-display-table-cell">
										<div class="blog-title">
											<h4><a href="index.html">Coaching</a></h4>
											<ul class="blod-meta">											
												<li>Dated: March 20, 2016</li>
												<div class="clearfix"> </div>
											</ul>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 serv-text">
						<h4>Odio dignissimos ducimus</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-grid">
					<div class="col-md-6 serv-img">
						<a href="#"><img src="images/s4.jpg" alt="" class="img-responsive"></a>
						<div class="blog-discription">
							  <div class="theme-border">
								<div class="tg-display-table">
									<div class="tg-display-table-cell">
										<div class="blog-title">
											<h4><a href="index.html">Coaching</a></h4>
											<ul class="blod-meta">											
												<li>Dated: March 20, 2016</li>
												<div class="clearfix"> </div>
											</ul>										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 serv-text">
						<h4>On the other hand, we denounce</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
		     </div>
		   </div>
		</div>
	</div>
</div>
<!--services end here-->
<!---728x90--->
<!--services strip-->
<div class="ser-strip">
	<div class="container">
		<div class="ser-strip-main wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
			 <h3>Do You Like Our Work</h3>
			 <a href="#contact" class="scroll">Get Touch</a>
		</div>
	</div>
</div>
<!-- services strip end here-->
<!--gallery-->
<div class="portfolio" id="portfolio">
   <div class="container">
	  <div class="portfolio-top wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
			    <h3>Portfolio</h3>
				<span class="heading-line"> </span>
				<p>Nemo enim ipsam voluptatem quia.</p>
		</div>	
		<div class="sap_tabs">
			
						 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>All</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Category</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Category1</span></li>
							 <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Category2</span></li>
							  <div class="clearfix"> </div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="tab_img">
									  <div class="col-md-3 img-top ">
					   		  			   <div class="gal-one">
												<a href="#image-1">
													<figure class="effect-apollo">
														<img src="images/p1.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>			
													</figure>
												</a>
													<div class="lb-overlay" id="image-1">
															<img src="images/p1.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															  <div class="clearfix"> </div>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-2">
													<figure class="effect-apollo">
														<img src="images/p2.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>			
													</figure>
												</a>
													<div class="lb-overlay" id="image-2">
															<img src="images/p2.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-3">
													<figure class="effect-apollo">
														<img src="images/p3.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>			
													</figure>
												</a>
													<div class="lb-overlay" id="image-3">
															<img src="images/p3.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-4">
													<figure class="effect-apollo">
														<img src="images/p4.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-4">
															<img src="images/p4.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
							     <div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-5">
													<figure class="effect-apollo">
														<img src="images/p5.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-5">
															<img src="images/p5.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-6">
													<figure class="effect-apollo">
														<img src="images/p6.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>			
													</figure>
												</a>
													<div class="lb-overlay" id="image-6">
															<img src="images/p6.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-7">
													<figure class="effect-apollo">
														<img src="images/p7.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-7">
															<img src="images/p7.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			     <div class="gal-one">
												<a href="#image-8">
													<figure class="effect-apollo">
														<img src="images/p8.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-8">
															<img src="images/p8.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
							     <div class="tab_img">
								<!--	  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-9">
													<figure class="effect-apollo">
														<img src="images/p9.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-9">
															<img src="images/p9.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-10">
													<figure class="effect-apollo">
														<img src="images/p10.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-10">
															<img src="images/p10.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-11">
													<figure class="effect-apollo">
														<img src="images/p11.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>			
													</figure>
												</a>
													<div class="lb-overlay" id="image-11">
															<img src="images/p11.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			     <div class="gal-one">
												<a href="#image-12">
													<figure class="effect-apollo">
														<img src="images/p12.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-12">
															<img src="images/p12.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div> -->
											<div class="clearfix"> </div>
							     </div>	
									 	        					 
						  </div>
							    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Category</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								
							     <div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-13">
													<figure class="effect-apollo">
														<img src="images/p13.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-13">
															<img src="images/p13.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-14">
													<figure class="effect-apollo">
														<img src="images/p1.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-14">
															<img src="images/p1.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-15">
													<figure class="effect-apollo">
														<img src="images/p2.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-15">
															<img src="images/p2.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-16">
													<figure class="effect-apollo">
														<img src="images/p3.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-16">
															<img src="images/p3.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
							     	<div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-17">
													<figure class="effect-apollo">
														<img src="images/p4.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-17">
															<img src="images/p4.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-17">
													<figure class="effect-apollo">
														<img src="images/p5.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-18">
															<img src="images/p5.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-19">
													<figure class="effect-apollo">
														<img src="images/p6.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-19">
															<img src="images/p6.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
									 	        					 
						  </div>
						    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Category1</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								
									  <div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-20">
													<figure class="effect-apollo">
														<img src="images/p7.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-20">
															<img src="images/p7.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-21">
													<figure class="effect-apollo">
														<img src="images/p8.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-21">
															<img src="images/p8.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-22">
													<figure class="effect-apollo">
														<img src="images/p9.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-22">
															<img src="images/p9.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
									<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-23">
													<figure class="effect-apollo">
														<img src="images/p10.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-23">
															<img src="images/p10.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
							     	<div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-24">
													<figure class="effect-apollo">
														<img src="images/p11.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-24">
															<img src="images/p11.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-25">
													<figure class="effect-apollo">
														<img src="images/p12.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-25">
															<img src="images/p12.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										
											<div class="clearfix"> </div>
							     </div>		        					 
						  </div>
						   <h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span>Category2</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
						   	<div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			  <div class="gal-one">
												<a href="#image-26">
													<figure class="effect-apollo">
														<img src="images/p13.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-26">
															<img src="images/p13.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-27">
													<figure class="effect-apollo">
														<img src="images/p1.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-27">
															<img src="images/p1.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-28">
													<figure class="effect-apollo">
														<img src="images/p2.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-28">
															<img src="images/p2.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			     <div class="gal-one">
												<a href="#image-29">
													<figure class="effect-apollo">
														<img src="images/p3.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-29">
															<img src="images/p3.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
							     <div class="tab_img">
									  <div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-30">
													<figure class="effect-apollo">
														<img src="images/p4.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-30">
															<img src="images/p4.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-31">
													<figure class="effect-apollo">
														<img src="images/p5.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-31">
															<img src="images/p5.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			   <div class="gal-one">
												<a href="#image-32">
													<figure class="effect-apollo">
														<img src="images/p6.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-32">
															<img src="images/p6.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div>
											</div>
										</div>
										<div class="col-md-3 img-top">
					   		  			    <div class="gal-one">
												<a href="#image-33">
													<figure class="effect-apollo">
														<img src="images/p7.jpg" alt="image1" class="img-responsive">
														<div class="link-top">
															 <i class="link"> </i>
														 </div>				
													</figure>
												</a>
													<div class="lb-overlay" id="image-33">
															<img src="images/p7.jpg" alt="image1" class="img-responsive">
															<div class="gal-info">							
																<h3>Coaching</h3>
																<p>Neque porro quisquam est, qui dolorem ipsum 
																quia dolor sit amet, consectetur, adipisci velit, 
																sed quia non numquam.</p>
															</div>
															<a href="index.html" class="lb-close">Close</a>
													</div> 
											</div>
										</div>
											<div class="clearfix"> </div>
							     </div>	
						   	</div>		
                  </div>
             </div>
         </div>
    </div>	
</div>
<!--gallery-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>
<!--advantages start here-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
			<h4>Your Advantages</h4>
			<div class="col-md-6 advantage-left wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
				<h3>Nam libero tempore cum</h3>
			    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		   </div>		
		   <div class="col-md-6 advantage-rit wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
		   	    <div class="advant-layer1">
		   	    	<div class="adv-layer1-text">
		   	    		<h6>Malorum</h6>
		   	    		<p>Co-founder</p>
		   	    	</div>
		   	    	<div class="advater-img">
		   	    		<img src="images/s2.png" alt="">
		   	    	</div>
		   	      <div class="clearfix"> </div>
		   	    </div>
		   	    <div class="advant-layer2">
		   	    	<div class="adv-layer2-text">
		   	    		<img src="images/left.png" alt="">
		   	    		<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
		   	    	</div>
		   	    	<div class="advater-img">
		   	    		<img src="images/arrow2.png" alt="">
		   	    	</div>
		   	      <div class="clearfix"> </div>
		   	    </div>
		   </div>
		</div>
	</div>
</div>
<!--advantages end here-->
<!--contact start here-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top wow fadeInDown animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
				<h3>Say Hello</h3>
				<span class="heading-line"> </span>
				<p>Nemo enim ipsam voluptatem quia.</p>
			</div>
			<div class="contact-bottom">
				<div class="col-md-6 contact-left wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

					<form method="POST"> <!-- Validation form use Rejex, see the val.js file -->

						<input id="name" onkeyup="validationName()" type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						<label id="namePrompt"></label>
						<input id="email" onkeyup="validationEmail()" type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
						<label id="emailPrompt"></label>				
						<textarea id="comment" name="comment" onkeyup="validationComment()" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Comment';}">Comment</textarea>
						<label id="commentPrompt"></label><br>
						<input type="submit" name="submit" value="Send Message">

					</form>
				</div>
				<div class="col-md-6 contact-right wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
					<h4>Contact Info</h4>
					<p> Nemo enim ipsam voluptatem</p>
					<p>These cases are perfectly </p>
					<ul>
			    	<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>Professor at Hampden-Sydney</li>
			    	<li><span class="glyphicon glyphicon-phone" aria-hidden="true"> </span>+1284 485 978</li>			    	
			    	<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span><a href="mailto:info@example.com">@example.com</a></li>
			    </ul>

				</div>
				 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.2070680058678!2d74.25543028364213!3d16.86564831972326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc108799744d207%3A0xa0585cd18f6f3249!2zMTbCsDUxJzU4LjIiTiA3NMKwMTUnMTkuMSJF!5e0!3m2!1sen!2sin!4v1513158206215" frameborder="0" style="border:0" allowfullscreen></iframe>

	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5662242.781648118!2d-2.27915352769371!3d46.13547129362329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sen!2sin!4v1457683084562" frameborder="0" style="border:0" allowfullscreen=""> </iframe> -->
</div>
<!--//map-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid wow zoomIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
				<h3>Coaching</h3>
				<span class="ftr-line"> </span>
				<p>Lorem Ipsum is simply dummy text</p>
				<p>Typesetting Lorem Ipsum </p>
			</div>
			<div class="col-md-4 ftr-grid ftr-mid wow zoomIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
				 <h3>Social Media</h3>
				 <span class="ftr-line flm"> </span>
				 <ul>
				 	<li><a href="#"><span class="fa"> </span></a></li>
				 	<li><a href="#"><span class="tw"> </span></a></li>
				 	<li><a href="#"><span class="gmail"> </span></a></li>
				 </ul>
			</div>
			<div class="col-md-4 ftr-grid ftr-rit wow zoomIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
				 <h3>Address</h3>
				 <span class="ftr-line flr"> </span>
				 <p>Sankalp Class , Wathar-warananagar road,</p>
				 <p> in Talsande.416-112</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!---728x90--->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
    	    <p>Copyright © 2017 Sankalp Class. <!-- <a href="http://w3layouts.com/" target="_blank">W3layouts</a> --> </p>
    	 </div>
    </div>
    <!--<script>
    	function validation() {
	// body...
			alert("hello");
			}
    </script> -->
    <script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>
<!--copy rights end here
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  
	<a href="#" id="toTop">To Top</a></body>
</html>