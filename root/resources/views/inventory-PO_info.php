<?php
require_once("includes/header.php");
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="inventory-PO.php" class="tip-bottom">Purchase Orders</a><a href="inventory-PO_info.php" class="current">Purchase Order Entry</a> </div>
    <h1>Purchase Order Entry</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Purchase Order Information</h5>
          </div>
          <div class="widget-content">
          <div class="container-fluid">
          <div class="span9 nopadding">
            <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <label class="control-label">PO No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-3">
                        <label class="control-label">PO Date</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-3">
                        <label class="control-label">Delivery Date</label>
                        <div class="controls">
                         <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">

                        </div>
                      </div>

          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-6">
                        <label class="control-label">Supplier</label>
                        <div class="controls ad">
                          <input type="text" class="span10" readonly/>
                              <span class="btn add-on btn-primary" pd-popup-open="supplier_search" href="#" style="margin-top: -10px;"><i class="icon-user"></i></span>
                        </div>
                      </div>

                      <div class="drop1 control-group col-lg-4">
                        <label class="control-label">Payment Term</label>
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

                      <div class="control-group col-lg-4">
                        <label class="control-label">Requested By</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-4">
                        <label class="control-label">Delivery To</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">PR No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>

          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-6">
                        <label class="control-label">Reference</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-5">
                        <label class="control-label" style="color:#1276b1;"><b>TOTAL AMOUNT</b></label>
                        <div class="controls">
                          <input type="text" value="" class="span11" style="background-color:#034e79" placeholder="0.00">
                        </div>
                      </div>
          </div>
          </div>
          <div class="span3 nopadding">
            <div class="col-lg-12">

                      <div class="control-group col-lg-10">
                        <label class="control-label">Finalized By</label>
                        <div class="controls">
                          <input type="text" value="" class="span12" style="border-color: gray; border-top: 0px;border-left: 0px;border-right: 0px;">
                        </div>
                      </div>
            </div>
            <div class="col-lg-12">

                      <div class="control-group col-lg-10">
                        <label class="control-label">Finalized ON</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">

                        </div>
                      </div>
            </div>
            <div class="col-lg-12">

                      <div class="control-group col-lg-10">
                        <label class="control-label">Approved By</label>
                        <div class="controls">
                          <input type="text" value="" class="span12" style="border-color: gray; border-top: 0px;border-left: 0px;border-right: 0px;">
                        </div>
                      </div>
            </div>
            <div class="col-lg-12">

                      <div class="control-group col-lg-10">
                        <label class="control-label">Approved ON</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">

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
              <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="icon icon-plus"></i> Add Item(s) for PR</button>
              <button class="btn btn-primary" pd-popup-open="popup_txtitem" href="#"><i class="icon icon-plus"></i> Add Text Item</button>
              <button class="btn btn-primary" pd-popup-open="popup_item" href="#"><i class="icon icon-plus" ></i> Add Item</button>
              <button class="btn btn-info"><i class="icon icon-pencil"></i> Update Item</button>
              <button class="btn btn-danger"><i class="icon icon-remove"></i> Remove Item</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Request Item Details</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Line._No.</th>
                  <th>Part_No.</th>
                  <th>Description</th>
                  <th>Qty.</th>
                  <th>Unit</th>
                  <th>Cost</th>
                  <th>NET_Price</th>
                  <th>Line_Amount</th>
                  <th>Line_VAT</th>
                  <th>Disc_Amount</th>
                  <th>VAT_Code</th>
                  <th>New_Price</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
            </form>
          </div>
        </div>
        <button class="btn btn-primary span2" style="height:40px; margin-left: 0px;margin-right: 5px; font-size: 18px;"><i class="icon-save"></i> Save</button>
        <button class="btn btn-danger span2" style="height:40px; margin-left: 0px;font-size: 18px;"><i class="icon-reply"></i> Exit</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once("includes/footer.php");
?>
