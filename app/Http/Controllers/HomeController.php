<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $page = "index";
        return view('home',compact('page'));
    }
    public function about()
    {
        $page = "about";
        return view('about',compact('page'));
    }
    public function services()
    {
        $page = "services";
        return view('services',compact('page'));
    }
    public function feature()
    {
        $page = "feature";
        return view('feature',compact('page'));
    }
    public function pricing()
    {
        $page = "pricing";
        return view('pricing',compact('page'));
    }
    public function contact()
    {
        $page = "contact";
        return view('contact',compact('page'));
    }
    public function policy()
    {
        $page = "policy";
        return view('policy',compact('page'));
    }
    
    public function termsAConditions()
    {
        $page = "termsAConditions";
        return view('terms-and-conditions',compact('page'));
    }
    public function returnAndRefundPolicy()
    {
        $page = "returnAndRefundPolicy";
        return view('terms-and-conditions',compact('page'));
    }
}
