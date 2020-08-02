<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "my passed title";
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function specialties(){
        $services = array(
            'title' => "Nnah",
            'course' => ['monday', 'tuesday', 'wednessday']
        );
        return view('pages.specialties')->with('services', $services);
    }

    public function publications(){
        $services = array(
            'title' => "Nnah",
            'course' => ['monday', 'tuesday', 'wednessday']
        );
        return view('pages.publications')->with('services', $services);
    }
    public function contact(){

        return view('pages.contact');
    }
}
