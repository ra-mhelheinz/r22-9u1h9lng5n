<style type="text/css">
</style>
  <div class="popup" pd-popup="customer_search">
    <div class="popup-inner-lg">
      <div class="modal-header">
        Customer Search
        <a class="popup-close" pd-popup-close="customer_search" href="#"> </a>
      </div>
      <div class="modal-body" >
        <div class="row-fluid">
          <button class="btn btn-primary" pd-popup-open="customer_entry" href="#" onclick="load_C_E('C_E_SELECT_MOP', 0);load_C_E('C_E_SELECT_MOP', 1);load_C_E('C_E_INPUT_ID', 2);Pop_Add_Mode('customer_entry');"><i class="icon-plus"></i> Add New</button>
          {{-- <button class="btn btn-success"><i class="icon-print"></i> (Re)Print</button> --}}
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Customer List</h5>
            </div>
            <div class="widget-content">
              <div class="table table-responsive" style="overflow-y:auto;">
                <table id="Mf_Acc_CustomerList" class="table table-bordered data-table" >
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
                    {{-- <tr class="gradeX"> --}}
                      {{-- <td>0001</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">1</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td class="center">-</td> --}}
                      {{-- <td> --}}
                        {{-- <center> --}}
                          {{-- <button class="btn btn-info"><i class="icon-pencil"></i></button> --}}
                          {{-- <button class="btn btn-danger"><i class="icon-remove"></i></button> --}}
                        {{-- </center> --}}
                      {{-- </td> --}}
                      {{-- </tr> --}}
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      {{-- <button class="btn btn-primary m_close">Save</button> --}}
      <a pd-popup-close="customer_search" href="#" class="btn btn-danger m_close">Close</a>
    </div>
  </div>
</div>
<script type="text/javascript">
  function LoadMFAccDebtors()
  {
    $('#Mf_Acc_CustomerList').dataTable().fnClearTable();
    // $('#dataTables-example').DataTable().fnAddData([
    //   '1', '1', '1'
  // ]);
    $.ajax({
        url: '{{ asset('master-file/accounting/debtors/get') }}',
        data : {_token: $('meta[name="csrf-token"]').attr('content')},
        success : function(data){
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                  // data[i]
                  $('#Mf_Acc_CustomerList').DataTable().fnAddData([
                      data[i].d_code,
                      data[i].d_name,
                      data[i].d_addr2,
                      data[i].d_tel,
                      data[i].d_fax,
                      data[i].d_email,
                      data[i].d_tin,
                      data[i].type, // customer_entry
                      '<center>' +
                        '<button type="button" class="btn btn-info" onclick="edit_C_E(\''+data[i].d_code+'\', \''+data[i].d_name+'\', \''+data[i].d_addr2+'\', \''+data[i].d_tel+'\', \''+data[i].d_fax+'\', \''+data[i].d_email+'\', \''+data[i].d_tin+'\', \''+data[i].d_cntc+'\', \''+data[i].d_cntc_no+'\', \''+data[i].limit+'\', \''+data[i].mp_code+'\', \''+data[i].at_code+'\', \''+data[i].remarks+'\', \''+data[i].type+'\'); "><i class="icon-pencil"></i></button>' + 
                        '<a type="button" class="btn btn-danger" onclick="delete_C_E(\''+data[i].d_code+'\', \''+data[i].d_name+'\')"><i class="icon-remove"></i></button>' + 
                      '</center>'
                    ]);
                }
            }
        },
        error : function(a, b, c){}
    });
  }
  function load_C_E(selected, num)
    {
        if (num == 0) { // Get 
          $('select[name="C_E_SELECT_MOP"]').empty();
          $.ajax({
            url: '{{ asset('master-file/accounting/deptors/get-m10') }}',
            method: 'GET',
            data : {_token : $('meta[name="csrf-token"]').attr('content')},
            success: function(data){
                if (data.length > 0) {
                  $('select[name="C_E_SELECT_MOP"]').append('<option value="">Select Mode of Payment ...</option>');
                  for (var i = 0; i < data.length; i++) {
                    $('select[name="C_E_SELECT_MOP"]').append('<option value="'+data[i].mp_code+'">'+data[i].mp_desc+'</option>');
                  }
                } else {$('select[name="C_E_SELECT_MOP"]').append('<option value="">No Mode of Payment Registered</option>');}
                $('select[name="C_E_SELECT_MOP"]').select2('val', '');
            },
            error : function(a, b, c){}
          });
        } else if (num == 1) { // Get Sub-Ledger
          $('select[name="C_E_SELECT_SUBLEDGER"]').empty();
          $.ajax({
            url: '{{ asset('master-file/accounting/account-title/get') }}',
            method: 'GET',
            data : {_token : $('meta[name="csrf-token"]').attr('content')},
            success: function(data){
              if (data.length > 0) 
              {
                $('select[name="C_E_SELECT_SUBLEDGER"]').append('<option value="">Select Sub-Ledger ...</option>');
                for (var i = 0; i < data.length; i++) {
                   $('select[name="C_E_SELECT_SUBLEDGER"]').append('<option value="'+data[i].at_code+'">'+data[i].at_desc+'</option>');
                }
              }
              else{$('select[name="C_E_SELECT_SUBLEDGER"]').append('<option value="">No Sub-Ledger Registered</option>');}
              $('select[name="C_E_SELECT_SUBLEDGER"]').select2('val', '');
            },
            error: function(a, b, c){}
          });
        } else if (num == 2){
          $('input[name="C_E_INPUT_ID"]').val('');
          var clm = 'd_code';
          $.ajax({
            url: '{{ asset('settings/system-settings/getOne') }}',
            method :'GET',
            data : {_token : $('meta[name="csrf-token"]').attr('content'), clm : clm},
            success: function(data){
                if (data[clm] != null) {
                  $('input[name="C_E_INPUT_ID"]').val(data[clm]);
                }
            },
            error: function(a, b, c){}
          });
        }
        // return 'tEST';
    }
    function SubmitC_E_FORM(){
      var mode = $('span[name="C_E_MODE"]').text();
      var data = {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    id : $('input[name="C_E_INPUT_ID"]').val(),
                    typ : $('select[name="C_E_SELECT_type"]').val(),
                    name : $('input[name="C_E_TEXT_NAME"]').val(),
                    add : $('textarea[name="C_E_TEXTAREA_ADD"]').val(),
                    mob_num : $('input[name="C_E_TEXT_MOBILE_NUMBER"]').val(),
                    email : $('input[name="C_E_EMAIL_EMAILADD"]').val(),
                    phn_num : $('input[name="C_E_TEXT_PHONE"]').val(),
                    tin_num : $('input[name="C_E_TEXT_TIN"]').val(),
                    fax_num : $('input[name="C_E_TEXT_FAX"]').val(),
                    cnt_per : $('input[name="C_E_TEXT_CONTACT_PERSON"]').val(),
                    mop : $('select[name="C_E_SELECT_MOP"]').val(),
                    crd_lmt : $('input[name="C_E_TEXT_CREDIT_LIMIT"]').val(),
                    sub_led : $('select[name="C_E_SELECT_SUBLEDGER"]').val(),
                    rmks : $('textarea[name="C_E_TEXTAREA_RMKS"]').val(),
                  };
      if ((data.id != '') && (data.typ != '') && (data.name != '') && (data.mob_num != '') && (data.email != '') && (data.phn_num != '') && (data.mop != '') && (data.sub_led != '')) 
      {
        if (mode == '(ADD)') {
          $.ajax({
            url : '{{ asset('master-file/accounting/deptors/add') }}',
            type : 'POST',
            data : data,
            success: function(d){
              if (d == 'DONE') {
                alert('Successfully added Debtor');
                $('div[pd-popup="customer_entry"]').hide();
                LoadMFAccDebtors();
              } else {
                alert('ERROR occured on adding new Debtor');
              }
            },
            error : function(a, b, c)
            {

            },
          });
        }
        else if (mode == '(EDIT)') {
          $.ajax({
            url : '{{ asset('master-file/accounting/deptors/update') }}',
            type : 'POST',
            data : data,
            success: function(d){
              if (d == 'DONE') {
                alert('Successfully modified ' + data.id);
                $('div[pd-popup="customer_entry"]').hide();
                LoadMFAccDebtors();
              } else if (d == 'ERROR') {
                alert('ERROR occured on updating ' + data.id);
              } else {
                console.log(d);
              }
            },
            error : function(a, b, c)
            {

            },
          });
        }
      }
      else {
        alert('Fill in the necessary requirements.');
      }
    }
    function edit_C_E(id, name, address, phn_num, fax_num, email, tin_num, cnt_per, mob_num, lmt, MoP, sub_ledger, rmk, TyPe)
    {
      $('.C_E_ADD_MODE').css('display', 'block');
      $('.C_E_DELETE_MODE').css('display', 'none');
      $('div[name="customer_entry_popup"]').addClass('popup-inner-xl');
      $('div[name="customer_entry_popup"]').removeClass('popup-inner');
      $('[pd-popup="customer_entry"]').show();
      load_C_E('C_E_SELECT_MOP', 0);
      load_C_E('C_E_SELECT_MOP', 1);
      $('input[name="C_E_INPUT_ID"]').val(id);
      $('select[name="C_E_SELECT_type"]').select2('val', TyPe);
      $('input[name="C_E_TEXT_NAME"]').val(name);
      $('textarea[name="C_E_TEXTAREA_ADD"]').val(address);
      $('input[name="C_E_TEXT_MOBILE_NUMBER"]').val(mob_num);
      $('input[name="C_E_EMAIL_EMAILADD"]').val(email);
      $('input[name="C_E_TEXT_PHONE"]').val(phn_num);
      $('input[name="C_E_TEXT_TIN"]').val(tin_num);
      $('input[name="C_E_TEXT_FAX"]').val(fax_num);
      $('input[name="C_E_TEXT_CONTACT_PERSON"]').val(cnt_per);
      $('input[name="C_E_TEXT_CREDIT_LIMIT"').val(lmt);
      $('textarea[name="C_E_TEXTAREA_RMKS"]').val(rmk);
      $('span[name="C_E_MODE"]').empty();
      $('span[name="C_E_MODE"]').text('(EDIT)');
      // console.log(MoP);
      setTimeout(function(){ $('select[name="C_E_SELECT_MOP"]').select2('val', MoP); $('select[name="C_E_SELECT_SUBLEDGER"]').select2('val', sub_ledger);}, 1000);
    }
    function delete_C_E(id, name)
    {

      $('[name="C_E_NAME_2beDeleted"]').empty();
      $('[name="C_E_NAME_2beDeleted"]').text(name);
      $('#C_E_DELETE_ID').val(id);
      $('div[name="customer_entry_popup"]').removeClass('popup-inner-xl');
      $('div[name="customer_entry_popup"]').addClass('popup-inner');
      $('.C_E_ADD_MODE').css('display', 'none');
      $('.C_E_DELETE_MODE').css('display', 'block');
      $('span[name="C_E_MODE"]').empty();
      $('span[name="C_E_MODE"]').text('(DELETE)');
      $('[pd-popup="customer_entry"]').show();
    }
    function DeleteC_E_FORM (){
      var data = {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    id  : $('#C_E_DELETE_ID').val(),
                    name : $('[name="C_E_NAME_2beDeleted"]').text(),
                }
      if (data.id != '')
      {
        $.ajax({
          url : '{{ asset('master-file/accounting/deptors/delete') }}',
          type : 'POST',
          data : data,
          success: function(d){
              if (d == 'DONE') {
                alert('Successfully deleted ' + data.name);
                $('div[pd-popup="customer_entry"]').hide();
                LoadMFAccDebtors();
              } else {
                alert('ERROR occured on deleting ' + data.name);
              }
            },
            error : function(a, b, c)
            {

            },
        });
      } else {
        alert('ERROR! Unknown ID to be deleted');
      }
    }
</script>