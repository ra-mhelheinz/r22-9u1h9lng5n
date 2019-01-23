<?php

namespace App\Http\Controllers\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Core;

class c_journal_entry extends Controller
{
    //
    public function view()
    {
    	$m05 = Core::getAll('rssys.m05');
        $x03 = Core::getAll('rssys.x03');
        // return dd($x03); 
    	$data = array($m05, $x03);
    	return view('budget.accounting-journal-entry', compact('data'));
    }

    public function new($fy, $mo, $desc, $j_code, $j_desc)
    {
    	$ref_num = Core::getOneColumn('rssys.m05', 'rssys.m05.j_num', [['j_code', '=', $j_code]]);
        $m04 = Core::getAll('rssys.m04');
        $m08 = Core::getAll("rssys.m08");
        // return dd($m04);
        return view('accounting-journal-entry-new', ['fy' => $fy, 'mo' => $mo, 'mo_desc' => $desc, 'j_code' => $j_code, 'j_desc' => urldecode($j_desc), 'j_num' => $ref_num->j_num, 'm04' => $m04, 'm08' => $m08]);
    }
}
