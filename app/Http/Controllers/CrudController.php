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
            'nama'=>'required',
            'julukan'=>'required',
            'ciri'=>'required',
        ]);
        Post::create($request->all());
        return redirect()->route('index');
    }

    public function arahstore()
    {
        return view('crud.nambah');
    }
    public function delete()
    {

    }

    public function edit()
    {

    }

    public function arahedit()
    {

    }
}
