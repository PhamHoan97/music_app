<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Album</title>
	<!-- Bootstrap -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<!-- Jquery --> 
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<!-- My css and js -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/profile.css')!!}">
	<script src="{!! asset('js/profile.js')!!}"></script>
	<script src="{!! asset('js/owl.carousel.min.js')!!}"></script>
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<a href="#" title="" class="d-sm-inline-block">
						<div class="header--logo">
						
							<img src="{!! asset('images/logo.png')!!}" alt="Logo" class="img-fluid">
							
						
						</div>
						<div class="header--name">
							<span class="header--name__contetent">Mosaic</span>
						</div>
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="header--form">
						<form action="" method="GET" class="clearfix" accept-charset="utf-8">
							<input type="text" name="" value="" placeholder="Search...">
							<button type="submit" class="btn-light">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="dropdown header--profile">
  						<button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   					 		<span class="header--profile__avatar">
   					 			<img src="{!! asset('images/avatar.png')!!}" alt="" class="img-fluid">
   					 		</span>
   					 		<span class="header--profile__name">
   					 			Biện Thành Chung
   					 		</span>
  						</button>
  						<div class="dropdown-menu" style="width: 100%; font-size: 16px;" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">
								<i class="far fa-user-circle"></i>
								Cập nhật thông tin
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-music"></i>
								Nhạc cá nhân
							</a>
    						<a class="dropdown-item" href="#">
    							<i class="far fa-envelope"></i>
    							Thông báo
    						</a>
    						<a class="dropdown-item" href="#">
    							<i class="fas fa-sign-out-alt"></i>
    							Đăng xuất
    						</a>
  						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /header -->
		
	<!-- banner ảnh bìa-->
	<div class="banner">
		<div class="container">
			<div class="row">
				<form action="" class="" method="get" accept-charset="utf-8">
					<img src="{!! asset('images/image_cover.jpg')!!}" alt="" class="banner--cover">
					<div class="banner--upload">
					
						<label>
							<img src="{!! asset('images/upload.png')!!}" class="img-fluid">
							<input type="file" class="input-file"> 
						</label>
					
					<!-- Hoàn Note : cái button này chỉ khi nào người đó đang ở trang cá nhân của họ thì họ mới có quyền đổi ảnh bài thôi nha m nên có 1 vòng if kiểm tra id session và id của trang cá nhân đang view đến. Nói thế thôi làm sao kệ mẹ m -->
					
					</div>
					<button type="submit" class="btn btn-primary btn--upload__cover">Thay đổi</button>
					<button type="button" class="btn btn-light btn--upload__cancel" style="color: black;">Hủy</button>
					
				</form>
			</div>
		</div>
	</div>
	<!-- /banner --> 
	<!-- subscrise -->
	<div class="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="subscribe--avatar">
						<img src="{!! asset('images/avatar.png')!!}" class="img-fluid"> 
					</div>
					<div class="subscribe--name">
						<h3 class="subscribe--name">Mixigaming</h3>
						<span class="subscriber">798,201,000 người theo dõi</span>
					</div>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
				<div class="col-md-3 subscribe--btn">
					<!-- Hoàn Note -- cài này để hidden để nhận biết xem đã đăng ký ai 
						chưa! Nếu đã đăng ký thì value thì "subscribed" còn chưa thì 
						là "subscribe". Khi người dùng ấn button thì m sẽ gửi submit lên 
						server. -->
					<button type="submit" class="btn btn-danger">
					<i class="fas fa-bell"></i>
					Đăng ký</button>

					<!-- Hoàn Note cái này là nút hủy đăng ký -->
					<button type="button" class="btn btn-outline-danger">
					<i class="fas fa-bell-slash"></i>
					Hủy đăng ký</button>

				</div>
			</div>
		</div>
	</div>
	<!-- subscrise -->
	<!-- mini menu -->
	<div class="mini--menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light ">
  			
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item">
        				<a class="nav-link" style="color: black;" href="{!! url('profile')!!}">Tổng quan</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" style="color: black;" href="{!! url('song') !!}">Bài hát</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" style="color: black;" href="{!! url('album') !!}">Album</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link " style="color: black;" href="{!! url('sub') !!}">Trang đăng ký</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link " style="color: black;" href="{!! url('moreInfor')!!}">Giới thiệu</a>
      				</li>
    			</ul>
  			</div>
		</nav>
		</div>
	</div>
	<!-- /mini menu -->
	<!-- Hoàn Note với Trang tổng quan thì m sẽ select ra tất bài hát nghe nhiều nhất 

	<!-- option -->
	<div class="bai--hat ">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Album
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload__Song">
						<i class="fas fa-plus"></i> Tạo album mới
					</button>
					</h1>
					
				</div>
			</div>
			<div class="row">
				<!-- 1 bài hat nè --> 
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item1.jpg') !!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					    <p class="card-text">800 view</p>
					   
					   <div class="card-button text-xl-center" >
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item2.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item3.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item4.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item5.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item6.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item7.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item8.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item9.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6 col">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/item1.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">They sad</h5>
					    <p class="card-text">Một bài hat thật là hay</p>
					   <p class="card-text">800 view</p>
					   <div class="card-button text-xl-center">
					   	 
					     <a href="#" class="btn btn-primary button--add"><i class="fas fa-play"></i> Listen</a>
					   </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="upload__Song" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tạo playlist mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  			 <div class="form-group">
    			<label for="exampleInputEmail1"> <i class="fas fa-headset"></i> Tên playlist</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên...">
  			</div>
  			<div class="form-group">
    			<label> <i class="fas fa-anchor"></i> Mô tả</label>
    			<textarea class="form-control upload__mota" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>