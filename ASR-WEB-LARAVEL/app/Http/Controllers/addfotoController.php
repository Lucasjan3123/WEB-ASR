<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use File;
class addfotoController extends Controller
{
    //

    protected function addfoto($id){
        $user =User::find($id);
        return view('halamanAdminArea.halamanUpdatedFoto', ['users'=>$user]);
    }


    // public function createFoto(Request $request){
    //     $this->validate($request,[
    //        'foto' => 'required|mimes:jpeg,jpg,png',
    //    ]);

    //    $imageName = time().'.'.$request ->foto ->extension();
    //    $request ->foto->move(public_path('image'), $imageName);
    //    User::create([
    //        'foto' => $imageName
    //    ]);
     
    //    return redirect('/addfoto/' );
    // }
    public function updateProfilePicture(Request $request,$id)
{
    $user = User::find($id);
    if ($request->has('foto')){
        $path = "image/";
        File::delete($path. $user->foto);
        $namaGambar= time().'.'.$request ->foto ->extension();
        $request ->foto->move(public_path('image'), $namaGambar);
        $user ->foto = $namaGambar;
        $user -> save();
    }

    // $imageName = time().'.'.$request ->foto ->extension();
    // $request ->foto->move(public_path('image'), $imageName);

    // $user->foto->$imageName;
    // $user->save();
//  return redirect('/addfoto/' .$id);

return redirect('/AdminArea/blog');

}
}
