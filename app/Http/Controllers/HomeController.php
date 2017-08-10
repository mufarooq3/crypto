<?php

namespace App\Http\Controllers;

use App\post;
use App\thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $threads=thread::all();
        $links=DB::select(DB::raw("select *,substring(cast(text as CHAR),LOCATE('<a',cast(text as CHAR)),LOCATE('</a>',cast(text as CHAR))-LOCATE('<a',cast(text as CHAR))+4) as link from posts WHERE text like '%<a%'"));

        $threads->load(['posts']);
//        $threads=DB::select(DB::raw("select * from (select thread_id, text as post_text, user_id as post_user ,max(id) ,updated_at as post_updated from posts group by thread_id) t1 join threads on t1.thread_id = threads.id"));
//        $threads=DB::select(DB::raw("select * from (SELECT thread_id, text as post_text, id as post_id, user_id as post_user , updated_at as post_updated FROM posts group by thread_id) t1 join threads on t1.thread_id = threads.id"));
        //dd($threads[0]->posts[0]);
//        dd($links);
        $user = Auth::user();
        $user->load(['notifications']);
//        dd($user);
        return view('home')
            ->with('threads',$threads)
            ->with("links",$links)
            ->with('user', $user);
    }

    public function update_token(Request $request){
        $user = Auth::user();
        if($user) {
            $user->fcm_token = $request->token;
            $user->update();
            return response('Token successfully updated.',200);
        }
        else
            return response('Guest user are not allowed to use notification service', 500);
    }

    public function profile()
    {
        return view('profile');
    }
}