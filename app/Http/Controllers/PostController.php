<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;

class PostController extends Controller
{
     protected function create(Request $request)
    {
    	$post=new Post;
    	$post->title=$request->title;
    	$post->body=$request->body;
    	$post->user_id=$request->user()->id;
        $post->published_at=$request->published_at;
    	if ($request->hasFile('image')) {
                $image=$request->file('image');
                $filename=$post->title.'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save(public_path('/uploads/Posts/'.$filename));
                $post->image=$filename;
        }
        $post->save();
        return redirect('\adminhome');
    }
}
