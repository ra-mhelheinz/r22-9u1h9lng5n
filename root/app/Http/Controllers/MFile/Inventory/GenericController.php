<?php

namespace App\Http\Controllers\MFile\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core;

class GenericController extends Controller
{
    //
    private $module = 'Generic';
    private $table = 'rssys.generic';

    public function view()
    {
        $cond = ['clm' => 'active', 'data' => 'TRUE'];
        $data = Core::getWithPara($this->table, $cond);

    	return view('masterfile/inventory/masterfile-inventory_generic', compact('data'));
    }

    public function add(Request $request)
    {
    	$data = ['gen_code' => $request->txt_code, 'gen_name' => $request->txt_name];

    	Core::insertTable($this->table, $data, $this->module);

    	return back();
    }

    public function update(Request $request)
    {
    	$data = ['gen_name' => $request->txt_name];
    	$col = 'gen_code';

    	Core::updateTable($this->table, $col, $request->txt_code, $data, $this->module);
    
        return back();
    }

    public function delete(Request $request)
    {
    	$data = ['active' => 'false'];
    	$col = 'gen_code';

    	Core::updateTable($this->table, $col, $request->txt_code, $data, $this->module);
    
        return back();
    }

}
