@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('/')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="{{url('inventory-direct_purchase')}}" class="current">Direct Purchase</a> </div>
    <h1>Direct Purchase</h1> 
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
              <a href="inventory-direct_purchase_info.php"><button class="btn btn-primary"><i class="icon-plus"></i> Create</button></a>
              <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
              <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button>
              <button class="btn btn-success"><i class="icon-print"></i> Print</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Direct Purchase List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>P.O._#</th>
                  <th>Supplier</th>
                  <th>Reference</th>
                  <th>Date</th>
                  <th>Term</th>
                  <th>User_ID</th>
                  <th>Trans._Date</th>
                  <th>Trans._Time</th>
                  <th>JRNLZD</th>
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
@stop
<!--Footer-part-->
<?php
require_once("includes/footer.php");
?>
