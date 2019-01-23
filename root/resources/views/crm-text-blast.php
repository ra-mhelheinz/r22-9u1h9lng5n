<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="crm-text-blast.php" class="current">Text Blast</a> </div>
    <h1>Text Blast</h1> 
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
            <h5>Text Blast Schedules</h5>
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
          </div>
&nbsp;
        </div>
    </div>
  </div>

          <div>
              <button class="btn btn-primary"><i class="icon-plus"></i> Create</button>
              <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
              <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)send</button>
          </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Text Blast Schedules</h5>
          </div>
      <form>
        <div class="table table-responsive" style="overflow-y:auto;">
          <div class="widget-content nopadding">
            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Trans._No.</th>
                  <th>Send_Date</th>
                  <th>Send_Time</th>
                  <th>No._of_Recipient</th>
                  <th>No._of_Failed Messages</th>
                  <th>User_ID</th>
                  <th>Trnx_Date</th>
				          <th>Trnx_Time</th>
                  <th>Cancelled</th>
                  <th>Data_Resend</th>
                  <th>Time_Resend</th>
                  <th>Resend_UserID</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="checkbox" /></td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
                  <td>---</td>
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
