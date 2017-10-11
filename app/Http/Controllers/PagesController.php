<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function careers(){
        return view('pages.careers');
    }

    public function mycustomers(){
        return view('pages.mycustomers');
    }

    public function developerinfo(){
        return view('pages.developerinfo');
    }

    public function sitemap(){
        return view('pages.sitemap');
    }
    
    public function contact(){
        return view('pages.contact');
    }

    public function charities(){
        return view('pages.charities');
    }
    public function email(Request $request){
        return redirect($_SERVER['HTTP_REFERER'])->with('success', 'Your Email Is Saved. Thank You!');
    }
}

