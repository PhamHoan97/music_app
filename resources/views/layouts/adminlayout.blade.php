<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <!-- js -->
    <script src="{!! asset('js/status.js')!!}"></script>
    <script src="{!! asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')!!}" type="text/javascript" language="javascript"></script>


    </head>
    <body>
    <!-- header -->
    <div class="container">
        <header >
        <div class = "row">
            <div class="col-md-4">
                <span class="text-danger" style="font-weight: 700; margin-left: 20px;">
                Xin chào :
                </span>
                 <span class="text-info" style="font-weight: 700; font-family: Tahoma;">
                    {{--{{session('data')['name']}}--}}Tran Huy
                </span>
            </div>
            <div class="col-md-6"><p class="text-info title_header"></p></div>

            <div class="col-md-2">
                <div class="btn-group btn_group">
                    {{--<button type="button" class="btn btn-light "><i class="fas fa-comment-alt"></i> Messenger</button>--}}
                    {{--<button type="button" class="btn btn-light "><i class="fas fa-location-arrow"></i> Reply</button>--}}
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-circle"></i> My Profile</button>
                    <div class="dropdown-menu">
                        <form action="" method="get" accept-charset="utf-8">
                            <button type="submit" class="btn btn-light dropdown-item">
                            <i class="fas fa-user-circle"></i><a> Profile</a>
                            </button>
                        </form>
                        <form action="" method="get" accept-charset="utf-8">
                            <button type="submit" class="btn btn-light dropdown-item">
                            <i class="fas fa-edit"></i><a> Update</a>
                        </button>
                        </form>
                        <form action="" method="get" accept-charset="utf-8">
                            <button type="submit" class="btn btn-light dropdown-item">
                            <i class="fas fa-key"></i><a> Change Pass</a>
                        </button>
                        </form>
                        <form action="" method="get" accept-charset="utf-8">
                            <button type="submit" class="btn btn-light dropdown-item">
                            <i class="fas fa-sign-out-alt"></i><a class="text-dark" href=""> Logout</a>
                        </button>
                        </form>
                     </div>
                </div>
            </div>
        </div>
        </header>
    <!-- content -->

        <div class="row" style="margin-top: 30px;">
        <!-- sidebar -->
        <div class="col-md-3 panel">
            <div class="panel panel-default sidebar">
                <div class="panel-heading"><i class="fas fa-home"></i><a class="title" href="">Home</a></div>
                <div class="panel-body"><li><i class="fas fa-user-secret"></i><a href="" class="title">User </a></li></div>
                <div class="panel-body"><li><i class="fas fa-envelope-open"></i><a href="" class="title">Singer</a></li></div>
                <div class="panel-body"><li><i class="fas fa-envelope-open"></i><a href="" class="title">Artist</a></li></div>
                {{--<div class="panel-body">--}}
                    {{--<ul class="navbar-nav advance">--}}
                        {{--<li class="nav-item dropdown">--}}
                        {{--<a href="" class="nav-link dropdown-toggle a" data-toggle="dropdown"><i class="fas fa-calculator"></i> <span class="para">Advance</span></a>--}}
                        {{--<div class="dropdown-menu menu">--}}
                            {{--<a class="dropdown-item item" href=""><i class="far fa-calendar-times"></i><span class="para">Unconfirmed</span></a>--}}
                            {{--<a class="dropdown-item item" href=""><i class="far fa-calendar-check"></i><span class="para">Confimred</span></a>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    <!-- extends -->
        <div class="col-md-9">
            <div class="status">
                @if(session('alert'))
            <span class="alert alert-success form-control" style="text-align:center;">{!! session('alert') !!}</span>
                @endif
                @if(isset($alert))
            <span class="alert alert-success form-control" style="text-align:center;">{!! $alert !!}</span>
                @endif
            </div>
                @yield('rightcontent')
        </div>
        </div>
    </div>
</body>
</html>