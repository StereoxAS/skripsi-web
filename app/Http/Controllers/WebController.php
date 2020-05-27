<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class WebController extends Controller
{
    public function index() {
        //$posts =  Post::orderBy('created_at', 'desc')->get();
        //return selected number of posts
        $posts =  Post::orderBy('created_at', 'desc')->paginate(2);
        return view('browse')->with('posts', $posts);
    }
    // Controller resource methods
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('description');
        //change this to Auth user
        $post->creator = 'Krishna Aji';
        $post->save();

        return redirect('/browse')->with('success', 'Page Created');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('page')->with('post', $post);
    }
    public function edit($id)
    {
        # code...
    }
    public function update(Request $request, $id)
    {
        # code...
    }
    public function destroy($id)
    {
        # code...
    }
    //--------------------------------------------------------------------------------
    /**
      * Responds to requests to GET /test
   */
   public function getIndex() {
    echo 'index method';
    }
    
    /**
        * Responds to requests to GET /test/show/1
    */
    public function getShow($id) {
        echo 'show method';
    }
    
    /**
        * Responds to requests to GET /test/admin-profile
    */
    public function getAdminProfile() {
        echo 'admin profile method';
    }
    
    /**
        * Responds to requests to POST /test/profile
    */
    public function postProfile() {
        echo 'profile method';
    }
    //--------------------------------------------------------------------------------
}
