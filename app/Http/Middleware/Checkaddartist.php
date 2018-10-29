<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class Checkaddartist
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

        $name = $request->name;
        $birth = $request->date;
        $phone = $request->phone;
        $more_infor = $request->more_infor;
        $artists = DB::table('tbl_artists')->get();


        if(empty($name)){
            return redirect()->route('redirectArtist')->with('name','Nội dung này không được trống !!');
        }

        if(empty($birth)){
            return redirect()->route('redirectArtist')->with('date','Nội dung này không được trống !!');
        }

        if(empty($phone)){
            return redirect()->route('redirectArtist')->with('phone','Nội dung này không được trống !!');
        }

        if(empty($more_infor)){
            return redirect()->route('redirectArtist')->with('more_infor','Nội dung này không được trống !!');
        }

        foreach ($artists as $key => $artist) {              
            if($name == $artist->name){
                return redirect()->route('redirectArtist')->with('name','Tên ca sĩ này đã được sử dụng !!');
            }
        }

        if(!preg_match("/^[0-9]{10}$/", $phone) && !preg_match("/^[0-9]{11}$/", $phone)){
            return redirect()->route('redirectArtist')->with('phone','Không đúng định dạng số điện thoại 10-11 số!!');            
        }

        if(!$request->hasFile('avatar')){
            return redirect()->route('redirectArtist')->with('avatar','Nội dung này không được trống !!'); 
        }else{    
            $file = $request->file('avatar');
            if(!in_array($file->getClientOriginalExtension(),['png','jpg','jpeg'])){
                 return redirect()->Route('redirectArtist')->with('avatar','File không đúng định dạng !!');
            }
        }

        if(!$request->hasFile('cover')){
            return redirect()->route('redirectArtist')->with('cover','Nội dung này không được trống !!'); 
        }else{    
            $file = $request->file('cover');
            if(!in_array($file->getClientOriginalExtension(),['png','jpg','jpeg'])){
                 return redirect()->Route('redirectArtist')->with('cover','File không đúng định dạng !!');
            }
        }

        return $next($request);
    }
}
