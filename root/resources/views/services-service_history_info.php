<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="services-service_history.php" class="tip-bottom">Service History</a><a href="services-service_history_info.php" class="current">Service History Information</a> </div>
    <h1>Service History Information</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Service History Information</h5>
          </div>
          <div class="widget-content">
          <div class="container-fluid">
          <div class="span6 nopadding">
            <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">Trans. No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">Trans. Date</label>
                        <div class="controls"  style="margin-top: -1px;">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-5" style="padding: 4px;">
                        <label class="control-label">Service Type</label>
                        <div class="controls drop" style="margin-top: 6px;">
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
          <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-12">
                        <label class="control-label">Customer </label>
                        <div class="controls ad" style="margin-left: -10px;">
                          <input type="text" class="span10" readonly/>
                              <span class="btn add-on btn-primary"  pd-popup-open="customer_search" href="#"  style="margin-top: -10px;margin-left:"><i class="icon-user"></i></span>
                        </div>
                      </div>
          </div>
          <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-12">
                        <label class="control-label">Servex Card No.</label>
                        <div class="controls ad" style="margin-left: -10px;">
                          <input type="text" class="span10 " readonly/>
                              <span class="btn add-on btn-info" pd-popup-open="card_search" href="#" style="margin-top: -10px;margin-left:"><i class="icon-credit-card"></i></span>
                        </div>
                      </div>
          </div>
          <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-12">
                        <label class="control-label">Vehicle Information</label>
                        <div class="controls ad" style="margin-left: -10px;">
                          <input type="text" class="span10 " readonly/>
                              <span class="btn add-on btn-success" pd-popup-open="vehicle_search" href="#" style="margin-top: -10px;margin-left:"><i class="icon-truck"></i></span>
                        </div>
                      </div>
          </div>
          <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Vin No.</label>
                        <div class="controls ">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Engine No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">Plate No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>


          </div>
          <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Year Model</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Brand Name</label>
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
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">Release Date</label>
                        <div class="controls"  style="margin-top: -1px;">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                        </div>
                      </div>


          </div>
          </div>
          <div class="span6 nopadding">
            <div class="col-lg-12 nopadding">        
                      <div class="control-group col-lg-5" style="padding: 4px;">
                        <label class="control-label">Market Segment</label>
                        <div class="controls" style="margin-top: 6px;">
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
                      <div class="control-group col-lg-6" style="padding: 4px;">
                        <label class="control-label">Sales Agent</label>
                        <div class="controls" style="margin-top: 6px;">
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
           <div class="col-lg-12 nopadding">        
                      <div class="control-group col-lg-8" style="padding: 4px;">
                        <label class="control-label">Market Segment</label>
                        <div class="controls" style="margin-top: 6px;">
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
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">Speedometer(KM)</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>

          </div>
           <div class="col-lg-12 nopadding">        
                    
                      
                      <div class="control-group col-lg-11" style="padding: 4px;">
                        <label class="control-label">Technician Assigned</label>
                        <div class="controls" style="margin-top: 6px;">
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

           <div class="col-lg-12 nopadding">    
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Status</label>
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
                      <div class="control-group col-lg-7" style="padding: 4px;">
                        <label class="control-label">Promise Date/Time</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span6"><input type="time" value="12:00" class="datepicker span6">
                        </div>
                      </div>
          </div>
          <div class="col-lg-12 nopadding">        
                      <div class="control-group col-lg-11" style="padding: 4px;">
                        <label class="control-label">Remarks</label>
                        <div class="controls" style="margin-top: 6px;">
                            <textarea class="span12" rows="4"></textarea>
                        </div>
                      </div>

          </div>

          </div>
          </div>
          

&nbsp;
        </div>
    </div>
  </div>

<div>

              <button class="btn btn-primary"><i class="icon icon-plus" ></i> Add Item</button>

</div>
                  <div class="widget-box">
                        <div class="widget-title">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1-1">Order Item List</a></li>
                            <li><a data-toggle="tab" href="#tab3-1">Sub Items</a></li>
                            <li><a data-toggle="tab" href="#tab2-1">Payment Details</a></li>
                          </ul>
                        </div>
                        <div class="widget-content tab-content nopadding">
                          <div id="tab1-1" class="tab-pane active">

                              <div class="widget-box">
                                <div class="widget-content nopadding">
                                  <div class="table table-responsive" style="overflow-y:auto;">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Line #</th>
                                            <th>Qty.</th>
                                            <th>Unit</th>
                                            <th>Part No.</th>
                                            <th>Item Description</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Exc TAX</th>
                                            <th>Line Amoumt</th>
                                            <th>NET TAX</th>
                                            <th>Incl. TAX</th>
                                            <th>Type</th>
                                            <th>Disc. By</th>
                                            <th>Disc. Reason</th>
                                            <th>Disc.</th>
                                            <th>Remarks</th>
                                            <th>Item Code</th>
                                            <th>Unit ID</th>
                                            <th>Trans. Code</th>
                                            <th>Time</th>
                                            <th>Service</th>
                                            <th>SA ID</th>
                                            <th>AT Code</th>
                                            <th>Hour</th>
                                            <th>Cost</th>
                                            <th>PRIS</th>

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
                                  <div class="table table-responsive" style="overflow-y:auto;">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Line #</th>
                                            <th>Pay Code</th>
                                            <th>Payment Description</th>
                                            <th>Reference</th>
                                            <th>Line Amount</th>
                                            <th>Cashier</th>
                                            <th>Type</th>
                                            <th>Charge To</th>
                                            <th>Pay Date</th>
                                            <th>Pay Time</th>
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
                                          </tr><tr>
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
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                              </div>


                          </div>
                          <div id="tab3-1" class="tab-pane">
                            <div class="widget-box">
                                <div class="widget-content nopadding">
                                  <div class="table table-responsive" style="overflow-y:auto;">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Menu Line#</th>
                                            <th>Part No.</th>
                                            <th>Item Description</th>
                                            <th>Quantity</th>
                                            <th>Unit</th>
                                            <th>Reg price</th>
                                            <th>Selling Price</th>
                                            <th>Line Amount</th>
                                            <th>NET Amount</th>
                                            <th>TAX</th>
                                            <th>Disc. User</th>
                                            <th>Disc. Reason</th>
                                            <th>Unit ID</th>
                                            <th>Item Code</th>
                                            <th>Disc. Code</th>
                                            <th>Remarks</th>
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
                                            <td class="center">---</td>
                                          </tr><tr>
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
                                          </tr><tr>
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


                          </div>
                        </div>
                  </div>
                     <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content" style="padding: 4px;">
          <div class="container-fluid">
          <div class="span4 nopadding">

                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">RO Reference</label>
                        <div class="controls">
                          <input type="text" name="" class="span12" disabled>
                        </div>
                      </div>
                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">Ordered Date</label>
                        <div class="controls">
                           <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12" disabled>
                        </div>
                      </div>
                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">Order Assisted By</label>
                        <div class="controls">
                           <input type="text" name="" class="span12" disabled>
                        </div>
                      </div>
                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">Cashier</label>
                        <div class="controls">
                           <input type="text" name="" class="span12" disabled>
                        </div>
                      </div>

      
          </div>
          <div class="span8 nopadding">
              <div class="col-lg-5">
                <div class="widget-box" >
                  <div class="widget-content" style="padding: 4px;">
                    <div class="container-fluid">
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label">Gross Amount</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #c15151;">Less: Discount</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="border-color: #c15151;" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #1276b1;"><b>Total Amount</b></label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="border-color: #034e79;" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #c15151;">Less: Payment</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="border-color: #c15151;" disabled>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="widget-box" >
                  <div class="widget-content" style="padding: 4px;">
                    <div class="container-fluid">
                    <i><h6>Break Down of Total Amount</h6></i><hr>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label">NET Amount</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00">
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: 45px;">
                          <label class="control-label">VAT</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00">
                          </div>
                        </div>

                        
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">  
              &nbsp;
              </div>
              <div class="col-lg-5">

                            <input type="text" class="span5" value="Balance:" disabled style="border-color: #fff;font-weight: bold; text-align:right; color:#1276b1; font-size: 18px;"><input type="text" class="span7" name="" placeholder="0.00" style="background-color: #034e79; text-align: right;" disabled>

              </div>

                                  
          </div>
          </div>



        </div>
    </div>
  </div>

<div>
    
  
                          
</div>
        <button class="btn btn-primary span2" style="height:40px; margin-left: 0px;margin-right: 5px; font-size: 18px;"><i class="icon-save"></i> Save</button>
        <button class="btn btn-danger span2" style="height:40px; margin-left: 0px;font-size: 18px;"><i class="icon-reply"></i> Exit</button>
      </div>
    </div>
  </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php
require_once("includes/footer.php");
?>
