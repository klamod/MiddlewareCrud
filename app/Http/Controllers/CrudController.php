<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CrudController extends Controller
{
    public function index()
    {
        $data= Post::all();
        return view('crud.index' , compact('data'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'julukan'=>'required|max:10',
            'ciri'=>'required',
        ]);
       Post::create($request->all());
        
        return redirect()->route('index');
    }

    public function arahstore()
    {
        return view('crud.nambah');
    }
    public function delete($id)
    {
        Post::find($id)->delete();
        return redirect()->route('index');

    }

    public function edit(Request $request, $id)
    {
        Post::find($id)->update($request->all());
        return redirect()->route('index');
    }

    public function arahedit($id)
    {
        $data = Post::find($id);
        return view('crud.edit', compact('data'));
    }
}
