<?php

namespace App\Http\Controllers\MFile\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class BrandController extends Controller
{
    //
    private $module = 'Brand';
    private $table = 'rssys.brand';

    public function view()
    {
        $cond = ['clm' => 'active', 'data' => 'TRUE'];
        $data = Core::getWithPara($this->table, $cond);

    	return view('masterfile/inventory/masterfile-inventory_brand', compact('data'));
    }

    public function add(Request $request)
    {
    	$data = ['brd_code' => $request->txt_code, 'brd_name' => $request->txt_name];

    	Core::insertTable($this->table, $data, $this->module);

    	return back();
    }

    public function update(Request $request)
    {
    	$data = ['brd_name' => $request->txt_name];
    	$col = 'brd_code';

    	Core::updateTable($this->table, $col, $request->txt_code, $data, $this->module);
    
        return back();
    }

    public function delete(Request $request)
    {
    	$data = ['active' => 'false'];
    	$col = 'brd_code';

    	Core::updateTable($this->table, $col, $request->txt_code, $data, $this->module);
    
        return back();
    }

}
