<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-register_loan_application.php" class="current">Register Loan Application</a> </div>
    <h1>Auto Loan Application</h1> 
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
                        <label class="control-label">Search</label>
                        <div class="controls">
                          <input type="text" class="span12" placeholder="Customer Name" />
                        </div>
                      </div>

                      <div class="control-group col-lg-2">
                          <button class="btn btn-info span12" style="height:55px;"><i class="icon-refresh"></i> Refresh</button>
                      </div>

          </div>

&nbsp;
        </div>
    </div>
  </div>

<div>
              <button class="btn btn-primary" pd-popup-open="authorize" href="#"><i class="icon-plus"></i> Create Record</button>
              <button class="btn btn-info" pd-popup-open="authorize" href="#"><i class="icon-pencil"></i> Update Record</button>
              <button class="btn btn-danger"><i class="icon-remove"></i> Delete Record</button>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)print</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Auto Loan Application List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Auto Loan No.</th>
                  <th>Customer No.</th>
                  <th>Customer Name</th>
                  <th>Credit</th>
                  <th>Market Segment</th>
                  <th>Salesman</th>
                  <th>Remark</th>
                  <th>Vehicle</th>
                  <th>Reference</th>
                  <th>Financer</th>
                  <th>Trans. Date</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>

                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">2017-12-05</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" name="radios" /></td>
                  <td>0001</td>
                  <td>101</td>
                  <td>Clifford Catubig</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <i class="icon-remove" style="float: right; margin-right:5px; margin-top:5px;" data-dismiss="modal"></i>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Enter Authorization Name And Password</h5>
      </div>
      <div class="loginmodal-container">
          <form>
          <input type="text" name="uname" placeholder="Authorized Name">
          <input type="password" name="pass" placeholder="Enter Code">
          </form>  
        </div>

      <div class="modal-footer">
        <a href="sales-add_loan_application.php"><button type="button" class="btn btn-primary"><i class="fa fa-check" ></i> OK</button>
      </div>
    </div>
  </div>
</div>

<?php
$link="sales-add_loan_application.php";
require_once("includes/footer.php");
?>
