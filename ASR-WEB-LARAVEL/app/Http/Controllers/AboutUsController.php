<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    
    public function vision(){
        return view('Halaman AboutUS.Vision&Mission');
    }
    public function Profile(){
        return view('Halaman AboutUS.Profile&HistoryASR');
    }

    public function Structure(){
        return view('Halaman AboutUS.StuructureASR');
    }

    public function OurFinest(){
        return view('Halaman AboutUS.OurFinestWork');
    }
    public function home(){
        return view('Halaman AboutUS.joinMember');
    }
    
    public function Volunteer(){
        return view('Halaman AboutUS.joinVolunteer');
    }

}

?>