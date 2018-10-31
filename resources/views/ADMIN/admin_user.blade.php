@extends('layouts.adminlayout')
@section('rightcontent')

<style >
	.avatar{
		width: 50px;
		height: 50px;
	}	

	.center{
		margin: auto;
	}
</style>
	
	<div class="row"><legend class ="text-info" style ="text-align: left;">Danh sách người dùng </legend></div>
	<form action="" method="post" accept-charset="utf-8">
		<div class="form-group">
			<div class="row">
				<div class="col-md-5" >
					{!! csrf_field() !!}
					<input type="text" id="Information" class="form-control" placeholder="Information" name="employee">
				</div>
				<div class="col-md-4">
					<button type="submit" class="btn btn-success" style="width: 130px;" onclick="return findMessage('Make sure! You enter one name!!')" name="submit">Find user <i class="fas fa-arrow-alt-circle-right"></i></button>
				</div>
			</div>
		</div>
	</form>		

		<!-- search live -->
		<script type="text/javascript">
		$(document).ready(function(){	
			$('#Information').on('keyup',function(){
				$value = $(this).val();
				$.ajax({
					type: 'get',
					url: "{!! url('searchuser') !!}",
					data: {'user': $value},
					success:function(data){
						$('tbody').html(data);
					}
				});
			});
		});

		function findMessage(msg){
			if(window.confirm(msg)){
				return true;
			}
			return false;
		};
		</script>

		<div class="row" style="margin-top: 20px;margin-left: 0px;">
			<table class="table table-bordered table-striped">
			    <thead>
			      <tr>
			        <th class="text-info">ID</th>
			        <th class="text-info">Avatar</th>
			        <th class="text-info">Name</th>
			        <th class="text-info">Email</th>
			        <th class="text-info">Birth</th>
			        <th class="text-info">Address</th>
			        <th class="text-info">Phone</th>
			        <th></th>
			      </tr>
			    </thead>
		 		<tbody>			    
		 	@if(isset($users))	
			    @foreach($users as $user)
			      	<tr>
				        <td>{{$user->id}}</td>
				        <td></td>
				        <td></td>
				        <td>{{$user->email}}</td>
				        <td></td>
				        <td></td>
				        <td></td>
				        <td>
				        	<a href="" onclick="return ResetMesenger('Bạn có muốn reset mật khẩu của tài khoản này không?')" class="btn btn-info">Reset <i class="fas fa-database"></i></a>
				        </td>
			      	</tr>
			    @endforeach
			@endif
			</tbody> 
			</table>
		</div>
		
		<script type="text/javascript">
			function ResetMesenger(msg){
				if(window.confirm(msg)){
					return true;
				}
				return false;
			};
		</script>
		@if(isset($users))
		<div class= "row">
			<ul class="pagination center">
				@if($users->currentPage() != 1)
			    	<li class="page-item"><a class="page-link" href="{!! str_replace('/?','?',$users->url($users->currentPage()-1) )!!}">Previous</a></li>
			    @endif

				@for($i = 1; $i <= $users->lastPage(); $i++)
			    <li class="{!! ($users->currentPage() == $i) ? 'active' : 'page-item' !!}"><a class="page-link" href="{!! str_replace('/?','?',$users->url($i) )!!}">{!! $i !!}</a></li>
				@endfor
				@if($users->currentPage() != $users->lastPage())
			    	<li class="page-item"><a class="page-link" href="{!! str_replace('/?','?',$users->url($users->currentPage()+1) )!!}">Next</a></li>
			    @endif
	 		 </ul>
		</div>
		@endif

@endsection