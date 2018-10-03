
<!DOCTYPE HTML>
<html>
<head>
<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{!! asset('css/bootstrap.css')!!}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{!! asset('css/style.css')!!}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{!! asset('css/font-awesome.css')!!}" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="{!! asset('css/icon-font.css')!!}" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="{!! asset('js/jquery-2.1.4.js')!!}"></script>
</head> 
    	 <!-- /w3layouts-agile -->
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="{!! url('index') !!}">Mosai<span>c</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="{!! url('index') !!}">M </a>
			</div>
 	 <!-- /w3l-agile -->
			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active">
							<a href="{!! url('index') !!}">
								<i class="lnr lnr-home"></i>
								<span>Home</span>
							</a>
						</li>
						
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<i class="fa fa-th"></i>
								<span>Apps</span>
							</a>
						</li>
						<li>
							<a href="{!! url('profile') !!}">
								<i class="lnr lnr-users"></i>
								<span>Profile</span>
							</a>
						</li> 
						<li>
							<a href="{!! url('browse') !!}">
								<i class="lnr lnr-music-note"></i>
								<span>Albums</span>
							</a>
						</li>						
						<!-- <li class="menu-list">
							<a href="{!! url('browse')!!}">
								<i class="lnr lnr-indent-increase"></i>
								<span>Browser</span>
							</a>  
							<ul class="sub-menu-list">
								<li><a href="radio.html">Artists</a></li>
								<li><a href="404.html">Services</a></li>
							</ul>
						</li> -->
						<!-- <li>
							<a href="blog.html">
								<i class="lnr lnr-book"></i>
								<span>Blog</span>
							</a>
						</li>
						<li>
							<a href="typography.html">
								<i class="lnr lnr-pencil"></i>
								<span>Typography</span>
							</a>
						</li>
						<li class="menu-list">
							<a href="#">
								<i class="lnr lnr-heart"></i> 
								<span>My Favourities</span>
							</a> 
							<ul class="sub-menu-list">
								<li><a href="radio.html">All Songs</a></li>
							</ul>
						</li> -->
						<li class="menu-list">
							<a href="contact.html">
								<i class="fa fa-thumb-tack"></i>
								<span>Contact</span>
							</a>
							<ul class="sub-menu-list">
								<li><a href="contact.html">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
					<!-- app-->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog facebook" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
							<div class="app-grids">
								<div class="app">
						<div class="col-md-5 app-left mpl">
							<h3>Mosaic mobile app on your smartphone!</h3>
							<p>Download and Avail Special Songs Videos and Audios.</p>
							<div class="app-devices">
								<h5>Gets the app from</h5>
								<a href="#"><img src="{!! asset('images/1.png') !!}" alt=""></a>
								<a href="#"><img src="{!! asset('images/2.png') !!}" alt=""></a>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-7 app-image">
							<img src="images/apps.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
			 	 <!-- /w3l-agile -->
		<!-- signup -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="sign-right">
										<form action="#" method="post">
											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
 	 <!-- /agileits -->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form>
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="{!! asset('js/classie.js')!!}"></script>
									<script src="{!! asset('js/uisearch.js')!!}"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											<div class="col-md-4 player" style="padding-top: 15px">
													Web Music Phát triển phần mềm chuyên nghiệp
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop">
													<a href="#" id="loginButton">
														<span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
														<div id="loginBox">                
														<form action="#" method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
														 </form>
													</div>
												</div>
											</div>
										<div class="clearfix" style="height: 65px;"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /agileinfo -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				      <div class="music-browse">
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="{!! asset('css/popuo-box.css') !!}" rel="stylesheet" type="text/css" media="all">
							<script src="{!! asset('js/jquery.magnific-popup.js') !!}" type="text/javascript"></script>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
					
						<div class="browse">
								<div class="tittle-head two">
									<h3 class="tittle">New Releses <span class="new">New</span></h3>
									<a href="{!! url('browse') !!}">
										<h4 class="tittle third">See all</h4>
									</a>
									<div class="clearfix"></div>
								</div>

								<div class="col-md-3 browse-grid">
									<a  href="{!! url('single') !!}">
										<img src="{!! asset('images/v11.jpg')!!}" title="allbum-name">
									</a>
									<a href="{!! url('single') !!}"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="{!! url('single') !!}">Lootera</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="{!! url('single') !!}">
										<img src="{!! asset('images/v22.jpg') !!}" title="allbum-name"></a>
									<a href="{!! url('single') !!}">
										<i class="glyphicon glyphicon-play-circle"></i>
									</a>
								    <a class="sing" href="{!! url('single') !!}">Jaremy Cam</a>
								</div>
							<div class="col-md-3 browse-grid">
								<a  href="{!! url('single') !!}">
									<img src="{!! asset('images/v33.jpg') !!}" title="allbum-name"></a>
								<a href="{!! url('single') !!}"><i class="glyphicon glyphicon-play-circle"></i>
								</a>
									<a class="sing" href="{!! url('single') !!}">Selah</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="{!! url('single') !!}">
										<img src="{!! asset('images/v44.jpg') !!}" title="allbum-name">
									</a>
									<a href="{!! url('single') !!}">
										<i class="glyphicon glyphicon-play-circle"></i>
									</a>
									<a class="sing" href="{!! url('single') !!}">Jim Brickman</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v1.jpg') !!}" title="allbum-name"></a>
									<a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Adele21</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v55.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Party Night</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html">
										<img src="{!! asset('images/v6.jpg') !!}" title="allbum-name">
									</a>
									<a href="single.html">
										<i class="glyphicon glyphicon-play-circle"></i>
									</a>
									<a class="sing" href="single.html">Ellie Goluding</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v66.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Diana</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v6.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Fifty Shades</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v2.jpg') !!}" title="allbum-name"></a>
									<a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Shomlock</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html">
										<img src="{!! asset('images/v3.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Lootera</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v4.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Stuck on a feeling</a>
								</div>
											<div class="clearfix"> </div>
									</div>
					<!--//End-albums-->
					
					<div class="browse">
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v10.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Fifty Shades</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v9.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Alan Jackson</a>
								</div>
							<div class="col-md-3 browse-grid">
								<a  href="single.html"><img src="{!! asset('images/v77.jpg')!!}" title="allbum-name"></a>
								 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Cheristina aguilera</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v88.jpg') !!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Samsmith</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v1.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Adele21</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v99.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Big Duty</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v6.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Ellie Goluding</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v66.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
									<a class="sing" href="single.html">Diana</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v6.jpeg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Fifty Shades</a>
								</div>
							<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v21.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Joe</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v3.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Lootera</a>
								</div>
								<div class="col-md-3 browse-grid">
									<a  href="single.html"><img src="{!! asset('images/v4.jpg')!!}" title="allbum-name"></a>
									 <a href="single.html"><i class="glyphicon glyphicon-play-circle"></i></a>
										<a class="sing" href="single.html">Stuck on a feeling</a>
								</div>
											<div class="clearfix"> </div>
									</div>
					<!--//End-albums-->
						<!--//discover-view-->
							<!--//music-left-->
							</div>
							
						<!--body wrapper start-->
						<div class="review-slider">
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="{!! url('single') !!}"><img src="{!! asset('images/v1.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}"><img src="{!! asset('images/v2.jpg')!!}" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}"><img src="{!! asset('images/v21.jpg')!!}" alt=""/></a>
									<div class="slide-title"><h4>Joe</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}"><img src="{!! asset('images/v4.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Stuck on a feeling</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}"><img src="{!! asset('images/v5.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}l">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="{!! asset('images/v6.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Ellie Goluding</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="{!! asset('images/v6.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Fifty Shades </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
							</ul>
							<script type="text/javascript">
						$(window).load(function() {
							
						  $("#flexiselDemo1").flexisel({
								visibleItems: 5,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: false,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 2
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 3
									},
									tablet: { 
										changePoint:800,
										visibleItems: 4
									}
								}
							});
							});
						</script>
						<script type="text/javascript" src="{!! asset('js/jquery.flexisel.js')!!}"></script>	
						</div>
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
 	 <!-- /w3l-agile-info -->
					</div>
			  <!--body wrapper end-->
			     <div class="footer two">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="index.html">Home</a></li>
					  <li><a href="radio.html">All Songs</a></li>
					  <li><a href="browse.html">Albums</a></li>
					  <li><a href="radio.html">New Collections</a></li>
					  <li><a href="blog.html">Blog</a></li>
					  <li><a href="contact.html">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="contact.html">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="contact.html">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
					  <div class="footer-grid">
						<h3>Newsletter</h3>
						<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						<div class="search_footer">
						 <form>
						   <input type="text" placeholder="Email...." required="">
						  <input type="submit" value="Submit">
						  </form>
						</div>
					 </div>
					 <div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						<p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat enim ad minim veniam,.</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
						<p class="email">Email : &nbsp;<span><a href="mailto:mail@example.com">info(at)mailing.com</a></span></p>	
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
 	 <!-- /wthree-agile -->
      <!-- main content end-->
   </section>
   	 <!-- /wthree-agile -->
<script src="{!! asset('js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('js/scripts.js') !!}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('js/bootstrap.js') !!}"></script>
</body>
</html>