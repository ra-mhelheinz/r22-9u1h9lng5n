@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Master File</a>', '<a href="#">Accounting</a>', '<a href="'.url('master-file/accounting/account-account').'" class="current">Account Group List</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Account Group</h1>
    <div class="user-menu">
    </div>
  </div>
  
  <div class="container-fluid">
    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#Add" onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
      <button class="btn btn-info"><i class="icon-print"></i> Print List</button>
    </div>
        @if($errors->any())
          {!!Core::Alert(1,$errors->first())!!}
        @endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Account Group List</h5>
          </div>
          <div class="widget-content nopadding">
            {{-- <form> --}}
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <col>
              <col>
              <col>
              <col>
              <col width="10%">
              <thead>
                <tr>
                  <th>ID</th>   
                  <th>Name</th>
                  <th>Sub Account</th>
                  <th>Type</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data[1] as $m03)
                <tr class="gradeX">
                  <td>{{$m03->acc_code}}</td>
                  <td>{{$m03->acc_desc}}</td>
                  <td>{{--{{$m03->mag_desc}} - --}}{{$m03->cmp_desc}}</td>
                  <td>{{$m03->dr_cr_desc}}</td>
                  <td>
                    <center>
                      <a href="#" pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$m03->acc_code}}', '{{$m03->acc_desc}}', '{{$m03->cmp_code}}', '{{$m03->dr_cr}}');"><i class="icon-pencil"></i></a>
                      <a href="#" pd-popup-open="small" class="btn btn-danger" type="button" onclick="DeleteMode('{{$m03->acc_code}}', '{{$m03->acc_desc}}')"><i class="icon-remove"></i></a>
                    </center>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
            {{-- </form> --}}
          </div>
        </div>
  <div id="Add" class="popup" pd-popup="small">
    <div class="popup-inner" style="height: auto">
      <form id="AddForm" method="post" action="{{url('master-file/accounting/account-group')}}">
        {{ csrf_field() }}
        <div class="modal-header">
          Account Group List <span id="MOD_MODE"></span>
          <a class="popup-close" pd-popup-close="small" href="#"> </a>
        </div>
        <div class="modal-body" style="height: 300px">
          <div class="row-fluid">
            <div class="col-lg-10"> 
              <span class="AddMode EditMode">
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label> Account Group ID <span style="color:red;font-weight: bolder">*</span></label>
                    <input type="text" name="txt_accid" maxlength="3" style="text-transform: uppercase;" required>
                  </div>
                </div>
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label>Name <span style="color:red;font-weight: bolder">*</span></label>
                    <input class="span8" type="text" name="txt_name" required>
                  </div>
                </div>
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label>Sub Account ID <span style="color:red;font-weight: bolder">*</span></label>
                    <select name="sel_type" required>
                      @isset ($data[0])
                          <option value="">Select Sub Account..</option>
                        @foreach($data[0] as $m02)
                          <option value="{{$m02->cmp_code}}">{{--{{$m02->mag_desc}} - --}}{{$m02->cmp_desc}}</option>
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
              </span>
              <div class="DeleteMode control-group col-lg-12" style="display: none">
                <div class="controls">
                  <label for="">Are you sure you want to delete <span style="color:red;font-weight: bold" id="DeleteName"></span> from Account Group List ?</label>
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
    $('#MOD_MODE').text('(Add)');
    $('#EditMode').hide();
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-group')}}');
    $('.EditMode').hide();
    $('.AddMode').show();
    $('.DeleteMode').hide();
    $('select[name="sel_db"]').select2('val', '');
  }
  function EditMode(code, desc, typ, dc){
    $('#Add').show();
    $('input[name="txt_name"]').val(desc);
    $('input[name="txt_name"]').attr('required', '');
    $('input[name="txt_accid"]').val(code);
    $('input[name="txt_accid"]').attr('required', '');
    $('input[name="txt_accid"]').attr('readonly', '');
    $('select[name="sel_type"]').select2('val', typ);
    $('select[name="sel_type"]').attr('required', '');
    $('select[name="sel_db"]').select2('val', dc);
    $('#MOD_MODE').text('(Edit)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-group/update')}}');
    $('#EditMode').show();
    $('.AddMode').hide();
    $('.EditMode').show();
    $('.DeleteMode').hide();
  }
  function DeleteMode(code, desc){
    $('#Add').show();
    $('input[name="txt_accid"]').val(code);
    $('#DeleteName').text(desc);
    $('input[name="txt_name"]').removeAttr('required', '');
    $('input[name="txt_accid"]').removeAttr('required', '');
    $('select[name="sel_type"]').removeAttr('required');
    $('#MOD_MODE').text('(Delete)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/account-group/delete')}}');
    $('.AddMode').hide();
    $('.EditMode').hide();
    $('.DeleteMode').show();
  }
</script>
@stop
