@extends('layouts.adminlayout')
@section('rightcontent')

    <div class="row">
        <legend class ="text-info">Thêm ca sĩ </legend>
    </div>

    <div class="row">
        <div>
            <form class="form-horizontal" action="{{Route('addsinger')}}" method="post" enctype="multipart/form-data">
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
                            <input type="date" class="form-control" id="date" name="date">
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
                            @if(session()->has('phone'))
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
                            <button type="submit" class="btn btn-success"> Thêm ca sĩ <i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class = "row" style="margin-top:50px; ">
        <legend class="text-info">Danh sách ca sĩ </legend>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="text-info">ID </th>
                <th class="text-info">Avatar </th>
                <th class="text-info">Name </th>
                <th class="text-info">Birthday </th>
                <th class="text-info">Phone </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(isset($singers))
                @foreach($singers as $singer)
                    <tr>
                        <td>{{$singer->id}}</td>
                        <td><img src='{!! asset($singer->avatar_path) !!}' class="avatar" style="
                        width: 50px; height: 50px;"></td>
                        <td>{{$singer->name}}</td>
                        <td>{{$singer->birth}}</td>
                        <td>{{$singer->phonenumber}}</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit <i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-secondary">Song <i class="fas fa-music"></i></a>
                            <a href="" class="btn btn-danger">Delete <i class="fas fa-trash"></i></a>

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    @if(isset($singers))
        <div class= "row">
            <ul class="pagination" style="margin: auto;">
                @if($singers->currentPage() != 1)
                    <li class="page-item"><a class="page-link" href="{!! str_replace('/?','?',$singers->url($singers->currentPage()-1) )!!}">Previous</a></li>
                @endif

                @for($i = 1; $i <= $singers->lastPage(); $i++)
                    <li class="{!! ($singers->currentPage() == $i) ? 'active' : 'page-item' !!}"><a class="page-link" href="{!! str_replace('/?','?',$singers->url($i) )!!}">{!! $i !!}</a></li>
                @endfor
                @if($singers->currentPage() != $singers->lastPage())
                    <li class="page-item"><a class="page-link" href="{!! str_replace('/?','?',$singers->url($singers->currentPage()+1) )!!}">Next</a></li>
                @endif
            </ul>
        </div>
    @endif

@endsection
