<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Song;
use App\Show;
use App\Write;
use App\OwnSong;
use DB;

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
        $description = $request->description;
        $file_song = $request->file('song');
        $file_image = $request->file('image');

        //upload to GD
        Storage::cloud()->put($name."_".$id, file_get_contents($file_song));

        //get song upload
        $dir = '/';
        $recursive = false; // get inner folder
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));

        $songGD = $contents->where('type', '=', 'file')
            ->where('name','=', $name."_".$id)
            ->first();
        //get song path to insert to database    
        $song_path = "http://docs.google.com/uc?export=open&id=".$songGD['path'];
        
       	// upload imagesong
        $imagesong_name = mt_rand();
        $imagesong_type = $file_image->getClientOriginalExtension();
        $imagesong_link = "images_song/";
        $file_image->move($imagesong_link,$imagesong_name.".".$imagesong_type);

        //get image song path to insert
        $image_path = $imagesong_link.$imagesong_name.".".$imagesong_type;

        //get singer sing this song
        $get_singer = null;
        $list_singer = explode(",", $list_singer);
        foreach ($list_singer as $id_singer) {
                $singer = DB::table('tbl_singers')->where('id',$id_singer)->first();
                $get_singer = $get_singer.$singer->name.' ';
            }    
        $put_singer_to_description = "<p class='class-info'>"."Ca sĩ thể hiện: ".$get_singer."</p>"."<br>";

        //get artist write this song    
        $get_artist = null;
        $list_artist = explode(",", $list_artist);
        foreach ($list_artist as $id_artist) {
                $artist = DB::table('tbl_artists')->where('id',$id_artist)->first();
                $get_artist = $get_artist.$artist->name.' ';
            } 
        $put_artist_to_description = "<p class='class-info'>"."Nhạc sĩ: ".$get_artist."</p>"."<br>";

        //put singer and artist to description

        $description = $put_singer_to_description.$put_artist_to_description.$description;

        //get datetime
        $post_time = date('Y-m-d H:i:s');
     //insert song
        $song = new Song();

        $song->song_name = $name;
        $song->song_image_path = $image_path;
        $song->song_path = $song_path;
        $song->description = $description;
        $song->style = $list_style;
        $song->post_time = $post_time;

        $song->save();

        //get song upload 
        $songupload = DB::table('tbl_songs')->where('song_name',$name)->where('song_path',$song_path)->first();

        //insert Ownsong
        $OwnSong =  new OwnSong();

        $OwnSong->id_account = $id;
        $OwnSong->id_song = $songupload->id;
        $OwnSong->save();
		

		return view('APP.song',['status','Đăng nhạc thành công !!']);
    }

        public function deleteFile(Request $request){
        $filename = $request->file;
        // Tìm file và sử dụng ID (path) của nó để xóa
        $dir = '/';
        $recursive = false; //  Có lấy file trong các thư mục con không?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // có thể bị trùng tên file với nhau!
        Storage::cloud()->delete($file['path']);
        return 'File was deleted from Google Drive';
    }

	    public function downloadFile(Request $request){
	        $filename = $request->file;
	        $dir = '/';
	        $recursive = false; // Có lấy file trong các thư mục con không?
	        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
	        $file = $contents
	            ->where('type', '=', 'file')
	            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
	            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
	            ->first(); // có thể bị trùng tên file với nhau!
	        //return $file; // array with file info
	        $rawData = Storage::cloud()->get($file['path']);
	        return response($rawData, 200)
	            ->header('Content-Type', $file['mimetype'])
	            ->header('Content-Disposition', "attachment; filename='$filename'");
	    }

	    public function getAllMusic(){
	        $dir = '/';
	        $recursive = false; // get inner folder
	        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
	        $songs = $contents->where('type', '=', 'file');
	//        return view('showallmusic',['songs'=> $songs]);
	        return $songs;
	    }
}
