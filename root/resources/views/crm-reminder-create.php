<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="crm-reminder.php" class="current">Reminder List</a><a href="crm-reminder-create.php" class="current">Reminder Information</a>
    </div>
    <h1>Reminder</h1> 
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
                        <label class="control-label">Task #</label>
                          <div class="controls">			
                            <input type="text" class="span12">
                          </div>
                        <label class="control-label">Description </label>
                          <div class="controls">      
                            <input type="text" class="span12">
                          </div>
                        <label class="control-label">Client </label>
                          <div class="controls">      
                            <input type="text" class="span3">
                            <input type="text" class="span7">
                            <span class="btn add-on btn-primary" pd-popup-open="customer_search" href="#" style="margin: -10px 0px 0px 0px"><i class="icon-user"><a href="#"></a></i></span>
                          </div>
                        <label class="control-label">Priority Status </label>
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

                      <div class="control-group col-lg-3">
                        <label class="control-label">Date to Remind From </label>
                          <div class="controls">      
                            <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                            <input type="text" value="TO" class="span2 dateto" style="border-width: 0px; text-align: center; background: #fff;" disabled>
                            <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5">
                          </div>
                        <label class="control-label">Time to Remind </label>
                          <div class="controls">
                            <input type="time" class="span8">
                          </div>
                        <label class="control-label">Current Date </label>
                          <div class="controls">
                            <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span8">
                          </div> 
                        <label class="control-label">Current Time </label>
                          <div class="controls">
                            <input type="time" class="span8">
                          </div>  
                      </div>

                      <div class="control-group col-lg-3">
                        <label class="control-label">Repeat Reminder </label>
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

&nbsp;
        </div>
    </div>
  </div>

		<div>
			<button class="btn btn-primary" pd-popup-open="small" href="#"><i class="icon-plus"></i> Add Item</button>
			<button class="btn btn-info"><i class="icon-pencil"></i> Update Item</button>
			<button class="btn btn-danger"><i class="icon-remove"></i> Remove</button>
		</div>
		
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Request Item Details</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Line</th>   
        				  <th>Task_Description</th>
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
            <a href="#" class="btn btn-info"><i class="icon-save"></i> Save</a>
            <a href="crm-reminder.php" class="btn btn-danger"><i class="icon-remove"></i> Exit</a>
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
                             <div class="col-lg-11">
	                            <div class="control-group col-lg-12">
	                                <label class="control-label">Remarks </label>
	                                  <div class="controls">
	                                      <textarea rows="14" type="time" class="span12"></textarea> 
	                                  </div>
	                            </div>
                        	 </div>
                            </div>
                        </div>

                  <div class="modal-footer">
                    <a pd-popup-close="small" href="#" class="btn btn-danger m_close">Close</a>
                  </div>
                      
              </div>
        </div>


        
         

<!--Footer-part-->
<?php
require_once("includes/footer.php");
?>
