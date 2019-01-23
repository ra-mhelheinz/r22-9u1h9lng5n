<?php

namespace App\Http\Controllers\MFile\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class c_cost_centers extends Controller
{
    //
    public function view()
    {
        $m08 = Core::getAll("rssys.m08");
        $data = array($m08);
        return view('masterfile.accounting.masterfile-accounting-cost_center', compact('data'));
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
        $data = ['cc_code' => $r->txt_id, 'cc_desc' => $r->txt_name];
        if (Core::insertTable('rssys.m08', $data, 'Cost Center'))
        {
            return back();
        }
        return back();
    }

    public function update(Request $r)
    {
    	$data = ['cc_desc' => $r->txt_name];
    	if (Core::updateTable('rssys.m08', 'cc_code', $r->txt_id, $data, 'Cost Center'))
        {
             return back();
        }
        return back();
    }

    public function delete(Request $r)
    {
        // return dd($r);
    	if (Core::deleteTable('rssys.m08', 'cc_code', $r->txt_id, 'Cost Center')) {
            return back();
        }
        return back();
    }
}
