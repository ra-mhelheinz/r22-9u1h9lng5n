<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;
use Carbon\Carbon;

class Core extends Model
{
    // SQL
	public static function sql($sql)
	{	
		try {
			return DB::select(DB::raw($sql));
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
	/* ---------- GET ----------*/
	// Get all data in a table
	public static function Get_Table($tbl_name)
	{
		try {
			return DB::table($tbl_name)->get();
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
	// Created Update function - Mhel Jan 10, 2019
	public static function getAll($table)
	{ 	// Table
		try 
		{
			if (isset($table)) {return DB::table(DB::raw($table))->get();}
		} 
		catch (Exception $e) 
		{
			// return $e->getMessage();
			return null;
		}
	}
	// Created Update function - Mhel Jan 10, 2019
	// Note: this is without WHERE option
	// SAMPLE for $tableToJoin = [['tbl'=>'rssys.m00', 'BLnk' => 'rssys.m01.accttype_code', 'ALnk' => 'rssys.m00.code']];
	public static function getAllLeftJoin($table, $tableToJoin = [])
	{
		try 
		{
			if (isset($table)) 
			{
				if (count($tableToJoin) > 0) 
				{
					$sql = 'SELECT * FROM '.$table;
					for ($i = 0; $i < count($tableToJoin); $i++) { 
						$sql = $sql.' LEFT JOIN '.$tableToJoin[$i]['tbl'].' ON '.$tableToJoin[$i]['BLnk'].' = '.$tableToJoin[$i]['ALnk'];
					}
					return DB::select(DB::raw($sql));
				}
			}
			return null;
		} 
		catch (Exception $e) 
		{
			return null;	
		}
	}
	// Created Update function - Mhel Jan 15, 2019
	// Note: this is with WHERE option
	public static function getWithPara($table, $cond = [])
	{
		try
		{
			if (!empty($table) && !empty($cond))
			{
				return DB::table(DB::raw($table))->where($cond['clm'], '=', $cond['data'])->get();
			} else {
				return null;
			}
		} catch (Exception $e) 
		{
			return null;
		}
	}
	// Created get function - Mhel Jan 22, 2019
	public static function getWithPara2($table, $cond = [])
	{
		try
		{
			if (!empty($table) && !empty($cond))
			{
				return DB::table(DB::raw($table))->where($cond['clm'], $cond['typ'], $cond['data'])->get();
			} else {
				return null;
			}
		} catch (Exception $e) 
		{
			return null;
		}
	}
	// Created get function One Column
	public static function getOneColumn($table, $clm, $cond)
	{
		try
		{
			if (!empty($table) && !empty($clm) && !empty($clm)) 
			{
				return DB::table(DB::raw($table))->where($cond)->select($clm)->first();
			}
			return null;
		}
		catch (Exception $e) 
		{
			return null;
		}
	}
	// Created Update function - Mhel Jan 15, 2019
	// Note: for m99, clm = column
	public static function getm99One($clm)
	{
		try
		{
			if (!empty($clm))
			{
				$data =  DB::table(DB::raw('rssys.m99'))->select('rssys.m99.'.$clm)->first();
				return $data;
			} else {
				return null;
			}
		}
		catch (Exception $e)
		{
			return null;
		}
	}
	// Created Update function - Reancy Jan 16, 2019
	public static function get_nextincrementlimitchar($val = "", $limit = 0) {
	   $newvalue = ""; $len = strlen($val); $vsplit = str_split($val);
	   if(count($vsplit) > 0) { foreach($vsplit AS $a => $b) {
	       $vsplit[$a] = intval($b);
	   } }
	   $newvalue = intval(join("", $vsplit)) + 1; $vsplit = str_split($newvalue);
	   $appstr = ""; $newlimit = $limit - count($vsplit);
	   if($newlimit > 0) { for($i = 0; $i < $newlimit; $i++) {
	       $appstr .= "0";
	   } }
	   $newvalue = $appstr . $newvalue;
	   return $newvalue;
	}
	/* ---------- GET ----------*/
	/* ---------- INSERT ---------------------------------------------------*/
	// Created Update function - Mhel Jan 10, 2019
	// 
	public static function insertTable($table, $data = [], $module)
	{	// Table, Data
		try 
		{
			if ($table!=null) {
				if (!empty($data) && !empty($module)) {
					if (DB::table(DB::raw($table))->insert($data)) {
						Core::alert(1, 'addition of  data in '.$module);
						return true;
					}
				}
			}
			Core::alert(2, 'occured upon addition of data in '.$module);
			return false;
		}
		catch (\Exception $e)
		{
			return $e->getMessage();
			Core::alert(0, '');
			return false;
		}
	}
	// Modified Insert function - Mhel Jan 10, 2019
	/* ---------- INSERT ---------------------------------------------------*/
	/* ---------- UPDATE ---------------------------------------------------*/
	// Created Update function - Mhel Jan 10, 2019
	public static function updateTable($table, $col, $id, $data = [], $module)
	{	// Table, Primary Key, ID, Data, Module
		try 
		{
			if (isset($table) && isset($col) && isset($id) && isset($module)) 
			{
				if (!empty($data)) 
				{
					if (DB::table(DB::raw($table))->where($col, '=', $id)->update($data)) 
					{
						Core::alert(1, 'modified  data in '.$module);
						return true;
					}
				}	
			}
			Core::alert(2, 'occured upon modiification of data in '.$module);
			return false;
		} 
		catch (\Exception $e) 
		{	
			// return $e->getMessage();	
			Core::alert(0, '');
			return false;
		}
	}
	// Created Update function - Mhel Jan 16, 2019
	public static function updatem99($clm, $val)
	{
		try
		{
			return DB::table(DB::raw('rssys.m99'))->update([$clm => $val]);
		}
		catch (Exception $e) {
			Core::alert(0, '');
			return false;
		}
	}
	/* ---------- UPDATE ---------------------------------------------------*/
	/* ---------- DELETE ---------------------------------------------------*/
	// Created Delete function - Mhel Jan 10, 2019
	public static function deleteTable($table, $col, $id, $module)
	{	// Table, Primary Key, ID
		try 
		{
			if (isset($table) && isset($col) && isset($id)) 
			{
				if (DB::table(DB::raw($table))->where($col, '=', $id)->delete())
				{
					Core::alert(1, 'deleted  data in '.$module);
					return true;
				}
			}
			Core::alert(2, 'occured upon deletion of data in '.$module);
			return false;
		}
		catch (Exception $e)
		{
			Core::alert(0, '');
			return false;
		}
	}
	// Created Delete Function - Mhel Jan 22, 2019
	// Multiple Where
	public static function deleteTableMultiWhere($table, $data = [], $module)
	{
		try
		{
			if (isset($table) && isset($data) && isset($module))
			{
				if (DB::table(DB::raw($table))->where($data)->delete())
				{
					Core::alert(1, 'deleted  data in '.$module);
					return true;
				}
			}
			Core::alert(2, 'occured upon deletion of data in '.$module);
			return false;
		}
		catch (Exception $e)
		{
			Core::alert(0, '');
			return false;
		}
	}
	/* ---------- DELETE ---------------------------------------------------*/
	/* ---------- MISCELLANEOUS ---------------------------------------------------*/
	// Check Sessions
	public function SessionAll()
	{
		dd(Session::all());
	}
	// Return Alert Tag
	public static function Alert($type, $msg)
	{
		switch ($type) {
			case 1:
				// Success
				$str = "Success";
				$color = "success";
				$temp = $msg;
				break;
			case 2:
				// Error
				$str = "Error";
				$color = "error";
				$temp = $msg;
				break;
			default: // Catch ERROR
				$str = "Error";
				$color = "error";
				$temp = 'has occured. Please contact the system administrator.';
				break;
		}
		$txt = '<div id="AlertDiv" class="alert alert-'.$color.'" id="alert" style="z-index:1000">
	        		<strong>'.$str.'!</strong> '.$temp.'<button type="button" class="close" data-dismiss="alert">&times;</button>
	     		</div><script>$(\'#AlertDiv\').fadeOut(5000);</script>';
	    Session::flash('alert', $txt);
	    return $txt;
	}
	// Return Date in Words
	public static function DateString($date)
	{
		$newD = Carbon::parse($date);
		return $newD->toFormattedDateString();
	}
	/* ---------- MISCELLANEOUS ---------------------------------------------------*/
}
