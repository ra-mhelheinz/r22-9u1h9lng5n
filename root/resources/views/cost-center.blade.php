 
      <div class="popup" pd-popup="cost-center">
              <div class="popup-inner-lg">
                  <div class="modal-header">
                  Cost Center
                  <a class="popup-close" pd-popup-close="cost-center" href="#"> </a>
                  
                  </div>
                        <div class="modal-body" >
                          <div class="row-fluid">

              <button class="btn btn-primary" pd-popup-open="cost-center-info" href="#"><i class="icon-plus"></i> Add New</button>
              <button class="btn btn-info"><i class="icon-pencil"></i> Update</button>
              <button class="btn btn-danger"><i class="icon-remove"></i> Delete </button>
              <button class="btn btn-primary"><i class="icon-chevron-up"></i> Import/Excel </button>
              <button class="btn btn-success"><i class="icon-print"></i> (Re)Print</button>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Cost Center List</h5>
          </div>
          <div class="widget-content">
             <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="Mf_Acc_Cost_Center_List" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Cost Center</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                {{-- <tr class="gradeX">
                  <td>0001</td>
                  <td class="center">---</td>
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
        <button class="btn btn-primary m_close">Save</button>
        <a pd-popup-close="cost-center" href="#" class="btn btn-danger m_close">Close</a>
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
                      data[i].type,
                      '<center>' +
                        '<button class="btn btn-info"><i class="icon-pencil"></i></button>' + 
                        '<button class="btn btn-danger"><i class="icon-remove"></i></button>' + 
                      '</center>'
                    ]);
                }
            }
        },
        error : function(a, b, c){}
    });
  }
</script>