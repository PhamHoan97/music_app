<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;
use App\Show;
use App\Write;
use App\OwnSong;

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
        $lyric = $request->lyric;
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

        //insert song
        $song = new Song();

        $song->song_name = $name;
        $song->song_image_path = $image_path;
        $song->song_path = $song_path;
        $song->description = $description;
        $song->lyric = $lyric;
        $song->list_style = $song->list_style;

        $song->save();

        //get song upload 
        $songupload = DB::table('rlt_own_songs')->where('song_name',$name)->where('path',$song_path)->first();

        //insert Ownsong
        $OwnSong =  new OwnSong();

        $OwnSong->id_account = $id;
        $OwnSong->id_song = $songupload->id;
        $OwnSong->save();

        //insert Show 
		if($newsinger){
			$show = new Show();
			$show->detail = $newsinger;
			$show->id_song = $songupload->id;
			$show->save();
		}else{
			$singers = explode(',', $list_singer));
			foreach ($singers as $singer) {
				$show = new Show();
				$show->id_song = $songupload->id;
				$show->id_singer = $singer;
				$show->save();
			}
		}

        //insert write 
		if($newartist){
			$write = new Write();
			$write->detail = $newartist;
			$write->id_song = $songupload->id;
			$write->save();
		}else{
			$artists = explode(',', $list_artist));
			foreach ($artists as $artist) {
				$write = new Show();
				$write->id_song = $songupload->id;
				$write->id_write = $artist;
				$write->save();
			}
		}		

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
