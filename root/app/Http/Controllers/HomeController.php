<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
    	return view('_dashboard');
    }


    // Find the php file on the resource then display it
    public function page($page)
    {
    	try {
           return view($page); 
        } catch (\Exception $e) {
            return view('error.404');
        }
    }

    // Files on the temporary folder. This route is separated to avoid
    public function tempPage($page)
    {
        return view('temporary.'.$page);
    }
}
