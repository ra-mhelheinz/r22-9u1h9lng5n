<div class="popup" pd-popup="suppliers">
    <div class="popup-inner-lg">
        <div class="modal-header">
            Suppliers
            <a class="popup-close" pd-popup-close="suppliers" href="#"> </a>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <button class="btn btn-primary" pd-popup-open="suppliers-info" href="#" onclick="load_MOP_SL_ID('S_I_SELECT_MOP', 0, '');load_MOP_SL_ID('S_I_SELECT_SUBLEDGER', 1, '');load_MOP_SL_ID('S_I_INPUT_ID', 2, 'c_code');SI_ADD_MODE();" ><i class="icon-plus"></i> Add New</button>
                <div class="widget-box">
                  {{--  --}}
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Suppliers List</h5>
                    </div>
                    <div class="widget-content">
                        <form>
                            <div class="table table-responsive" style="overflow-y:auto;">
                                <table id="Mf_Acc_SupplierList" class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Supplier</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Fax</th>
                                            <th>Tin</th>
                                            <th>Contact Name(ICOE)</th>
                                            <th>Subledger</th>
                                            <th>Payment</th>
                                            <th>Link Old Account</th>
                                            <th width="10%">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{--
                                        <tr class="gradeX">
                                            <td>
                                                <input type="radio" />
                                            </td>
                                            <td>0001</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                            <td class="center">-</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            {{--
            <button class="btn btn-primary m_close">Save</button> --}}
            <a pd-popup-close="suppliers" href="#" class="btn btn-danger m_close">Close</a>
        </div>
    </div>
</div>
<script>
  function LoadMFAccCreditors()
  {
    $('#Mf_Acc_SupplierList').dataTable().fnClearTable();
    $.ajax({
        url: '{{ asset('master-file/accounting/creditors/get') }}',
        data : {_token: $('meta[name="csrf-token"]').attr('content')},
        success : function(data){
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                  // data[i]
                  $('#Mf_Acc_SupplierList').DataTable().fnAddData([
                      data[i].c_code,
                      data[i].c_name,
                      data[i].c_addr2,
                      data[i].c_tel,
                      data[i].c_fax,
                      data[i].c_tin,
                      data[i].c_cntc,
                      data[i].at_code,
                      data[i].mp_code,
                      data[i].old_code, // customer_entry
                      '<center>' +
                        '<button type="button" class="btn btn-info" onclick="edit_SP(); "><i class="icon-pencil"></i></button>' +
                        '<a type="button" class="btn btn-danger" onclick="delete_SP()"><i class="icon-remove"></i></button>' +
                      '</center>'
                    ]);
                }
            }
        },
        error : function(a, b, c){}
    });
  }
    function load_MOP_SL_ID(selected, num, clm)
    {
        if (num == 0) { // Get
          $('select[name="'+selected+'"]').empty();
          $.ajax({
            url: '{{ asset('master-file/accounting/deptors/get-m10') }}',
            method: 'GET',
            data : {_token : $('meta[name="csrf-token"]').attr('content')},
            success: function(data){
                if (data.length > 0) {
                  $('select[name="'+selected+'"]').append('<option value="">Select Mode of Payment ...</option>');
                  for (var i = 0; i < data.length; i++) {
                    $('select[name="'+selected+'"]').append('<option value="'+data[i].mp_code+'">'+data[i].mp_desc+'</option>');
                  }
                } else {$('select[name="'+selected+'"]').append('<option value="">No Mode of Payment Registered</option>');}
                $('select[name="'+selected+'"]').select2('val', '');
            },
            error : function(a, b, c){
            }
          });
        } else if (num == 1) { // Get Sub-Ledger
          $('select[name="'+selected+'"]').empty();
          $.ajax({
            url: '{{ asset('master-file/accounting/account-title/get') }}',
            method: 'GET',
            data : {_token : $('meta[name="csrf-token"]').attr('content')},
            success: function(data){
              if (data.length > 0) 
              {
                $('select[name="'+selected+'"]').append('<option value="">Select Sub-Ledger ...</option>');
                for (var i = 0; i < data.length; i++) {
                   $('select[name="'+selected+'"]').append('<option value="'+data[i].at_code+'">'+data[i].at_desc+'</option>');
                }
              }
              else{$('select[name="'+selected+'"]').append('<option value="">No Sub-Ledger Registered</option>');}
              $('select[name="'+selected+'"]').select2('val', '');
            },
            error: function(a, b, c){}
          });
        } else if (num == 2){
          $('input[name="'+selected+'"]').val('');
          $.ajax({
            url: '{{ asset('settings/system-settings/getOne') }}',
            method :'GET',
            data : {_token : $('meta[name="csrf-token"]').attr('content'), clm : clm},
            success: function(data){
                if (data[clm] != null) {
                  $('input[name="'+selected+'"]').val(data[clm]);
                }
            },
            error: function(a, b, c){}
          });
        }
        // return 'tEST';
    }
    function SI_ADD_MODE()
    {
        $('input[name="S_I_INPUT_NAME"]').val('');
        $('textarea[name="S_I_TEXTAREA_ADDRESS"]').val('');
        $('input[name="S_I_INPUT_PHONE"]').val('');
        $('input[name="S_I_INPUT_TIN_NUM"]').val('');
        $('input[name="S_I_INPUT_FAX_NUM"]').val('');
        $('input[name="S_I_INPUT_CNT_NAME"]').val('');
        $('select[name="S_I_SELECT_MOP"]').select2('val', '');
        $('select[name="S_I_SELECT_SUBLEDGER"]').select2('val', '');
        $('span[name="S_I_MODE"]').empty();
        $('span[name="S_I_MODE"]').text('(ADD)');
        $('.S_I_DELETE_MODE').hide();
        $('.S_I_ADD_MODE').show();
    }
    function SubmitS_I_FORM()
    {
      var mode = $('span[name="S_I_MODE"]').text();
      var data = {
                   _token : $('meta[name="csrf-token"]').attr('content'),
                   id : $('input[name="S_I_INPUT_ID"]').val(),
                   name : $('input[name="S_I_INPUT_NAME"]').val(),
                   add : $('textarea[name="S_I_TEXTAREA_ADDRESS"]').val(),
                   phn_num : $('input[name="S_I_INPUT_PHONE"]').val(),
                   tin_num : $('input[name="S_I_INPUT_TIN_NUM"]').val(),
                   fax_num : $('input[name="S_I_INPUT_FAX_NUM"]').val(),
                   cnt_num : $('input[name="S_I_INPUT_CNT_NAME"]').val(),
                   mop : $('select[name="S_I_SELECT_MOP"]').val(),
                   sub_led : $('select[name="S_I_SELECT_SUBLEDGER"]').val(),
                };
      if((data.id != '') && (data.name != '') && (data.mop != '') && (data.sub_led != ''))
      {
        if (mode == '(ADD)') 
        {
          $.ajax({
            url : '{{ asset('master-file/accounting/creditors/add') }}',
            type : 'POST',
            data : data,
            success : function(d){
              if (d == 'DONE') {
                alert('Successfully added Creditor');
                $('div[pd-popup="suppliers-info"]').hide();
                LoadMFAccCreditors();
              } else if (d == 'ERROR'){
                alert('ERROR occured on adding new Creditor');
              }
            },
            error : function(a, b, c){},
          });
        }
      }
      else {
        alert('Fill in the necessary requirements.');
      }
    }
</script>