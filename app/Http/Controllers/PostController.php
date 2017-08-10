<?php

namespace App\Http\Controllers;

use App\Events\SendFcmNotification;
use App\Notification;
use App\post;
use App\thread;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $post = new post();
        $post->text = $request['text'];
        $post->thread_id = $request['thread_id'];
        $post->user_id = $request->user()->id;
        $post->save();

        //sending notification
        $thread = thread::find($post->thread_id);
        $thread->load(['user']);
        $message['token'] = $thread->user->fcm_token;
        $message['title'] = Auth::user()->first_name.' reply on your thread';
        $message['body'] = (thread::find($post->thread_id)->title);
        event(new SendFcmNotification($message));

        //saving to database
        $notification = new Notification();
        $notification->user_id = $thread->user->id;
        $notification->title = $message['title'];
        $notification->body = $message['body'];
        $notification->from_id = Auth::id();
        $notification->thread_id = $post->thread_id;
        $notification->save();
        return redirect(route('home'));
    }


    public function show($id)
    {
        $user = Auth::user();
        $thread = thread::find($id);
        $thread->load(['user']);
        $posts = post::where('thread_id',$id)->get();
        $posts->load(['user']);
        //dd($thread);
        return view('posts')
            ->with('user',$user)
            ->with('posts',$posts)
            ->with('thread',$thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $post->text = $request['text'];
        $post->update();
        return redirect(route('posts.show', $request['thread_id']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect(route('posts.show',request()->thread_id));
    }
}
