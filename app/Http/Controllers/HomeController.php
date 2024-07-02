<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Post::all();
       // return view('home');
        return view('home')->with('posts', $data);
    }

    public function addNote()
    {
       // return view('addNote');
        return view('addNote_POST');
    }
    public function mainPage()
    {
        return view('mainpage');
    }
    public function addItem(Request $request)
    {
      //  $data = Post::create($request->all());

        //return response()->json(null,201);
        return 'ok';

    }

    public function store(Request $request)
    {
        $data = Post::create($request->all());

       // return response()->json(null,201);

        return view('addNote_POST');
    }

    public function del($id)
        {
    if(!empty($id))
    {
    $post = Post::find($id);
    $post->delete();
    }

    return  $this->index();
        }

    public function search(Request $request)
    {

      //  dd($request);

       // $data = Post::found($request->all());   'name','LIKE',"%{$search}%"

        
        $data  = Post::where('text','LIKE', "%{$request->search}%")->get();

        // return response()->json(null,201);

        return view('home')->with('posts', $data);
    }



}
