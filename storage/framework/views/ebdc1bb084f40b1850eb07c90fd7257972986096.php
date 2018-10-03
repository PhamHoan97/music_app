<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mobile Case</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- font family-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&amp;subset=vietnamese" rel="stylesheet">	

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300" rel="stylesheet">
	<!-- boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" ">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.min.css'); ?>">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
	<!-- jquery -->


	<!-- my css and js -->
	
	
	
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
	<div class="profile" style="background: url(images/contact.jpg) no-repeat;">
		<div class="container">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5 col--5--left">
					<div class="big--avatar">
						<div class=" thoi thoi1">
							<div class=" thoi thoi2">
								<div class=" thoi thoi3">
									<div class=" thoi thoi4">
										<img src="<?php echo asset('images/a1.jpg'); ?>" alt="" class="img-fluid"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="big--name">
						<h3>
							Ly Hao Thien
						</h3>
					</div>

					<div class="common-infor clearfix" style="font-family: 'Josefin Sans', sans-serif; color: white; font-size: 20px; ">
						<div class="common-infor_follower" style="width: 70%; float: left;">
							1234 followers
						</div>
						<div class="common-infor_single" style="width: 30%;float: left;text-align: right;">
							12 single
						</div>
					</div>
					<div class="big-back-to-home">
						<button type="button" class="btn btn-primary"> 
							<a href="<?php echo url('index'); ?>"><i class="fas fa-home"></i></a>
						</button>
						<button type="button" class="btn btn-primary update"> 
							<a href="<?php echo url('showAllAlbum'); ?>"><i class="fas fa-pen-square"></i></a>
						</button>
					</div>
				</div>
				<div class="col-5 col--5-right">
					<div class="profile--content">
						<div class="profile--avatar">
							<img src="<?php echo asset('images/a1.jpg'); ?>" alt="" class="img-fluid" />
						</div>
						<div class="profile--name">
							Ly Hao Thien
						</div>

						<div class="profile--contact">
							<div class="profile--phone">
								<p class="profile--title">
									<i class="fas fa-phone"></i> Mobile
								</p>
								<p class="profile--data">
									0971702707
								</p>
							</div>
							<div class="profile--mail">
								<p class="profile--title">
									<i class="fas fa-envelope"></i> Email
								</p>
								<p class="profile--data">
									chungch251997@gmail.com
								</p>
								
							</div>
						</div>

						<div class="profile--infor">
							<div class="profile--address">
								<p class="profile--title">
									<i class="fas fa-address-card"></i> Address
								</p>
								<p class="profile--data">
									Dai La, Ha Noi
								</p>
							</div>
							<div class="profile--gender">
								<p class="profile--title">
									<i class="fas fa-transgender"></i> Gender
								</p>
								<p class="profile--data">
									Male
								</p>
							</div>
							<div class="birthday">
								<p class="profile--title">
									<i class="fas fa-birthday-cake"></i> Birthday
								</p>
								<p class="profile--data">
									02/05/1997
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</div>        
</body>
</html>