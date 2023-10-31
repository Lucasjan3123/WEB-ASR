<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Comment;
use App\Models\CommentNews;
use App\Models\kategori;
use App\Models\news;
use App\Models\tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Artesaos\SEOTools\Facades\SEO;
use Illuminate\Support\Str;


class News_EventController extends Controller
{
    //
    public function index(Request $request){
        $keyword =$request->keyword;
        $blog =blog::where('nama', 'LIKE', '%' .$keyword. '%') 
        ->orwhere('Title', 'LIKE', '%' .$keyword. '%')
        ->get();
        $news =news::where('Author', 'LIKE', '%' .$keyword. '%') 
        ->orwhere('Title', 'LIKE', '%' .$keyword. '%')
        ->get();
        
    
        $news1 =news::where('id',8)->get();
        $news2 =news::where('id',9)->get();
        $news3 =news::where('id',10)->get();

        return view("Halaman News&Event.News&Event" ,['blog'=>$blog, 'news'=>$news, 'news1'=>$news1,'news2'=>$news2,'news3'=>$news3]);
    }

    public function blog(Request $request){
        $keyword =$request->keyword;
        // $barang = barang::all();
        $blog =blog::where('nama', 'LIKE', '%' .$keyword. '%') 
        ->orwhere('Title', 'LIKE', '%' .$keyword. '%')
        ->get();
        $kategori = kategori::all();
        $tag = tag::all();
        $blogs = blog::paginate(5);
        $created = blog::orderBy('created_at', 'desc')->get();

        // Get archive data from blogs
        $blogArchives = blog::orderBy('created_at', 'desc')->get();
        $archives = $blogs->groupBy(function($blog) {
            return $blog->created_at->format('F Y');
        });
    
        

        return view("Halaman News&Event.blog", ['blog'=>$blog, 'kategori'=>$kategori, 'tag'=>$tag, 'blogs'=>$blogs, 'archives'=>$archives , 'created'=>$created ,'blogArchives'=>$blogArchives ]);
    
    }

    public function Showblog($id){
        $blog = blog::find($id);
        $kategori = kategori::all();
        $tag = tag::all();
        $user = User::all();
        $commentCount = Comment::where('_blog_id', $id)->count();
        // Set judul halaman menggunakan judul artikel
        // SEO::setTitle($blog->title);
    
   
        return view("Halaman News&Event.ShowBlog", ['blog'=>$blog, 'kategori'=>$kategori, 'tag'=>$tag , 'users'=>$user, 'commentCount'=>$commentCount ]);
    
    }

   

            public function share($id, $platform)
            {
            // Ambil konten blog berdasarkan ID
                $blog = blog::find($id);

                // Ambil data yang diperlukan
                $title = $blog->title;
                $content = $blog->Content;
                $imageUrl = $blog->gambar;
                // Logika untuk berbagi ke Twitter
                if ($platform === 'twitter') {
                // Buat URL berbagi ke Twitter
                $url = 'https://twitter.com/intent/tweet?text=' . urlencode($title) . '&url=' . urlencode(url('/News&Event/ShowBlog/' . $id));

                // Redirect ke URL berbagi Twitter
                return redirect($url);
                }

                // Logika untuk berbagi ke Facebook
                if ($platform === 'facebook') {
                // Buat URL berbagi ke Facebook
                $url = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode(url('/News&Event/ShowBlog/' . $id));

                // Redirect ke URL berbagi Facebook
                return redirect($url);
                }

                // // Logika untuk berbagi ke Instagram
                // if ($platform === 'instagram') {
                //     // Buat URL tautan berbagi Instagram
                //     $instagramShareUrl = 'https://www.instagram.com/?url=' . urlencode($imageUrl);
            
                //     // Redirect pengguna ke URL tautan berbagi Instagram
                //     return redirect()->away($instagramShareUrl);
                // }
            
            return redirect()->route('show.blog', ['id' => $id])->with('success', 'Blog berhasil dibagikan ke ' . $platform);
            }




    public function Shownews($id){
        $news = news::find($id);
        $kategori = kategori::all();
        $tag = tag::all();
        $user = User::all();
        $commentCount = CommentNews::where('news_id', $id)->count();

        return view("Halaman News&Event.ShowNews", ['news'=>$news, 'kategori'=>$kategori, 'tag'=>$tag , 'users'=>$user, 'commentCount'=>$commentCount  ]);
    
    }

    public function event(Request $request){
        $keyword =$request->keyword;
        // $barang = barang::all();
        $news =news::where('Author', 'LIKE', '%' .$keyword. '%') 
        ->orwhere('Title', 'LIKE', '%' .$keyword. '%')
        ->get();
        $news1 = news::paginate(5);
        
        // $news = news::all();

        return view("Halaman News&Event.Event&Activities", ['news'=>$news, 'news1'=>$news1 ]);
    }

    public function create( ){
        // $users = Auth::user();
        $kategori = kategori::all();
        return view("HalamanAdminArea.createBlog",['kategori' =>$kategori] );

    }
    
    public function blogAdmin(){
        return view("HalamanAdminArea.blog");
    }

    // public function archive()
    // {
    //     $archives = blog::select(DB::raw('MONTH(date) as month, YEAR(date) as year'))
    //                     ->groupBy('month', 'year')
    //                     ->orderBy('date', 'desc')
    //                     ->get();
    
    //     return view('blogs.archive', compact('archives'));
    // }
    
    



   
}
?>