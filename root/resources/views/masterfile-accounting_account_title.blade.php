@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Master File</a>', '<a href="#">Accounting</a>', '<a href="'.url('master-file/accounting/account-title').'" class="current">Account Title List</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Account Title</h1>
    <div class="user-menu">
    </div>
  </div>
  
  <div class="container-fluid">
    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#" onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
      {{-- <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
      <button class="btn btn-danger"><i class="icon-remove"></i> Delete</button> --}}
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Account Title List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>   
                  <th>Name</th>
                  <th>Type</th>
                  <th>SL</th>   
                  <th>CIB</th>
                  <th>Sub Account</th>
                  <th>Payment</th>
                  <th width="10%">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data[1] as $m04)
                <tr class="gradeX">
                  <td><strong>{{$m04->at_code}}</strong></td>
                  <td class="center">{{$m04->at_desc}}</td>
                  <td class="center">
                    @isset($m04->dr_cr)
                      @if($m04->dr_cr == 'D') {{'Debit'}} @else {{'Credit'}} @endif
                    @else
                    {{'N/A'}}
                    @endisset
                  </td>
                  <td class="center">
                    <center>
                      @if ($m04->sl == 'N')
                        {{-- <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button> --}}
                        <i class="fa fa-times" style="font-size:25px;color:red"></i>
                      @else
                        <i class="fa fa-check" style="font-size:25px;color:green"></i>
                      @endif
                    </center>
                  </td>
                  <td class="center">
                    <center>
                      @if ($m04->cib_acct == 'N')
                        {{-- <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button> --}}
                        <i class="fa fa-times" style="font-size:25px;color:red"></i>
                      @else
                        <i class="fa fa-check" style="font-size:25px;color:green"></i>
                      @endif
                    </center>
                  </td>
                  <td class="center">
                    @isset($m04->acc_code)
                    {{{$m04->acc_desc}}}
                    @else
                    {{'N/A'}}
                    @endisset
                  </td>
                  <td class="center">{{--$m04->payment--}}
                    <center>
                      @if ($m04->payment == 'N')
                        {{-- <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button> --}}
                        <i class="fa fa-times" style="font-size:25px;color:red"></i>
                      @else
                        <i class="fa fa-check" style="font-size:25px;color:green"></i>
                      @endif
                    </center>
                  </td>
                  <td class="center">
                    <center>
                      <a href="#Update" pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$m04->at_code}}', '{{$m04->at_desc}}', '{{$m04->acc_code}}', '{{$m04->dr_cr }}', '{{$m04->sl}}', '{{$m04->cib_acct}}', '{{$m04->payment}}');"><i class="icon-pencil"></i></a>
                      <a href="#" pd-popup-open="small" class="btn btn-danger" type="button" onclick="DeleteMode('{{$m04->at_code}}', '{{$m04->at_desc}}')"><i class="icon-remove"></i></a>
                    </center>
                  </td>
                </tr>
                @endforeach
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
    <div class="popup-inner" style="height: auto">
      <form id="AddForm" method="post" action="{{url('master-file/accounting/account-title')}}">
        {{ csrf_field() }}
        <div class="modal-header">
          Account Title <span id="MOD_MODE"></span>
          <a class="popup-close" pd-popup-close="small" href="#"> </a>
        </div>
        <div class="modal-body" style="height: auto">
          <div class="row-fluid">
            <div class="col-lg-10"> 
              <span class="AddMode EditMode">
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label> Account Title ID<span style="color:red;font-weight: bolder">*</span></label>
                    <input type="text" name="txt_accid" maxlength="11" style="text-transform: uppercase;" required>
                  </div>
                </div>
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label> Account Title Name <span style="color:red;font-weight: bolder">*</span></label>
                    <input class="span8" type="text" name="txt_name" required>
                  </div>
                </div>
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label>Account Group<span style="color:red;font-weight: bolder">*</span></label>
                    <select name="sel_type" required>
                     {{--  @foreach($data[0] as $m03)>
                        <option>{{$m03->acc_desc}}</option>
                      @endforeach --}}
                      @isset ($data[0])
                          <option value="">Select Account Group..</option>
                        @foreach($data[0] as $m03)
                          <option value="{{$m03->acc_code}}">{{--{{$m02->mag_desc}} - --}}{{$m03->acc_desc}}</option>
                        @endforeach
                      @endisset
                    </select>
                  </div>
                </div>
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label>Type <span style="color:red;font-weight: bolder">*</span></label>
                    <select name="sel_db" required>
                      <option value="">Select Type..</option>
                      <option value="D">Debit</option>
                      <option value="C">Credit</option>
                    </select>
                  </div>
                </div>
                <div class="control-group col-lg-4">
                    <div class="controls">
                      <label>Subledger account <input id="sel_sl" type="checkbox" name="sel_sl" onclick="" value="Y"></label>
                    </div>
                  </div>
                  <div class="control-group col-lg-3">
                    <div class="controls">
                      <label>Check Writting <input id="sel_cw" type="checkbox" name="sel_cw" value="Y"></label>
                    </div>
                  </div>
                  <div class="control-group col-lg-3">
                    <div class="controls">
                      <label>Payment <input id="sel_py" type="checkbox" name="sel_py" value="Y"></label>
                    </div>
                  </div>
              </span>
              <div class="DeleteMode control-group col-lg-12" style="display: none">
                <div class="controls">
                  <label for="">Are you sure you want to delete <span style="color:red;font-weight: bold" id="DeleteName"></span> from Account Title ?</label>
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
            <a pd-popup-close="small" href="#" class="btn btn-success m_close"><i class="icon-remove"></i> Cancel</a>
            <button class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
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



  function emptyAdd(){
    $('input[name="txt_name"]').val('');
    $('input[name="txt_name"]').attr('required', '');
    $('input[name="txt_accid"]').val('');
    $('input[name="txt_accid"]').attr('required', '');
    $('input[name="txt_accid"]').removeAttr('readonly');
    $('select[name="sel_type"]').select2('val', '');
    $('select[name="sel_type"]').attr('required', '');
    $('select[name="sel_db"]').attr('required', '');
    $('#MOD_MODE').text('(Add)');
    $('#EditMode').hide();
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-title')}}');
    $('.EditMode').hide();
    $('.AddMode').show();
    $('.DeleteMode').hide();
    $('select[name="sel_db"]').select2('val', '');
    
    $('input[name="sel_sl"]').removeAttr('checked');
    $('input[name="sel_cw"]').removeAttr('checked');
    $('input[name="sel_py"]').removeAttr('checked');
    $('input[name="sel_py"], input[name="sel_cw"], input[name="sel_sl"]').uniform('refresh');

  }
  function EditMode(code, desc, typ, dc, sb, cw, pw){
    $('#Add').show();
    $('input[name="txt_name"]').val(desc);
    $('input[name="txt_name"]').attr('required', '');
    $('input[name="txt_accid"]').val(code);
    $('input[name="txt_accid"]').attr('required', '');
    $('input[name="txt_accid"]').attr('readonly', '');
    $('select[name="sel_type"]').select2('val', typ);
    $('select[name="sel_type"]').attr('required', '');
    $('select[name="sel_db"]').attr('required', '');
    $('select[name="sel_db"]').select2('val', dc);
    $('#MOD_MODE').text('(Edit)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-title/update')}}');
    $('#EditMode').show();
    $('.AddMode').hide();
    $('.EditMode').show();
    $('.DeleteMode').hide();

    if (sb == 'Y') {
      $('input[name="sel_sl"]').attr('checked', '');
    } else {
      $('input[name="sel_sl"]').removeAttr('checked');
    }

    if (cw == 'Y') {
      $('input[name="sel_cw"]').attr('checked', '');
    } else {
      $('input[name="sel_cw"]').removeAttr('checked');
    }

    if (pw == 'Y') {
      $('input[name="sel_py"]').attr('checked', '');
    } else {
      $('input[name="sel_py"]').removeAttr('checked');
    }
    $('input[name="sel_py"], input[name="sel_cw"], input[name="sel_sl"]').uniform('refresh');
  }
  function DeleteMode(code, desc){
    $('#Add').show();
    $('input[name="txt_accid"]').val(code);
    $('#DeleteName').text(desc);
    $('input[name="txt_name"]').removeAttr('required');
    $('input[name="txt_accid"]').removeAttr('required');
    $('select[name="sel_type"]').removeAttr('required');
    $('select[name="sel_db"]').removeAttr('required');
    $('#MOD_MODE').text('(Delete)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-title/delete')}}');
    $('.AddMode').hide();
    $('.EditMode').hide();
    $('.DeleteMode').show();
  }
</script>
@stop