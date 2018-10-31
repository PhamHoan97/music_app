<?php

namespace App\Http\Middleware;

use Closure;

class Checkuploadsong
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = session('data')['id'];
        $name = $request->name_song;
        $newsinger = $request->newsinger;
        $newartist = $request->newartist;
        $list_singer = $request->list_singer;
        $list_artist = $request->list_artist;
        $list_style = $request->list_style;

        if(!$id){
            return redirect()->route('song')->with('status','Bạn chưa đăng nhập vào hệ thống nên không thể đăng bài hát !!');
        }

        if(!$name){
            return redirect()->route('song')->with('status','Bạn cần nhập tên bài hát !!');           
        }

        if(($list_singer == 0) && ($newsinger == null)){
           return redirect()->route('song')->with('status','Bạn cần chọn ca sĩ thể hiện !!');     
        }

        if($list_artist == 0 && ($newartist == null)){
           return redirect()->route('song')->with('status','Bạn cần chọn nhạc sĩ viết bài hát này !!');     
        }

        if($list_style == 0 ){
           return redirect()->route('song')->with('status','Bạn cần chọn thể loại của bài hát này !!');     
        }

        if(!$request->hasFile('song')){
            return redirect()->route('song')->with('status','Bạn phải chọn file bài hát !!'); 
        }else{    
            $file = $request->file('song');
            if(!in_array($file->getClientOriginalExtension(),['mp3','mp4'])){
                 return redirect()->Route('song')->with('status','File nhạc không đúng định dạng !!');
            }
        }        

        if(!$request->hasFile('image')){
            return redirect()->route('song')->with('status','Bạn phải chọn ảnh cho bài hát !!'); 
        }else{    
            $file = $request->file('image');
            if(!in_array($file->getClientOriginalExtension(),['png','jpeg', 'jpg'])){
                 return redirect()->Route('song')->with('status','File ảnh không đúng định dạng !!');
            }
        }

        return $next($request);
    }
}
