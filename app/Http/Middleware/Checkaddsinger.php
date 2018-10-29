<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class Checkaddsinger
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
        $singers = DB::table('tbl_singers')->get();


        if(empty($name)){
            return redirect()->route('redirectSinger')->with('name','Nội dung này không được trống !!');
        }

        if(empty($birth)){
            return redirect()->route('redirectSinger')->with('date','Nội dung này không được trống !!');
        }

        if(empty($phone)){
            return redirect()->route('redirectSinger')->with('phone','Nội dung này không được trống !!');
        }

        if(empty($more_infor)){
            return redirect()->route('redirectSinger')->with('more_infor','Nội dung này không được trống !!');
        }

        foreach ($singers as $key => $singer) {              
            if($name == $singer->name){
                return redirect()->route('redirectSinger')->with('name','Tên ca sĩ này đã được sử dụng !!');
            }
        }

        if(!preg_match("/^[0-9]{10}$/", $phone) && !preg_match("/^[0-9]{11}$/", $phone)){
            return redirect()->route('redirectSinger')->with('phone','Không đúng định dạng số điện thoại 10-11 số!!');            
        }

        if(!$request->hasFile('avatar')){
            return redirect()->route('redirectSinger')->with('avatar','Nội dung này không được trống !!'); 
        }else{    
            $file = $request->file('avatar');
            if(!in_array($file->getClientOriginalExtension(),['png','jpg','jpeg'])){
                 return redirect()->Route('redirectSinger')->with('avatar','File không đúng định dạng !!');
            }
        }

        if(!$request->hasFile('cover')){
            return redirect()->route('redirectSinger')->with('cover','Nội dung này không được trống !!'); 
        }else{    
            $file = $request->file('cover');
            if(!in_array($file->getClientOriginalExtension(),['png','jpg','jpeg'])){
                 return redirect()->Route('redirectSinger')->with('cover','File không đúng định dạng !!');
            }
        }

        return $next($request);

    }
}
