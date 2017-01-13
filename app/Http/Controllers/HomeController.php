<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $post=DB::table('posts')
                ->join('users','user_id','=','users.id')
                ->select('posts.*','users.name')
                ->get(); 
                $i=0;
        foreach ($post as $posts) {

            $posts= Post::find($posts->id);
            // $posts->users()->where('user_id',$posts->id)->get();          
            $post->get($i)->published_at= $posts->created_at->diffForHumans();
            $i++;                     
        }
        // $post=collect([$post]);
        
        return view('home',compact('post'));
    }
}
