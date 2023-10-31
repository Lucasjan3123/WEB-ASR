<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\tag;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $kategori = kategori::all();
        $tag = tag::all();

        return view('HalamanAdminArea.kategori', ['kategori'=> $kategori,'tag'=> $tag]);
    }


    public function create(Request $request){
        $this->validate($request,[
            'nama' => 'required',
        ]);

        kategori::create([
            'nama'=>$request->nama,
        ]);
        
        return redirect("/AdminArea/kategori");
    }


    public function update(Request $request, $id){
        
        $kategori = kategori::find($id);
        $input = $request->all();
        $kategori->fill($input)->save();
        
        return redirect("/AdminArea/kategori");
    }

    public function delete($id)
    {
       $kategori = kategori::find($id);
        $kategori->delete();
            return redirect("/AdminArea/kategori");
            // dd($review);
        
        
    }

}

?>