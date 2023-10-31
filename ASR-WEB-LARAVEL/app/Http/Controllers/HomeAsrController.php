<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
            
class HomeAsrController extends Controller
{
    //
    public function home (){
        $news = news::all();
        return view ("Halaman Home.Home" ,["news"=>$news]);
    }
}

?>
