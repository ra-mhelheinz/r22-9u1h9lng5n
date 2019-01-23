<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;
use DB;
class c_sub_account extends Controller
{
    //
    public function view()
    {
    	$m01 = Core::getAll("rssys.m01");
        $tableToJoin = [['tbl'=>'rssys.m01', 'BLnk' => 'rssys.m02.mag_code', 'ALnk' => 'rssys.m01.mag_code']];
        $m02 = Core::getAllLeftJoin('rssys.m02', $tableToJoin);
    	$data = array($m01, $m02);
    	return view('masterfile-accounting_sub_account' ,compact('data'));
    }

    public function add(Request $r)
    {
        $data = ['cmp_code' => $r->txt_accid, 'cmp_desc' => $r->txt_name, 'mag_code' => $r->sel_type];
    	if (Core::insertTable('rssys.m02', $data, 'Sub Account')) 
        {
    		return back();
    	}
    	return back();
    }

    public function update(Request $r)
    {
        $update = array('cmp_desc' => $r->txt_name, 'mag_code' => $r->sel_type);
        if (Core::updateTable('rssys.m02', 'cmp_code', $r->txt_accid, $update, 'Sub Account')){
            return back();
        }
        return back();
    }
    public function delete(Request $r)
    {
        if (Core::deleteTable('rssys.m02', 'cmp_code', $r->txt_accid, 'Sub Account')) {
            return back();
        }
        return back();
    }
}
