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
	<link rel="stylesheet" type="text/css" href="{!! asset('css/allSong.css') !!}">
	
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
<body>
	<header id="header" class="header--all">
		
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="{!! url('profile') !!}">
			  	<i class="fas fa-home" "></i>

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
				        <a class="nav-link"  style="color: white;" href="{!! url('notifications') !!}">Notifications <span class="sr-only">(current)</span>
				        </a>
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
	</header>

	<!-- form này để đăng nhạc nè -->
	<section class="banner upload--form">
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-8 text-center banner--title">
					<h2>Upload Media Files & Share Online</h2>
					<h4>Share your momments online easily</h4>
				</div>
				<div class="col-2"></div>
			</div>
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 form-center">
					<div class="form--cover">
						<div class="form--cover__title text-center">
							<h3>Make new album </h3>
							<h5>Via Frontend Uploader</h5>
						</div>
						<div class="form--cover__main">
							<form action="" method="get" accept-charset="utf-8" class="form-uploadFile">
								<label >
									<img src="{!! asset('images/albumMusic.png')!!}" alt="Upload right here" class="img-fluid">
									<input type="button" class="input-file"  data-toggle="modal" data-target="#exampleModal" name="" value="" placeholder=""> 
								</label>
							</form>
						</div>
						<div class="form--cover__title text-center">
							<h4>Lorem ipsum dolor</h4>
							<h5> consectetur adipisicing elit.</h5>
						</div>
					</div>
					
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</section>
	
	<div class="color">
		<ul class="list--color clearfix" >
			<li style="background-color: #1abc9c;"></li>
			<li style="background-color: #e67e22;"></li>
			<li style="background-color: #3498db;"></li>
			<li style="background-color: #e74c3c;"></li>
			<li style="background-color: #9b59b6;"></li>
			<li style="background-color: #f1c40f;"></li>
		</ul>
	</div>

	<section class="all--song">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg') !!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">Buồn của Đấng</h5>
					    <p class="card-text">Cùng gặm nhắm lỗi buồn cùng Đấng nào</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					   <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>
				<div class="col-lg-3 col-sm-4 col-sm-6">
					<div class="card" >
					  <img class="card-img-top" src="{!! asset('images/nature.jpg')!!}" alt="Card image cap" class="img-fluid">
					  <div class="card-body">
					    <h5 class="card-title">1 ngày Buồn của Ly Hao Thien</h5>
					    <p class="card-text"> Nghiệt ZZZZZZZZZZZZZZZZ</p>
					   
					   <div class="card-button">
					   	 <a href="{!! url('showAllSong')!!}" class="btn btn-primary button--add"><i class="fas fa-plus-circle" "></i> Add to</a>
					     <a href="#" class="btn btn-danger button--delete"><i class="fas fa-trash-alt"></i> Delete</a>
					   </div>
					  </div>
					</div>

				</div>

				
			</div>
		</div>
	</section>	
	<section class="paging">
		<div class="container ">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
					</nav>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</section>

	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lorem ipsum dolor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     	<form action="" method="get" accept-charset="utf-8">
     		
  				<div class="form-group row">
    				<label for="staticEmail" class="col-sm-2 col-form-label">Album name</label>
    				<div class="col-sm-10">
      					<input type="text" class="form-control-plaintext" id="staticEmail" value="Buồn của Đấng">
    				</div>
  				</div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
			    <div class="col-sm-10">
			     	<textarea class="form-control" rows="5" id="comment"></textarea>
			    </div>
			  </div>
			
     	</form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>