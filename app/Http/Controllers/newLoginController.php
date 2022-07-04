<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class newLoginController extends Controller
{


    public function store(Request $request){
      //  var_dump($_POST);
       $request->validate([
             'title' => 'required' , 
             'description' =>'required'
       ]);

        $new_post = new Post();
        $new_post->title = $request->title;
        $new_post->description = $request->description;
        $new_post->save();
        return   redirect()
                ->route('homePage')
                ->with('success' , 'success Add post');
       }

    public function toHome(){
        return view('page.home');
    }

    public function index(){
        $all_posts = Post::all();
        return view('posts' , ['posts' => $all_posts]);
    }

    public function destroy($id){
        $post =  Post::find($id);
        $post->delete();
        return  redirect()
              ->route('All.posts')
              ->with('success' , 'success Deleted');    
    }

    public function edit($id){
        $post = Post::find($id);
        return view('editPost' , ['posts' =>$post]);
    }

    public function update(Request $request  , $id){
        $request->validate([
            'title' => 'required' , 
            'description' =>'required'
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
         return redirect()
                ->route('All.posts')
                ->with('success' , 'Post Updated Successfully ');
    }
}
