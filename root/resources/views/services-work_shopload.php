<?php
require_once("includes/header.php");
?>
<style type="text/css">
  @media (max-width: 1090px) {
  .btn_search
  {
  margin-left: 0px;
  }
</style>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="services-service_shopload.php" class="current">View Service Status</a> </div>
    <h1>Service Status</h1> 
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
                      <div class="control-group col-lg-3">
                        <label class="control-label">Customer Name</label>
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
                        <label class="control-label">Time</label>
                        <div class="controls">
                          <input type="time" class="span12">
                        </div>
                      </div>
                      <div class="control-group col-lg-2">
                        <label class="control-label">Plate No.</label>
                        <div class="controls">
                          <input type="text" class="span12"/>
                        </div>
                      </div>
                        <div class="control-group col-lg-2">
                        <label class="control-label">Trans. no.</label>
                        <div class="controls">
                          <input type="text" class="span12"/>
                        </div>
                      </div>
                      <div class="control-group col-lg-1">
                        <label class="control-label">R.O. Ref.</label>
                        <div class="controls">
                          <input type="text" class="span12"/>
                        </div>
                      </div>

          </div>
          <div class="col-lg-12">

                      <div class="control-group col-lg-3">
                        <label class="control-label">Branch Name</label>
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
                        <label class="control-label">Vin No.</label>
                        <div class="controls">
                          <input type="text" class="span12"/>
                        </div>
                      </div>

                      <div class="control-group col-lg-2">
                          <button class="btn btn-info span12" style="height:55px;"><i class="icon-search"></i> Search</button>
                      </div>

                      <div class="control-group col-lg-2">
                          <button class="btn btn-success span12" style="height:55px;"><i class="icon-refresh"></i> Reload</button>
                      </div>

          </div>

&nbsp;
        </div>
    </div>
  </div>
<div>
              <a href="services-service_history_info.php"><button class="btn btn-primary"><i class="icon-plus"></i> View Transaction</button></a>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)Print</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Repair Order List</h5>
          </div>
      <form>
        <div class="table table-responsive" style="overflow-y:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Outlet</th>
                  <th>R.O. No.</th>
                  <th>Pending</th>
                  <th>Ord. Amount</th>
                  <th>Customer</th>
                  <th>Car Vin</th>
                  <th>Disc. Amount</th>
                  <th>Ord. Shift</th>
                  <th>Amount Due</th>
                  <th>Location</th>
                  <th>User ID</th>
                  <th>Pay User</th>
                  <th>outlet</th>
                  <th>Payment</th>
                  <th>Cancel</th>
                  <th>Car Plate No.</th>
                  <th>Pay Date</th>
                  <th>Pay Time</th>
                  <th>NET Amount</th>
                  <th>Ord. Date</th>
                  <th>Reference</th>
                  <th>Trans. Date</th>
                  <th>t_time</th>
                  <th>t_date</th>
                  <th>TAX</th>
                  <th>User ID</th>
                  <th>User ID2</th>
                  <th>Gross Amount</th>
                  <th>Cust. No</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>2017</td>
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
                  <td class="center">---</td>
                  <td class="center">---</td>     
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>2017</td>
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
                  <td class="center">---</td>
                  <td class="center">---</td>     
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>2017</td>
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
require_once("includes/footer.php");
?>
