<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_sub_cost_centers extends Controller
{
    //
    public function view()
    {
        // SAMPLE for $tableToJoin = [['tbl'=>'rssys.m00', 'BLnk' => 'rssys.m01.accttype_code', 'ALnk' => 'rssys.m00.code']];
        $tableToJoin = [['tbl'=>'rssys.m08', 'BLnk' => 'rssys.subctr.cc_code', 'ALnk' => 'rssys.m08.cc_code']];
        $subctr = Core::getAllLeftJoin("rssys.subctr", $tableToJoin);
        $m08 = Core::getAll("rssys.m08");
        // return dd($subctr);
        $data = array($subctr, $m08);
        return view('masterfile.accounting.masterfile-accounting-sub_cost_center', compact('data'));
    }

    public function add(Request $r)
    {
        // return dd($r);
        $data = ['scc_code'=> $r->txt_id, 'scc_desc' => $r->txt_name, 'cc_code' => $r->txt_sub_led];
        if (Core::insertTable('rssys.subctr', $data, 'Sub Cost Center'))
        {
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
        // return dd($r);
    	$data = ['scc_desc' => $r->txt_name, 'cc_code' => $r->txt_sub_led];
    	if (Core::updateTable('rssys.subctr', 'scc_code', $r->txt_id, $data, 'Sub Cost Center'))
        {
             return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
        // return dd($r);
    	if (Core::deleteTable('rssys.subctr', 'scc_code', $r->txt_id, 'Sub Cost Center')) {
            return back();
        }
        return back();
    }
}
