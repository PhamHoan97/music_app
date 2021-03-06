
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
<link rel="stylesheet" type="text/css" href="{!! asset('css/notification.css')!!}">
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
						<li class="menu-list"><a href="contact.html"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
							<ul class="sub-menu-list">
								<li><a href="contact.html">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		 	<!-- /w3layouts-agile -->
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
								<a href="#"><img src="{!! asset('images/1.png')!!}" alt=""></a>
								<a href="#"><img src="{!! asset('images/2.png')!!}" alt=""></a>
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
											<li><a class="fb" href="{{ url('login/facebook')}}"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="{{ url('login/google')}}"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Twitter</a></li>
										</ul>
									</div>
									<div class="sign-right">
										<form action="#" method="post">

											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">
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
 	 <!-- /w3l-agile -->
		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
            <div class="status">
                @if(session()->has('status'))
                <span class="alert alert-success form-control">
                    {{session('status')}}
               </span>
                @endif

                @if(session()->has('notice'))
                <span class="alert alert-danger form-control" >
                    {{session('notice')}}
               </span>
               @endif
            </div>
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">

					<div class="profile_details">		
						  <div class="col-md-4 serch-part">

						  	<!--  
						  	

						  	 -->

								<div id="sb-search" class="sb-search">
									<form action="#" method="post">
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"></span>
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
									        <!-- audio --header -->
									        <!-- end audio--header -->
											<div class="col-md-4 player" style="padding-top: 15px">
													Web Music Ph??t tri???n ph???n m???m chuy??n nghi???p
											</div>

										@if(!isset(session('data')['name']))
											<!-- Login -->
											<div class="col-md-4 login-pop">
												<div id="loginpop"> <a href="#" id="loginButton">
													<span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span>
												</a>
												<a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><i class="fa fa-sign-in"></i></a>
                                                    <div id="loginBox">
												        <form action="{{route('loginnormal')}}" method="post" id="loginForm">
													{!! csrf_field() !!}
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
														<span><a href="{{route('resetpassword')}}">Forgot your password?</a></span>

														 </form>
													</div>
												</div>

											</div>
											@else
												<div class="col-md-4 login-pop">
													<div id="loginpop"><a href="{{Route('logout')}}" id="logoutButton">
															<span>Logout <i class="arrow glyphicon glyphicon-chevron-right"></i></span>
														</a>
													</div>
												</div>
											@endif
										<div class="clearfix" style="height: 65px;"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h3 class="modal-title" id="exampleModalLongTitle">Notification</h3>
				      </div>
				      <div class="modal-body">
				          	<table class="table table-inverse table-filter">
				          		<tbody>
				          			
				          		<!-- bat dau 1 thong bao nhe -->
				          		<tr data-status="pagado">
									<td>
										<div class="ckbox">
											<input type="checkbox" id="checkbox1">
											<label for="checkbox1"></label>
										</div>
									</td>
									<td>
										<div class="media ">
											<!-- ????y l?? ???nh ?????i di???n c???a t??c gi??? ????ng c?? th??? ???n -->
											<div class="notification-artist">
												<a href="#" class="pull-left "  >
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-responsive">
												</a>
											</div>
											<!-- ????y l?? n???i dung ????ng --> 
											<div class="notification-container">
												<div class="notification clearfix">
													<div class="notification-content">
														[Chung Bi???n] ???? ????ng b??i nh???c + [t??n b??i]
													</div>
													<div class="notification-time">
														Febrero 13, 2016
													</div>
													
												</div>
												<div class="notification-readmore clearfix">
													<!-- link b??i nh???c ????? ??? ????y nh?? -->
													
													<div class="notification-btn">
														<a href="#" title="">
														<button type="button" class="btn-play">
															<img src="images/video512x512.png" alt="Let's play" 
															class="img-responsive img-button" >
														</button>

													</a>
													</div>
													
												</div>
											</div>
										</div>
									</td>
								</tr>

								<!-- 1 dong la 1 thong bao -->

								<!-- bat dau 1 thong bao nhe -->
				          		<tr data-status="pagado">
									<td>
										<div class="ckbox">
											<input type="checkbox" id="checkbox2">
											<label for="checkbox2"></label>
										</div>
									</td>
									<td>
										<div class="media ">
											<!-- ????y l?? ???nh ?????i di???n c???a t??c gi??? ????ng c?? th??? ???n -->
											<div class="notification-artist">
												<a href="#" class="pull-left "  >
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-responsive">
												</a>
											</div>
											<!-- ????y l?? n???i dung ????ng --> 
											<div class="notification-container">
												<div class="notification clearfix">
													<div class="notification-content">
														[Chung Bi???n] ???? ????ng b??i nh???c + [t??n b??i]
													</div>
													<div class="notification-time">
														Febrero 13, 2016
													</div>
													
												</div>
												<div class="notification-readmore clearfix">
													<!-- link b??i nh???c ????? ??? ????y nh?? -->
													
													<div class="notification-btn">
														<a href="#" title="">
														<button type="button" class="btn-play">
															<img src="images/video512x512.png" alt="Let's play" 
															class="img-responsive img-button" >
														</button>

													</a>
													</div>
													
												</div>
											</div>
										</div>
									</td>
								</tr>

								<!-- 1 dong la 1 thong bao -->

								<!-- bat dau 1 thong bao nhe -->
				          		<tr data-status="pagado">
									<td>
										<div class="ckbox">
											<input type="checkbox" id="checkbox3">
											<label for="checkbox3"></label>
										</div>
									</td>
									<td>
										<div class="media ">
											<!-- ????y l?? ???nh ?????i di???n c???a t??c gi??? ????ng c?? th??? ???n -->
											<div class="notification-artist">
												<a href="#" class="pull-left "  >
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-responsive">
												</a>
											</div>
											<!-- ????y l?? n???i dung ????ng --> 
											<div class="notification-container">
												<div class="notification clearfix">
													<div class="notification-content">
														[Chung Bi???n] ???? ????ng b??i nh???c + [t??n b??i]
													</div>
													<div class="notification-time">
														Febrero 13, 2016
													</div>
													
												</div>
												<div class="notification-readmore clearfix">
													<!-- link b??i nh???c ????? ??? ????y nh?? -->
													
													<div class="notification-btn">
														<a href="#" title="">
														<button type="button" class="btn-play">
															<img src="images/video512x512.png" alt="Let's play" 
															class="img-responsive img-button" >
														</button>

													</a>
													</div>
													
												</div>
											</div>
										</div>
									</td>
								</tr>

								<!-- 1 dong la 1 thong bao -->

								<!-- bat dau 1 thong bao nhe -->
				          		<tr data-status="pagado">
									<td>
										<div class="ckbox">
											<input type="checkbox" id="checkbox4">
											<label for="checkbox4"></label>
										</div>
									</td>
									<td>
										<div class="media ">
											<!-- ????y l?? ???nh ?????i di???n c???a t??c gi??? ????ng c?? th??? ???n -->
											<div class="notification-artist">
												<a href="#" class="pull-left "  >
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-responsive">
												</a>
											</div>
											<!-- ????y l?? n???i dung ????ng --> 
											<div class="notification-container">
												<div class="notification clearfix">
													<div class="notification-content">
														[Chung Bi???n] ???? ????ng b??i nh???c + [t??n b??i]
													</div>
													<div class="notification-time">
														Febrero 13, 2016
													</div>
													
												</div>
												<div class="notification-readmore clearfix">
													<!-- link b??i nh???c ????? ??? ????y nh?? -->
													
													<div class="notification-btn">
														<a href="#" title="">
														<button type="button" class="btn-play">
															<img src="images/video512x512.png" alt="Let's play" 
															class="img-responsive img-button" >
														</button>

													</a>
													</div>
													
												</div>
											</div>
										</div>
									</td>
								</tr>
								
								<!-- 1 dong la 1 thong bao -->
							</tbody>
				          	</table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Show all</button>
				      </div>
				    </div>
				  </div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /w3l-agileits -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				
				      <div class="music-left">
					      <!--banner-section-->
							<div class="banner-section">
								<div class="banner">
									 <div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
											   	<li>
														<div class="banner-img">
															 <img src="{!! asset('images/11.jpg')!!}" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
														              <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												</li>
												<li>
													<div class="banner-img">
															 <img src="{!! asset('images/22.jpg')!!}" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
																	  <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Charis Brown feet</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>


												</li>
												<li>
												 <div class="banner-img">
															 <img src="{!! asset('images/33.jpg')!!}" class="img-responsive" alt="">
														 </div>
														<div class="banner-info"> 
														             <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												 	 <!-- /w3layouts-agileits -->
												</li>
											</ul>
										</div>
										<!--banner-->
									<script src="{!! asset('js/responsiveslides.min.js') !!}"></script>
								 <script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								  </script>
								<div class="clearfix"> </div>
							</div>
						</div>	
				<!--//End-banner-->
					<!--albums-->
					<!-- pop-up-box --> 
							<link href="{!! asset('css/popuo-box.css')!!}" rel="stylesheet" type="text/css" media="all">
							<script src="{!! asset('js/jquery.magnific-popup.js')!!}" type="text/javascript"></script>
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
					<!-- D??ng c?? s??? d??? li???u ?????y l??n ???????c -->
						<div class="albums">
								<div class="tittle-head">
									<h3 class="tittle">New Releases 
										<span class="new">New</span>
									</h3>
									<a href="{!! url('browse') !!}">
										<h4 class="tittle">See all</h4>
									</a>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-3 content-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v1.jpg')!!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							    </div>
							    <!-- Hien thi video khi click LISTEN NOW  -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/12985622"></iframe>
								</div>
								<div class="col-md-3 content-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v2.jpg')!!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div class="col-md-3 content-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v3.jpg')!!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div class="col-md-3 content-grid last-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v4.jpg')!!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div class="col-md-3 content-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v5.jpg') !!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/12985622"></iframe>
								</div>
								<div class="col-md-3 content-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v6.jpg') !!}" title="allbum-name"></a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div class="col-md-3 content-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v7.jpg') !!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div class="col-md-3 content-grid last-grid">
									<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
										<img src="{!! asset('images/v8.jpg') !!}" title="allbum-name">
									</a>
									<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
								</div>
								<div class="clearfix"> </div>
					    </div>
					<!--//End-albums-->
						<!--//discover-view-->	
						<div class="albums second">
										<div class="tittle-head">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="{!! url('index')!!}"><h4 class="tittle two">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
										<div class="col-md-3 content-grid">
											<a href="{!! url('single') !!}">
												<img src="{!! asset('images/v11.jpg') !!}" title="allbum-name">
											</a>
											<div class="inner-info"><a href="{!! url('single') !!}"><h5>Pop</h5></a></div>
										</div>
										<div class="col-md-3 content-grid">
											<a href="{!! url('single') !!}">
												<img src="{!! asset('images/v22.jpg') !!}" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="{!! url('single') !!}"><h5>Pop</h5></a></div>
										</div>
										<div class="col-md-3 content-grid">
											<a href="{!! url('single') !!}">
												<img src="images/v33.jpg" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="{!! url('single') !!}">
													<h5>Pop</h5>
												</a>
											</div>
										</div>
										<div class="col-md-3 content-grid last-grid">
											<a href="{!! url('single') !!}">
												<img src="{!! asset('images/v44.jpg')!!}" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="{!! url('single') !!}">
													<h5>Pop</h5>
												</a>
											</div>
										</div>
										<div class="col-md-3 content-grid">
											<a href="single.html">
												<img src="{!! asset('images/v55.jpg') !!}" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="single.html">
													<h5>Pop</h5>
												</a>
											</div>
										</div>
										<div class="col-md-3 content-grid">
											<a href="single.html">
												<img src="{!! asset('images/v66.jpg') !!}" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="single.html">
													<h5>Pop</h5>
												</a>
											</div>
										</div>
										<div class="col-md-3 content-grid">
											<a href="single.html">
												<img src="{!! asset('images/v11.jpg') !!}" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="single.html">
													<h5>Pop</h5>
												</a>
											</div>
										</div>
										<div class="col-md-3 content-grid last-grid">
											<a href="single.html">
												<img src="{!! asset('images/v22.jpg') !!}" title="allbum-name">
											</a>
											<div class="inner-info">
												<a href="single.html">
													<h5>Pop</h5>
												</a>
											</div>
										</div>
										<div class="clearfix"></div>
						        </div>
								<!--//discover-view-->
							</div>
							<!--//music-left-->
						    <!--/music-right-->


						    <!-- 
						    	Video ch??nh  add th??m 1 albums c?? l?????ng nghe nhi???u nh???t 
						    	Thay ?????i 1 s??? thu???c t??nh th??i v?? c??n ????u js x??? l?? cho h???t
						    -->


						   <div class="music-right">
								<!--/video-main-->
								 <div class="video-main">
									<div class="video-record-list">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<!-- <div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;">
													<img id="jp_poster_0" src="{!! asset('video/play1.png')!!}" style="width: 480px; height: 270px; display: inline;">
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
												
												<div class="jp-playlist">
													<ul style="display: block;">
														<li class="jp-playlist-current">
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding 
																	<span class="jp-artist">by Pixar</span>
																</a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding 
																	<span class="jp-artist">by Pixar</span>
																</a>
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
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span>
																</a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding 
																	<span class="jp-artist">by Pixar</span></a>
															</div>
														</li>
														<li>
															<div>
																<a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">??</a>
																<a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams
																 <span class="jp-artist">by Pixar</span>
																</a>
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
				<link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
				<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
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
								<!--/app_store-->
									  <div class="apps">
												<h3 class="hd-tittle">Mosaic now available in</h3>
												<div class="banner-button">
													<a href="#"><img src="{!! asset('images/1.png') !!}" alt=""></a>
												</div>
												<div class="banner-button green-button">
													<a href="#"><img src="{!! asset('images/2.png')!!}" alt=""></a>
												</div>
													<div class="clearfix"></div>
										</div>
								  <!--//app_store-->
						         <!--/start-paricing-tables-->
									<div class="price-section">
											<div class="pricing-inner">
												<h3 class="hd-tittle">Upgrade your Plan</h3>
												<div class="pricing">
													<div class="price-top">
														<h3><span>$20</span></h3>
														<h4>per year</h4>
													</div>
													<div class="price-bottom">
														<ul>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">Download unlimited songs
																</a>
																<div class="clearfix"></div>
															</li>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">Stream songs in High Definition</a>
																<div class="clearfix"></div>
															</li>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">No ads unlimited Devices</a>
																<div class="clearfix"></div>
															</li>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">Stream songs in High Definition</a>
																<div class="clearfix"></div>
															</li>
														</ul>
														<a href="{!! url('single') !!}" class="price">Upgrade</a>
													</div>
												</div>
												<div class="pricing two">
													<div class="price-top">
														<h3><span>$30</span></h3>
														<h4>per year</h4>
													</div>
													<div class="price-bottom">
														<ul>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">Download unlimited songs</a>
																<div class="clearfix"></div>
															</li>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">Stream songs in High Definition</a>
																<div class="clearfix"></div>
															</li>
															<li>
																<a class="icon" href="#">
																	<i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">No ads unlimited Devices</a>
																<div class="clearfix"></div>
															</li>
															<li>
																<a class="icon" href="#"><i class="glyphicon glyphicon-ok"></i>
																</a>
																<a class="text" href="#">Stream songs in High Definition</a>
																<div class="clearfix"></div>
															</li>
														</ul>
														<a href="single.html" class="price">Upgrade</a>
													</div>
												</div>
													<div class="clearfix"></div>
												</div>
												<!--//end-pricing-tables-->
												</div>
											</div>
													 <!--//music-right-->
											<div class="clearfix"></div>
			 	 <!-- /w3l-agile-its -->
										</div>
						<!--body wrapper start-->
						
						<div class="review-slider">
								<div class="tittle-head">
									<h3 class="tittle">Featured Albums <span class="new"> New</span></h3>
									<div class="clearfix"> </div>
								</div>
								 <ul id="flexiselDemo1">
								<li>
									<a href="{!! url('single')!!}"><img src="{!! asset('images/v1.jpg') !!}" alt=""/></a>
									<div class="slide-title"><h4>Adele21 </h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single') !!}">
										<img src="images/v2.jpg" alt=""/>
									</a>
									<div class="slide-title">
										<h4>Adele21</h4>
									</div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single') !!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single.html') !!}">
										<img src="{!! asset('images/v3.jpg')!!}" alt=""/>
									</a>
									<div class="slide-title"><h4>Shomlock</h4></div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single')!!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single')!!}">
										<img src="{!! asset('images/v4.jpg')!!}" alt=""/>
									</a>
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
									<a href="{!! url('single')!!}">
										<img src="{!! asset('images/v5.jpg')!!}" alt=""/>
									</a>
									<div class="slide-title"><h4>Ricky Martine </h4>
									</div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single')!!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="{!! url('single')!!}">
										<img src="{!! asset('images/v6.jpg')!!}" alt=""/>
									</a>
									<div class="slide-title">
										<h4>Ellie Goluding </h4>
									</div>
									<div class="date-city">
										<h5>Jan-02-16</h5>
										<div class="buy-tickets">
											<a href="{!! url('single')!!}">READ MORE</a>
										</div>
									</div>
								</li>
								<li>
									<a href="single.html"><img src="{!! asset('images/v6.jpg')!!}" alt=""/></a>
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
 	 <!-- /w3l-agile -->
					</div>
			  <!--body wrapper end-->
			     <div class="footer">
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
 	 <!-- /w3l-agile -->
      <!-- main content end-->
   </section>
  
    <script src="{!! asset('js/jquery.nicescroll.js') !!}"></script>
    <script src="{!! asset('js/scripts.js')!!}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{!! asset('js/bootstrap.js')!!}"></script>
    <script src="{!! asset('js/status.js')!!}"></script>

 </body>
</html>