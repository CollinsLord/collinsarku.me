<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
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
         
         return view('Pages.contact');
    }
    public function postContacts(Request $request){
        $this->validate($request,[
            'name' =>'required',
           'email' =>'required|email',
           'phone' =>'required',
           'message' =>'required'

        ]);

            $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'bodyMessage' =>$request->message
            );

        Mail::send('email.contact', $data, function($messages) use ($data){
            $messages->from($data['email']);
            $messages->to('arkucollins@gmai.com');

            
         });
       //Session::flash('success','Your email was Sent');
       //return redirect()->url('/');
        return redirect()->back()->with('succesful', 'Your Email has been sent.');
    }

} 