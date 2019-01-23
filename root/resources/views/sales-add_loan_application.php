<?php
require_once("includes/header.php");
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="sales-register_loan_application.php" class="current">Register Loan Application</a> </div>
    <h1>Auto Loan Application</h1> 
  </div>
  <div class="container-fluid">
    <hr>
  <div>
              <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="icon-plus"></i> Manage Conditions And Requirements</button>
              <button class="btn btn-info"><i class="icon-plus"></i> Manage Financer</button>
              <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
              <a href="sales-register_loan_application.php"> <button class="btn btn-danger"><i class="icon-reply"></i> Exit</button> </a>
</div>
    <div class="row-fluid">
     <form action="#" method="get" class="form-horizontal">
    <div class="span8">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Auto Loan Application Information</h5>
          </div>
          <div class="widget-content ">

                  <div class="widget-box">
                    <div class="widget-title">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab1-1"><i class="icon icon-user" ></i> Client Information</a></li>
                        <li><a data-toggle="tab" href="#tab2-1"><i class="icon icon-truck" ></i> Auto Loan Information</a></li>
                      </ul>
                    </div>
                    <div class="widget-content tab-content">
                      <div id="tab1-1" class="tab-pane active">
                        <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="control-group span5">
                            <label class="control-label">Application No. :</label>
                            <div class="controls">
                              <input type="text" class="span12" readonly />
                            </div>
                          </div>
                          <div class="control-group span5">
                            <label class="control-label">Applied On :</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Customer :</label>
                            <div class="controls">
                            <div class="input-append">
                              <input type="text" style="width: 60px;" readonly/><input type="text" class="span8" style="width:275px;" readonly/>
                              <span class="add-on"><i class="icon-user"></i></span>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Contact No. :</label>
                            <div class="controls">
                              <input type="text" class="span12" readonly/>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Email :</label>
                            <div class="controls">
                              <input type="text" class="span12" readonly/>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Position/Title:</label>
                            <div class="controls">
                              <input type="text" class="span12"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10" >
                            <label class="control-label" style="width:200px; color: #1276b1;"><b>Gross Monthly Income :</b></label>
                            <div class="controls" style="margin-left: 210px;">
                              <input type="text" class="span12" placeholder="0.00" style="background-color:#034e79" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Co Maker :</label>
                            <div class="controls">
                            <div class="input-append">
                              <input type="text" style="width: 60px;" readonly/><input type="text" class="span8" style="width:275px;" readonly/>
                              <span class="add-on"><i class="icon-user"></i></span>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Relationship:</label>
                            <div class="controls">
                              <input type="text" class="span12"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10" >
                            <label class="control-label" style="width:200px; color: #1276b1;"><b>Co Maker Monthly Income :</b></label>
                            <div class="controls" style="margin-left: 210px;">
                              <input type="text" class="span12" placeholder="0.00" style="background-color:#034e79"/>
                            </div>
                          </div>
                        </div>

                          

                      </div>
                    </div>
                      <div id="tab2-1" class="tab-pane">
                        <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Unit :</label>
                            <div class="controls">
                            <div class="input-append">
                              <input type="text" style="width: 60px;" readonly/><input type="text" class="span8" style="width:275px;" readonly/>
                              <span class="add-on"><i class="icon-truck"></i></span>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                              <label class="control-label">DP(%)</label>
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
                                <input type="text" class="span4" readonly style="margin-left: 8px;" placeholder="0.00" />
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span5">
                            <label class="control-label" style="color: #1276b1;" ><b>Cash/SRP Price:</b></label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="0.00" readonly style="background-color:#034e79"/>
                            </div>
                          </div>
                          <div class="control-group span5">
                            <label class="control-label">Applied On:</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span5">
                            <label class="control-label">Terms(Mos)*</label>
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
                          <div class="control-group span5">
                            <label class="control-label">AOR (%)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="0.00">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Monthly:</label>
                            <div class="controls">
                              <input type="text" class="span8" readonly/>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                            <label class="control-label">Branch:</label>
                            <div class="controls">
                              <input type="text" class="span12" readonly/>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group span10">
                              <label class="control-label">Market:</label>
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
                            <div class="control-group span10">
                              <label class="control-label">Sales Consoltant:</label>
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
                            <div class="control-group span10">
                            <label class="control-label">Remark:</label>
                            <div class="controls">
                             <textarea class="textarea_editor span12" rows="4" placeholder="Enter remarks ..."></textarea>
                            </div>
                          </div>
                        </div>

                      </div> 



                      </div>
                    </div>
                  </div>




                  <div class="widget-box">
                    <div class="widget-title">
                      <h5><i class="icon icon-table"> </i>Applied Financers/Banks</h5>
                    </div>
                    <div class="widget-content tab-content nopadding">
                      <table id="mtable" class="table table-bordered table-striped" >
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Financer</th>
                              <th>Financed</th>
                              <th>Status</th>
                              <th>Approved_On</th>
                              <th>Approved_By</th>
                              <th>Financed_ID</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td> 
                              <td class="center"> ---</td>
                            </tr>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td> 
                              <td class="center"> ---</td>
                            </tr>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td> 
                              <td class="center"> ---</td>
                            </tr>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td> 
                              <td class="center"> ---</td>
                            </tr>

                            
                            
                          </tbody>
                        </table>
                    </div>
                  </div>


        </div>

      </div>
    </div>
      <div class="span4">
        <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Cond.and Req.</a></li>
              <li><a data-toggle="tab" href="#tab2">References</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
            <h6>Conditions And Requirements</h6>
            <hr/>
                    <div class="widget-box">
                      <div class="widget-title"> <span class="icon"><i class="icon-thumbs-up"></i></span>
                        <h5>Conditions And Approval</h5>
                      </div>
                      
                      <div class="widget-content nopadding">
                         <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>Line #</th>
                              <th>Code</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                            </tr>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                            </tr>
                            <tr class="odd gradeX">
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                              <td class="center"> ---</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <div class="widget-box">
                      <div class="widget-title"> <span class="icon"><i class="icon-file"></i></span>
                        <h5>Document Requirements</h5>
                      </div>
                      
                      <div class="widget-content nopadding">
                          <table id="mtable1" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>Line #</th>
                                  <th>Code</th>
                                  <th>Description</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="odd gradeX">
                                  <td class="center"> ---</td>
                                  <td class="center"> ---</td>
                                  <td class="center"> ---</td>
                                </tr>
                                <tr class="odd gradeX">
                                  <td class="center"> ---</td>
                                  <td class="center"> ---</td>
                                  <td class="center"> ---</td>
                                </tr>
                                <tr class="odd gradeX">
                                  <td class="center"> ---</td>
                                  <td class="center"> ---</td>
                                  <td class="center"> ---</td>
                                </tr>
                                
                              </tbody>
                            </table>
                      </div>

                    </div>

            </div>
            <div id="tab2" class="tab-pane">
           
            <h6>Bank And Personal References</h6>
            <hr/>
                     <div class="widget-box">
                      <div class="widget-title"> <span class="icon"><i class="icon-money"></i></span>
                        <h5>Bank Reference</h5>
                      </div>
                      
                      <div class="widget-content nopadding">
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;"><b>1.</b>Bank/Branch</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Address</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Account No.</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;"><b>2.</b>Bank/Branch</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Address</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Account No.</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>

                                 
                      </div>

                    </div>
                    <div class="widget-box">
                      <div class="widget-title"> <span class="icon"><i class="icon-user"></i></span>
                        <h5>Personal References</h5>
                      </div>
                      
                      <div class="widget-content nopadding">
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;"><b>1.</b>Name</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Relationship</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Address</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Contact No.</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;"><b>2.</b>Name</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Relationship</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Address</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Contact No.</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;"><b>3.</b>Name</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Relationship</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Address</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                                  <div class="control-group">
                                    <label class="control-label" style="width: 85px; margin-left: 0px; font-size: 12px;">Contact No.</label>
                                    <div class="controls"  style="margin-left: 87px;">
                                      <input type="text" class="span11" style="margin-left: 2px;" />
                                    </div>
                                  </div>
                      </div>

                    </div>
                    </form>
            </div>

          </div>
        </div>


      </div>
    </div>


      </div>



    </div>
  </div>
</div>

<script type="text/javascript">


</script>
<?php
require_once("includes/footer.php");
?>
