<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="crm-call-record.php" class="current">Call Record</a> </div>
    <h1>Call Record</h1> 
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
                          <input type="text" value="TO" class="span2 dateto" style="border-width: 0px; text-align: center; background: #fff;" disabled>
                          <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                        </div>
                      </div>
          </div>

&nbsp;
        </div>
    </div>
  </div>

		<div>
			<button class="btn btn-primary" pd-popup-open="small" href="#"><i class="icon-plus"></i> Create</button>
			<button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
			<button class="btn btn-danger"><i class="icon-forward"></i> Go to Service History</button>
		</div>
		
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Call History List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Call_History#</th>   
        				  <th>Client_Number</th>				  
        				  <th>Client_Name</th>  
                  <th>Contact_No</th>
                  <th>Date_to_Call</th>
                  <th>Time_to_Call</th>
        				  <th>User_ID</th>
        				  <th>Status</th>
                  <th>Remark</th>
				        </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
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
                  <td>0001</td>
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
                  <td>0001</td>
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
                  <td>0001</td>
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
                  <td>0001</td>
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
                  <td>0001</td>
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
                  <td>0001</td>
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
		<div>
            <button class="btn btn-info"><i class="icon-print"></i> Print</button>
		</div>


      </div>
    </div>
  </div>
</div>

        <div class="popup" pd-popup="small">
                  <div class="popup-inner">
                      <div class="modal-header">
                      Title
                      <a class="popup-close" pd-popup-close="small" href="#"> </a>
                      
                      </div>
                            <div class="modal-body" >
                              <div class="row-fluid">
                                  <div class="span12">
                                    <div class="widget-box">
                                      <div class="widget-title"> <span class="icon"> <i class="icon-phone"></i> </span>
                                        <h5>Call History</h5>
                                      </div>
                                      <div class="widget-content">
                                          <div class="col-lg-12">
                                                  <div class="control-group col-lg-12">
                                                    <label class="control-label">#</label>
                                                      <div class="controls">      
                                                        <input type="text" class="span8">
                                                      </div>
                                                  </div>    
                                                  <div class="control-group col-lg-12">
                                                    <label class="control-label">Client </label>
                                                      <div class="controls">      
                                                        <input type="text" class="span3">
                                                        <input type="text" class="span6">
                                                        <span class="btn add-on btn-primary" pd-popup-open="customer_search" href="#" style="margin-top: -10px;margin-left:  -2px; height: 20px"><i class="icon-user"></i></span>
                                                      </div>
                                                  </div>
                                                  <div class="control-group col-lg-12">
                                                    <label class="control-label">Current Time </label>
                                                      <div class="controls">
                                                        <input type="text" class="span8">
                                                      </div>
                                                  </div>
                                                  <div class="control-group col-lg-10">
                                                    <label class="control-label">Date to Call </label>
                                                      <div class="controls">      
                                                        <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                                                      </div>
                                                  </div>
                                                  <div class="control-group col-lg-10">
                                                    <label class="control-label">Time to Call </label>
                                                      <div class="controls">
                                                        <input type="time" class="span8">
                                                      </div>
                                                  </div>
                                                  <div class="control-group col-lg-10">
                                                    <label class="control-label">Status </label>
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
                                                  <div class="control-group col-lg-11">
                                                    <label class="control-label">Remarks </label>
                                                      <div class="controls">
                                                        <textarea type="time" class="span12">
                                                        </textarea> 
                                                      </div>
                                                  </div>
                                          </div>
                              &nbsp;
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row-fluid">
                                  <div class="widget-box">
                                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                      <h5>Client`s Call History</h5>
                                    </div>
                                    <div class="widget-content nopadding">
                                      <form>
                                      <div class="table table-responsive" style="overflow-y:auto;">

                                      <table id="mtable1" class="table table-bordered data-table">
                                        <thead>
                                          <tr>
                                            <th></th>
                                            <th>Call_History#</th>   
                                            <th>Client_Number</th>          
                                            <th>Client_Name</th>  
                                            <th>Contact_No</th>
                                            <th>Date_to_Call</th>
                                            <th>Time_to_Call</th>
                                            <th>User_ID</th>
                                            <th>Status</th>
                                            <th>Remark</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr class="gradeX">
                                          <td><input type="radio" /></td>
                                            <td>0001</td>
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
                                            <td>0001</td>
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

                      <div class="modal-footer">
                        <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> Close</a>
                        <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                      </div>
                          
                  </div>
            </div>

       

<!--Footer-part-->
<?php
require_once("includes/footer.php");
?>
