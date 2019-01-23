<?php

namespace App\Http\Controllers\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class c_disbursement_entry extends Controller
{
    //
    public function view()
    {
    	return view('accounting-disbursement-entry');
    }

    public function new()
    {
    	return view('accounting-disbursement-entry-new');
    }
}
