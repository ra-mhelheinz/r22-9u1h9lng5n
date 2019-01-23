<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="settings-user-settings.php" class="current">User Settings</a> </div>
    <h1>User Settings</h1> 
    <div class="user-menu">
    </div>
  </div>
  
  <div class="container-fluid">
		<div>
			<button class="btn btn-primary" pd-popup-open="small" href="#"><i class="icon-plus"></i> Add New</button>
			<button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
			<button class="btn btn-danger"><i class="icon-remove"></i> Delete</button>
		</div>
		
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Group Rights List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Code</th>   
				  <th>Description</th>
				</tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>	
		<div>
            <button class="btn btn-info"><i class="icon-print"></i> Print List</button>
		</div>

            <div class="popup" pd-popup="small">
                  <div class="popup-inner">
                      <div class="modal-header">
                      User Settings
                      <a class="popup-close" pd-popup-close="small" href="#"> </a>
                      
                      </div>
                            <div class="modal-body" >
                                <div class="row-fluid">
                                    <div class="col-lg-10">
                                      <div class="control-group col-lg-12">
                                        <div class="controls">
                                          <span> User ID <input style="width: 172px" type="text" name=""></span>
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-12">
                                        <div class="controls">
                                          <span>Password <input class="span4" type="password" name=""></span>
                                          <span> Confirm Password <input class="span4" type="password" name=""></span>
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-12">
                                        <div class="controls">
                                          <span>Complete Name <input class="span9" type="text" name=""></span>
                                        </div>
                                      </div>
                                      <div class="control-group col-lg-7">
                                        <span>Group Rights &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name MI)
                                          <div class="controls">
                                                <select class="span10">
                                                    <option>First option</option>
                                                </select>
                                          </div>
                                        </span>
                                      </div>
                                      <div class="control-group col-lg-3" style="margin-top: 20px; ">
                                        <input style="left: 100%" class="span3" type="checkbox" name="">
                                        <span>Discount Approval </span>
                                      </div>
                                      <div class="control-group col-lg-12" style="width:600px;">
                                        <div class="widget-box">
                                          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                            <h5>User Group Rights</h5>
                                          </div>
                                          <div class="widget-content nopadding">
                                            <form>
                                            <div class="table table-responsive" style="overflow-y:auto;">

                                            <table class="table table-bordered data-table">
                                              <thead>
                                                <tr>
                                                  <th></th>
                                                  <th>Module</th>   
                                                  <th>Allowed</th>
                                                  <th>Create</th>          
                                                  <th>Update</th>  
                                                  <th>Cancel</th>
                                                  <th>View</th>
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
                                                </tr>
                                                <tr class="gradeX">
                                                <td><input type="radio" /></td>
                                                  <td>0001</td>
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
                        
                      <div class="modal-footer">
                        <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> back</a>
                        <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                      </div>
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
