@extends('layouts.adminlayout')
@section('rightcontent')

    <div class="row">
        <legend class ="text-info">Thêm nhạc sĩ </legend>
    </div>
    <div class="row">
        <div>
            <form class="form-horizontal" action="" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label class="control-label col-md-2 text-info" for="name">Name <span class="text-danger">(*)</span>:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name">
                            @if(session()->has('name'))
                                <span class="text-danger">{!! session('name')!!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label class="control-label col-md-2 text-info" for="ds">Birthday <span class="text-danger">(*)</span>:</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control" id="date" name="dates">
                            @if(session()->has('date'))
                                <span class="text-danger">{!! session('date')!!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label class="control-label col-md-2 text-info" for="phone">Phone <span class="text-danger">(*)</span>:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone">
                            @if(session()->has('name'))
                                <span class="text-danger">{!! session('phone')!!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label class="control-label col-md-2 text-info" for="avatar">Avatar <span class="text-danger">(*)</span>:</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="avatar" name="avatar">
                            @if(session()->has('avatar'))
                                <span class="text-danger">{!! session('avatar')!!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label class="control-label col-md-2 text-info" for="cover">Cover <span class="text-danger">(*)</span>:</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="cover" name="cover">
                            @if(session()->has('cover'))
                                <span class="text-danger">{!! session('cover')!!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <label class="control-label col-md-2 text-info" for="more_infor">Describe <span class="text-danger">(*)</span>:</label>
                        <div class="col-md-9">
                            <textarea rows="4" cols="50" id="more_infor" class="ckeditor" name="more_infor"></textarea>
                            @if(session()->has('more_infor'))
                                <span class="text-danger">{!! session('more_infor')!!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-success"> Thêm nhạc sĩ <i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class = "row" style="margin-top:50px; ">
        <legend class="text-info">Danh sách nhạc sĩ </legend>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="text-info">ID </th>
                <th class="text-info">Name </th>
                <th class="text-info">Birthday </th>
                <th class="text-info">Phone </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(isset($artists))
                @foreach($artists as $artist)
                    <tr>
                        <td>{{$artist->id}}</td>
                        <td>{{$artist->name}}</td>
                        <td>{{$artist->birth}}</td>
                        <td>{{$artist->phone}}</td>
                        <td>
                            <a href="" class="btn btn-secondary">Delete <i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-warning">Song <i class="fas fa-music"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    @if(isset($artists))
        <div class= "row">
            <ul class="pagination" style="margin: auto;">
                @if($artists->currentPage() != 1)
                    <li class="page-item"><a class="page-link" href="{!! str_replace('/?','?',$artists->url($artists->currentPage()-1) )!!}">Previous</a></li>
                @endif

                @for($i = 1; $i <= $artists->lastPage(); $i++)
                    <li class="{!! ($artists->currentPage() == $i) ? 'active' : 'page-item' !!}"><a class="page-link" href="{!! str_replace('/?','?',$artists->url($i) )!!}">{!! $i !!}</a></li>
                @endfor
                @if($artists->currentPage() != $artists->lastPage())
                    <li class="page-item"><a class="page-link" href="{!! str_replace('/?','?',$artists->url($artists->currentPage()+1) )!!}">Next</a></li>
                @endif
            </ul>
        </div>
    @endif

@endsection
