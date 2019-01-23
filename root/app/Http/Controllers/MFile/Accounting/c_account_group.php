<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_account_group extends Controller
{
    //
    public function view()
    {
    	$m01 = Core::getAll("rssys.m01");
    	$tableToJoin = [['tbl'=>'rssys.m01', 'BLnk' => 'rssys.m02.mag_code', 'ALnk' => 'rssys.m01.mag_code']];
        $m02 = Core::getAllLeftJoin('rssys.m02', $tableToJoin);
        $tableToJoin2 = [
                            ['tbl' => 'rssys.m02', 'BLnk' => 'rssys.m03.cmp_code', 'ALnk' => 'rssys.m02.cmp_code'],
                            ['tbl' => 'rssys.m01', 'BLnk' => 'rssys.m02.mag_code', 'ALnk' => 'rssys.m01.mag_code']
                        ];
        $m03 = Core::getAllLeftJoin('rssys.m03', $tableToJoin2);	
    	if (isset($m03)) {
    		for ($i=0; $i < count($m03); $i++) { 
    			$m03[$i]->dr_cr_desc = ($m03[$i]->dr_cr == 'D') ? "Debit" : "Credit";
    		}
    	}
    	// return dd($m03);
    	$data = array($m02, $m03);
    	return view('masterfile-accounting_account_group', compact('data'));
    }

    public function add(Request $r)
    {
       $data = ['acc_code' => $r->txt_accid, 'acc_desc' => $r->txt_name, 'cmp_code' => $r->sel_type, 'dr_cr' => $r->sel_db];
       if (Core::insertTable('rssys.m03', $data, 'Account Group')) 
        {
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
        // return dd($r);
        $data = ['acc_desc' => $r->txt_name, 'cmp_code' => $r->sel_type, 'dr_cr' => $r->sel_db];
        if (Core::updateTable('rssys.m03', 'acc_code', $r->txt_accid, $data, 'Account Group')) 
        {
            return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
        if (Core::deleteTable('rssys.m03', 'acc_code', $r->txt_accid, 'Account Group')) {
            return back();
        }
        return back();
    }

}
