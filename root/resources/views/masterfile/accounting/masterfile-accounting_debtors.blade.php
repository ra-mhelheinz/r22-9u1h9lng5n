@extends('_layout') @section('content')
<div id="content">
    <div id="content-header">
        @php $_bc = ['<a href="#">Master File</a>', '<a href="#">Accounting</a>', '<a href="'.url('master-file/accounting/debtors').'" class="current">Customer List</a>']; @endphp @include('layout.breadcrumbs')
        <h1>Customer</h1>
        <div class="user-menu">
        </div>
    </div>
    <div class="container-fluid">
        <div>
            <button class="btn btn-primary" pd-popup-open="small" href="#" onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
        </div>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Customer List</h5>
            </div>
            <div class="widget-content nopadding">
                <form>
                    <div class="table table-responsive" style="overflow-y:auto;">
                        <table id="mtable" class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Fax</th>
                                    <th>Email</th>
                                    <th>TIN</th>
                                    <th>Type</th>
                                    <th width="10%">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($data[0]) @foreach($data[0] as $m06)
                                <tr class="gradeX">
                                    <td>{{$m06->d_code}}</td>
                                    <td class="center">{{$m06->d_name}}</td>
                                    <td class="center">{{$m06->d_addr2}}</td>
                                    <td class="center">{{$m06->d_tel}}</td>
                                    <td class="center">{{$m06->d_fax}}</td>
                                    <td class="center">{{$m06->d_email}}</td>
                                    <td class="center">{{$m06->d_tin}}</td>
                                    <td class="center">{{$m06->type}}</td>
                                    <td class="center">
                                        <center>
                                            <button pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$m06->d_code}}', '{{$m06->d_name}}', '{{$m06->d_addr2}}', '{{$m06->d_tel }}', '{{$m06->d_fax}}', '{{$m06->d_email}}', '{{$m06->d_tin}}', '{{$m06->type}}',  '{{$m06->mp_code}}',  '{{$m06->at_code}}', '{{$m06->d_cntc_no}}', '{{$m06->limit}}');$('#smallpop').show();"><i class="icon-pencil"></i></button>
                                            <button pd-popup-open="small" class="btn btn-danger" type="button" onclick="DeleteMode('{{$m06->d_code}}', '{{$m06->d_name}}');$('#smallpop').show();"><i class="icon-remove"></i></button>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach @endisset
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div>
            {{--
            <button class="btn btn-info"><i class="icon-print"></i> Print List</button> --}}
        </div>
        <div class="popup" pd-popup="small" id="smallpop">
            <div id="popup-inner-lg" class="popup-inner-lg">
                <form id="AddForm" method="post" action="" data-parsley-validate novalidate>
                    {{ csrf_field() }}
                    <div class="modal-header">
                        Customer <span id="MOD_MODE"></span>
                        <a class="popup-close" pd-popup-close="small" href="#"> </a>
                    </div>
                    <div class="modal-body" style="height: auto">
                        <div class="row-fluid">
                            <div class="col-lg-12">
                                <span class="AddMode EditMode">
                  <div class="control-group col-lg-5">
                      <div class="controls">
                        <label> ID<span style="color:red;font-weight: bolder;display:hidden">*</span></label>
                                <input type="text" name="txt_id" maxlength="3" style="text-transform: uppercase;" parsley-required-message="ID required." readonly/>
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label> Type<span style="color:red;font-weight: bolder">*</span></label>
                                <select name="txt_typ" parsley-error-container="#txt_typ_span" parsley-required-message="Type required." required>
                                    <option value="">Select Type ...</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Financer">Financer</option>
                                    <option value="Insurance">Insurance</option>
                                    <option value="Prospect">Prospect</option>
                                </select>
                                <span id="txt_typ_span"></span>
                            </div>
                        </div>
                        <div class="control-group col-lg-12">
                            <div class="controls">
                                <label>Name<span style="color:red;font-weight: bolder">*</span></label>
                                <input class="span9" type="text" name="txt_name" parsley-required-message="Name required." required>
                            </div>
                        </div>
                        <div class="control-group col-lg-11">
                            <div class="controls">
                                <label for="">Information Details</label>
                                <hr>
                            </div>
                        </div>
                        <div class="control-group col-lg-12">
                            <div class="controls">
                                <label> Address</label>
                                <textarea class="span9" rows="3" name="txt_add"></textarea>
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Mobile Number <span style="color:red;font-weight: bolder">*</span></label>
                                <input class="span7" type="text" maxlength="15" name="txt_mob_num" parsley-required-message="Mobile number required." required>
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Email Address <span style="color:red;font-weight: bolder">*</span></label>
                                <input class="span7" type="email" name="txt_email" required parsley-type-email-message="Invalid Email Address" parsley-required-message="Email Address required." parsley-trigger="change" parsley-type="email">
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Phone <span style="color:red;font-weight: bolder">*</span></label>
                                <input class="span7" type="text" maxlength="8" name="txt_phn_num" parsley-required-message="Phone required." required>
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>TIN Number </label>
                                <input class="span7" type="text" name="txt_tin_num">
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Fax Number </label>
                                <input class="span7" type="text" name="txt_fax_num">
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Contact Person </label>
                                <input class="span7" type="text" name="txt_cnt_per">
                            </div>
                        </div>
                        <div class="control-group col-lg-11">
                            <div class="controls">
                                <label for="">Settings</label>
                                <hr>
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Mode of Payment <span style="color:red;font-weight: bolder">*</span></label>
                                <select name="txt_mop" required parsley-error-container="#txt_mop_span" parsley-required-message="Mode of Payment required.">
                                    @isset($data[1])
                                    <option value="">Select Mode of Payment....</option>
                                    @foreach($data[1] as $m10)
                                    <option value="{{$m10->mp_code}}">{{$m10->mp_desc}}</option>
                                    @endforeach @else
                                    <option value="">No Mode of Payment registered.</option>
                                    @endisset
                                </select>
                                <span id="txt_mop_span"></span>
                            </div>
                        </div>
                        <div class="control-group col-lg-5">
                            <div class="controls">
                                <label>Credit Limit </label>
                                <input class="span7" type="number" maxlength="8" placeholder="0.00" name="txt_crd_lmt">
                            </div>
                        </div>
                        <div class="control-group col-lg-11">
                            <div class="controls">
                                <label>Sub-ledger <span style="color:red;font-weight: bolder">*</span></label>
                                <select name="txt_sub_led" id="" required parsley-error-container="#txt_sub_led_span" parsley-required-message="Sub-ledger required.">
                                    @isset($data[2])
                                    <option value="">Select Sub-ledger..</option>
                                    @foreach($data[2] as $m04)
                                    <option value="{{$m04->at_code}}">{{$m04->at_desc}}</option>
                                    @endforeach @else
                                    <option value="">No Sub-ledger registered.</option>
                                    @endisset
                                </select>
                                <span id="txt_sub_led_span"></span>
                            </div>
                        </div>
                        <div class="control-group col-lg-11">
                            <div class="controls">
                                <label for="">Others</label>
                                <hr>
                            </div>
                        </div>
                        <div class="control-group col-lg-12">
                            <div class="controls">
                                <label> Remarks</label>
                                <textarea class="span9" rows="3" name="txt_rmks"></textarea>
                            </div>
                        </div>
                        </span>
                        <div class="DeleteMode control-group col-lg-12" style="display: none">
                            <div class="controls">
                                <label for="">Are you sure you want to delete <span style="color:red;font-weight: bold" id="DeleteName"></span> from Customers ?</label>
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
    $(document).ready(function() {
        $('select[name="sel_type"]').select2('val', '');
    });
    function emptyAdd(){
        $('.parsley-error-list').hide();
        $('input[name="txt_id"]').val('');
        $('input[name="txt_name"]').val('');
        $('textarea[name="txt_add"]').val('');
        $('input[name="txt_phn_num"]').val('');
        $('input[name="txt_fax_num"]').val('');
        $('input[name="txt_email"]').val('');
        $('input[name="txt_tin_num"]').val('');
        $('input[name="txt_mob_num"]').val('');
        $('select[name="txt_typ"]').val('').trigger('change');
        $('select[name="txt_mop"]').val('').trigger('change');
        $('select[name="txt_sub_led"]').val('').trigger('change');
        $('select[name="txt_typ"]').attr('required', '');
        $('input[name="txt_name"]').attr('required', '');
        $('input[name="txt_mob_num"]').attr('required', '');
        $('input[name="txt_email"]').attr('required', '');
        $('input[name="txt_phn_num"]').attr('required', '');
        $('select[name="txt_mop"]').attr('required', '');
        $('select[name="txt_sub_led"]').attr('required', '');
        $('input[name="txt_crd_lmt"]').val('');
        $('#popup-inner-lg').removeClass('popup-inner');
        $('#popup-inner-lg').addClass('popup-inner-lg');
        $('#MOD_MODE').text('(Add)');
        $('#EditMode').hide();
        $('#AddForm').attr('action', '{{url('master-file/accounting/debtors')}}');
        $('.EditMode').hide();
        $('.AddMode').show();
        $('.DeleteMode').hide();
    }
    function EditMode(code, name, addr, tel, fax, email, tin, typ, atcd, sl, mob, lmt) {
        $('.parsley-error-list').hide();
        $('#popup-inner-lg').removeClass('popup-inner');
        $('#popup-inner-lg').addClass('popup-inner-lg');
        $('#Add').show();
        $('input[name="txt_id"]').val(code);
        $('input[name="txt_name"]').val(name);
        $('textarea[name="txt_add"]').val(addr);
        $('input[name="txt_phn_num"]').val(tel);
        $('input[name="txt_fax_num"]').val(fax);
        $('input[name="txt_email"]').val(email);
        $('input[name="txt_tin_num"]').val(tin);
        $('input[name="txt_mob_num"]').val(mob);
        $('select[name="txt_typ"]').val(typ).trigger('change');
        $('select[name="txt_mop"]').val(atcd).trigger('change');
        $('select[name="txt_sub_led"]').val(sl).trigger('change');
        $('select[name="txt_typ"]').attr('required', '');
        $('input[name="txt_name"]').attr('required', '');
        $('input[name="txt_mob_num"]').attr('required', '');
        $('input[name="txt_email"]').attr('required', '');
        $('input[name="txt_phn_num"]').attr('required', '');
        $('select[name="txt_mop"]').attr('required', '');
        $('select[name="txt_sub_led"]').attr('required', '');
        $('input[name="txt_crd_lmt"]').val(lmt);
        $('#MOD_MODE').text('(Edit)');
        $('#AddForm').attr('action', '{{url('master-file/accounting/debtors/update')}}');
        $('#EditMode').show();
        $('.AddMode').hide();
        $('.EditMode').show();
        $('.DeleteMode').hide();
    }
    function DeleteMode(code, desc) {
        $('#popup-inner-lg').removeClass('popup-inner-lg');
        $('#popup-inner-lg').addClass('popup-inner');
        $('#Add').show();
        $('input[name="txt_accid"]').val(code);
        $('#DeleteName').text(desc);
        $('input[name="txt_id"]').val(code);
        $('select[name="txt_typ"]').removeAttr('required');
        $('input[name="txt_name"]').removeAttr('required');
        $('input[name="txt_mob_num"]').removeAttr('required');
        $('input[name="txt_email"]').removeAttr('required');
        $('input[name="txt_phn_num"]').removeAttr('required');
        $('select[name="txt_mop"]').removeAttr('required');
        $('select[name="txt_sub_led"]').removeAttr('required');
        $('#MOD_MODE').text('(Delete)');
        $('#AddForm').attr('action', '{{url('master-file/accounting/debtors/delete ')}}');
        $('.AddMode').hide();
        $('.EditMode').hide();
        $('.DeleteMode').show();
    }
</script>
@stop