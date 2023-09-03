<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function main() {
        return view('main');
    }
    
    public function about_me() {
        return view('about_me');
    }
    
    public function hobbies() {
        return view('hobbies');
    }
       
    public function study() {
        return view('study');
    }
    
    public function album() {
        return view('album');
    }
    
    public function contact() {
        return view('contact');
    }
    
    public function test() {
        return view('test');
    }
    
    public function history() {
        return view('history');
    }
}


