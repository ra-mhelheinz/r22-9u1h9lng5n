<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-view_loan.php" class="current">View Loan Status</a> </div>
    <h1>Auto Loan Status</h1> 
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
          <div class="container-fluid">
          <div class="col-lg-12">
                      <div class="control-group col-lg-4">
                        <label class="control-label">Trans. Date</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                          <input type="text" value="TO" class="span2 dateto" style="border-width: 0px; text-align: center; background:#fff;" disabled>
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                        </div>
                      </div>
                      <div class="control-group col-lg-6">
                        <label class="control-label">Status Type</label>
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

                      <div class="control-group col-lg-4">
                        <label class="control-label">Customer</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="Customer Name" />
                        </div>
                      </div>

                      <div class="control-group col-lg-2">
                          <button class="btn btn-info span11" style="height:55px;"><i class="icon-refresh"></i> Refresh</button>
                      </div>

          </div>
          </div>
&nbsp;
        </div>
    </div>
  </div>


          <div>
              <button class="btn btn-primary" pd-popup-open="authorize" href="#"><i class="icon-plus"></i> New Status</button>
              <button class="btn btn-info" pd-popup-open="authorize" href="#"><i class="icon-pencil"></i> Update Status</button>
              <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)print</button>
          </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Auto Loan Status List</h5>
          </div>
      <form>
        <div class="table table-responsive" style="overflow-y:auto;">
          <div class="widget-content nopadding">
            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Financial Year</th>
                  <th>Auto Loan No.</th>
                  <th>Customer No.</th>
                  <th>Customer Name</th>
                  <th>Financer</th>
                  <th>Status</th>
                  <th>Transaction Date</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>2017</td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>2017</td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
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
$link="sales-add_loan_application.php";
require_once("includes/footer.php");
?>
