<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_system_Settings extends Controller
{
    //
    public function getOne($clm)
    {
    	if (isset($clm))
        {
            $data = Core::getm99One($clm);
            return response()->json($data);
        } else {
            return null;
        }
    }

}
