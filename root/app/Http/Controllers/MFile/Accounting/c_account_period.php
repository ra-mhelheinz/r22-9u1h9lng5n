<?php

	namespace App\Http\Controllers\MFile\Accounting;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Core;

	class c_account_period extends Controller
	{
		public function view()
		{
			$x03 = Core::getAll('rssys.x03');
			if (count($x03) > 0) {
				for ($i=0; $i < count($x03); $i++)
				{
					$x03[$i]->from_desc = Core::DateString($x03[$i]->from);
					$x03[$i]->to_desc = Core::DateString($x03[$i]->to);
				}
			}
			$x04 = Core::getAll('rssys.x04');
			$data = array($x03, $x04);
			return view('masterfile.accounting.masterfile-accounting_period', compact('data'));
		}
		public function add(Request $r)
		{
			// return dd($r);
			$data = [
						'fy' => $r->txt_yr,
						'mo' => $r->txt_mo2,
						'from' => $r->txt_date_from,
						'to' => $r->txt_date_to,
						'month_desc' => $r->txt_mo_desc
					];
			// return Core::insertTable('rssys.x03', $data, 'Account Period');
			if (Core::insertTable('rssys.x03', $data, 'Account Period'))
		        {
		            return back();
		        }
		    return back();
		}
		public function closed(Request $r)
		{
			return dd($r);
		}
	}