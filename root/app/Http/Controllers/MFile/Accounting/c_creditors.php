<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_creditors extends Controller
{
    //
    public function view()
    {
        $m07 = Core::getAll('rssys.m07');
        $m10 = Core::getAll("rssys.m10");
        $tableToJoin = ['clm'=>'rssys.m04.sl', 'data' => 'Y'];
        $m04 = Core::getWithPara("rssys.m04", $tableToJoin);
        $data = array($m07, $m10, $m04);
        return view('masterfile.accounting.masterfile-accounting_creditors', compact('data'));
    }

    public function get()
    {
       return $data = Core::getAll("rssys.m07");
    }

    public function add(Request $r)
    {
        $c_code = Core::getm99One('c_code');
        $data = [
                    'c_code' => $c_code->c_code,
                    'c_name' => $r->txt_name,
                    'c_addr2' => $r->txt_add,
                    'c_tel' => $r->txt_phn_num,
                    'c_fax' => $r->txt_fax_num,
                    'c_tin' => $r->txt_tin_num,
                    'c_cntc' => $r->txt_cnt_per,
                    'mp_code' => $r->txt_mop,
                    'at_code' => $r->txt_sub_led
                ];
        if (Core::insertTable('rssys.m07', $data, 'Account Creditors'))
        {
            Core::updatem99('c_code' , Core::get_nextincrementlimitchar($c_code->c_code, 6));
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
    	$data = [
                    'c_name' => $r->txt_name,
                    'c_addr2' => $r->txt_add,
                    'c_tel' => $r->txt_phn_num,
                    'c_fax' => $r->txt_fax_num,
                    'c_tin' => $r->txt_tin_num,
                    'c_cntc' => $r->txt_cnt_per,
                    'mp_code' => $r->txt_mop,
                    'at_code' => $r->txt_sub_led
                ];
    	if (Core::updateTable('rssys.m07', 'c_code', $r->txt_id, $data, 'Account Creditors'))
        {
             return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
    	if (Core::deleteTable('rssys.m07', 'c_code', $r->txt_id, 'Account Creditors')) {
            return back();
        }
        return back();
    }
}
