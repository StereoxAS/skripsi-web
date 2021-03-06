<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class WebController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index() {
        //$posts =  Post::orderBy('created_at', 'desc')->get();
        //return selected number of posts
        $posts =  Post::orderBy('created_at', 'desc')->paginate(10);
        return view('browse')->with('posts', $posts);
    }
    // Controller resource methods
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $message = "Page Created";
        $this->validate($request, [
            'title' => 'required',
            'short_desc' => 'required'
        ]);
        // TODO: Add validation for
        /*
            'pictures' => 'image|nullable|max:1999'
        */
        $post = new Post;

        //PDF Parse
        if ($request->hasFile('file_upload')) {
            $parser = new \Smalot\PdfParser\Parser();
            $pdf    = $parser->parseFile($request->file('file_upload'));

            $text   = str_replace("\n", "<br />", $pdf->getText()); // full unformatted text
            $text   = trim($text); // trim all tabs
            //$text   = preg_replace('!\d+!', '<sup>$0</sup>', $text); // turns ALL decimals to subscript
            /*

            */

            try {
                $post->body = $text;
            } catch (\Illuminate\Database\QueryException $ex) {
                $message = "Error saving text file";
                $post->body = "Text is too long to display";
            }

            //saving file
            $fileName = pathinfo($request->file('file_upload')->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $request->file('file_upload')->getClientOriginalExtension();
            $fileSave = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('file_upload')->storeAs('public/files/', $fileSave);
            $post->file = $fileSave;
        }
        $post->title = $request->input('title');
        $post->short_desc = $request->input('short_desc');
        $post->user_id = auth()->user()->id;
        $post->creator = auth()->user()->name;
        $post->save();

        return redirect('/browse')->with('success', $message);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('page')->with('post', $post);
    }
    public function edit($id)
    {
        $post = Post::find($id);
        // Editing permission only for creator function [DONE]
         /*
            if (auth()->user()->id != $post->user_id) {
                return redirect('/page/'. $id)->with('post', $post)->with('error', 'You cannot edit pages you did not create');
            }
        */
        return view('rest.edit')->with('post', $post);
    }
    public function update(Request $request, $id)
    {
        //Redirect from Edit
        $this->validate($request, [
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required'
        ]);
        
        $post = Post::find($id);
        
        $posts = Post::all();
        foreach ($posts as $post) {
            if ($post->user_id == $user->id) {
                $post->creator = $user->name
            }
        }
        
        $post->title = $request->input('title');
        $post->body = $request->input('description');
        $post->short_desc = $request->input('short_desc');
        $post->user_id = auth()->user()->id;
        $post->creator = auth()->user()->name;
        $post->save();

        //return view('page')->with('post', $post);
        return redirect('page/'.$id)->with('success', 'Page Updated')->with('post', $post);
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        // Deleting only for creator function
        if (auth()->user()->id != $post->user_id) {
            return redirect('/page/'. $id)->with('post', $post)->with('error', 'You cannot edit pages you did not create');
        }

        // Deleting respective files/image
        if ($post->picture != 'noImage.png') {
            Storage::delete('files/' . $post->picture);
        }
        
        $post->delete();
        return redirect('/browse')->with('success', 'Page Deleted');
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
    // Overrides
    public function messages()
    {
        /*
        return [
            'title.required' => 'Judul harus diisi',
            'description.required'  => 'Deskripsi harus diisi',
        ];
         */
    }
}
