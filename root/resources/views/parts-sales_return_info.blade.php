<?php
require_once("includes/header.php");
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="inventory-purchase_return.php" class="tip-bottom">Sales Return</a><a href="inventory-purchase_return_info.php" class="current">Sales Return Entry</a> </div>
    <h1>Sales Return Entry</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Sales Return Information</h5>
          </div>
          <div class="widget-content">
          <div class="container-fluid">
              <div class="span12 nopadding">
                    <div class="col-lg-12">
                              <div class="control-group col-lg-2">
                                <label class="control-label">Sales Return No.</label>
                                <div class="controls">
                                  <input type="text" value="" class="span12">
                                </div>
                              </div>
                              <div class="control-group col-lg-2">
                                <label class="control-label">Transaction Date</label>
                                <div class="controls">
                                  <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                                </div>
                              </div>
                              <div class="drop1 control-group col-lg-3">
                                <label class="control-label">Customer</label>
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
                              <div class="drop1 control-group col-lg-3">
                                <label class="control-label">Stock Location</label>
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
                              
                              <div class="control-group col-lg-2 total">
                                <label class="control-label" style="color:#1276b1;"><b>TOTAL AMOUNT</b></label>
                                <div class="controls">
                                  <input type="text" value="" class="span12" style="background-color:#034e79" placeholder="0.00">
                                </div>
                              </div>
                              <div class="drop1 control-group col-lg-5">
                                <label class="control-label">&nbsp;</label>
                                <div class="controls">
                                <input type="checkbox" class="span12"><font size="3px">Refund By Cash</font></input>
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
              <button class="btn btn-primary" pd-popup-open="sales_item" href="#"><i class="icon icon-plus"></i> Add Item</button>
              <button class="btn btn-info"><i class="icon icon-pencil"></i> Update Item</button>
              <button class="btn btn-danger"><i class="icon icon-remove"></i> Remove Item</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Item List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>SO_Ref_No.</th>
                  <th>Item_No.</th>
                  <th>Item_Description</th>
                  <th>Unit</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Line_Amount</th>
                  <th>Clerk</th>
                  <th>Inv_No.</th>
                  <th>Inv_Line</th>
                  <th>PRC_User</th>
                  <th>PRC_Reason</th>
                  <th>Unit_ID</th>
                  <th>FCP</th>
                  <th>Old_Qty.</th>
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
