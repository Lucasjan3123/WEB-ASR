<?php

namespace App\Http\Controllers;


use App\Models\blog;
use App\Models\news;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class blogController extends Controller
{
    //

    public function post(Request $request){
    
        $request->validate([

            'nama' => 'required',
            'users_id'=>'required',
            '_kategori_id' => "required",
            'title' => 'required' ,
            'gambar'=> 'required|mimes:jpeg,jpg,png',
             'content' => 'required',
             'tag1' => 'required',
             'tag2' => 'required',

           
    ]);


        $imageName = time().'.'.$request ->gambar ->extension();
        $request ->gambar->move(public_path('image'), $imageName);
        
        $idUser = Auth::id();  
        

        DB::table('_blog')->insert([
            'nama'=>$request->nama,
            'users_id'=>$request->users_id,
            'title' => $request->title,
            "content" => $request->content,
            "_kategori_id" => $request->_kategori_id,
            'gambar' =>$imageName,
            "tag1"=>$request->tag1,
            "tag2"=>$request->tag2,
            "tag3"=>$request->tag3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')


        ]);
        
       
        
        return redirect('/AdminArea/blog');
    }
    public $timestamps = false;
    
    public function update(Request $request,$id){
    
       
        $blog = blog::find($id);
        $idUser = Auth::id();  


        if ($request->has('gambar')){
            $path = "image/";
            File::delete($path. $blog->gambar);
            $namaGambar= time().'.'.$request ->gambar ->extension();
            $request ->gambar->move(public_path('image'), $namaGambar);
            $blog ->gambar = $namaGambar;
            $blog -> save();
            }
        //    $blog ->Author = $request->Author;
           $blog->users_id = $request->users_id;
           $blog ->Title = $request->title;
           $blog ->_kategori_id = $request->_kategori_id;
           $blog ->Content = $request->content;
           $blog -> tag1 =$request->tag1;
           $blog -> tag2 =$request->tag2;
           $blog -> tag3 =$request->tag3;



           $blog ->save();
        return redirect('/AdminArea/blog');
    }

    public function delete($id)
    {
        //
        $blog = blog::find($id);

        $path ='image/'; 
        File::delete($path .$blog->gambar);
        $blog->delete();
        return redirect('/AdminArea/blog');
    }
}
