<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact_SupportController extends Controller
{
    //

    public function Contact(){
         
        return view("Halaman Contact & Support.NeedHelp");
    }

   
        
        function sendMail(Request $request){
       
            $request->validate([
                'Name'=>'required',
                'Email'=>'required|email',
                'Subject'=>'required',
                'Message'=>'required'
            ]);
           
            if($this->isOnline()){
                $mail_data =[
                    'recipient'=>"lucasjanmalvin20@gmail.com",
                    'fromEmail'=>$request->Email,
                    'fromName'=>$request->Name,
                    "subject"=>$request->Subject,
                    "body"=>$request->Message,
    
                ];
                \Mail::send('email-template',$mail_data,function($message)use($mail_data){
                    $message->to($mail_data['recipient'])
                            ->from($mail_data['fromEmail'],$mail_data['fromName'])
                            ->subject($mail_data['subject']);
                });
                return redirect()->back()->with('status', 'Thank you, we have received your email');
            }else{
                return redirect()->back()->withInput()->with('error','Check your internet connection');
            }
    
        }
    
    
        public function isOnline($site = "https://youtube.com"){
            if (@fopen($site,'r')){
                return true;
            }else{
                return false;
            }
        }
    public function ContactUS(){
         
        return view("Halaman Contact & Support.ContactUS");
    }

    public function Feedback(){
         
        return view("Halaman Contact & Support.SendUSYourFeedback");
    }

    function send(Request $request){
       
        $request->validate([
            'Name'=>'required',
            'Email'=>'required|email',
            'Subject'=>'required',
            'Message'=>'required'
        ]);
       
        if($this->Online()){
            $mail_data =[
                'recipient'=>"lucasjanmalvin20@gmail.com",
                'fromEmail'=>$request->Email,
                'fromName'=>$request->Name,
                "subject"=>$request->Subject,
                "body"=>$request->Message,

            ];
            \Mail::send('email-template1',$mail_data,function($message)use($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('status', 'Thank you, we have received your email');
        }else{
            return redirect()->back()->withInput()->with('error','Check your internet connection');
        }

    }


    public function Online($site = "https://youtube.com"){
        if (@fopen($site,'r')){
            return true;
        }else{
            return false;
        }
    }

    function Subscribe(Request $request){
       
        $request->validate([
            'Name'=>'required',
            'Email'=>'required|email',
            'Subject'=>'required',
            'Message'=>'required'
        ]);
       
        if($this->inOnline()){
            $mail_data =[
                'recipient'=>"lucasjanmalvin20@gmail.com",
                'fromEmail'=>$request->Email,
                "subject"=> "Permintaan Berlangganan Blog",

            ];
            \Mail::send('email-template2',$mail_data,function($message)use($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('status', 'Thank you, we have received your email');
        }else{
            return redirect()->back()->withInput()->with('error','Check your internet connection');
        }

    }


    public function inOnline($site = "https://youtube.com"){
        if (@fopen($site,'r')){
            return true;
        }else{
            return false;
        }
    }


}


?>