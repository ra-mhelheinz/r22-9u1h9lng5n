<?php

namespace App\Http\Controllers\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class c_collection_entry extends Controller
{
    //
    public function view()
    {
    	return view('accounting-collection-entry');
    }

    public function new()
    {
    	return view('accounting-collection-entry-new');
    }
}
