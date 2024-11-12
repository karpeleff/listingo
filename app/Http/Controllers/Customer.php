<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Customer  extends Controller
{
    public function search(Request $request)
    {

        //  dd($request);

        // $data = Post::found($request->all());   'name','LIKE',"%{$search}%"


        $data  = Post::where ('text','LIKE', "%{$request->search}%")
                     ->where ('location','LIKE', "%{$request->location}%")
                     ->get();

        // return response()->json(null,201);

        return view('home')->with('posts', $data);
    }

}
