<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    


    public function create(Request $request){
        $this->validate($request,[
            'name' => 'required',
        ]);

        tag::create([
            'name'=>$request->name,
        ]);
        
        return redirect("/AdminArea/kategori");
    }


    public function update(Request $request, $id){
        
        $tag = tag::find($id);
        $input = $request->all();
        $tag->fill($input)->save();
        
        return redirect("/AdminArea/kategori");
    }

    public function delete($id)
    {
        $tag = tag::find($id);
        $tag->delete();
            return redirect("/AdminArea/kategori");
            // dd($review);
        
        
    }

}

