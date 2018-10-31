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
        $file_song = $request->file('song');
        $file_image = $request->file('image');

        Storage::cloud()->put($name, file_get_contents($file_song));

        $dir = '/';
        $recursive = false; // get inner folder
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));

        $songGD = $contents->where('type', '=', 'file')
            ->where('name','=', $name)
            ->where('size','=', $size )
//            ->where('timestamp')
            ->first();


    }
}
