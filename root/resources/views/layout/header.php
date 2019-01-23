<!DOCTYPE html>
<html lang="en">
<head>
<title>RIGHT APSS Solution And Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8" />
<link rel="icon" href="rss_img/web_icon.png"/>
<link rel="stylesheet" href="css/matrix-login.css" />
<link rel="stylesheet" href="css/bootstrap14.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-stylesss1.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap1.css" />
<link rel="stylesheet" href="css/style_me.css" />
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/my_screen5.css" />
<link href='my_calendar/fullcalendar.min.css' rel='stylesheet' />
<link href='my_calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='my_calendar/lib/moment.min.js'></script>
<script src='my_calendar/lib/jquery.min.js'></script>
<script src='my_calendar/fullcalendar1.min.js'></script>

<link rel="stylesheet" href="css/custom_modal1.css" />

</head>
<body style="height:190%;">
<!--Header-part-->

<div id="header">
  <h1 ><a href="dashboard.html">Matrix Admin</a></h1>
</div>



<!--close-Header-part--> 


<!--top-Header-menu-->

<!--start-top-serch-->


<!--close-top-serch-->

<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
     <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Notifications	</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-reorder"></i></a>
  <ul>
    <li class="submenu"><a href="index.php"><i class="icon icon-home"></i> <span>Master File</span></a> 
		<ul>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span>Accounting</span></a>
				<ul style="background-color: #28303a;">
					<li><a href="masterfile-accounting_main_account.php"><i class="icon-circle"></i> Main Account</a></li>
					<li><a href="masterfile-accounting_sub_account.php"><i class="icon-circle"></i> Sub Account</a></li>
					<li><a href="masterfile-accounting_account_group.php"><i class="icon-circle"></i> Account Group</a></li>
					<li><a href="masterfile-accounting_account_title.php"><i class="icon-circle"></i> Account Title</a></li>
					<li><a href="masterfile-accounting_journal.php"><i class="icon-circle"></i> Journal</a></li>
					<li><a pd-popup-open="customer_search" href="#"><i class="icon-circle"></i> Debtors</a></li>
					<li><a pd-popup-open="suppliers" href="#"><i class="icon-circle"></i> Creditors</a></li>
					<li><a pd-popup-open="cost-center" href="#"><i class="icon-circle"></i> Cost Center</a></li>
					<li><a pd-popup-open="sub-cost-center" href="#"><i class="icon-circle"></i> Sub Cost Center</a></li>
					<li><a href="#"><i class="icon-circle"></i> Accounting Periods</a></li>
				</ul>
			</li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span>CRM</span></a>
				<ul style="background-color: #28303a;">
					<li><a pd-popup-open="customer_register" href="#"><i class="icon-circle"></i> Address Book</a></li>
				</ul>
			</li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span>Loans</span></a>
				<ul style="background-color: #28303a;">
					<li><a pd-popup-open="customer_register" href="#"><i class="icon-circle"></i> Loan Items</a></li>
				</ul>
			</li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span>Sales</span></a>
				<ul style="background-color: #28303a;">
					<li><a pd-popup-open="sales_outlet" href="#"><i class="icon-circle"></i> Outlet</a></li>
					<li><a pd-popup-open="customer_search" href="#"><i class="icon-circle"></i> Customers</a></li>
					<li><a pd-popup-open="card_search" href="#"><i class="icon-circle"></i> Servex Membership</a></li>
					<li><a pd-popup-open="sales_discount" href="#"><i class="icon-circle"></i> Discount</a></li>
					<li><a pd-popup-open="#" href="#"><i class="icon-circle"></i> Auto Sales</a></li>
					<li><a pd-popup-open="sales_pos" href="#"><i class="icon-circle"></i> POS Staff/Cashier</a></li>
					<li><a pd-popup-open="sales_agent" href="#"><i class="icon-circle"></i> Sales Agent</a></li>
				</ul>
			</li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span>Services</span></a>
				<ul style="background-color: #28303a;">
					<li><a pd-popup-open="service_dealers" href="#"><i class="icon-circle"></i> Auto Dealers</a></li>
					<li><a pd-popup-open="service_brand" href="#"><i class="icon-circle"></i> Brand</a></li>
					<li><a pd-popup-open="service_car" href="#"><i class="icon-circle"></i> Type</a></li>
					<li><a pd-popup-open="service_vehicle" href="#"><i class="icon-circle"></i> Vehicle Info</a></li>
					<li><a pd-popup-open="service_color" href="#"><i class="icon-circle"></i> Color</a></li>
					<li><a pd-popup-open="service_repair_status" href="#"><i class="icon-circle"></i> Repair Order Status</a></li>
					<li><a pd-popup-open="service_perform" href="#"><i class="icon-circle"></i> Service Perform</a></li>
					<li><a pd-popup-open="service_technician" href="#"><i class="icon-circle"></i> Technician</a></li>
				</ul>
			</li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span>Inventory</span></a>
				<ul style="background-color: #28303a;">
					<li><a pd-popup-open="service_brand" href="#"><i class="icon-circle"></i> Brand Name</a></li>
					<li><a pd-popup-open="inventory_generic" href="#"><i class="icon-circle"></i> Generic Name</a></li>
					<li><a pd-popup-open="inventory_item_category" href="#"><i class="icon-circle"></i> Item Category</a></li>
					<li><a pd-popup-open="inventory_item_unit" href="#"><i class="icon-circle"></i> Item Unit</a></li>
					<li><a pd-popup-open="inventory_items" href="#"><i class="icon-circle"></i> Items</a></li>
					<li><a pd-popup-open="assembled_item" href="#"><i class="icon-circle"></i> Assembled Items</a></li>
					<li><a pd-popup-open="inventory_stock_location" href="#"><i class="icon-circle"></i> Stock Locations</a></li>
					<li><a pd-popup-open="inventory_mode_payment" href="#"><i class="icon-circle"></i> Mode Of Payment</a></li>
					<li><a pd-popup-open="suppliers" href="#"><i class="icon-circle"></i> Supplier</a></li>
					<li><a pd-popup-open="cost-center" href="#"><i class="icon-circle"></i> Cost Centers</a></li>
					<li><a pd-popup-open="sub-cost-center" href="#"><i class="icon-circle"></i> Sub Cost Centers</a></li>
					<li><a pd-popup-open="inventory_vat" href="#"><i class="icon-circle"></i> Vat Codes</a></li>
					<li><a pd-popup-open="inventory_print_barcode" href="#"><i class="icon-circle"></i> Print Bar Code</a></li>
					<li><a pd-popup-open="#" href="#"><i class="icon-circle"></i> Print Bar Code 2</a></li>
				</ul>
			</li>
		</ul>
	</li>
    <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>Accounting</span></a> 
		<ul>
			<li><a href="accounting-statement-of-account.php"><i class="icon-check-empty"></i> Statement of Account</a></li>
			<li><a href="accounting-collection-entry.php"><i class="icon-check-empty"></i> Collection Entry</a></li>
			<li><a href="accounting-disbursement-entry.php"><i class="icon-check-empty"></i> Disbursement Entry</a></li>
			<li><a href="accounting-journal-entry.php"><i class="icon-check-empty"></i> Journal Entry</a></li>
			<li><a href="accounting-release-check.php"><i class="icon-check-empty"></i> Release Check</a></li>
			<li><a href="accounting-post-ledger.php"><i class="icon-check-empty"></i> Post to Ledger</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Journalize Collection Entry</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Journalize Disbursement Entry</a></li>
		</ul>
	</li>
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>CRM</span></a> 
		<ul class="nav">
			<li><a pd-popup-open="customer_register" href="#"><i class="icon-check-empty"></i> Address Book</a></li>
			<li><a href="calendar.php"><i class="icon-check-empty"></i> Calendar</a></li>
			<li><a href="crm-reminder.php"><i class="icon-check-empty"></i> Reminder</a></li>
			<li><a href="crm-call-record.php"><i class="icon-check-empty"></i> Call Record</a></li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span> Text Blast</span></a>
				<ul style="background-color: #28303a;">
					<li><a href="crm-text-blast.php"><i class="icon-circle"></i> Text Blast</a></li>
					<li><a pd-popup-open="crm_text_blast_template" href="#"><i class="icon-circle"></i> Text Blast Template</a></li>
					<li><a pd-popup-open="crm_text_blast_category" href="#"><i class="icon-circle"></i> Category</a></li>
					<li><a pd-popup-open="#" href="#"><i class="icon-circle"></i> Text Blast History</a></li>
				</ul>
			</li>
			<li class="sub"><a href="#"><i class="icon-check-empty"></i><span> Email</span></a>
				<ul style="background-color: #28303a;">
					<li><a href="email-campaign.php"><i class="icon-circle"></i> Email Campaign</a></li>
					<li><a href="#"><i class="icon-circle"></i> Email Template</a></li>
					<li><a href="#"><i class="icon-circle"></i> Email History</a></li>
				</ul>
			</li>
		</ul>
	</li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>Sales</span></a>
		<ul>
			<li class=""><a href="calendar.php"><i class="icon-check-empty"></i> Calendar - Auto Sales</a></li>
			<li><a href="sales-view_loan.php"><i class="icon-check-empty"></i> View Loan Status</a></li>
			<li><a href="sales-register_loan_application.php"><i class="icon-check-empty"></i> Register Loan Application</a></li>
			<li><a href="sales-sales_entry.php"><i class="icon-check-empty"></i> Sales Entry</a></li>
			<li><a href="sales-sales_cashier.php"><i class="icon-check-empty"></i> Sales Cashier</a></li>
			<li><a href="sales-release_deliver_unit.php"><i class="icon-check-empty"></i> Release/Delivery Unit</a></li>
			<li><a href="sales-GP_computation.php"><i class="icon-check-empty"></i> GP Computation</a></li>
			<li><a href="sales-update_loan_status.php"><i class="icon-check-empty"></i> Update Loan Status</a></li>
			<li><a href="item_search.php"><i class="icon-check-empty"></i> Vehicle Search</a></li>
			<li><a pd-popup-open="journalize" href="#"><i class="icon-check-empty"></i> Journalize Sales Transactions</a></li>
		</ul>
	</li>
    <li class="submenu"><a href="#"><i class="icon icon-fullscreen"></i> <span>Parts</span></a>
		<ul>
			<li><a href="calendar.php"><i class="icon-check-empty"></i> Calendar - Parts</a></li>
			<li><a href="parts-order_entry.php"><i class="icon-check-empty"></i> Parts Order Entry</a></li>
			<li><a href="parts-cashier.php"><i class="icon-check-empty"></i> Parts Cashier</a></li>
			<li><a href="parts-sales_return.php"><i class="icon-check-empty"></i> Sales Return</a></li>
			<li><a href="item_search.php"><i class="icon-check-empty"></i> Item Search</a></li>
			<li><a pd-popup-open="journalize" href="#"><i class="icon-check-empty"></i> Journalize Parts Transactions</a></li>
		</ul>

	</li>
    <li class="submenu"><a href="#"><i class="icon icon-home"></i> <span>Services</span></a> 
		<ul>
			<li><a href="calendar.php"><i class="icon-check-empty"></i> Calendar - Services</a></li>
			<li><a href="services-job_quotation.php"><i class="icon-check-empty"></i> Job Quotation</a></li>
			<li><a href="services-service_status.php"><i class="icon-check-empty"></i> View Service Status</a></li>
			<li><a href="services-service_entry.php"><i class="icon-check-empty"></i> Service Entry</a></li>
			<li><a href="services-service_cashier.php"><i class="icon-check-empty"></i> Service Cashier</a></li>
			<li><a href="services-maintenance.php"><i class="icon-check-empty"></i> Perform Maintenance</a></li>
			<li><a href="services-work_shopload.php"><i class="icon-check-empty"></i> Work Shopload</a></li>
			<li><a href="services-service_history.php"><i class="icon-check-empty"></i> Service History</a></li>
			<li><a href="item_search.php"><i class="icon-check-empty"></i> Menu Search</a></li>
			<li><a><i class="icon-check-empty"></i> Journalize Parts Transactions</a></li>
		</ul>
	</li>
    <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>Inventory</span></a>
		<ul>
			<li><a href="inventory-PR.php"><i class="icon-check-empty"></i> Purchase Request</a></li>
			<li><a href="inventory-PO.php"><i class="icon-check-empty"></i> Purchase Orders</a></li>
			<li><a href="inventory-receiving_PO.php"><i class="icon-check-empty"></i> Recieving Purchase Orders</a></li>
			<li><a href="inventory-direct_purchase.php"><i class="icon-check-empty"></i> Direct Purchases</a></li>
			<li><a href="inventory-purchase_return.php"><i class="icon-check-empty"></i> Purchase Returns</a></li>
			<hr/>
			<li><a href="inventory-stock_issuance.php"><i class="icon-check-empty"></i> Stock Issuance</a></li>
			<li><a href="inventory-stock_transfer.php"><i class="icon-check-empty"></i> Stock Transfer</a></li>
			<li><a href="inventory-Rstock_transfer.php"><i class="icon-check-empty"></i> Recieving Stock Transfer</a></li>
			<li><a href="inventory-stock_adjustment.php"><i class="icon-check-empty"></i> Stock Adjustment</a></li>
			<li><a href="invetory-STC.php"><i class="icon-check-empty"></i> Stock Transaction Card</a></li>
			<hr/>
			<li><a pd-popup-open="journalize_inv" href="#">Journalize Stock Transactions</a></li>
			<li><a pd-popup-open="journalize_inv" href="#">Journalize Purchases Transactions</a></li>
		</ul>
	</li>
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Reports</span></a>
		<ul>
			<li><a href="#"><i class="icon-check-empty"></i> CRM</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Accounting</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Sales</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Parts</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Services</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Inventory</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Projects</a></li>
		</ul>
	</li>
    <li class="submenu"><a href="#"><i class="icon icon-th"></i> <span>Settings</span></a>
		<ul>
			<li><a href="settings-group-rights.php"><i class="icon-check-empty"></i> Group Rights Settings</a></li>
			<li><a href="settings-user-settings.php"><i class="icon-check-empty"></i> User Settings</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> Notification Settings</a></li>
			<li><a href="#"><i class="icon-check-empty"></i> System Data Update</a></li>
		</ul>

	</li>
    <li class="submenu"><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Help</span></a>
		<ul>
			<li><a href="#"><i class="icon-check-empty"></i> About</a></li>
		</ul>
	</li>
</div>


