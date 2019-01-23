<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-release_deliver_unit.php" class="current">Release/Deliver Unit</a> </div>
    <h1>Release/Deliver Unit</h1> 
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
              <button class="btn btn-primary"><i class="icon-backward"></i> Release Unit</button>
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

            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Trans. No.</th>
                  <th>R.O. Status</th>
                  <th>Auto Loan No.</th>
                  <th>Financer</th>
                  <th>Customer</th>
                  <th>Ord Date</th>
                  <th>Trans. Date</th>
                  <th>Customer Code</th>
                  <th>Financer Code</th>
                  <th>Status Type</th>
                  <th>Location</th>
                  <th>Outlet</th>
                  <th>Cashier</th>
                  <th>Assisted By</th>
                  
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
                </tr>
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
                </tr>
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
                </tr>
                
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
                </tr>
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
                </tr>
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
                </tr>
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
                </tr>
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
