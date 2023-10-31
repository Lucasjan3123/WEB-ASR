<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $request->validate([

            'nama' => 'required',
            'email' => 'required',
            'date'=> 'required',
            '_blog_id' => "required",
             'comment' => 'required',

           
    ]);


       
        $now = Carbon::now();
        $comment = new Comment;
        $comment->nama = $request ->nama;
        $comment->email = $request ->email;
        $comment ->date = $now;
        $comment->_blog_id = $id;
        $comment->comment = $request->comment;

        $comment->save();

        
       
        
        return redirect('/News&Event/ShowBlog/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Comment = Comment::where('id',$id)->delete();
        return redirect('/News&Event/ShowBlog/'.$Comment);
    }
}
