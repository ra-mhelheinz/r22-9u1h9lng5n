@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="'.url('accounting/accounting-collection-entry').'" class="current">Collection Entry</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Collection Entry</h1>
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
			<a href="{{url('accounting/accounting-collection-entry/new')}}" class="btn btn-primary"><i class="icon-plus"></i> New Collection Entry</a>
            <button class="btn btn-info"><i class="icon-pencil"></i> Update Collection Entry</button>
            <button class="btn btn-danger"><i class="icon-remove"></i> Cancel Entry</button>
		</div>
		
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Collection Entry</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>FY</th>
                  <th>J_Num</th>
                  <th>J_Code</th>
                  <th>Collection_Type</th>
                  <th>Trans_Date</th>
				  <th>Trans_Description</th>
                  <th>User_ID</th>
                  <th>Subledger</th>
				  <th>Subledger_Description</th>
				  <th>Collector</th>
                  <th>Branch</th>
                  <th>Branch_ID</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
                <tr class="gradeX">
					<td><input type="radio" /></td>
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
					<td class="center">---</td>
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>	
		<div>
            <button class="btn btn-primary"><i class="icon-list"></i> Print List</button>
		</div>


      </div>
    </div>
  </div>
</div>
@stop