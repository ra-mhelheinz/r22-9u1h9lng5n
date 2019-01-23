<?php
require_once("includes/header.php");
?>
<style type="text/css">

</style>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="parts-order_entry.php" class="tip-bottom">Parts Order Entry</a><a href="parts-order_entry_info.php" class="current">Job Order Entry Info</a> </div>
    <h1>Job Order Entry Info</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Job Order Entry</h5>
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
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">Appoinment No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Appointed On</label>
                        <div class="controls"  style="margin-top: -1px;">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-4" style="padding: 4px;">
                        <label class="control-label">Appointed Time</label>
                        <div class="controls"  style="margin-top: -1px;">
                          <input type="Time" value="12:00" class="span12">
                        </div>
                      </div>


          </div>
          <div class="col-lg-12 nopadding">
                      <div class="control-group col-lg-12">
                        <label class="control-label">Customer</label>
                        <div class="controls" style="margin-left: -10px;">
                          <input type="text" class="span9 " readonly/>
                              <span class="btn add-on btn-primary" pd-popup-open="customer_register" href="#" style="margin-top: -10px;margin-right:2px;"><i class="icon-user"></i></span><span class="btn add-on btn-success" pd-popup-open="customer_register" href="#" style="margin-top: -10px;">FAO</span>
                        </div>
                      </div>
          </div>
         
        
          </div>
          <div class="span6 nopadding">
            <div class="col-lg-12 nopadding">        
                      <div class="control-group col-lg-5" style="padding: 4px;">
                        <label class="control-label">Market</label>
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
                        <label class="control-label">Parts Sales</label>
                        <div class="controls">
                          <input type="text" value="" class="span3"><input type="text" value="" class="span9">
                        </div>
                      </div>

          </div>
           <div class="col-lg-12 nopadding">        
                      <div class="control-group col-lg-5" style="padding: 4px;">
                        <label class="control-label">CRO</label>
                        <div class="controls">
                          <input type="text" value="" class="span3"><input type="text" value="" class="span9">
                        </div>
                      </div>
                      <div class="control-group col-lg-6" style="padding: 4px;">
                        <label class="control-label">Cashier</label>
                        <div class="controls">
                          <input type="text" value="" class="span3"><input type="text" value="" class="span9">
                        </div>
                      </div>

          </div>
           <div class="col-lg-12 nopadding">        
                      <div class="control-group col-lg-8" style="padding: 4px;">
                        <label class="control-label">Partsman</label>
                        <div class="controls">
                          <input type="text" value="" class="span3"><input type="text" value="" class="span9">
                        </div>
                      </div>
                      <div class="control-group col-lg-3" style="padding: 4px;">
                        <label class="control-label">SPI #</label>
                        <div class="controls">
                          <input type="text" value="" class="span11">
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
              <button class="btn btn-primary" pd-popup-open="popup_sales_txtitm" href="#" ><i class="icon icon-plus"></i> Add Text Item</button>
              <button class="btn btn-primary" pd-popup-open="popup_sales_itm" href="#"><i class="icon icon-plus" ></i> Add Item</button>
              <button class="btn btn-info"><i class="icon icon-pencil"></i> Update Line</button>
              <button class="btn btn-danger"><i class="icon icon-remove"></i> Remove Line</button>
</div>
                  <div class="widget-box">
                        <div class="widget-title">
                          <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1-1">Ordered Items List</a></li>
                            <li><a data-toggle="tab" href="#tab2-1">Payment Details</a></li>
                          </ul>
                        </div>
                        <div class="widget-content tab-content nopadding">
                          <div id="tab1-1" class="tab-pane active">

                              <div class="widget-box">
                                <div class="widget-content nopadding">
                                  <div class="table table-responsive" style="overflow-y:auto;">
                                      <table id="mtable" class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Line_#</th>
                                            <th>Qty.</th>
                                            <th>Unit</th>
                                            <th>Part_No.</th>
                                            <th>Item_Description</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Exc_TAX</th>
                                            <th>Line_Amoumt</th>
                                            <th>NET_TAX</th>
                                            <th>Incl._TAX</th>
                                            <th>Type</th>
                                            <th>Disc._By</th>
                                            <th>Disc._Reason</th>
                                            <th>Disc.</th>
                                            <th>Remarks</th>
                                            <th>Item_Code</th>
                                            <th>Unit_ID</th>
                                            <th>Trans._Code</th>
                                            <th>Time</th>
                                            <th>Service</th>
                                            <th>SA_ID</th>
                                            <th>AT_Code</th>
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
                                            <th>Pay_Date</th>
                                            <th>Pay_Time</th>
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
                        </div>
                  </div>
                     <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content" style="padding: 4px;">
          <div class="container-fluid">
          <div class="span4 nopadding">

                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">Remarks</label>
                        <div class="controls">
                          <textarea class="span12" rows="2"></textarea>
                        </div>
                      </div>
                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">Technician Notes</label>
                        <div class="controls">
                          <textarea class="span12" rows="2" ></textarea>
                        </div>
                      </div>
                      <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                        <label class="control-label">Warranty Special Notes</label>
                        <div class="controls">
                          <textarea class="span12" rows="2"></textarea>
                        </div>
                      </div>

      
          </div>
          <div class="span8 nopadding">
              <div class="col-lg-5">
                <div class="widget-box" >
                  <div class="widget-content" style="padding: 4px;">
                    <div class="container-fluid">
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label">Sub Total</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label">Exclusive TAX</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #c15151;">Less Discount</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="border-color: #c15151;" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #1276b1;"><b>Total Amount</b></label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="background-color: #034e79;" disabled>
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
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label">NET Amount</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00">
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label">Tax</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00">
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #c15151;">Payment</label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="border-color: #c15151;" disabled>
                          </div>
                        </div>
                        <div class="control-group col-lg-12" style="padding: 4px;margin-bottom: -10px;">
                          <label class="control-label" style="color: #1276b1;"><b>Balance</b></label>
                          <div class="controls">
                            <input type="text" class="span12" name="" placeholder="0.00" style="background-color: #034e79;" disabled>
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

<div>
    
  
                          
</div>
        <button class="btn btn-primary span3" style="height:40px; margin-left: 0px;margin-right: 5px; font-size: 18px;"><i class="icon-save"></i> Save As Pending</button>
        <button class="btn btn-success span3" style="height:40px; margin-left: 0px;margin-right: 5px; font-size: 18px;"><i class="icon-share-alt"></i> Release And Save</button>
        <button class="btn btn-danger span3" style="height:40px; margin-left: 0px;font-size: 18px;"><i class="icon-reply"></i> Exit</button>
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
