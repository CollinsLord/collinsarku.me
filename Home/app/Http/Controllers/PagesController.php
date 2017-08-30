<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function getIndex() {
        return view('Pages.welcome');

    }
    
    public function getAbout() {
         
    }

    public function getContact() {
         return view('Pages.main');
    }

    public function postContact() {
        
    }



} 