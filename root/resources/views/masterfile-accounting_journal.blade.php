@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Master File</a>', '<a href="#">Accounting</a>', '<a href="'.url('master-file/accounting/journal').'" class="current">Journal List</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Journal</h1>
    <div class="user-menu">
    </div>
  </div>
  
  <div class="container-fluid">
    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#"  onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Journal List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Code</th>   
                  <th>Description</th>
                  <th>Type</th>
                  <th>Reference Number</th>   
                  <th>Check by</th>
                  <th>Noted by</th>
                  <th>Approved by</th>
                  {{-- <th>j_type</th> --}}
                  <th width="10%">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data[1] as $m05)
                <tr class="gradeX">
                  <td>{{$m05->j_code}}</td>
                  <td class="center">{{$m05->j_desc}}</td>
                  <td class="center">{{$m05->name}}</td>
                  <td class="center">{{$m05->j_num}}</td>
                  <td class="center">{{$m05->check_by}}</td>
                  <td class="center">{{$m05->noted_by}}</td>
                  <td class="center">{{$m05->approv_by}}</td>
                  {{-- <td class="center">{{$m05->prt_type}}</td> --}}
                  <td class="center">
                    <center>
                      <a href="#Update" pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$m05->j_code}}', '{{$m05->j_desc}}', '{{$m05->j_type}}', '{{$m05->check_by }}', '{{$m05->noted_by}}', '{{$m05->approv_by}}', '{{$m05->j_num}}');"><i class="icon-pencil"></i></a>
                      <a href="#" pd-popup-open="small" class="btn btn-danger" type="button" onclick="DeleteMode('{{$m05->j_code}}', '{{$m05->j_desc}}')"><i class="icon-remove"></i></a>
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
      <div class="popup" pd-popup="small">
        <div class="popup-inner">
          <form id="AddForm" method="post" action="{{url('master-file/accounting/journal')}}">
          {{ csrf_field() }}
          <div class="modal-header">
            Journal List <span id="MOD_MODE"></span>
            <a class="popup-close" pd-popup-close="small" href="#"> </a>
          </div>
          <div class="modal-body" style="height: auto">
            <div class="row-fluid">
              <div class="col-lg-10">
                <span class="AddMode EditMode">
                  <div class="control-group col-lg-12">
                      <div class="controls">
                        <label> Journal ID<span style="color:red;font-weight: bolder">*</span></label>
                        <input type="text" name="txt_accid" maxlength="3" style="text-transform: uppercase;" required>
                      </div>
                  </div>
                  <div class="control-group col-lg-12">
                    <div class="controls">
                      <label>Name<span style="color:red;font-weight: bolder">*</span></label>
                      <input class="span8" type="text" name="txt_name" required>
                    </div>
                  </div>
                  <div class="control-group col-lg-12">
                    <div class="controls">
                      <label> Journal Type<span style="color:red;font-weight: bolder">*</span></label>
                        <select name="sel_type" required>
                          @isset($data[0])
                            <option value="">Select Journal Type..</option>
                            @foreach($data[0] as $m05type)
                              <option value="{{$m05type->code}}">{{$m05type->name}}</option>
                            @endforeach
                          @endisset                        
                        </select>
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Next Reference No. </label>
                      <input type="text" maxlength="8" name="txt_nxt_rf_no">
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Reviewed By. </label>
                      <input type="text" name="txt_rv_by">
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Noted By. </label>
                      <input type="text" name="txt_ntd_by">
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Approved By. </label>
                      <input type="text" name="txt_apd_by">
                    </div>
                  </div>
                </span>
                <div class="DeleteMode control-group col-lg-12" style="display: none">
                <div class="controls">
                  <label for="">Are you sure you want to delete <span style="color:red;font-weight: bold" id="DeleteName"></span> from Journal ?</label>
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
    
    $('input[name="txt_nxt_rf_no"]').val('');
    $('input[name="txt_rv_by"]').val('');
    $('input[name="txt_ntd_by"]').val('');
    $('input[name="txt_apd_by"]').val('');

    $('#MOD_MODE').text('(Add)');
    $('#EditMode').hide();
    $('#AddForm').attr('action', '{{url('master-file/accounting/journal')}}');
    $('.EditMode').hide();
    $('.AddMode').show();
    $('.DeleteMode').hide();
     
    

  }
  function EditMode(code, desc, typ, chk, ntd, aprv, num){
    $('#Add').show();
    $('input[name="txt_name"]').val(desc);
    $('input[name="txt_name"]').attr('required', '');
    $('input[name="txt_accid"]').val(code);
    $('input[name="txt_accid"]').attr('required', '');
    $('input[name="txt_accid"]').attr('readonly', '');
    $('select[name="sel_type"]').select2('val', typ);
    $('select[name="sel_type"]').attr('required', '');
    
    
    $('input[name="txt_nxt_rf_no"]').val(num);
    $('input[name="txt_rv_by"]').val(chk);
    $('input[name="txt_ntd_by"]').val(ntd);
    $('input[name="txt_apd_by"]').val(aprv);

    $('#MOD_MODE').text('(Edit)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/journal/update')}}');
    $('#EditMode').show();
    $('.AddMode').hide();
    $('.EditMode').show();
    $('.DeleteMode').hide();

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
    $('#AddForm').attr('action', '{{url('master-file/accounting/journal/delete')}}');
    $('.AddMode').hide();
    $('.EditMode').hide();
    $('.DeleteMode').show();
  }
</script>
@stop