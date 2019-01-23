@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = [
        '<a href="'.url('accounting/accounting-disbursement-entry').'" class="current">Disbursement Entry</a>',
        '<a href="'.url('accounting/accounting-disbursement-entry/new').'" class="current">Disbursement Info</a>'
      ];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Disbursement Info</h1>
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
                <span>Type 
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
                    <span>Code <input type="number" value="00000" class="span8"></span>
                  </div>
                </div>
                <div class="control-group col-lg-5" style="margin-top: 10px">
                  <div class="controls">
                          <span>Date <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span8"></span>
                  </div>
                </div>
                
                <div class="control-group col-lg-8" style="margin-left: -15px;margin-top: -10px">
                  <span>Description 
                    <div class="controls">
                      <input type="text" class="span12">
                    </div>
                  </span>
                </div>
        </div>
          
        <div class="control-group col-lg-4">
          <span>Branch 
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
            </div>
          </span>
          
          <span>Explanation 
            <div class="controls">
              <textarea class="span10"></textarea>
            </div>
          </span>
          
        </div>
        
  </div>

          &nbsp;
        </div>
    </div>
  </div>

    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#"><i class="icon-plus"></i> Add Item</button>
      <button class="btn btn-info"><i class="icon-pencil"></i> Update Item</button>
      <button class="btn btn-danger"><i class="icon-remove"></i> Remove Item</button>
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Account Link</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Line</th>
                  <th>Account_title</th>
                  <th>Subsidiary</th>
                  <th>Cost_Center</th>
                  <th>Amount</th>
                  <th>Invoice</th>
                  <th>Notes</th>
                  <th>At_Code</th>
                  <th>Cc_Code</th>
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

          

      
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Payments</h5>
            </div>
              <div class="widget-content">
                <div class="container-fluid">

                    <div class="control-group col-lg-2">
                      <span>Payments Thru 
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
                      </span>
                      <span>Terms 
                        <div class="controls">
                            <select class="span12" disabled>
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
                      <span>Payment Amnt 
                        <div class="controls">
                            <input type="number" class="span12" disabled>
                        </div>
                      </span>
                      <span>Paid to. 
                        <div class="controls">
                          <select class="span12" disabled>
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

                    <div class="control-group col-lg-2">
                      <span>Check No. 
                        <div class="controls">
                            <input type="number" class="span12" disabled>
                        </div>
                      </span>
                      <span>Check Date 
                        <div class="controls">
                            <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span12">
                        </div>
                      </span>
                    </div>

                    <div class="control-group col-lg-4" style="margin-left: 200px">
                        <div class="controls">
                            <span>Total Disbursed Amt. <input type="number" placeholder="0.00" style="text-align: right" class="span12"></span>
                        </div>
                        <div class="controls">
                            <span>Less : Payment <input type="number" placeholder="0.00" style="text-align: right" class="span12"></span>
                        </div>
                        <div class="controls">
                            <span>Balance <input type="number" placeholder="0.00" style="text-align: right" class="span12">
                            </span>
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
                                      <label class="control-label">Journal Entry </label><hr>
                                        <div class="controls">
                                              <span>Line</span>
                                              <span style="margin-left: 250px">1</span>
                                        </div>
                                    </div>
                                    <div class="control-group col-lg-12">
                                      <label class="control-label">Code</label>
                                        <div class="controls">
                                            <input type="number" name="">
                                        </div>
                                    </div>
                                    <div class="control-group col-lg-12">
                                      <label class="control-label">Account Title</label>
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
                                    <div class="control-group col-lg-12">
                                      <label class="control-label">Subsidiary Name</label>
                                        <div class="controls">
                                            <select class="span12" disabled>
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
                                      <label class="control-label">Code</label>
                                        <div class="controls">
                                            <input class="span3" type="number" name="">
                                            <button class="btn btn-primary" style="margin-top: -9px">Get Invoice Balance >></button>
                                        </div>
                                    </div>
                                    <div class="control-group col-lg-12">
                                      <label class="control-label">Cost Center</label>
                                        <div class="controls">
                                            <select class="span12" disabled>
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
                                      <label class="control-label">Sub Cost Center</label>
                                        <div class="controls">
                                            <select class="span12" disabled>
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
                                            <input type="number" name="" placeholder="0.00" style="text-align: right;">
                                        </div>
                                    </div>
                                    <div class="control-group col-lg-12">
                                      <label class="control-label">Notes</label>
                                        <div class="controls">
                                            <textarea class="span12"></textarea>
                                        </div>
                                    </div>

                                  </div>
                                </div>
                            </div>

                      <div class="modal-footer">
                        <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> Close</a>
                        <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
                      </div>
                          
                  </div>
            </div>

          

          
          <div>
              <button class="btn btn-primary"><i class="icon-save"></i> Save as Pending</button>
              <a href="{{url('accounting/accounting-disbursement-entry')}}" class="btn btn-danger"><i class="icon-remove"></i> Go Back</a>
          </div>
        

      </div>
    </div>
  </div>
</div>
@stop