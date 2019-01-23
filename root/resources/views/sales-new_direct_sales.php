<?php
require_once("includes/header.php");
?>
<link href="css/modal_pwd.css" rel="stylesheet" type="text/css">
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-GP_computation.php" class="tip-bottom">GP Computation</a><a href="sales-new_direct_sales.php" class="current">New Direct Sales Transactions</a></div>
    <h1>New Direct Sales Transactions</h1> 
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
                        <a href="sales-GP_computation.php"> <button class="btn btn-danger col-lg-5" style="height:55px;"><i class="icon-reply"></i> Exit</button> </a>
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
    <div class="span7">
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
                                          <div class="control-group col-lg-3">
                                            <label class="control-label">SO No.</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-3">
                                            <label class="control-label">Trans. Date</label>
                                            <div class="controls">
                                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                            </div>
                                          </div>
                                          
                                          <div class="control-group col-lg-3">
                                            <label class="control-label">Applied On</label>
                                            <div class="controls">
                                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                            </div>
                                          </div>


                                      </div>
                                      <div class="col-lg-12"> 
                                          <div class="control-group col-lg-2">
                                            <label class="control-label">Applicant No.</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Client Name</label>
                                            <div class="controls">
                                              <input type="text" class="span12"/>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-2">
                                              <button class="btn btn-info span12" pd-popup-open="customer_search" href="#" style="height:55px;"><i class="icon-user"></i> Select Client</button>
                                          </div>
                                      </div>

                                      <div class="col-lg-12">      
                                          
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Contact No.</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly>
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Email</label>
                                            <div class="controls">
                                              <input type="text" class="span11" readonly />
                                            </div>
                                          </div>
                                      </div>

                                      <div class="col-lg-12">      
                                          
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Address</label>
                                            <div class="controls">
                                              <textarea class="textarea_editor span12" rows="2" readonly></textarea>
                                            </div>
                                          </div>

                                      </div>

                                    <div class="col-lg-12">    
                                     <h5>Status And Other Information</h5><hr/>  
                                          <div class="control-group col-lg-5">
                                            <label class="control-label"><b>Servex Card No.</b></label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Financer</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                      </div>

                                      <div class="col-lg-12">    
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Credit Decision</label>
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
                                          <div class="control-group col-lg-5">
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
                                      </div>
                                      <div class="col-lg-12">    
                                          <div class="control-group col-lg-5">
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
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Service Assisted By</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">    
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Reservation Cashier</label>
                                            <div class="controls">
                                              <input type="text" class="span12" readonly />
                                            </div>
                                          </div>
                                          <div class="control-group col-lg-5">
                                            <label class="control-label">Sales Cashier</label>
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
                                      </div>


                                      <div class="col-lg-12">      
        
                                      <div class="control-group col-lg-5">
                                            <label class="control-label">Remark</label>
                                            <div class="controls">
                                              <textarea class="textarea_editor span12" rows="2"></textarea>
                                            </div>
                                      </div>
                                  </div>



                          </div>
                      </div>
                          <div id="tab2" class="tab-pane">
                                  <div class="container-fluid">
                                   <div class="col-lg-12">
                                   <h5>Auto Loan Information</h5><hr/>  
                                                      <div class="control-group col-lg-8">
                                                        <label class="control-label">Unit Applied</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span4" readonly="true">
                                                          <input type="text" value="" class="span8" readonly="true">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-2">
                                                          <button class="btn btn-info span12" pd-popup-open="vehicle_search" href="#" style="height:55px;"><i class="icon-truck"></i> Select Unit</button>
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
                                                        <label class="control-label">Term</label>
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
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Bank</label>
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
                                          </div>
                                        
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Add-On-Rate*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Actual DP*</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" >
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
                                                  
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">DP Amount</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          <div class="col-lg-12">
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">Sales Executive</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      <div class="control-group col-lg-5">
                                                        <label class="control-label">SRP</label>
                                                        <div class="controls">
                                                          <input type="text" value="" class="span12" readonly="true">
                                                        </div>
                                                      </div>
                                                      
                                          </div>
                                          <div class="col-lg-12">
                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">SRP (NET of VAT)</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span8">
                                                        <input type="text" value="" class="span4">
                                                      </div>
                                                    </div>

                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">Less Dealer's Cost (NET Of VAT)</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <h5>Dealer's Margin Breakdown</h5><hr/>
                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">*Unit Margin</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>

                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">*Others</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-12">
                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">*Unit Subsidy</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>

                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label"><b>TOTAL BREAKDOWN</b></label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-12">
                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">Dealer Margin</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>

                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">VAT Executive</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-12">
                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">Add: Dealer's Insentive on AF</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span6">
                                                        <input type="text" value="" class="span4">
                                                        <input type="text" value="%" class="span2" disabled style="background-color: #fff; border-color: #fff;">
                                                      </div>
                                                    </div>

                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">Less: Sales Discount</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-12">
                                                    <div class="control-group col-lg-7">
                                                      <label class="control-label"><b>GROSS PROFIT</b></label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>

                                        </div>
                                        <div class="col-lg-12">
                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">Profit before Payback</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>

                                                    <div class="control-group col-lg-5">
                                                      <label class="control-label">Payback</label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="col-lg-12">
                                                    <div class="control-group col-lg-7">
                                                      <label class="control-label"><b>NET PROFIT</b></label>
                                                      <div class="controls">
                                                        <input type="text" value="" class="span12">
                                                      </div>
                                                    </div>

                                        </div>
                                         
                                          &nbsp;
                                  </div>

                          </div>


                 </div>

          </div>
    </div>

    <div class="span5">
                  <div class="widget-box">
                        <div class="widget-content ">

                                    <button class="btn btn-primary" pd-popup-open="popup_sales_itm" href="#"><i class="icon-plus"></i> Add Item</button>
                                    <button class="btn btn-info"><i class="icon-pencil"></i> Update Item</button>
                                    <button class="btn btn-danger"><i class="icon-remove"></i> Remove</button>


                                  <div class="widget-box">
                                    <div class="widget-title"> <span class="icon"> <i class="icon-hdd"></i> </span>
                                      <h5>Accessories And Other Cost</h5>
                                    </div>
                                    <div class="widget-content nopadding">
                                    <div class="table table-responsive" style="overflow-y:auto;">
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th>Line #</th>
                                            <th>Qty.</th>
                                            <th>Unit</th>
                                            <th>Item Description</th>
                                            <th>Part No.</th>
                                            <th>Reg. Price</th>
                                            <th>Discount</th>
                                            <th>Sell Price</th>
                                            <th>Line Amount</th>
                                            <th>Incl. TAX</th>
                                            <th>Disc. By User</th>
                                            <th>Disc Reason</th>
                                            <th>Disc. Code</th>
                                            <th>Remarks</th>
                                            <th>Item Code</th>
                                            <th>Unit ID</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr class="odd gradeX">
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
                                            <td class="center">---</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    </div>               
                                  </div>


                                   <div class="widget-box">
                                   <div class="widget-title"> <span class="icon"> <i class="icon-money"></i> </span>
                                      <h5>Less: Cost of Sales - Promo Freebies</h5>
                                    </div>
                                    <div class="widget-content ">
                                      <form class="form-horizontal">
                                             <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">LTO Registration</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">TPL</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">Comprehendive Insurance</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">Chattel Mortgage</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">Total COS-Promo Freebies</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;"><b>G.P. After COS-PF</b></label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                      </form>
                                    </div>
                                  </div>
                                  <div class="widget-box">
                                   <div class="widget-title"> <span class="icon"> <i class="icon-money"></i> </span>
                                      <h5>Less: Direct Expenses</h5>
                                    </div>
                                    <div class="widget-content ">
                                      <form class="form-horizontal">
                                             <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">*Unit Commission</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">*Sales Insentives</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">*Referal</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">Override</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              <div class="control-group">
                                                <label class="control-label" style="width: 150px; margin-left: 0px; font-size: 12px;">Fuel And Transfer Cost</label>
                                                <div class="controls"  style="margin-left: 152px;">
                                                  <input type="text" class="span11" style="margin-left: 2px;" placeholder="0.00" />
                                                </div>
                                              </div>
                                              
                                      </form>
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
</div>
<?php
require_once("includes/footer.php");
?>
