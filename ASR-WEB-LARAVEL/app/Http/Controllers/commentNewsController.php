<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentNews;
use Carbon\Carbon;
use Illuminate\Http\Request;

class commentNewsController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        //
        $request->validate([

            'nama' => 'required',
            'email' => 'required',
            'date'=> 'required',
            'news_id' => "required",
             'comment' => 'required',

           
    ]);


       
        $now = Carbon::now();
        $comment = new CommentNews;
        $comment->nama = $request ->nama;
        $comment->email = $request ->email;
        $comment ->date = $now;
        $comment->news_id = $id;
        $comment->comment = $request->comment;

        $comment->save();

        
       
        
        return redirect('/News&Event/Shownews/'.$id);
    }

    public function destroy($id)
    {
        //
        $Comment = CommentNews::where('id',$id)->delete();
        return redirect('/News&Event/Shownews/'.$Comment);
    }

}
