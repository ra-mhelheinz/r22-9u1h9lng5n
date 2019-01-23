@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('/')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="{{url('parts-sales_return')}}" class="current">Sales Return</a> </div>
    <h1>Sales Return</h1> 
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
              <a href="{{url('parts-sales_return_info')}}"><button class="btn btn-primary"><i class="icon-plus"></i> New Entry</button></a>
              <a href="{{url('parts-sales_return_info')}}"><button class="btn btn-info"><i class="icon-pencil"></i> Update Entry</button></a>
              <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)print</button>
</div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Sales Returned List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>SRET_#</th>
                  <th>Customer</th>
                  <th>Return_Date</th>
                  <th>Location</th>
                  <th>Refund</th>
                  <th>Jrnlzd</th>
                  <th>Cancel</th>
                  <th>User_ID</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Cash_ID</th>
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