<?php
require_once("includes/header.php");
?>
<link href="css/modal_pwd.css" rel="stylesheet" type="text/css">
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-register_loan_application.php" class="current">Auto Sales Order</a> </div>
    <h1>Auto Sales Order</h1> 
  </div>
  <div class="container-fluid">
    <hr>
  <div>
    <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content">
          <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <button class="btn btn-primary col-lg-5" style="margin-right:5px; height:55px;"><i class="icon-save"></i> Save</button>
                        <a href="sales-sales_entry.php"> <button class="btn btn-danger col-lg-5" style="height:55px;"><i class="icon-reply"></i> Exit</button> </a>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Repair Order Status</label>
                        <div class="controls">
                          <select class="span12">
                                  <option>First option</option>
                                  <option>Second option</option>
                                  <option>Third option</option>
                                  <option>Fourth option</option>
                                  <option>Fifth option</option>
                                  <option>Sixth option</option>
                                  <option>Seventh option</option>
                                  <option>Eighth option</option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Stock Location</label>
                        <div class="controls">
                          <input type="text" class="span12" readonly="true" />
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Outlet Type</label>
                        <div class="controls">
                          <input type="text" class="span12" readonly="true"/>
                        </div>
                      </div>

          </div>

&nbsp;
        </div>
    </div>
  </div>

<div>
    
  
                          
</div>
    <div class="row-fluid">
    <div class="span12">

                  <div class="widget-box">
                        <div class="widget-title">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Client Info</a></li>
                            <li><a data-toggle="tab" href="#tab2">Auto Loan Info</a></li>
                          </ul>
                        </div>
                        <div class="widget-content tab-content">
                          <div id="tab1" class="tab-pane active">
                                <div class="container-fluid">
                                  <div class="col-lg-12">    
                                     <h5>Client Information</h5><hr/>  
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">SO No.</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">Trans. Date</label>
                                            <div class="controls">
                                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">Applicant No.</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">Applied On</label>
                                            <div class="controls">
                                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                            </div>
                                          </div>

                                          <div class="control-group col-lg-2">
                                              <button class="btn btn-info span12" pd-popup-open="customer_search" href="#" style="height:55px;"><i class="icon-user"></i> Select Client</button>
                                          </div>

                                      </div>

                                      <div class="col-lg-12">      
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Client Name</label>
                                            <div class="controls">
                                              <input type="text" class="span12"/>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Contact No.</label>
                                            <div class="controls">
                                              <input type="text" class="span9" readonly>
                                            </div>
                                          </div>
                                      </div>

                                      <div class="col-lg-12">      
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Email</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Address</label>
                                            <div class="controls">
                                              <textarea class="textarea_editor span9" rows="2" readonly></textarea>
                                            </div>
                                          </div>

                                      </div>
                                    <div class="col-lg-12">    
                                     <h5>Status And Other Information</h5><hr/>  
                                          <div class="control-group col-lg-4">
                                            <label class="control-label">Market Segment</label>
                                            <div class="controls">
                                              <select class="span12">
                                                      <option>First option</option>
                                                      <option>Second option</option>
                                                      <option>Third option</option>
                                                      <option>Fourth option</option>
                                                      <option>Fifth option</option>
                                                      <option>Sixth option</option>
                                                      <option>Seventh option</option>
                                                      <option>Eighth option</option>
                                                    </select>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-4">
                                            <label class="control-label">Salesman</label>
                                            <div class="controls">
                                              <select class="span12">
                                                      <option>First option</option>
                                                      <option>Second option</option>
                                                      <option>Third option</option>
                                                      <option>Fourth option</option>
                                                      <option>Fifth option</option>
                                                      <option>Sixth option</option>
                                                      <option>Seventh option</option>
                                                      <option>Eighth option</option>
                                                    </select>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">Sales Invoice Contrl No.</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                      </div>

                                      <div class="col-lg-12">      
                                          <div class="control-group col-lg-4">
                                            <label class="control-label">Remark</label>
                                            <div class="controls">
                                              <textarea class="textarea_editor span12" rows="2"></textarea>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-4">
                                            <label class="control-label">Sales Clerk</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">Sales Cashier</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly>
                                            </div>
                                          </div>
                                      </div>
                                  </div>



                          </div>
                          <div id="tab2" class="tab-pane">
                                  <div class="span8">
                                   <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"><i class="icon-truck"></i></span>
                                        <h5>Auto Loan Information</h5>
                                      </div>
                                      
                                      <div class="widget-content ">
                                         
                                        <div class="col-lg-12">
                                                      <div class="control-group col-lg-8">
                                                        <label class="control-label">Unit Applied</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span4" readonly="true">
                                                          <input type="text" value="" class="span8" readonly="true">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-2">
                                                          <button class="btn btn-info span12"  pd-popup-open="vehicle_search" href="#" style="height:55px;"><i class="icon-truck"></i> Select Unit</button>
                                                      </div>

                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">VIN NO*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Engine No*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12">
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Conduction No*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">SRP Price</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">DP (%)</label>
                                                        <div class="controls">
                                                          <select class="span12">
                                                            <option>First option</option>
                                                            <option>Second option</option>
                                                            <option>Third option</option>
                                                            <option>Fourth option</option>
                                                            <option>Fifth option</option>
                                                            <option>Sixth option</option>
                                                            <option>Seventh option</option>
                                                            <option>Eighth option</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-2">
                                                        <label class="control-label">Terms (Months)*</label>
                                                        <div class="controls">
                                                          <select class="span12">
                                                            <option>First option</option>
                                                            <option>Second option</option>
                                                            <option>Third option</option>
                                                            <option>Fourth option</option>
                                                            <option>Fifth option</option>
                                                            <option>Sixth option</option>
                                                            <option>Seventh option</option>
                                                            <option>Eighth option</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-3">
                                                        <label class="control-label">DP Amount</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span10" readonly="true">
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Add-On-Rate*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Client DP*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" >
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Monthly Amortization</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Total Discount</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Total Item Amount</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Total Payment</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          &nbsp;

                                      </div>

                                    </div>
                                  </div>

                                  <div class="span4">
                                   <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"><i class="icon-reorder"></i></span>
                                        <h5>Breakdown</h5>
                                      </div>
                                      
                                      <div class="widget-content">
                                      <form class="form-horizontal">
                                         <div class="control-group">
                                            <label class="control-label" style="width: 90px; margin-left: 0px; font-size: 12px;">VATable Sales</label>
                                            <div class="controls"  style="margin-left: 87px;">
                                              <input type="text" class="span11" style="margin-left: 2px;" readonly="true" />
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" style="width: 90px; margin-left: 0px; font-size: 12px;">VAT-Exempt Sales</label>
                                            <div class="controls"  style="margin-left: 87px;">
                                              <input type="text" class="span11" style="margin-left: 2px;" readonly="true" />
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" style="width: 90px; margin-left: 0px; font-size: 12px;">Zero-Rated Sales*</label>
                                            <div class="controls"  style="margin-left: 87px;">
                                              <input type="text" class="span11" style="margin-left: 2px;" />
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" style="width: 90px; margin-left: 0px; font-size: 12px;">VAT Amount*</label>
                                            <div class="controls"  style="margin-left: 87px;">
                                              <input type="text" class="span11" style="margin-left: 2px;" />
                                            </div>
                                          </div>
                                          <div class="control-group" style="border-bottom: 1px; border-color: gray;">
                                            <label class="control-label" style="width: 90px; margin-left: 0px; font-size: 12px;">Less VAT*</label>
                                            <div class="controls"  style="margin-left: 87px;">
                                              <input type="text" class="span11" style="margin-left: 2px;" />
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <label class="control-label" style="width: 100px; margin-left: 0px; font-size: 12px;">SRP (NET of VAT)</label>
                                            <div class="controls"  style="margin-left: 102px;">
                                              <input type="text" class="span11" style="margin-left: 2px;" readonly="true"/>
                                            </div>
                                          </div>
                                      </form>
                     
                                      </div>

                                    </div>
                                  </div>

                          </div>
                        </div>
                  </div>
                  <div class="widget-box">
                        <div class="widget-title">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1-1">Freebies And Other Items</a></li>
                            <li><a data-toggle="tab" href="#tab2-1">Payment Details</a></li>
                          </ul>
                        </div>
                        <div class="widget-content tab-content nopadding">
                          <div id="tab1-1" class="tab-pane active">

                              <div class="widget-box">
                                <div class="widget-content nopadding">
                                    <button class="btn btn-primary"><i class="icon-plus"></i> Add Item</button>
                                    <button class="btn btn-info"><i class="icon-pencil"></i> Update Item</button>
                                    <button class="btn btn-danger"><i class="icon-remove"></i> Remove</button>
                                  <div class="table table-responsive" style="overflow-y:auto;">
                                      <table id="mtable" class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Line_#</th>
                                            <th>Qty.</th>
                                            <th>Unit</th>
                                            <th>Item_Description</th>
                                            <th>Part_No.</th>
                                            <th>Reg._Price</th>
                                            <th>Discount</th>
                                            <th>Sell_Price</th>
                                            <th>Incl._TAX</th>
                                            <th>Disc._By_User</th>
                                            <th>Disc._Reason</th>
                                            <th>Disc._Code</th>
                                            <th>Remarks</th>
                                            <th>Item_Code</th>
                                            <th>Unit_ID</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                            
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                              </div>

                          </div>
                          <div id="tab2-1" class="tab-pane">
                            <div class="widget-box">
                                <div class="widget-content nopadding">
                                    <button class="btn btn-primary"><i class="icon-plus"></i> Add Payment</button>
                                    <button class="btn btn-info"><i class="icon-pencil"></i> Update Payment</button>
                                    <button class="btn btn-danger"><i class="icon-remove"></i> Remove</button>
                                  <div class="table table-responsive" style="overflow-y:auto;">
                                      <table id="mtable1" class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Line_#</th>
                                            <th>Pay_Code</th>
                                            <th>Payment_Description</th>
                                            <th>Reference</th>
                                            <th>Line_Amount</th>
                                            <th>Cashier</th>
                                            <th>Type</th>
                                            <th>Charge_To</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          <tr>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                            <td class="center">---</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                              </div>


                          </div>
                        </div>
                  </div>



      </div>



    </div>
  </div>
</div>
<?php
require_once("includes/footer.php");
?>
