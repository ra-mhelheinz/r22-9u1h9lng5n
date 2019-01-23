<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_debtors extends Controller
{
    //
    public function view()
    {
        $m06 = Core::getAll("rssys.m06");
        $m10 = Core::getAll("rssys.m10");
        $tableToJoin = ['clm'=>'rssys.m04.sl', 'data' => 'Y'];
        $m04 = Core::getWithPara("rssys.m04", $tableToJoin);
        $data = array($m06, $m10, $m04);
        return view('masterfile.accounting.masterfile-accounting_debtors', compact('data'));
    }
    public function get()
    {
       return $data = Core::getAll("rssys.m06");
    }

    public function get2()
    {
        return $data= Core::getAll('rssys.m10');
    }

    public function add(Request $r)
    {
        $d_code = Core::getm99One('d_code');
        $data = [
                    'd_code' => $d_code->d_code,
                    'd_name' => $r->txt_name,
                    'd_addr2' => $r->txt_add,
                    'd_tel' => $r->txt_phn_num,
                    'd_fax' => $r->txt_fax_num,
                    'd_email' => $r->txt_email,
                    'd_tin' => $r->txt_tin_num,
                    'd_cntc' => $r->txt_cnt_per,
                    'd_cntc_no' => $r->txt_mob_num,
                    'limit' => $r->txt_crd_lmt,
                    'mp_code' => $r->txt_mop,
                    'at_code' => $r->txt_sub_led,
                    'remarks' => $r->txt_rmks,
                    'type' => $r->txt_typ
                ];
        if (Core::insertTable('rssys.m06', $data, 'Account Debtors'))
        {
            Core::updatem99('d_code' , Core::get_nextincrementlimitchar($d_code->d_code, 6));
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
    	$data = [
                    'd_name' => $r->txt_name,
                    'd_addr2' => $r->txt_add,
                    'd_tel' => $r->txt_phn_num,
                    'd_fax' => $r->txt_fax_num,
                    'd_email' => $r->txt_email,
                    'd_tin' => $r->txt_tin_num,
                    'd_cntc' => $r->txt_cnt_per,
                    'd_cntc_no' => $r->txt_mob_num,
                    'limit' => $r->txt_crd_lmt,
                    'mp_code' => $r->txt_mop,
                    'at_code' => $r->txt_sub_led,
                    'remarks' => $r->txt_rmks,
                    'type' => $r->txt_typ
                ];
    	if (Core::updateTable('rssys.m06', 'd_code', $r->txt_id, $data, 'Debtors'))
        {
             return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
    	if (Core::deleteTable('rssys.m06', 'd_code', $r->txt_id, 'Debtors')) {
            return back();
        }
        return back();
    }
}
