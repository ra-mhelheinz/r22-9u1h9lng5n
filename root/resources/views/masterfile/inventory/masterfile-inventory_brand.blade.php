@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Master File</a>', '<a href="#">Inventory</a>', '<a href="" class="current">Brand</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Brand</h1>
    <div class="user-menu">
    </div>
  </div>
  <div class="container-fluid">
    <div>
          <button class="btn btn-primary" pd-popup-open="small" href="#Add" onclick="emptyAdd()"><i class="icon-plus"></i> Add New</button>
          <button class="btn btn-success"><i class="icon-print"></i> Print List</button>
    </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Brand List</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th width="10%">Options</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($data as $b)
                  <tr class="gradeX">
                    <td><center>{{$b->brd_code}}</center></td>
                    <td class="center"><center>{{$b->brd_name}}</center></td>
                    <td class="center">
                      <center>
                        <a href="#Update" pd-popup-open="small" class="btn btn-info" type="button" onclick="EditMode('{{$b->brd_code}}', '{{$b->brd_name}}');"><i class="icon-pencil"></i></a>
                        <a href="#" pd-popup-open="small" class="btn btn-danger" type="button" onclick="DeleteMode('{{$b->brd_code}}', '{{$b->brd_name}}')"><i class="icon-remove"></i></a>
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
    
    <!-- @Modal -->
        <div id="Add" class="popup" pd-popup="small">
    <div class="popup-inner" style="height: auto">
      <form id="AddForm" method="post" action="">
        {{ csrf_field() }}
        <div class="modal-header">
          Brand <span id="MOD_MODE"></span>
          <a class="popup-close" pd-popup-close="small" href="#"> </a>

        </div>
        <div class="modal-body" style="height: 300px">
          <div class="row-fluid">
            <div class="col-lg-10"> 
              <span class="AddMode EditMode">
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label> Code <span style="color:red;font-weight: bolder">*</span></label>
                    <input type="text" name="txt_code" maxlength="3" style="text-transform: uppercase;" required>
                  </div>
                </div>
                <div class="control-group col-lg-12">
                  <div class="controls">
                    <label>Name <span style="color:red;font-weight: bolder">*</span></label>
                    <input class="span8" type="text" name="txt_name" required>
                  </div>
                </div>
              </span>
              <div class="DeleteMode control-group col-lg-12" style="display: none">
                <div class="controls">
                  <label for="">Are you sure you want to delete <span style="color:red;font-weight: bold" id="DeleteName"></span> from Brand List ?</label>
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

  <!-- @endModal -->
            
      </div>
    </div>

    <script>

   function emptyAdd()
  {
    $('input[name = "txt_name"]').val('');
    $('input[name = "txt_name"]').attr('required', '');
    $('input[name = "txt_code"]').val('');
    $('input[name = "txt_code"]').attr('required', '');
    $('input[name = "txt_code"]').removeAttr('readonly');
    
    $('#EditMode').hide();
    $('#AddForm').attr('action', '{{url('master-file/inventory/brand')}}');
    $('.EditMode').hide();
    $('.AddMode').show();
    $('.DeleteMode').hide();
    status('(Add)');
  }


      function EditMode(code, desc)
      {
    $('input[name="txt_name"]').val(desc);
    $('input[name="txt_name"]').attr('required', '');
    $('input[name="txt_code"]').val(code);
    $('input[name="txt_code"]').attr('required', '');
    $('input[name="txt_code"]').attr('readonly','');
    
    $('#AddForm').attr('action', '{{url('master-file/inventory/brand/update')}}');
    $('#EditMode').show();
    $('.AddMode').hide();
    $('.EditMode').show();
    $('.DeleteMode').hide();
    status('(Edit)');
  }

  function DeleteMode(code, desc)
  {
    $('input[name="txt_code"]').val(code);
    $('#DeleteName').text(desc);
    $('input[name="txt_name"]').removeAttr('required', '');
    $('input[name="txt_code"]').removeAttr('required', '');
    
    $('#AddForm').attr('action', '{{url('master-file/inventory/brand/delete')}}');
    $('.AddMode').hide();
    $('.EditMode').hide();
    $('.DeleteMode').show();
    status('(Delete)');
  }

  function status(name)
  {
     $('#MOD_MODE').text(name);
  }

    </script>
  

@endsection