<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 

class AjaxController extends Controller
{
    public function searchSingerAjax(Request $request){
    	if($request->ajax()){
            $name = $request->singer;
    		$singers = DB::table('tbl_singers')->where('name','LIKE','%'.$name.'%')->get();
            $output="";
    		if($singers != null){
    			foreach ($singers as $singer) {
    				$id_singer = $singer->id;
    				$output.= " <button type='button' class='cs--goi_y btn btn-outline-primary' 
                    value='".$id_singer."'>".$singer->name."</button> ";   				
    			}
    			return Response($output);
    		}
    	}
    }

    public function searchArtistAjax(Request $request){
    	if($request->ajax()){
            $name = $request->artist;
    		$artists = DB::table('tbl_artists')->where('name','LIKE','%'.$name.'%')->get();
            $output="";
    		if($artists != null){
    			foreach ($artists as $artist) {
    				$id_artist = $artist->id;
    				$output.= " <button type='button' class='ns--goi_y btn btn-outline-primary' value='".$id_artist."'>".$artist->name."</button> ";
    			}
    			return Response($output);
    		}
    	}
    }
}
