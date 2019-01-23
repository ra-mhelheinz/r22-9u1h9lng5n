<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;
use DB;

class c_main_account extends Controller
{
    //
    public function view()
    {
    	$m00 = Core::getAll('rssys.m00');
        $tableToJoin = [['tbl'=>'rssys.m00', 'BLnk' => 'rssys.m01.accttype_code', 'ALnk' => 'rssys.m00.code']];
        $m01 = Core::getAllLeftJoin('rssys.m01', $tableToJoin);
    	$data = array($m00, $m01);
    	return view('masterfile-accounting_main_account', compact(['data']));
    }

    // Modified add function - Mhel Jan 09, 2019
    public function add(Request $r)
    {
        $data = ['mag_code' => $r->txt_main_account_id, 'mag_desc' => strtoupper($r->txt_name), 'accttype_code' => $r->sel_type];
    	if (Core::insertTable('rssys.m01', $data, 'Main Account')) {
            return back();
        }

    	return back();
    }
    
    // Created Update function - Mhel Jan 09, 2019
    public function update(Request $r)
    {
        $update = ['mag_desc' => $r->txt_name, 'accttype_code' => $r->sel_type];
        if (Core::updateTable('rssys.m01', 'mag_code', $r->txt_main_account_id, $update, 'Main Account')) {
            return back();
        }
        return back();
    }

     // Created Update function - Mhel Jan 09, 2019
    public function delete(Request $r)
    {
        if (Core::deleteTable('rssys.m01', 'mag_code', $r->txt_main_account_id, 'Main Account')) {
            return back();
        }
        return back();
    }
}
