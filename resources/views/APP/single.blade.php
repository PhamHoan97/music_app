
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Single:: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{!! asset('css/bootstrap.css') !!}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{!! asset('css/style.css') !!}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="{!! asset('css/icon-font.css') !!}" type='text/css' />
<!-- //lined-icons -->
 <!-- Meters graphs -->
<script src="{!! asset('js/jquery-2.1.4.js') !!}"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script type="text/javascript">
	$(document).ready(function() {
		$( "#btn-like" ).click(function() {
			var iconLike = $('#icon-like');
			var classList = iconLike.attr('class').split(/\s+/);
		  	if(classList[1] == "fas"){
		  		
		  		iconLike.removeClass('fas');
		  		iconLike.addClass('far');
		  	} else {
		  		
		  		iconLike.removeClass('far');
		  		iconLike.addClass('fas');
		  	}
		});
});
</script>
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
							<a href="{!! url('browse') !!}">
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
		 	 <!-- /w3l-agile -->
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
							<img src="{!! asset('images/apps.png')!!}" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //app-->
			 	 <!-- /w3l-agileits -->
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
 	 <!-- /w3l-agile-its -->
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
									<form action="#" method="post">
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="{!! asset('js/classie.js') !!}"></script>
									<script src="{!! asset('js/uisearch.js') !!}"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											<div class="col-md-4 player" style="padding-top: 15px">
													Web Music Ph??t tri???n ph???n m???m chuy??n nghi???p
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
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /wthree-agile -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				
				<div class="inner-content single">
						    <!--/music-right-->
							
						<div class="tittle-head">
									<h3 class="tittle">Single <span class="new">Page</span></h3>
									<div class="clearfix"> </div>
								</div>
						   <div class="single_left">
								<!--/video-main-->
								 <div class="video-main">
									<div class="video-record-list">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<!-- <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;">
													<img id="jp_poster_0" src="{!!asset('images/a10.png')!!}" style="width: 480px; height: 270px; display: inline;">
													<video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;">
														
													</video>
												</div> -->
												<div style="width: 480px">
													<img id="jp_poster_0" src="{!! asset('images/a1.jpg') !!}" style="; height: 270px; display: inline;margin-bottom: 20px;">

													<audio controls style="width: 82%">
													  <source src="horse.ogg" type="audio/ogg">
													  <source src="horse.mp3" type="audio/mpeg">
											        </audio>
												</div>
												<div class="jp-gui">
													<!-- <div class="jp-video-play" style="display: block;">
														<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
													</div>
													<div class="jp-interface">
														<div class="jp-progress">
															<div class="jp-seek-bar" style="width: 100%;">
																<div class="jp-play-bar" style="width: 0%;"></div>
															</div>
														</div>
														<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
														<div class="jp-duration" role="timer" aria-label="duration">00:18</div>
														<div class="jp-controls-holder">
															<div class="jp-controls">
																<button class="jp-previous" role="button" tabindex="0">previous</button>
																<button class="jp-play" role="button" tabindex="0">play</button>
															</div>
															<div class="jp-volume-controls">
																<button class="jp-mute" role="button" tabindex="0">mute</button>
																<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value" style="width: 100%;"></div>
																</div>
															</div>
															<div class="jp-toggles">
															
																<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
															</div>
														</div>
														<div class="jp-details" style="display: none;">
															<div class="jp-title" aria-label="title">1. Ellie-Goulding</div>
														</div>
													</div> -->
												</div>

												<div class="jp-like" style="background: white;">
													<form class="form-inline" style="border-top: 1px solid gray;" action="#" method="get">
		
														<div class="form-group" style="width: 80%; display: inline-block;">
															<label for="exampleInputEmail2">100,000,000 views</label>
														</div>
														<button type="submit" id="btn-like" class="btn btn-default" style="border: none;">
															<!--fas : thich|| far la ko thich -->
															
															<i id="icon-like" class="fa-thumbs-up far" style="font-size: 28px;"></i>
														</button>
													</form>
												</div>
												<div class="jp-playlist">
													<ul style="display: block;">
														<li class="jp-playlist-current">
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span>
																</a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
													</ul>
												</div>
												<div class="jp-no-solution" style="display: none;">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- script for play-list -->
				<link href="{!! asset('css/jplayer.blue.monday.min.css')!!}" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="{!! asset('js/jquery.jplayer.min.js') !!}"></script>
				<script type="text/javascript" src="{!! asset('js/jplayer.playlist.min.js') !!}"></script>
				<!-- <script type="text/javascript">
				//<![CDATA[
				$(document).ready(function(){

					new jPlayerPlaylist({
						jPlayer: "#jquery_jplayer_1",
						cssSelectorAncestor: "#jp_container_1"
					}, [
						
						{
							title:"1. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"2. Mark-Ronson-Uptown",
							artist:"",
							mp4: "video/Mark-Ronson-Uptown.mp4",
							ogv: "video/Mark-Ronson-Uptown.ogv",
							webmv: "video/Mark-Ronson-Uptown.webm",
							poster:"video/play2.png"
						},
						{
							title:"3. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"4. Maroon-Sugar",
							artist:"",
							mp4: "video/Maroon-Sugar.mp4",
							ogv: "video/Maroon-Sugar.ogv",
							webmv: "video/Maroon-Sugar.webm",
							poster:"video/play4.png"
						},
						{
							title:"5. Pharrell-Williams",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"6. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"7. Pharrell-Williams",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						}
					], {
						swfPath: "../../dist/jplayer",
						supplied: "webmv,ogv,mp4",
						useStateClassSkin: true,
						autoBlur: false,
						smoothPlayBar: true,
						keyEnabled: true
					});

				});
				//]]>
					</script> -->
			<!-- //script for play-list -->
						<!--//video-main-->
						 	 <!-- /agileinfo -->
				</div>
				<div class="response">
					<h4>Artist</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="{!! asset('images/c1.jpg') !!}" alt="">
							</a>
							<h5><a href="#">Name</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Diss me nghiet vazzz ca lollll</p>
							<ul>
								<li>Sep 21, 2015</li>
								<li><a href="{!! url('single.html') !!}">
									<button type="button" class="btn btn-danger" style="font-size: 16px;">Subscribe
										

									<i class="fas fa-plus" style="font-size: 16px;"></i>
									</button>
								</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="{!! asset('images/c1.jpg') !!}" alt="">
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Sep 21, 2015</li>
								<li><a href="{!! url('single') !!}">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="{!! asset('images/c2.jpg')!!}" alt="">
									</a>
									<h5><a href="#">Username</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Apr 17, 2016</li>
										<li><a href="{!! url('single')!!}">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="{!! asset('images/c3.jpg') !!}" alt="">
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>May 21,2016</li>
								<li><a href="{!! url('single') !!}">Reply</a></li>
							</ul>		
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="{!! url('images/c4.jpg') !!}" alt="">
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Mar 28, 2016</li>
								<li><a href="single.html">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="{!! asset('images/c5.jpg') !!}" alt="">
									</a>
									<h5><a href="#">Username</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Feb 19, 2016</li>
										<li><a href="{!! url('single')!!}">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="{!! asset('images/c6.jpg') !!}" alt="">
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jan 20, 2016</li>
								<li><a href="{!! url('single') !!}">Reply</a></li>
							</ul>		
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				 	 <!-- /agileits -->
				<div class="clearfix"> </div>
						<!--//music-right-->
						
						<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="#" method="post">
						<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>
			</div>
			 	 <!-- /w3l-agileits-->
						<!--body wrapper start-->
						<div class="review-slider">
						
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="{!! url('single')!!}"><img src="{!! asset('images/v1.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}">
										<img src="{!! asset('images/v2.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Adele21</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html">
										<img src="{!! asset('images/v3.jpg')!!}" alt=""/></a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single')!!}">
										<img src="{!! asset('images/v4.jpg') !!}" alt=""/></a>
									<div class="slide-title">
										<h4>Stuck on a feeling</h4>
									</div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}">
										<img src="{!! asset('images/v5.jpg') !!}" alt=""/>
									</a>
									<div class="slide-title"><h4>Ricky Martine </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html">
										<img src="{!! asset('images/v6.jpg') !!}" alt=""/>
									</a>
									<div class="slide-title">
										<h4>Ellie Goluding </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="single.html">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html">
										<img src="{!! asset('images/v6.jpeg')!!}" alt=""/>
									</a>
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
						<script type="text/javascript" src="{!! asset('js/jquery.flexisel.js') !!}"></script>	
						</div>

				</div>
			<div class="clearfix"></div>
						<!--body wrapper end-->
 	 <!-- /w3layouts-agile -->
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
			 	 <!-- /w3layouts-agile -->
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="{!! asset('js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('js/scripts.js')!!}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('js/bootstrap.js')!!}"></script>
</body>
</html>