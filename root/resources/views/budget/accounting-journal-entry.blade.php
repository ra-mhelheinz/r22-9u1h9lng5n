@extends('_layout')

@section('content')
<div id="content">
  <div id="content-header">
    @php
      $_bc = ['<a href="#">Budget</a>' ,'<a href="'.url('accounting/accounting-journal-entry').'" class="current">Budget Entry List</a>'];
    @endphp
    @include('layout.breadcrumbs')
    <h1>Budget Entry</h1>
    <div class="user-menu">
    </div>
  </div>

  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-search"></i></span>
            <h5>Transaction Date</h5>
          </div>
          <div class="widget-content">
            <div class="col-lg-12">

                      <div class="col-lg-3">
                        <label class="control-label">Period</label>
                          <div class="controls">    
                            <select type="text" name="select_period"  class="span8">
                              @isset($data[1])
                                <option value="">Select Period...</option>
                                @foreach($data[1] as $x03)
                                  <option value="{{$x03->fy}}-{{$x03->mo}}">{{$x03->fy}}-{{$x03->month_desc}}</option>
                                @endforeach
                              @else
                                <option value="">No Period registered...</option>
                              @endisset
                            </select>
                          </div>
                      </div>
                      <div class="col-lg-3">
                        <label class="control-label">Journal</label>
                          <div class="controls">
                              <select class="span8" name="select_journal">
                                @isset($data[0])
                                  <option value="">Select Journal...</option>
                                  @foreach($data[0] as $m05)
                                    <option value="{{$m05->j_code}}">{{$m05->j_desc}}</option>
                                  @endforeach
                                @else
                                  <option value="">No Registered Journal...</option>
                                @endisset
                              </select>
                          </div>
                      </div>
                       {{-- <div class="control-group col-lg-3">
                        <label class="control-label">Branch</label>
                          <div class="controls">
                              <select class="span8">
                                <option>BUTUAN</option>
                                <option>LIIP</option>
                                <option>LIPA</option>
                                <option>STO.TOMAS</option>
                                <option>SUCAT</option>
                              </select>
                          </div>
                      </div> --}}
            </div>
          </div>

      &nbsp;
        </div>
    </div>
  </div>

    <div>
      <a href="#" onclick="CheckB4Redirect();" class="btn btn-primary"><i class="icon-plus"></i> New Journal Entry</a>
      {{-- <button class="btn btn-info"><i class="icon-pencil"></i> Update Journal Entry</button>
      <button class="btn btn-danger"><i class="icon-remove"></i> Cancel Journal Entry</button>
      <button class="btn btn-info"><i class="icon-paper-clip"></i> Import Excel</button> --}}
    </div>
    
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Unposted Entries</h5>
          </div>
          <div class="widget-content nopadding">
            <form>
            <div class="table table-responsive" style="overflow-y:auto;">

            <table id="mtable" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Ref_Num</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Paid_to</th>
                  <th>Check</th>
                  <th>Check_Date</th>
                  <th>Cancel</th>
                  <th>User_ID</th>
                  <th>Branch</th>
                  <th>Branch_ID</th>
                  <th>Options</th>
        </tr>
              </thead>
              <tbody>
        {{--         <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
          <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>

                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
          <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">---</td>
                  <td class="center">-</td>
          <td class="center">---</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
          <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="centertd>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
                  <td>0001</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="center">-/td>
                  <td class="center"></td>
                  <td class="center">-</td>
                  <td class="center">-</td>
          <td class="center">-</td>
                  <td class="center">-</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeX">
                <td><input type="radio" /></td>
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
                </tr> --}}
              </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>  
    <div>
            <button class="btn btn-info"><i class="icon-print"></i> Print Journal Entry</button>
    </div>


      </div>
    </div>
  </div>
</div>
<script>
  {{-- {{url('accounting/accounting-journal-entry/new')}} --}}
  function CheckB4Redirect()
  {
    // select_period
// select_journal
   var per =  $('select[name="select_period"]').val();
   var data =$('select[name="select_period"]').select2('data');
   var ty = data.text.split('-');
   var jor =  $('select[name="select_journal"]').val();
   var tst = $('select[name="select_journal"]').select2('data');
   if (per != '' && jor != '') {
      var test = per.split('-');
      var fy = test[0];
      var mo = test[1];
      var mo_desc = ty[1];
      var token = $('meta[name="csrf-token"]').attr('content');
      location.href = "{{url('accounting/accounting-journal-entry/new')}}/"+fy+"/"+mo+"/"+mo_desc+"/"+jor+"/"+encodeURI(tst.text)+"";
   }
   else
   {
      if (per != '') {
        $('select[name="select_period"]').focus();
      } else if (jor != '') {
        $('select[name="select_journal"]').focus();
      }
   }
  }
</script>
@stop