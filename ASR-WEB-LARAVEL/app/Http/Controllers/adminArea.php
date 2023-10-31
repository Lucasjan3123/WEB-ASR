<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\kategori;
use App\Models\tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminArea extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function home(){
        return view("HalamanAdminArea.home");
    }

    public function blogAdmin(){
        $blog = blog::all();
        return view("HalamanAdminArea.blog", ['blog'=>$blog]);
    }

    public function edit($id){
        $blog = blog::find($id);
        $kategori = DB::table('_kategori')->get();

        return view("HalamanAdminArea.EditBlog", ['blog'=>$blog, 'kategori'=>$kategori]);
    }

    public function show($id){
        $kategori = kategori::all();
        $blog = Blog::findOrFail($id);
        $tag = tag::all();
        // $today = now();

        // $relatedBlogs = Blog::whereDate('created_at', '>=', $today)
        //                      ->where('id', '<>', $blog->id)
        //                      ->get();

        return view("HalamanAdminArea.Show",compact('blog', 'kategori','tag'));
    }


    public function daftarUser(){
        $users =User::all();
        return view("HalamanAdminArea.Daftaruser", ['users'=>$users]);
    }

    
}


?>