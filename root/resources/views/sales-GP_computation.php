<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-GP_computation.php" class="current">GP Computation</a> </div>
    <h1>GP Computation</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
            <h5>Filter By</h5>
          </div>
          <div class="widget-content">
          <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <label class="control-label">Trans. Date</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                          <input type="text" value="TO" class="span2 dateto" style="border-width: 0px; text-align: center; background:#fff;" disabled>
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                        </div>
                      </div>
                      <div class="control-group col-lg-4">
                        <label class="control-label">Outlet</label>
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
                      <label class="control-label">&nbsp;</label>
                          <input type="checkbox">View Pending Only</button>
                      </div>

          </div>

&nbsp;
        </div>
    </div>
  </div>

<div>
              <button class="btn btn-primary" pd-popup-open="authorize" href="#"><i class="icon-plus"></i> New Direct Sales Transaction</button>
              <button class="btn btn-info"><i class="icon-pencil"></i> Update Transaction</button>
              <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)print</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Sales Order List</h5>
          </div>
          <div class="widget-content nopadding">
             <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Trans._No.</th>
                  <th>Repair_Order</th>
                  <th>Customer</th>
                  <th>Ord_Date</th>
                  <th>Trans._Date</th>
                  <th>Total_Amount</th>
                  <th>Discount</th>
                  <th>TAX</th>
                  <th>Paid_Amount</th>
                  <th>Balance</th>
                  <th>Assisted_By</th>
                  <th>Cashier</th>
                  <th>Jrnlzd</th>
                  <th>Cancelled</th>
                  <th>User_Cancelled</th>
                  <th>Date_Cancelled</th>
                  <th>Time_Cancelled</th>
                  <th>Outlet</th>
                  <th>Car_Varriant</th>
                  <th>Plate/Cond._No.</th>
                  <th>Service_Type</th>
                  <th>UAssisted_By</th>
                  <th>UCashier</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>2017</td>
                  <td>0001</td>
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
            </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>



<!--Footer-part-->

<?php
$link="sales-new_direct_sales.php";
require_once("includes/footer.php");
?>
