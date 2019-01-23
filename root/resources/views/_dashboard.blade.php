@extends('_layout')

@section('content')
<style type="text/css">
  .dataTables_filter, .dataTables_length,.dataTables_info{ display: none; }
</style>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Dashboard</a>
    </div>
    <h1>Dashboard</h1>
  </div>
  <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
              <div class="span6">
                  <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                      <h5>Notifications</h5>
                    </div>
                    <div class="widget-content">
                        <div class="col-lg-12">
                          <div class="control-group col-lg-3">
                            <label class="control-label">Date From</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                          <div class="control-group col-lg-3" >
                            <label class="control-label">Date To</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Module</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Branch</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Username</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group col-lg-3">
                            <label class="control-label">&nbsp;</label>
                            <div class="controls">
                              <span class="btn btn-success span12"><i class="icon-search"></i> Filter</span>
                            </div>
                          </div>
                      </div>

                      <div class="widget-box table table-bordered" >

                      <table id="itable" class="table-bordered" >
                        <thead>
                          <tr>
                            <th></th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Module</th>
                            <th>Username</th>
                            <th>Message</th>
                            <th>Branch</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="gradeX">
                          <td><input type="radio" /></td>
                            <td>0001</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                          </tr>
                      
                        </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                  <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                      <h5>Reminders</h5>
                    </div>
                    <div class="widget-content">
                        <div class="col-lg-12">
                          <div class="control-group col-lg-3">
                            <label class="control-label">Date From</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                          <div class="control-group col-lg-3" >
                            <label class="control-label">Date To</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Priority Type</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="control-group col-lg-5" >
                          <label class="control-label">Client Name</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group col-lg-3">
                            <label class="control-label">&nbsp;</label>
                            <div class="controls">
                              <span class="btn btn-success span12"><i class="icon-search"></i> Filter</span>
                            </div>
                          </div>
                      </div>

                      <div class="widget-box table table-bordered" >

                      <table id="itable1" class="table-bordered" >
                        <thead>
                          <tr>
                            <th></th>
                            <th>Task_#</th>
                            <th>Description</th>
                            <th>Client_Name</th>
                            <th>Date_To_Remind</th>
                            <th>Time_To_Remind</th>
                            <th>Priority_Type</th>
                            <th>Trans._Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="gradeX">
                          <td><input type="radio" /></td>
                            <td>0001</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                            <td class="center">-----</td>
                          </tr>
                          
                        </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

              </div>

              <div class="span6">

                  <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                      <h5>Auto Loan Status</h5>
                    </div>
                    <div class="widget-content">
                        <div class="col-lg-12">
                          <div class="control-group col-lg-3">
                            <label class="control-label">Date From</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                          <div class="control-group col-lg-3" >
                            <label class="control-label">Date To</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Status Type</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Branch</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Customer</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group col-lg-3">
                            <label class="control-label">&nbsp;</label>
                            <div class="controls">
                              <span class="btn btn-success span12"><i class="icon-search"></i> Filter</span>
                            </div>
                          </div>
                      </div>

                      <div class="widget-box table table-bordered" >

                      <table id="itable2" class="table-bordered" >
                        <thead>
                          <tr>
                            <th></th>
                            <th>Financer_Code</th>
                            <th>Auto_Loan_No.</th>
                            <th>Customer_No.</th>
                            <th>Customer_Name</th>
                            <th>Financer</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="gradeX">
                          <td><input type="radio" /></td>
                            <td>0001</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                          </tr>
                          
                        </tbody>
                        </table>

                      </div>
                    </div>
                  </div>

                  <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                      <h5>Service Status</h5>
                    </div>
                    <div class="widget-content">
                        <div class="col-lg-12">
                          <div class="control-group col-lg-3">
                            <label class="control-label">Date From</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                          <div class="control-group col-lg-3" >
                            <label class="control-label">Date To</label>
                            <div class="controls">
                              <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                            </div>
                          </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Search By</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Branch</label>
                          <div class="controls">
                           <select class="span12">
                              <option>First option</option>
                              <option>Second option</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group col-lg-3" >
                          <label class="control-label">Search</label>
                          <div class="controls">
                              <input type="text" value="" class="span12">
                          </div>
                        </div>
                        <div class="control-group col-lg-3">
                            <label class="control-label">&nbsp;</label>
                            <div class="controls">
                              <span class="btn btn-success span12"><i class="icon-search"></i> Filter</span>
                            </div>
                          </div>
                      </div>

                      <div class="widget-box table table-bordered" >

                      <table id="itable3" class="table-bordered" >
                        <thead>
                          <tr>
                            <th></th>
                            <th>Ord._Code</th>
                            <th>Outlet</th>
                            <th>R.O._No.</th>
                            <th>Customer</th>
                            <th>Date_Promise</th>
                            <th>Status</th>
                            <th>Warehouse</th>
                            <th>Plate_No.</th>
                            <th>R.O._Date</th>
                            <th>Plate_Type</th>
                            <th>Engine</th>
                            <th>VIN_No.</th>
                            <th>Cust_Code</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="gradeX">
                            <td><input type="radio" /></td>
                            <td>0001</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">------</td>
                            <td class="center">---------</td>
                            <td class="center">-----</td>
                            <td class="center">-------</td>
                            <td class="center">--------</td>
                            <td class="center">-------</td>
                            <td class="center">---------</td>
                            <td class="center">-----</td>
                          </tr>
                        </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

              </div>
                 
          </div>

        </div>
      
  </div>
</div>

<script type="text/javascript">

    $(document).ready( function() {
          $('#itable').dataTable( {
            "sScrollY": "200px",
            "sScrollX": "100%",
            "bPaginate": false
          } );
         } );
    $(document).ready( function() {
          $('#itable1').dataTable( {
            "sScrollY": "200px",
            "sScrollX": "100%",
            "bPaginate": false
          } );
         } );
    $(document).ready( function() {
          $('#itable2').dataTable( {
            "sScrollY": "200px",
            "sScrollX": "100%",
            "bPaginate": false
          } );
         } );
    $(document).ready( function() {
          $('#itable3').dataTable( {
            "sScrollY": "200px",
            "sScrollX": "100%",
            "bPaginate": false
          } );
         } );
</script>
@stop