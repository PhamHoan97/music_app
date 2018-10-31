<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SongController extends Controller
{
    public function excuteUploadSong(Request $request){
    	$id = session('data')['id'];
        $name = $request->name_song;
        $newsinger = $request->newsinger;
        $newartist = $request->newartist;
        $list_singer = $request->list_singer;
        $list_artist = $request->list_artist;
        $list_style = $request->list_style;
        $file = $request->file('song');
        $file = $request->file('image');
    }
}
