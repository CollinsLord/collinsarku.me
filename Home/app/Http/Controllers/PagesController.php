<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function getIndex() {
        return view('Pages.welcome');

    }
    
    public function getAbout() {
         return view('Pages.myhome');
    }

    public function getContact() {
         return view('Pages.main');
    }

    public function postContact() {
        
    }



} 