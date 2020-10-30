<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug) {

        // $post = DB::table('posts')->where('slug',$slug)->first();
        // $post = Post::where('slug', $slug)->firstorfail();

        // $posts = [
        //     '1' => 'my very first post',
        //     '2' => 'my very second post'
        // ];
  
    
        return view('hello',[
            'displayPost' => Post::where('slug', $slug)->firstorfail()
        ]);
    }
}
