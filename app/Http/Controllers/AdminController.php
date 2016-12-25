<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
	/**
     * Create a new controller instance.
     *	
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {        
    	if ($id=='')
        	return view('home', ['text' => 'Coming from admin controller']);
        else 
            if (View::exists('admin.'.$id)) {
                $varname = "testing";
        	    return view('admin.'.$id, compact('varname'));
            } else {
                return view('admin.404');
            }
    }

   
}
