@extends('_layout')
@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Master File</a>', '<a href="#">Accounting</a>', '<a href="'.url('master-file/accounting/sub-sub-cost-center').'" class="current">Sub Cost Centers List</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Sub Cost Centers</h1>
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <div>
      <button class="btn btn-primary" pd-popup-open="small" href="#"  onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
    </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Sub Cost Center List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Code</th>
                  {{-- <th>Supplier</th> --}}
                  {{-- <th>Address</th> --}}
                  {{-- <th>Phone</th> --}}
                  {{-- <th>Fax</th> --}}
                  {{-- <th>TIN</th> --}}
                  {{-- <th>Contact Name(ICOE)</th> --}}
                  {{-- <th>Sub-Ledger</th> --}}
                  <th>Description</th>
                  <th>Cost Center</th>
                  {{-- <th>Link Old Account</th> --}}
                  <th width="10%">Options</th>
                </tr>
              </thead>
              <tbody>
                @isset($data[0])
                  @foreach($data[0] as $subctr)
                  <tr class="gradeX">
                    <td>{{$subctr->scc_code}}</td>
                    <td class="center">{{$subctr->scc_desc}}</td>
                    <td class="center">@isset($subctr->cc_desc){{$subctr->cc_desc}}@else{{'Not Available'}}@endisset</td>
                    {{--<td class="center">{{$subctr->c_tel}}</td>
                    <td class="center">{{$subctr->c_fax}}</td>
                    <td class="center">{{$subctr->c_tin}}</td>
                    <td class="center">{{$subctr->c_cntc}}</td>
                    <td class="center">{{$subctr->at_code}}</td>
                    <td class="center">{{$subctr->mp_code}}</td> --}}
                    {{-- <td class="center">{{$subctr->old_code}}</td> --}}
                    <td class="center">
                      <center>
                        <button pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$subctr->scc_code}}', '{{$subctr->scc_desc}}', '{{$subctr->cc_code}}');$('#smallpop').show();"><i class="icon-pencil"></i></button>
                        <button  pd-popup-open="small" class="btn btn-danger" type="button" onclick="DeleteMode('{{$subctr->scc_code}}', '{{$subctr->scc_desc}}');$('#smallpop').show();"><i class="icon-remove"></i></button>
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
            {{-- <button class="btn btn-info"><i class="icon-print"></i> Print List</button> --}}
    </div>
      <div class="popup" pd-popup="small" id="smallpop">
        <div id="popup-inner-lg" class="popup-inner">
          <form id="AddForm" method="post" action="" data-parsley-validate novalidate>
          {{ csrf_field() }}
          <div class="modal-header">
            Sub Cost Center <span id="MOD_MODE"></span>
            <a class="popup-close" pd-popup-close="small" href="#"> </a>
          </div>
          <div class="modal-body" style="height: auto">
            <div class="row-fluid">
              <div class="col-lg-12">
                <span class="AddMode EditMode">
                  <div class="control-group col-lg-12">
                      <div class="controls">
                        <label> Code<span style="color:red;font-weight: bolder">*</span></label>
                        <input type="text" name="txt_id" maxlength="4" style="text-transform: uppercase;"  parsley-required-message="Code required." required="" />
                      </div>
                  </div>
                  <div class="control-group col-lg-12">
                    <div class="controls">
                      <label>Name<span style="color:red;font-weight: bolder">*</span></label>
                      <input class="span9" type="text" name="txt_name"  parsley-required-message="Name required." required>
                      {{-- <label for=""><i>(Last Name, First Name MI)</i></label> --}}
                    </div>
                  </div>
                  <div class="control-group col-lg-5">
                    <div class="controls">
                      <label>Cost Center <span style="color:red;font-weight: bolder">*</span></label>
                      <select name="txt_sub_led" style="width: 70%" id="" required parsley-error-container="#txt_sub_led_span" parsley-required-message="Cost Center required.">
                        @isset($data[1])
                          <option value="">Select Cost Center..</option>
                          @foreach($data[1] as $m08)
                            <option value="{{$m08->cc_code}}">{{$m08->cc_desc}}</option>
                          @endforeach
                        @else
                          <option value="">No Cost Center registered.</option>
                        @endisset
                      </select>
                      <span id="txt_sub_led_span"></span>
                    </div>
                  </div>
                </span>
                <div class="DeleteMode control-group col-lg-12" style="display: none">
                <div class="controls">
                  <label for="">Are you sure you want to delete <span style="color:red;font-weight: bold" id="DeleteName"></span> from Sub Cost Center List ?</label>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <span class="AddMode EditMode">
              <a pd-popup-close="small" href="#" class="btn btn-danger m_close"><i class="icon-remove"></i> back</a>
              <button class="btn btn-primary" onclick="$('.parsley-error-list').show();"><i class="icon-save"></i> Save</button>
            </span>
            <span class="DeleteMode" style="display: none">
              <a pd-popup-close="small" href="#" class="btn btn-success m_close"><i class="icon-remove"></i> Cancel</a>
              <button class="btn btn-danger" onclick="$('#AddForm').submit();"><i class="icon-trash"></i> Delete</button>
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
    $('.parsley-error-list').hide();
    $('input[name="txt_id"]').val('');
    $('input[name="txt_name"]').val('');
    $('select[name="txt_sub_led"]').val('').trigger('change');

    $('input[name="txt_id"]').attr('required', '');
    $('input[name="txt_name"]').attr('required', '');
    $('select[name="txt_sub_led"]').attr('required', '');
    $('input[name="txt_id"]').removeAttr('readonly');

    $('#MOD_MODE').text('(Add)');
    $('#EditMode').hide();
    $('#AddForm').attr('action', '{{url('master-file/accounting/sub-cost-center')}}');
    $('.EditMode').hide();
    $('.AddMode').show();
    $('.DeleteMode').hide();


  }
  function EditMode(code, name, costcenter){

    $('.parsley-error-list').hide();

   $('#Add').show();
    $('input[name="txt_id"]').val(code);
    $('input[name="txt_id"]').attr('readonly', '');
    $('input[name="txt_name"]').val(name);
    $('select[name="txt_sub_led"]').val(costcenter).trigger('change');

    $('input[name="txt_id"]').attr('required', '');
    $('input[name="txt_name"]').attr('required', '');
    $('select[name="txt_sub_led"]').attr('required', '');

    $('#MOD_MODE').text('(Edit)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/sub-cost-center/update')}}');
    $('#EditMode').show();
    $('.AddMode').hide();
    $('.EditMode').show();
    $('.DeleteMode').hide();

  }
  function DeleteMode(code, desc){

    $('#Add').show();
    $('#DeleteName').text(desc);

    $('input[name="txt_id"]').val(code);

    $('input[name="txt_id"]').removeAttr('required');
    $('input[name="txt_name"]').removeAttr('required');
    $('select[name="txt_sub_led"]').removeAttr('required', '');

    $('#MOD_MODE').text('(Delete)');
    $('#AddForm').attr('action', '{{url('master-file/accounting/sub-cost-center/delete')}}');
    $('.AddMode').hide();
    $('.EditMode').hide();
    $('.DeleteMode').show();
  }
</script>
@stop