<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	return view('about');
    }
    public function iagree()
    {
    	return redirect('about');
    }
    public function aboutinsert()
    {
    	return redirect('poskus');
    }
}
