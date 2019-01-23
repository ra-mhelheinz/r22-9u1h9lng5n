@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Master File</a>', '<a href="#">Accounting</a>', '<a href="'.url('master-file/accounting/periods').'" class="current">Accounting Period</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Period</h1>
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#"  onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
    </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Period</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Year</th>
                  <th>Month</th>
                  <th>Closed</th>
                  <th>FROM</th>
                  <th>TO</th>
                  <th>MO</th>
                  <th width="10%">Options</th>
                </tr>
              </thead>
              <tbody>
                @isset($data[0])
                  @foreach($data[0] as $x03)
                  <tr class="gradeX">
                    <td><center>{{$x03->fy}}</center></td>
                    <td class="center"><center>{{$x03->month_desc}}</center></td>
                    <td class="center">
                      <center>
                        @if($x03->closed == null)
                          <span style="color:red"><strong>NO</strong></span>
                        @elseif($x03->closed == 'Y')
                          <span style="color:green"><strong>YES</strong></span>
                        @endif
                      </center>
                    </td>
                    <td class="center"><center>{{$x03->from_desc}}</center></td>
                    <td class="center"><center>{{$x03->to_desc}}</center></td>
                    <td class="center"><center>{{$x03->mo}}</center></td>
                    {{-- <td class="center">{{$m05->prt_type}}</td> --}}
                    <td class="center">
                      <center>
                        {{-- <a href="#Update" pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$m05->j_code}}', '{{$m05->j_desc}}', '{{$m05->j_type}}', '{{$m05->check_by }}', '{{$m05->noted_by}}', '{{$m05->approv_by}}', '{{$m05->j_num}}');"><i class="icon-pencil"></i></a> --}}
                        @if($x03->closed == null)
                        <a href="#" title="Close Period" pd-popup-open="small" class="btn btn-success" type="button" onclick="DeleteMode('{{$x03->fy}}', '{{$x03->month_desc}}', {{$x03->mo}});"><i class="icon-check"></i></a>
                        @else
                        &nbsp;
                        @endif
                      </center>
                    </td>
                  </tr>
                  @endforeach
                @endisset
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>
    <div>
            <button class="btn btn-info"><i class="icon-print"></i> Print List</button>
    </div>
      <div id="Add" class="popup" pd-popup="small">
        <div class="popup-inner">
          <form id="AddForm" method="post" action="" data-parsley-validate novalidate>
          {{ csrf_field() }}
          <div class="modal-header">
            Period <span id="MOD_MODE"></span>
            <a class="popup-close" pd-popup-close="small" href="#"> </a>
          </div>
          <div class="modal-body" style="height: auto">
            <div class="row-fluid">
              <div class="col-lg-10">
                <span class="AddMode EditMode">
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Year <span style="color:red;font-weight: bolder">*</span></label>
                      <input type="number" maxlength="4" name="txt_yr" onkeyup="getTheDays()" parsley-required-message="Year required." required>
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>&nbsp;</label>
                      <input type="number" class="span3" maxlength="4" name="txt_mo2" onkeyup="getTheDays()" readonly="">
                    </div>
                  </div>
                  {{-- <div class="control-group col-lg-1">
                    <div class="controls">
                      <label>&nbsp;</label>
                      <input type="text" class="span12" name="txt_rv_by" readonly="">
                    </div>
                  </div> --}}
                  <div class="control-group col-lg-12">
                    <div class="controls">
                      <label>Month <span style="color:red;font-weight: bolder">*</span></label>
                      <select name="txt_mo" parsley-error-container="#txt_mo_span" required onchange="getTheDays();getdesc();" parsley-required-message="Month required.">
                          @isset($data[1])
                            <option value="">Select Month..</option>
                            @foreach($data[1] as $x04)
                              <option value="{{$x04->mo}}">{{$x04->month_desc}}</option>
                            @endforeach
                          @endisset
                        </select>
                        <span id="txt_mo_span"></span>
                        <input type="text" name="txt_mo_desc" style="display: none">
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Date Range </label>
                      <input type="date" name="txt_date_to" >
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                  <div class="controls">
                      <label>To </label>
                      <input type="date" name="txt_date_from">
                    </div>
                  </div>
                </span>
                <div class="DeleteMode control-group col-lg-12" style="display: none">
                <div class="controls">
                  <label for="">Are you sure you want to close accounting period <span style="color:red;font-weight: bold" id="DeleteName"></span>?</label>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <span class="AddMode EditMode">
              <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> back</a>
              <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
            </span>
            <span class="DeleteMode" style="display: none">
              <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> Cancel</a>
              <button class="btn btn-primary"><i class="icon-save"></i> Ok</button>
            </span>
           </div>
         </form>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('select[name="sel_type"]').select2('val', '');
  });
  var getDaysInMonth = function(month,year) {
    // Here January is 1 based
    //Day 0 is the last day in the previous month
   return new Date(year, month, 0).getDate();
  // Here January is 0 based
  // return new Date(year, month+1, 0).getDate();
  };
  function getTheDays(){
    var yr = $('input[name="txt_yr"]').val();
    var mo = $('select[name="txt_mo"]').val();
    if ((yr != '') && (mo != '')) {
        if (yr.length == 4) {
            var yr1 = parseInt(yr, 10);
            var mo1 = parseInt(mo, 10);
            var leMO = (mo1 == 10 ? 12 : (mo1 + 2) % 12).toString();
            // console.log(leMO);
            var date1 = yr1.toString() + '-' + ((mo1.toString().length == 2) ? mo1.toString() : '0' + mo1.toString()) + '-01';
            var date2 = yr1.toString() + '-' + ((mo1.toString().length == 2) ? mo1.toString() : '0' + mo1.toString()) + '-' + getDaysInMonth(mo1, yr1);

            if (mo1 != 0) {
              $('input[name="txt_mo2"]').val(leMO);
              $('input[name="txt_date_to"]').val(date1);
              $('input[name="txt_date_from"]').val(date2);
            }
            // console.log(date1);
        }
    }
  }
  function getdesc(){
    var data = $('select[name="txt_mo"]').select2('data')
    $('input[name="txt_mo_desc"]').val(data[0].text);
  }
  function emptyAdd(){
    $('input[name="txt_yr"]').val('');
    $('input[name="txt_mo2"]').val('');
    $('select[name="txt_mo"]').val('').trigger('change');
    $('input[name="txt_date_from"]').val('');
    $('input[name="txt_mo_desc"]').val('');
    $('input[name="txt_date_to"]').val('');

    $('input[name="txt_yr"]').attr('required', '');
    $('select[name="txt_mo"]').attr('required', '');
    // $('input[name="txt_accid"]').val('');
    // $('input[name="txt_accid"]').attr('required', '');
    // $('input[name="txt_accid"]').removeAttr('readonly');
    // $('select[name="sel_type"]').select2('val', '');
    // $('select[name="sel_type"]').attr('required', '');

    // $('input[name="txt_nxt_rf_no"]').val('');
    // $('input[name="txt_rv_by"]').val('');
    // $('input[name="txt_ntd_by"]').val('');
    // $('input[name="txt_apd_by"]').val('');

    $('#MOD_MODE').text('(Add)');
    $('#EditMode').hide();
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-period')}}');
    $('.EditMode').hide();
    $('.AddMode').show();
    $('.DeleteMode').hide();

  }
  // function EditMode(code, desc, typ, chk, ntd, aprv, num){
  //   $('#Add').show();
  //   $('input[name="txt_name"]').val(desc);
  //   $('input[name="txt_name"]').attr('required', '');
  //   $('input[name="txt_accid"]').val(code);
  //   $('input[name="txt_accid"]').attr('required', '');
  //   $('input[name="txt_accid"]').attr('readonly', '');
  //   $('select[name="sel_type"]').select2('val', typ);
  //   $('select[name="sel_type"]').attr('required', '');


  //   $('input[name="txt_nxt_rf_no"]').val(num);
  //   $('input[name="txt_rv_by"]').val(chk);
  //   $('input[name="txt_ntd_by"]').val(ntd);
  //   $('input[name="txt_apd_by"]').val(aprv);

  //   $('#MOD_MODE').text('(Edit)');
  //   $('#AddForm').attr('action', '{{url('master-file/accounting/account-period/update')}}');
  //   $('#EditMode').show();
  //   $('.AddMode').hide();
  //   $('.EditMode').show();
  //   $('.DeleteMode').hide();

  // }
  function DeleteMode(yr, month_desc, month){
    $('#Add').show();
    $('input[name="txt_yr"]').val(yr);
    $('input[name="txt_mo2"]').val(month);
    $('select[name="txt_mo"]').val('').trigger('change');
    $('#DeleteName').text(yr + ' - ' + month_desc);

    $('input[name="txt_yr"]').removeAttr('required');
    $('select[name="txt_mo"]').removeAttr('required');
    // $('select[name="sel_type"]').removeAttr('required');
    // $('select[name="sel_db"]').removeAttr('required');

    $('#MOD_MODE').text('(Close)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-period/delete')}}');
    $('.AddMode').hide();
    $('.EditMode').hide();
    $('.DeleteMode').show();
  }
</script>
@stop