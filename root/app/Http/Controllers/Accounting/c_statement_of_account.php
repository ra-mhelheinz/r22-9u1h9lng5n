<?php

namespace App\Http\Controllers\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class c_statement_of_account extends Controller
{
    //
    public function view()
    {
    	return view('accounting-statement-of-account');
    }

    public function create()
    {
    	return view('accounting-statement-of-account-create');
    }
}
