<?php
require_once("includes/header.php");
?>
<style type="text/css">

</style>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a><a href="services-job_quotation.php" class="tip-bottom">Job Quotation</a><a href="services-job_quotation_info.php" class="current">Job Quotation Entry</a> </div>
    <h1>Job Quotation Entry</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Job Quotation Information</h5>
          </div>
          <div class="widget-content">
          <div class="container-fluid">
          <div class="span12 nopadding">
            <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <label class="control-label">Job Quotation No.</label>
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

          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-4">
                        <label class="control-label">Supplier</label>
                        <div class="controls">
                          <input type="text" class="span10 s_add-on" readonly/>
                              <span class="btn btn-primary add-on" pd-popup-open="customer_search" href="#" style="margin-top: -10px;margin-left:"><i class="icon-user"></i></span>

                        </div>
                      </div>
                      <div class="control-group col-lg-6">
                        <label class="control-label">Unit Applied</label>
                        <div class="controls">
                          <input type="text" class="span10 s_add-on" readonly/>
                              <span class="btn btn-success add-on" pd-popup-open="vehicle_search" href="#" style="margin-top: -10px;margin-left:"><i class="icon-truck"></i></span>
                        </div>
                      </div>
                      
          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-4">
                        <label class="control-label">Address</label>
                        <div class="controls">
                          <textarea type="text" value="" row="2" class="span12"></textarea>
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Vin No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-3">
                        <label class="control-label">PR No.</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>

          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-4">
                        <label class="control-label">Contact</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-3">
                        <label class="control-label">Estimated Days of Computation</label>
                        <div class="controls">
                          <input type="text" value="" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label" style="color:#1276b1;"><b>TOTAL AMOUNT</b></label>
                        <div class="controls">
                          <input type="text" value="" class="span12" style="background-color:#034e79" placeholder="0.00">
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

            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Line. No.</th>
                  <th>Job Description</th>
                  <th>Unit</th>
                  <th>Cost</th>
                  <th>Qty.</th>
                  <th>Line Amount</th>
                  <th>Remark</th>
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
