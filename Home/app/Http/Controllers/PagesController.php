<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function getIndex() {
        return view('Pages.index');

    }
    
    public function getProject() {
         return view('Pages.project');
    }

    public function getContact() {
         return view('Pages.');
    }

    public function postContact() {
        
    }



} 