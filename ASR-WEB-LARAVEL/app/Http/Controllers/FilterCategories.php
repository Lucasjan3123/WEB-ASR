<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\kategori;
use App\Models\tag;
use Illuminate\Http\Request;

class FilterCategories extends Controller
{
    //
    public function show($category_id)
    {
        //
        $blogs = blog::where('_kategori_id', $category_id)->get();
        $kategori = kategori::get();
        $tag = tag::all();
        $blog = blog::paginate(5);

        // Get archive data from blogs
        $blogArchives = blog::orderBy('created_at', 'desc')->get();
        $archives = $blogs->groupBy(function($blog) {
            return $blog->created_at->format('F Y');
        });
        

        return view('Halaman News&Event.showCategories', [ 'blog' =>$blogs, 'kategori'=>$kategori, 'tag' =>$tag, 'blogArchives'=>$blogArchives, 'archives' =>$archives , 'blogs' => $blog]);
    }

}
