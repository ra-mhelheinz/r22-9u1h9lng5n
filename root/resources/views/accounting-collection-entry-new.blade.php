@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = [
        '<a href="'.url('accounting/accounting-collection-entry').'" class="current">Collection Entry</a>',
        '<a href="'.url('accounting/accounting-collection-entry/new').'" class="current">Collection Info</a>'
      ];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Collection Info</h1>
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
        
              <div class="control-group col-lg-5">
                <span>Collection Type 
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
                </span>

                <div class="control-group col-lg-5" style="margin-left: -15px;margin-top: 10px">
                  <div class="controls">
                    <span>Collection Code <input type="number" value="00000" class="span8"></span>
                  </div>
                </div>
                <div class="control-group col-lg-5" style="margin-top: 10px">
                  <div class="controls">
                          <span>Collected Date <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span8"></span>
                  </div>
                </div>
                
                <div class="control-group col-lg-8" style="margin-left: -15px;margin-top: -10px">
                  <span>Subledger
                    <div class="controls">
                      <select class="span10">
                        <option>First option</option>
                        <option>Second option</option>
                        <option>Third option</option>
                        <option>Fourth option</option>
                        <option>Fifth option</option>
                        <option>Sixth option</option>
                        <option>Seventh option</option>
                        <option>Eighth option</option>
                      </select>
                        <span class="btn add-on btn-primary" pd-popup-open="customer_search" href="#" style="margin: 0px 2px; height: 18px"><i class="icon-user"></i></span>
                    </div>
                  </span>
                </div>
        </div>
          
        <div class="control-group col-lg-4">
          <span>Collection Code 
            <div class="controls">
              <input type="number" value="00000" class="span5">
            </div>
          </span>
          
          <span>Reference 
            <div class="controls">
              <input type="text" class="span5">
            </div>
          </span>
          
          <span>Branch
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
          </span> 
        </div>
        
  </div>

          &nbsp;
        </div>
    </div>
  </div>

    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#"><i class="icon-plus"></i> Add Line</button>
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
          <th>Out Code</th>
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

            <div class="popup" pd-popup="small">
              <div class="popup-inner">
                  <div class="modal-header">
                  Add Collection
                  <a class="popup-close" pd-popup-close="small" href="#"> </a>
                  
                  </div>
                        <div class="modal-body" >
                            <div class="row-fluid">
                              <div class="col-lg-11">
                                <div class="control-group col-lg-12">
                                    <label class="control-label">Collection Entry Line </label>
                                      <div class="controls">
                                          <span>Line</span>
                                          <span style="margin-left: 250px">1</span>
                                      </div>
                                </div>
                                <div class="control-group col-lg-12">
                                  <label class="control-label">Payment Type</label>
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
                                  <div class="control-group col-lg-12">
                                    <label class="control-label">Select SOA</label>
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
                                  <div class="control-group col-lg-12">
                                    <label class="control-label">Amount</label>
                                      <div class="controls">
                                          <input type="number" name="">
                                      </div>
                                  </div>
                                  <div class="control-group col-lg-12">
                                    <label class="control-label">If payment is through check, please enter the</label>
                                  </div>
                                  <div class="control-group col-lg-12" style="margin-top: -10px">
                                    <div class="controls">
                                            <span>Check Date <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span2"></span>
                                    </div>
                                  </div>
                                  <div class="control-group col-lg-12" style="margin-top: -10px">
                                    <div class="controls">
                                            <span>Check Number <input type="number" class="span8"></span>
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


            <div>
                    <button class="btn btn-primary"><i class="icon-save"></i> Save All</button>
                    <a href="{{url('accounting/accounting-collection-entry')}}" class="btn btn-danger"><i class="icon-remove"></i> Exit</a>
            </div>


      </div>
    </div>
  </div>
</div>
@stop