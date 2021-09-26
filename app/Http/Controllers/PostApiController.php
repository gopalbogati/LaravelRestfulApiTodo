<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostApiController extends Controller
{
    //
    public function index(){

        return Post::all();

    }

    public function create(Request $request){
        return Post::CREATE(array(
        'title' => $request->title,
        'content' => $request->content));
    }

    public function update(Post $post, Request $request){

       $post->update(array($request->title,$request->content));


    }

    public function destroy(Post $post, Request $request){
        return $post->delete(array($request->title,$request->content));
    }
}

