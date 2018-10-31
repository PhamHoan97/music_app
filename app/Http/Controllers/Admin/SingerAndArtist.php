<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Singer;
use App\Artist;
class SingerAndArtist extends Controller
{
    public function redirectSinger(){
    	$singers = DB::table('tbl_singers')->paginate(5);

    	return view('ADMIN.admin_singer',['singers' => $singers]);
    }

    public function redirectArtist(){
    	$artists = DB::table('tbl_artists')->paginate(5);

    	return view('ADMIN.admin_artist',['artists' => $artists]);
    }

    public function excuteAddSinger(Request $request){
		$name = $request->name;
        $date = $request->date;
        $phone = $request->phone;
        $more_infor = $request->more_infor;
        $avatar = $request->file('avatar');
        $cover = $request->file('cover');

        // covert time mm/dd/yyyy to yyyy/mm/dd
        $date = str_replace('/', '-', $date);
        $birth = date("Y-m-d", strtotime($date));

        //create object by model
        $singer = new Singer();

        $singer->name = $name;
        $singer->birth = $birth;
        $singer->phonenumber = $phone;
        $singer->more_infor = $more_infor;

		// upload avatar
        $avatar_name = mt_rand();
        $avatar_type = $avatar->getClientOriginalExtension();
        $avatar_link = "avatar/";
        $avatar->move($avatar_link,$avatar_name.".".$avatar_type);

        $singer->avatar_path = $avatar_link.$avatar_name.".".$avatar_type;

        // upload cover
        $cover_name = mt_rand();
        $cover_type = $cover->getClientOriginalExtension();
        $cover_link = "cover/";
        $cover->move($cover_link,$cover_name.".".$cover_type);

        $singer->cover_path = $cover_link.$cover_name.".".$cover_type;

        $singer->save();

        return redirect()->Route('redirectSinger')->with('status','Thêm ca sĩ thành công!!');
    }

    public function excuteAddArtist(Request $request){
        $name = $request->name;
        $date = $request->date;
        $phone = $request->phone;
        $more_infor = $request->more_infor;
        $avatar = $request->file('avatar');
        $cover = $request->file('cover');

        // covert time mm/dd/yyyy to yyyy/mm/dd
        $date = str_replace('/', '-', $date);
        $birth = date("Y-m-d", strtotime($date));

        //create object by model
        $singer = new Artist();

        $singer->name = $name;
        $singer->birth = $birth;
        $singer->phonenumber = $phone;
        $singer->more_infor = $more_infor;

        // upload avatar
        $avatar_name = mt_rand();
        $avatar_type = $avatar->getClientOriginalExtension();
        $avatar_link = "avatar/";
        $avatar->move($avatar_link,$avatar_name.".".$avatar_type);

        $singer->avatar_path = $avatar_link.$avatar_name.".".$avatar_type;

        // upload cover
        $cover_name = mt_rand();
        $cover_type = $cover->getClientOriginalExtension();
        $cover_link = "cover/";
        $cover->move($cover_link,$cover_name.".".$cover_type);

        $singer->cover_path = $cover_link.$cover_name.".".$cover_type;

        $singer->save();

        return redirect()->Route('redirectArtist')->with('status','Thêm nhạc sĩ thành công!!');
    }

    public function redirectUser(){

        $values = array();
        $users = DB::table('tbl_accounts')->where('is_admin',1)->paginate(8);

        foreach ($users as $key => $user) {
                $id = $user->id;
                $detail = DB::table('tbl_account_details')->where('id_account',$id)->first();
                if($detail){
                    $values[] = [$id => ['detail' => $detail]];
                }
            }    
        return view('ADMIN.admin_user',array('users' => $users, 'values' => $values));
    }
}
