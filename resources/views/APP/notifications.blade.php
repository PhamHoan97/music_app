<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show all </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{!! asset('css/showAllNotification.css')!!}">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script  type="text/javascript" charset="utf-8" async defer>
		$(document).ready(function () {

			// tự động kiểm tra đã đọc hay chưa nè
			$('.readed').each(function(index) {
  				$('.readed input').prop( "checked", true);
			});

			$('.unread').each(function(index) {
  				$('.unread button').addClass('unread');
			});
    });

	</script>
</head>
<body >
	<header id="header" class="header--all">
		
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="{!! url('profile') !!}">
			  	<i class="fas fa-home" style="font-size: 48px;"></i>

			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="{!! url('profile') !!}">Home <span class="sr-only">(current)</span></a>
			      </li>
				     <li class="nav-item ">
				        <a class="nav-link" href="{!! url('notification')!!}">Notifications <span class="sr-only">(current)</span></a>
				      </li>
			      <li class="nav-item dropdown">
			        <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Profile
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="{!! url('showAllSong')!!}">My song</a>
			          <a class="dropdown-item" href="{!! url('showAllAlbum')!!}">My album</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Log out</a>
			        </div>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2 search" type="search"  placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>
	</header><!-- /header -->
	<section style="margin: 30px 0px;" >
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 text-center">
					<h2 >
						All your notifications
					</h2>
				</div>
				<div class="col-2"></div>
			</div>
		</div>
	</section>
	<main>
		<form>
		<div class="container">
			<div class="row">
				<div class="col-2">
					
				</div>
				<div class="col-8">
					<table class="table table-filter">
						<tbody>
						<!-- đây là 1 thông báo nè -->
						<tr data-status="pagado " class="one-note unread">
							<td>
								<div class="ckbox ">
									<input type="checkbox"  id="checkbox1" class="checked">
									<label for="checkbox1"></label>
								</div>
							</td>
							<td>
								<div class="media clearfix">
									<!-- đây là ảnh đại diện của tác giả đăng có thể ấn -->
									<div class="notification-artist">
										<a href="#" class="pull-left "  >
											<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-fluid">
										</a>
									</div>
									<!-- đây là nội dung đăng --> 
									<div class="notification-container">
										<div class="notification">
											<div class="notification-content">
												[Chung Biện] đã đăng bài nhạc + [tên bài]
											</div>
											<div class="notification-time">
												Febrero 13, 2016
											</div>
											
										</div>
										<div class="notification-readmore ">
											<!-- link bài nhạc để ở đây nhé -->
											
											<div class="notification-btn">
												<a href="#" title="">
												<button type="button" class="btn-play">
													<img src="{!! asset('images/video512x512.png')!!}" alt="Let's play" 
													class="img-fluid img-button" >
												</button>

											</a>
											</div>
											
										</div>
									</div>
								</div>
							</td>
						</tr>
						<!-- kết thúc thông báo nè -->
						
							<!-- đây là 1 thông báo nè -->
						<tr data-status="pagado" class="one-note unread">
							<td>
								<div class="ckbox ">
									<input type="checkbox" id="checkbox2" >
									<label for="checkbox2"></label>
								</div>
							</td>
							<td>
								<div class="media clearfix">
									<!-- đây là ảnh đại diện của tác giả đăng có thể ấn -->
									<div class="notification-artist">
										<a href="#" class="pull-left "  >
											<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-fluid">
										</a>
									</div>
									<!-- đây là nội dung đăng --> 
									<div class="notification-container">
										<div class="notification">
											<div class="notification-content">
												[Chung Biện] đã đăng bài nhạc + [tên bài]
											</div>
											<div class="notification-time">
												Febrero 13, 2016
											</div>
											
										</div>
										<div class="notification-readmore ">
											<!-- link bài nhạc để ở đây nhé -->
											
											<div class="notification-btn">
												<a href="#" title="">
												<button type="button" class="btn-play">
													<img src="{!! asset('images/video512x512.png') !!}" alt="Let's play" 
													class="img-fluid img-button" >
												</button>

											</a>
											</div>
											
										</div>
									</div>
								</div>
							</td>
						</tr>
						<!-- kết thúc thông báo nè -->

							<!-- đây là 1 thông báo nè -->
						<tr data-status="pagado " class="one-note unread ">
							<td>
								<div class="ckbox ">
									<input type="checkbox" id="checkbox3" >
									<label for="checkbox3"></label>
								</div>
							</td>
							<td>
								<div class="media clearfix">
									<!-- đây là ảnh đại diện của tác giả đăng có thể ấn -->
									<div class="notification-artist">
										<a href="#" class="pull-left "  >
											<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-fluid">
										</a>
									</div>
									<!-- đây là nội dung đăng --> 
									<div class="notification-container">
										<div class="notification">
											<div class="notification-content">
												[Chung Biện] đã đăng bài nhạc + [tên bài]
											</div>
											<div class="notification-time">
												Febrero 13, 2016
											</div>
											
										</div>
										<div class="notification-readmore ">
											<!-- link bài nhạc để ở đây nhé -->
											
											<div class="notification-btn">
												<a href="#" title="">
												<button type="button" class="btn-play">
													<img src="{!! asset('images/video512x512.png')!!}" alt="Let's play" 
													class="img-fluid img-button" >
												</button>

											</a>
											</div>
											
										</div>
									</div>
								</div>
							</td>
						</tr>
						<!-- kết thúc thông báo nè -->

							<!-- đây là 1 thông báo nè -->
						<tr data-status="pagado" class="one-note readed">
							<td>
								<div class="ckbox">
									<input type="checkbox" id="checkbox4" >
									<label for="checkbox4"></label>
								</div>
							</td>
							<td>
								<div class="media clearfix">
									<!-- đây là ảnh đại diện của tác giả đăng có thể ấn -->
									<div class="notification-artist">
										<a href="#" class="pull-left "  >
											<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-fluid">
										</a>
									</div>
									<!-- đây là nội dung đăng --> 
									<div class="notification-container">
										<div class="notification">
											<div class="notification-content">
												[Chung Biện] đã đăng bài nhạc + [tên bài]
											</div>
											<div class="notification-time">
												Febrero 13, 2016
											</div>
											
										</div>
										<div class="notification-readmore ">
											<!-- link bài nhạc để ở đây nhé -->
											
											<div class="notification-btn">
												<a href="#" title="">
												<button type="button" class="btn-play">
													<img src="{!! asset('images/video512x512.png')!!}" alt="Let's play" 
													class="img-fluid img-button" >
												</button>

											</a>
											</div>
											
										</div>
									</div>
								</div>
							</td>
						</tr>
						<!-- kết thúc thông báo nè -->

							<!-- đây là 1 thông báo nè -->
						<tr data-status="pagado" class="one-note readed">
							<td>
								<div class="ckbox">
									<input type="checkbox" id="checkbox5" >
									<label for="checkbox5"></label>
								</div>
							</td>
							<td>
								<div class="media clearfix">
									<!-- đây là ảnh đại diện của tác giả đăng có thể ấn -->
									<div class="notification-artist">
										<a href="#" class="pull-left "  >
											<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="img-fluid">
										</a>
									</div>
									<!-- đây là nội dung đăng --> 
									<div class="notification-container">
										<div class="notification">
											<div class="notification-content">
												[Chung Biện] đã đăng bài nhạc + [tên bài]
											</div>
											<div class="notification-time">
												Febrero 13, 2016
											</div>
											
										</div>
										<div class="notification-readmore ">
											<!-- link bài nhạc để ở đây nhé -->
											
											<div class="notification-btn">
												<a href="#" title="">
												<button type="button" class="btn-play">
													<img src="{!! asset('images/video512x512.png')!!}" alt="Let's play" 
													class="img-fluid img-button" >
												</button>

											</a>
											</div>
											
										</div>
									</div>
								</div>
							</td>
						</tr>
						<!-- kết thúc thông báo nè -->
					<tbody>
					</table>
				</div>
				<div class="col-2">
					
				</div>
			</div>
		</div>
	</form>
	</main>
	
</body>
</html>