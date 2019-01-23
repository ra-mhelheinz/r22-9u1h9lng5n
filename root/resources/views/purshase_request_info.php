<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="inventory-PR.php" class="tip-bottom">Purchase Request</a><a href="purchase_request_info.php" class="current">Purchase Request Entry</a> </div>
    <h1>Purchase Request Entry</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Purchase Request Information</h5>
          </div>
          <div class="widget-content">
          <div class="col-lg-12">
                      <div class="control-group col-lg-3">
                        <label class="control-label">PR No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Request Date</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Date Needed</label>
                        <div class="controls">
                         <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">

                        </div>
                      </div>
                      <div class="control-group col-lg-3">
                        <label class="control-label">Reference</label>
                        <div class="controls">
                          <input type="text" class="span11" />
                        </div>
                      </div>


          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-3">
                        <label class="control-label">Cost Center</label>
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
                        <label class="control-label">Sub Cost Center</label>
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
                        <label class="control-label">Requested By</label>
                        <div class="controls">
                          <input type="text" class="span12"/>
                        </div>
                      </div>
                      
          </div>

&nbsp;
        </div>
    </div>
  </div>

<div>
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
                  <th>Remarks</th>
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
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
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


</style>
  <!-- Modal -->

<?php
require_once("includes/footer.php");
?>
