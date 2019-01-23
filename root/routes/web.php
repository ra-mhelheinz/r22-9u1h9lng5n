<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Auth::routes();

/* AUTHENTICATION */
Route::get('login', 'AuthController@view')->name('login');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout')->name('logout');

/* ROUTES THAT NEEDS AUTHENTICATION */
Route::group(['middleware' => 'check.auth'], function () {
	// Dashboard
	Route::get('/', 'HomeController@home')->name('home');
	/* MASTER FILE --------------------------*/

	/* --- ACCOUNTING ----------*/
	/* ----- MAIN ACCOUNT */
	/* ------ m01 table */
	Route::get('master-file/accounting/main-account', 'MFile\Accounting\c_main_account@view'); /* - View Function - */
	Route::post('master-file/accounting/main-account', 'MFile\Accounting\c_main_account@add'); /* - Add Function - */
	Route::post('master-file/accounting/main-account/update', 'MFile\Accounting\c_main_account@update'); /* - Edit Function - */
	Route::post('master-file/accounting/main-account/delete', 'MFile\Accounting\c_main_account@delete'); /* - Delete Function - */
	/* ----- MAIN ACCOUNT */

	/* ----- SUB ACCOUNT */
	/* ------ m02 table */
	Route::get('master-file/accounting/sub-account', 'MFile\Accounting\c_sub_account@view'); /* - View Function - */
	Route::post('master-file/accounting/sub-account', 'MFile\Accounting\c_sub_account@add'); /* - Add Function - */
	Route::post('master-file/accounting/sub-account/update', 'MFile\Accounting\c_sub_account@update'); /* - Edit Function - */
	Route::post('master-file/accounting/sub-account/delete', 'MFile\Accounting\c_sub_account@delete'); /* - Delete Function - */
	/* ----- SUB ACCOUNT */

	/* ----- ACCOUNT GROUP */
	/* ------ m03 table */
	Route::get('master-file/accounting/account-group', 'MFile\Accounting\c_account_group@view'); /* - View Function - */
	Route::post('master-file/accounting/account-group', 'MFile\Accounting\c_account_group@add'); /* - Add Function - */
	Route::post('master-file/accounting/account-group/update', 'MFile\Accounting\c_account_group@update'); /* - Edit Function - */
	Route::post('master-file/accounting/account-group/delete', 'MFile\Accounting\c_account_group@delete'); /* - Delete Function - */
	/* ----- ACCOUNT GROUP */

	/* ----- ACCOUNT TITLE */
	/* ------ m04 table */
	Route::get('master-file/accounting/account-title/get', 'MFile\Accounting\c_account_title@get'); /* - Add Function - */
	Route::get('master-file/accounting/account-title', 'MFile\Accounting\c_account_title@view'); /* - View Function - */
	Route::post('master-file/accounting/account-title', 'MFile\Accounting\c_account_title@add'); /* - Add Function - */
	Route::post('master-file/accounting/account-title/update', 'MFile\Accounting\c_account_title@update'); /* - Update Function - */
	Route::post('master-file/accounting/account-title/delete', 'MFile\Accounting\c_account_title@delete'); /* - Delete Function - */
	/* ----- ACCOUNT TITLE */

	/* ----- JOURNAL */
	/* ------ m05 table */
	Route::get('master-file/accounting/journal', 'MFile\Accounting\c_journal@view'); /* - View Function - */
	Route::post('master-file/accounting/journal', 'MFile\Accounting\c_journal@add'); /* - Add Function - */
	Route::post('master-file/accounting/journal/update', 'MFile\Accounting\c_journal@update'); /* - Update Function - */
	Route::post('master-file/accounting/journal/delete', 'MFile\Accounting\c_journal@delete'); /* - Delete Function - */
	/* ----- JOURNAL */

	/* ----- DEBTORS */
	/* ------ m06 table */
	Route::get('master-file/accounting/debtors', 'MFile\Accounting\c_debtors@view'); /* - View Function - */
	// Route::get('master-file/accounting/debtors/get', 'MFile\Accounting\c_debtors@get'); /* - GET Function - */
	// Route::get('master-file/accounting/deptors/get-m10', 'MFile\Accounting\c_debtors@get2'); /* - GET m10 Table - */
	Route::post('master-file/accounting/debtors', 'MFile\Accounting\c_debtors@add'); /* - Add Function - */
	Route::post('master-file/accounting/debtors/update', 'MFile\Accounting\c_debtors@update'); /* - Update Function - */
	Route::post('master-file/accounting/debtors/delete', 'MFile\Accounting\c_debtors@delete'); /* - Delete Function - */
	/* ----- DEBTORS */

	/* ----- CREDITORS */
	/* ------ m07 table */
	Route::get('master-file/accounting/creditors/get', 'MFile\Accounting\c_creditors@get'); /* - GET Function - */
	Route::get('master-file/accounting/creditors', 'MFile\Accounting\c_creditors@view'); /* - View Function - */
	Route::post('master-file/accounting/creditors/', 'MFile\Accounting\c_creditors@add'); /* - ADD Function - */
	Route::post('master-file/accounting/creditors/update', 'MFile\Accounting\c_creditors@update'); /* - UPDATE Function - */
	Route::post('master-file/accounting/creditors/delete', 'MFile\Accounting\c_creditors@delete'); /* - UPDATE Function - */
	/* ----- CREDITORS */

	/* ----- COST CENTER */
	/* ------ m08 table */
	Route::get('master-file/accounting/cost-center', 'MFile\Accounting\c_cost_centers@view'); /* - View Function - */
	Route::post('master-file/accounting/cost-center', 'MFile\Accounting\c_cost_centers@add'); /* - Add Function - */
	Route::post('master-file/accounting/cost-center/update', 'MFile\Accounting\c_cost_centers@update'); /* - Update Function - */
	Route::post('master-file/accounting/cost-center/delete', 'MFile\Accounting\c_cost_centers@delete'); /* - Delete Function - */
	/* ----- COST CENTER */

	/* ----- SUB COST CENTER */
	/* ------ subctr table */
	Route::get('master-file/accounting/sub-cost-center', 'MFile\Accounting\c_sub_cost_centers@view'); /* - View Function - */
	Route::post('master-file/accounting/sub-cost-center', 'MFile\Accounting\c_sub_cost_centers@add'); /* - Add Function - */
	Route::post('master-file/accounting/sub-cost-center/update', 'MFile\Accounting\c_sub_cost_centers@update'); /* - Update Function - */
	Route::post('master-file/accounting/sub-cost-center/delete', 'MFile\Accounting\c_sub_cost_centers@delete'); /* - Delete Function - */
	/* ----- SUB COST CENTER */

	/* ----- ACCOUNTING PERIOD */
	/* ------ x03 table */
	Route::get('master-file/accounting/account-period', 'MFile\Accounting\c_account_period@view'); /* - View Function - */
	Route::post('master-file/accounting/account-period', 'MFile\Accounting\c_account_period@add'); /* - Add Function - */
	Route::post('master-file/accounting/account-period/delete', 'MFile\Accounting\c_account_period@closed'); /* - Add Function - */
	/* ----- ACCOUNTING PERIOD */

	/* --- ACCOUNTING ----------*/

	/* --- INVENTORY ----------*/
	/* ------ brand */
	Route::get('master-file/inventory/brand', 'MFile\Inventory\BrandController@view');
	Route::post('master-file/inventory/brand', 'MFile\Inventory\BrandController@add');
	Route::post('master-file/inventory/brand/update', 'MFile\Inventory\BrandController@update');
	Route::post('master-file/inventory/brand/delete', 'MFile\Inventory\BrandController@delete');

	/* ------ generic */
	Route::get('master-file/inventory/generic', 'MFile\Inventory\GenericController@view');
	Route::post('master-file/inventory/generic', 'MFile\Inventory\GenericController@add');
	Route::post('master-file/inventory/generic/update', 'MFile\Inventory\GenericController@update');
	Route::post('master-file/inventory/generic/delete', 'MFile\Inventory\GenericController@delete');

	/* --- INVENTORY ----------*/

	/* MASTER FILE --------------------------*/

	/* ACCOUNTING --------------------------*/
	/* --- STATEMENT OF ACCOUNT */
	Route::get('accounting/statement-of-account', 'Accounting\c_statement_of_account@view');
	Route::get('accounting/statement-of-account/create', 'Accounting\c_statement_of_account@create');
	/* --- STATEMENT OF ACCOUNT */

	/* --- COLLECTION ENTRY */
	Route::get('accounting/accounting-collection-entry', 'Accounting\c_collection_entry@view');
	Route::get('accounting/accounting-collection-entry/new', 'Accounting\c_collection_entry@new');
	/* --- COLLECTION ENTRY */

	/* --- DISBURSEMENT ENTRY */
	Route::get('accounting/accounting-disbursement-entry', 'Accounting\c_disbursement_entry@view');
	Route::get('accounting/accounting-disbursement-entry/new', 'Accounting\c_disbursement_entry@new');
	/* --- DISBURSEMENT ENTRY */

	/* --- BUDGET ENTRY */
	Route::get('accounting/accounting-journal-entry', 'Accounting\c_journal_entry@view');
	Route::get('accounting/accounting-journal-entry/new/{fy}/{mo}/{desc}/{j_code}/{j_desc}', 'Accounting\c_journal_entry@new');
	/* --- BUDGET ENTRY */

	Route::get('accounting/accounting-release-check', 'Accounting\c_release_check@view');

	Route::get('accounting/accounting-post-ledger', 'Accounting\c_post_ledger@view');
	/* ACCOUNTING --------------------------*/

	/* BUDGET --------------------------*/
	/* BUDGET --------------------------*/

	/* CITY TREASURE --------------------------*/
	/* CITY TREASURE --------------------------*/

	/* BAC --------------------------*/
	/* BAC --------------------------*/

	/* INVENTORY --------------------------*/
	/* INVENTORY --------------------------*/

	/* REPORTS --------------------------*/
	/* REPORTS --------------------------*/

	/* SETTINGS --------------------------*/
	/* --- SYSTEM SETTINGS */
	Route::get('settings/system-settings/getOne', 'Settings\c_system_settings@getOne');
	/* --- SYSTEM SETTINGS */
	/* SETTINGS --------------------------*/

	Route::get('parts/calendar-parts', 'Parts\c_calendar@view');
});

Route::get('session-all', 'Core@SessionAll');

Route::get('temporary/{page}', 'HomeController@tempPage');

/* LINK FOR THOSE PAGES WITH NO CONTROLLERS - Paolo */
Route::get('{page}', 'HomeController@page');