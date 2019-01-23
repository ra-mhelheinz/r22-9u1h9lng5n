@extends('_layout') 
@section('content')
<div id="content">
    <div id="content-header">
        @php $_bc = ['<a href="#">Budget</a>' ,'<a href="'.url('accounting/accounting-journal-entry').'">Budget Entry List</a>', '<a class="current" href="'.url('accounting/accounting-journal-entry/new').'">Budget Entry Information</a>']; @endphp @include('layout.breadcrumbs')
        <h1>Budget Entry Information</h1>
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
                            <div class="control-group col-lg-2">
                                <div class="controls">
                                    <label for="">Period</label>
                                    <input type="text" readonly="" value="@if(isset($fy) &&  isset($mo)){{$fy}}-{{$mo_desc}}@endif">
                                    <input type="text" name="hdr_fy" readonly="" style="display: none" ="" value="@if(isset($fy)){{$fy}}@endif">
                                    <input type="text" name="hdr_mo" readonly="" style="display: none" ="" value="@if(isset($mo)){{$mo}}@endif">
                                </div>
                            </div>
                            <div class="control-group col-lg-2">
                                <div class="controls">
                                    <label for="">Journal</label>
                                    <input type="text" style="display:none">
                                    <input type="text" readonly="" value="@isset($j_code){{$j_desc}}@endisset">
                                </div>
                            </div>
                            <div class="control-group col-lg-2">
                                <div class="controls">
                                    <label for="">Reference Number</label>
                                    <input type="text" readonly="" value="@isset($j_num){{$j_num}}@endisset">
                                </div>
                            </div>
                            <div class="control-group col-lg-2">
                                <div class="controls">
                                    <label for="">Date</label>
                                    <input type="date" name="hdr_date" readonly="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group col-lg-12">
                                <label for="">Description</label>
                                <input type="text" class="span6" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="control-group col-lg-12">
                                <label for="">Explanation</label>
                                <textarea type="text" rows="3" class="span6" value="TEST"></textarea>
                            </div>
                        </div>
                        &nbsp;
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-primary" onclick="addMode()" pd-popup-open="small" href="#"><i class="icon-plus"></i> Add Item</button>
                {{--
                <button class="btn btn-info"><i class="icon-pencil"></i> Update Item</button> --}} {{--
                <button class="btn btn-danger"><i class="icon-remove"></i> Remove Item</button> --}}
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
                                        <th>Line</th>
                                        <th>Account Title</th>
                                        <th>Subsidiary</th>
                                        <th>Cost Center</th>
                                        <th>Amount</th>
                                        <th>Invoice</th>
                                        <th>AT_CODE</th>
                                        <th>CC_CODE</th>
                                        <th>Notes</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
                                    {{-- <tr class="gradeX">
                                        <td>
                                            <input type="radio" />
                                        </td>
                                        <td>0001</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                        <td class="center">---</td>
                                    </tr> --}}
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
                            {{-- <div class="controls">
                                <span>Total Disbursed Amt. <input type="number" placeholder="0.00" style="text-align: right" class="span12" readonly=""></span>
                            </div>
                            <div class="controls">
                                <span>Less : Payment <input type="number" placeholder="0.00" style="text-align: right" class="span12" readonly=""></span>
                            </div>
                            <div class="controls">
                                <span>Balance <input type="number" placeholder="0.00" style="text-align: right" class="span12" readonly="">
                            </span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup" pd-popup="small">
                <div class="popup-inner">
                    <div class="modal-header">
                        Budget Entry <span id="MOD_MODE"></span>
                        <a class="popup-close" pd-popup-close="small" href="#"> </a>
                    </div>
                    <div class="modal-body">
                        <div class="row-fluid">
                            <div class="col-lg-11">
                              <form id="AddForm" data-parsley-validate novalidate>
                                {{-- <div class="control-group col-lg-12">
                                    <label class="control-label">Budget Entry Line</label>
                                    <hr>
                                </div> --}}
                                <div class="control-group col-lg-5">
                                    <div class="controls">
                                        <label class="control-label">Line</label>
                                        <input type="text" name="itm_line" value="" readonly="">
                                    </div>
                                </div>
                                <div class="control-group col-lg-5">
                                  <div class="controls">
                                        <label class="control-label">Code</label>
                                        <input type="text"  name="itm_acc_title_code" readonly="">
                                    </div>
                                </div>
                                <div class="control-group col-lg-12">
                                    <div class="controls">
                                      <label class="control-label">Account Title <span style="color:red">*</span></label>
                                        <select parsley-error-container="#itm_acc_title_span" arsley-required-message="Account Title required."  name="itm_acc_title" onchange="Account_title()" style="width: 75%" required>
                                          @isset($m04)
                                            <option value="">Select Account Title</option>
                                            @foreach($m04 as $d)
                                              <option value="{{$d->at_code}}">{{$d->at_desc}}</option>
                                            @endforeach
                                            @else
                                            <option value="">No Account Title Registered</option>
                                          @endisset
                                        </select>
                                        <span id="itm_acc_title_span"></span>
                                    </div>
                                </div>
                                <div class="control-group col-lg-12">
                                    <div class="controls">
                                      <label class="control-label">Subsidiary Name</label>
                                        <select name="itm_sub_name" disabled style="width: 75%">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="control-group col-lg-12">
                                    <label class="control-label">Code</label>
                                    <div class="controls">
                                        <input class="span3" type="number" name="">
                                        <button class="btn btn-primary" style="margin-top: -9px">Get Invoice Balance >></button>
                                    </div>
                                </div> --}}
                                <div class="control-group col-lg-5">
                                    <div class="controls">
                                    <label class="control-label">Cost Center</label>
                                        <select class="">
                                            {{-- @isset($m08)
                                              <option value="">Select Cost Center..</option>
                                              @foreach($m08 as $d)
                                                <option value="{{$d->cc_code}}">{{$d->cc_desc}}</option>
                                              @endforeach
                                            @else
                                              <option value="">No Cost Center Registered</option>
                                            @endisset --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group col-lg-5">
                                    <div class="controls">
                                    <label class="control-label">Sub Cost Center</label>
                                        <select class="" disabled>
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
                                <div class="control-group col-lg-5">
                                    <div class="controls">
                                      <label class="control-label">Approximation Amount <span style="color:red;display:none">*</span></label>
                                        <input type="number" name="" placeholder="0.00" value="0.00" style="text-align: right;">
                                    </div>
                                </div>
                                <div class="control-group col-lg-5">
                                    <div class="controls">
                                      <label class="control-label">Allotment Account <span style="color:red;display:none">*</span></label>
                                        <input type="number" name="" placeholder="0.00" value="0.00" style="text-align: right;">
                                    </div>
                                </div>
                                <div class="control-group col-lg-5">
                                    <div class="controls">
                                      <label class="control-label">Obligation Amount <span style="color:red;display:none">*</span></label>
                                        <input type="number" name="" placeholder="0.00" value="0.00" style="text-align: right;">
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
                        <button type="button" class="btn btn-primary"><i class="icon-save"></i> Save</button>
                    </div>
                    </form>
                </div>
            </div>
            <div>
                <button class="btn btn-primary"><i class="icon-save"></i> Save as Pending</button>
                <a href="{{url('accounting/accounting-journal-entry')}}" class="btn btn-danger"><i class="icon-remove"></i> Go Back</a>
            </div>
        </div>
    </div>
</div>
</div>
<script>
  var hdr_fy = "@isset($fy){{$fy}}@endisset";
  var hdr_mo = "@isset($mo){{$mo}}@endisset";
  var hdr_j_nnum = "@isset($j_num){{$j_num}}@endisset";
  $(document).ready(function(){
    let today = new Date().toISOString().slice(0, 10);
    $('input[name="hdr_date"]').val(today);
  });
  function addMode()
  {
    var trCount = 0;
    var oTable = $('#mtable').dataTable();
    trCount = oTable.fnGetData().length;
    // $("#tblCustomers td").closest("tr").length;
    $('input[name="itm_line"]').val(trCount);
    var test =  $('#mtable tbody').closest("tr").length;
    $('#MOD_MODE').text('(ADD)');
  }
  function Account_title()
  {
    $('input[name="itm_acc_title_code"]').val($('select[name="itm_acc_title"]').val());
  }
</script>
@stop