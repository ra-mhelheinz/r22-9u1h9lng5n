<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_account_title extends Controller
{
    //
    public function get(Request $r)
    {
    	$tableToJoin = ['clm'=>'rssys.m04.sl', 'data' => 'Y'];
    	$m04 = Core::getWithPara("rssys.m04", $tableToJoin);
    	return $m04;
    }
	public function view()
    {
    	$m03 = Core::getAll("rssys.m03");
    	$tableToJoin = [['tbl'=>'rssys.m03', 'BLnk' => 'rssys.m04.acc_code', 'ALnk' => 'rssys.m03.acc_code']];
    	$m04 = Core::getAllLeftJoin("rssys.m04", $tableToJoin);
    	$data = array($m03, $m04);
    	return view('masterfile-accounting_account_title', compact('data'));
    }

    public function add(Request $r)
    {
    	
    	$data = ['at_code' => $r->txt_accid, 'at_desc' => $r->txt_name, 'bs_pl' => 'B', 'dr_cr' => $r->sel_db, 'sl' => (isset($r->sel_sl)? $r->sel_sl : 'N'), 'cib_acct' => (isset($r->sel_cw) ? $r->sel_cw : 'N'), 'acc_code' => $r->sel_type, 'payment' => (isset($r->sel_py) ? $r->sel_py : 'N')];
    	if (Core::insertTable('rssys.m04', $data, 'Account Title')) 
        {
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
    	// 'at_code' => $r->txt_accid,'
    	
    	$data = ['at_desc' => $r->txt_name, 'bs_pl' => 'B', 'dr_cr' => $r->sel_db, 'sl' => (isset($r->sel_sl)? $r->sel_sl : 'N'), 'cib_acct' => (isset($r->sel_cw) ? $r->sel_cw : 'N'), 'acc_code' => $r->sel_type, 'payment' => (isset($r->sel_py) ? $r->sel_py : 'N')];
    	// return dd($data['dr_']);
    	if (Core::updateTable('rssys.m04', 'at_code', $r->txt_accid, $data, 'Account Title')) 
        {
            return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
    	if (Core::deleteTable('rssys.m04', 'at_code', $r->txt_accid, 'Account Title')) {
            return back();
        }
        return back();
    }
}
