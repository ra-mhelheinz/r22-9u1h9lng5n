<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="services-service_status.php" class="current">View Service Status</a> </div>
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
                      <div class="control-group col-lg-4">
                        <label class="control-label">Trans. Date</label>
                        <div class="controls">
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                          <input type="text" value="TO" class="span2 dateto" style="border-width: 0px; text-align: center; background:#fff;" disabled>
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                        </div>
                      </div>
                      <div class="control-group col-lg-6">
                        <label class="control-label">Customer Name</label>
                        <div class="controls">
                          <select class="span8">
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
                        <label class="control-label">Search</label>
                        <div class="controls">
                          <input type="text" class="span12"/>
                        </div>
                      </div>

                      <div class="control-group col-lg-2">
                          <button class="btn btn-info span12" style="height:55px;"><i class="icon-search"></i> Search</button>
                      </div>

          </div>
&nbsp;
        </div>
    </div>
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
                  <th>Ord. Code</th>
                  <th>Outlet</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Status Desc</th>
                  <th>Status No.</th>
                  <th>Warehouse</th>
                  <th>Plate No.</th>
                  <th>RO Date</th>
                  <th>Engine</th>
                  <th>Vin No.</th>
                  <th>Cust Code</th>
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
