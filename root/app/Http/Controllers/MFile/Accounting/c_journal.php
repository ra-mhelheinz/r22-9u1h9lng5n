<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;
class c_journal extends Controller
{
    //
    public function view()
    {
    	$m05type = Core::getAll('rssys.m05type');
    	$tableToJoin = [['tbl'=>'rssys.m05type', 'BLnk' => 'rssys.m05.j_type', 'ALnk' => 'rssys.m05type.code']];
    	$m05 = Core::getAllLeftJoin('rssys.m05', $tableToJoin);
    	// return dd($m05);
    	$data = array($m05type, $m05);
    	// dd($data[1]);
    	return view('masterfile-accounting_journal', compact('data'));
    }

    public function add(Request $r)
    {
    	$data = ['j_code' => $r->txt_accid, 'j_desc' => $r->txt_name, 'j_num' => $r->txt_nxt_rf_no, 'check_by' => (isset($r->txt_cw) ? $r->txt_cw : ''), 'check_by' => (isset($r->txt_rv_by) ? $r->txt_rv_by : ''), 'noted_by' => (isset($r->txt_ntd_by) ? $r->txt_ntd_by : ''), 'approv_by' => (isset($r->txt_apd_by) ? $r->txt_apd_by : ''), 'j_type' => $r->sel_type];
    	if (Core::insertTable('rssys.m05', $data, 'Journal')) 
        {
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
    	$data = ['j_desc' => $r->txt_name, 'j_num' => $r->txt_nxt_rf_no, 'check_by' => (isset($r->txt_cw) ? $r->txt_cw : ''), 'check_by' => (isset($r->txt_rv_by) ? $r->txt_rv_by : ''), 'noted_by' => (isset($r->txt_ntd_by) ? $r->txt_ntd_by : ''), 'approv_by' => (isset($r->txt_apd_by) ? $r->txt_apd_by : ''), 'j_type' => $r->sel_type];
    	if (Core::updateTable('rssys.m05', 'j_code', $r->txt_accid, $data, 'Journal')) 
        {
            return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
    	if (Core::deleteTable('rssys.m05', 'j_code', $r->txt_accid, 'Journal')) 
        {
            return back();
        }
        return back();
    }
}
