@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="'.url('accounting/accounting-release-check').'" class="current">Release Check</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Release Check</h1>
    <div class="user-menu">
    </div>
  </div>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-search"></i> </span>
            <h5>Select Journal</h5>
          </div>
          <div class="widget-content">
          <div class="col-lg-12">
                        
                        <div class="control-group col-lg-4">
              <label class="control-label">Journal</label>
              <div class="controls">
              <select class="span8">
                <option>Disbursement Journal</option>
                <option>Disbursement Journal 2</option>
                <option>General Journal</option>
                <option>Purchase Journal</option>
                <option>Receivable Journal</option>
                <option>Receivable Journal 2</option>
                <option>Sales Journal</option>
              </select>
              </div>
            </div>

            
            
            
            <div class="control-group col-lg-4">
                        <label class="control-label">Branch</label>
                        <div class="controls">
                          <select class="span12">
                            <option>BUTUAN</option>
                            <option>LIIP</option>
                            <option>LIPA</option>
                            <option>STO.TOMAS</option>
                            <option>SUCAT</option>
                          </select>
                        </div>
                      </div>
          </div>

          &nbsp;
        </div>
    </div>
  </div>

    <div>
      <button class="btn btn-primary"><i class="icon-tags"></i> Release Check</button>
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Unposted Entries</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Ref_Num</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Paid_to</th>
                  <th>Check</th>
                  <th>Check_Date</th>
                  <th>Cancel</th>
                  <th>User_ID</th>
                  <th>Branch</th>
                  <th>Branch_ID</th>
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
                  <td class="center">---</td>
                </tr>
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>  
    <div>
            <button class="btn btn-info"><i class="icon-print"></i> Print Release Check</button>
    </div>


      </div>
    </div>
  </div>
</div>
@stop