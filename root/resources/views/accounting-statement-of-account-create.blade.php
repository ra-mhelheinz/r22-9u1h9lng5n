@extends('_layout')


@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = [
        '<a href="'.url('accounting/statement-of-account').'" class="current">Statement of Account List</a>',
        '<a href="'.url('accounting/statement-of-account/create').'" class="current">Statement of Account Entry</a>'
      ];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Statement of Account Entry</h1>
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
                <div class="control-group col-lg-5" style="margin-right:30px;">
                    <div class="controls">
            <span>SOA Number <input type="number" value="00000" class="span5"></span>
                    </div>
        </div>
        <div class="control-group col-lg-4">
                    <div class="controls">
            <span>SOA Date <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5"></span>
                    </div>
                </div>
        <div class="control-group col-lg-4">
          <div class="controls">
            <span>Bill To <input type="text" class="span10"></input></span>
          </div>
        </div>
        <div class="control-group col-lg-1">
          <div class="controls">
            <span class="btn add-on btn-primary" pd-popup-open="customer_search" href="#" style="margin: 0px -50px; height: 20px"><i class="icon-user"></i></span>
          </div>
        </div>
        
        <div class="control-group col-lg-4">
                    <div class="controls">
            <span>SOA Due <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span5"></span>
                    </div>
                </div>
                 
          </div>

            &nbsp;
        </div>
    </div>
  </div>

    <div>
      <button class="btn btn-primary"><i class="icon-plus"></i> Add Line</button>
      <button class="btn btn-info"><i class="icon-pencil"></i> Update Line</button>
      <button class="btn btn-danger"><i class="icon-remove"></i> Remove Line</button>
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>SOA Lines List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Line</th>
                  <th>ORCode</th>
                  <th>Outlet</th>
                  <th>Invoice</th>
                  <th>Reference</th>
                  <th>Amount</th>
                  <th>Out_Code</th>
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

                </tr>
        </tbody>
        </table>
        
          <div class="col-lg-10">
            <div class="control-group col-lg-6">
            <label class="control-label">(Add) Notes/Comments</label>
              <div class="controls">
                <textarea class="span6"></textarea>
              </div>
            </div>
            <div class="control-group col-lg-4" style="margin: -95px 0px 0px 270px;">
              <label class="control-label">User ID </label>
              <div class="controls">
                <input type="text" class="span8"></input>
              </div>
            </div>
            <div class="control-group col-lg-4" style="margin:-70px 0px -250px 720px;">
              <span>Total </span><input type="text" style="direction:rtl;" placeholder="0.00" class="span10"></input>
            </div>
          </div>
          
            </div>
            </form>
          </div>
        </div>  
    <div>
            <button class="btn btn-primary"><i class="icon-save"></i> Save All</button>
            <a href="{{url('accounting/statement-of-account')}}" class="btn btn-danger"><i class="icon-remove"></i> Exit</a>
    </div>


      </div>
    </div>
  </div>
</div>Z
@endsection
