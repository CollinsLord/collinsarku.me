<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\Controller;

class PagesController extends Controller {
    
    public function getIndex() {
        return view('Pages.index');
    }
    
    public function getProject() {
         return view('Pages.project');
    }

    public function getContact() {
         return view('Pages.contact');
    }

    public function getCv() {
        return view('Pages.cv');  
    }
     public function getHire() {
        return view('Pages.hire');  
    }
     public function getAbout() {
        return view('Pages.about');  
    }
    public function getinfo(){
         
         return view('Page.contact');
    }
    public function postContacts(Request $request){
        $this->validate($request,[
           'email' =>'required|email',
           'name' =>'required',
           'phone' =>'required',
           'message' =>'required'

        ]);

            $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'message'=>$request->message,
            'phone' =>$request->phone
            );

        Mail::send('email.contact', $data, function($messages) use ($data){
            $messages->from($data['email']);
            $messages->to('arkucollins@gmai.com');
            $messages->subject($data['name']);

            
           

         });
    }

} 