@include ('authorize') {{-- done --}}
@include ('authorize-appointment') {{-- done --}}
{{-- @include ('cost-center') {{ done }}}}
@include ('cost-center-info') {{ done --}}

@include ('sub-cost-center') {{-- done --}}
@include ('sub-cost-center-info') {{-- done --}}

@include ('suppliers') {{-- done --}}
@include ('suppliers-info') {{-- done --}}

@include ('sales_itm') {{-- done --}}
@include ('sales_txt_itm') {{-- done --}}

@include ('service_dealers') {{-- done --}}
@include ('service_dealers_info') {{-- done --}}

@include ('assembled_item') {{-- done --}}

@include ('itm') {{-- done --}}

@include ('inventory_generic') {{-- done --}}
@include ('inventory_generic_info') {{-- done --}}

@include ('inventory_vat') {{-- done --}}
@include ('inventory_vat_info') {{-- done --}}

@include ('inventory_stock_location') {{-- done --}}
@include ('inventory_stock_location_info') {{-- done --}}

@include ('inventory_mode_payment') {{-- done --}}
@include ('inventory_mode_payment_info') {{-- done --}}

@include ('inventory_print_barcode') {{-- done --}}

@include ('txt_item') {{-- done --}}

@include ('sales_outlet') {{-- done --}}
@include ('sales_outlet_info') {{-- done --}}

@include ('service_brand') {{-- done --}}
@include ('service_brand_info') {{-- done --}}

@include ('service_car') {{-- done --}}
@include ('service_car_info') {{-- done --}}

@include ('service_vehicle') {{-- done --}}
@include ('service_vehicle_info') {{-- done --}}

@include ('service_color') {{-- done --}}
@include ('service_color_info') {{-- done --}}

@include ('service_repair_status') {{-- done --}}

@include ('service_technician') {{-- done --}}
@include ('service_technician_info') {{-- done --}}

@include ('service_perform') {{-- done --}}
@include ('service_perform_info') {{-- done --}}

@include ('part_order_auto_loan') {{-- done --}}

@include ('crm_text_blast_template') {{-- done --}}

@include ('crm_text_blast_category') {{-- done --}}

@include ('card_search') {{-- done --}}
@include ('card_info') {{-- done --}}

@include ('unit_search') {{-- done --}}
@include ('vehicle_entry') {{-- done --}}

@include ('journalize') {{-- done --}}

@include ('journalize_inventory') {{-- done --}}

@include ('sales_agent') {{-- done --}}
@include ('sales_agent_info') {{-- done --}}

@include ('sales_discount') {{-- done --}}
@include ('sales_discount_info') {{-- done --}}

@include ('sales_pos') {{-- done --}}
@include ('sales_pos_info') {{-- done --}}

@include ('sales_item') {{-- done --}}

@include ('inventory_item_category') {{-- done --}}
@include ('inventory_item_category_info') {{-- done --}}

@include ('inventory_item_unit') {{-- done --}}
@include ('inventory_item_unit_info') {{-- done --}}

@include ('inventory_items') {{-- done --}}

@include ('itm_search') {{-- done --}}

{{-- @include ('supplier_search') {{ done }} --}}
{{-- @include ('supplier_entry') {{ done }} --}}

{{-- @include ('customer_register') --}} {{-- done --}}
{{-- @include ('cust_entry') --}} {{-- done --}}


@include ('customer_search') {{-- done --}}
@include ('customer_entry') {{-- done --}}
@include ('customer_entry_delete')

@include ('import') {{-- done --}}
<script type="text/javascript">
	    // $(document).ready( function() {
     //      $('#mtable').dataTable( {
     //        "sScrollX": "100%",
     //        "bInfo":false,
     //        "bFilter":false,
     //        "bPaginate":false,
     //        "bLengthChange":false
            
     //      } );
     //     } );
	    // $(document).ready( function() {
     //      $('#mtable1').dataTable( {
     //        "sScrollX": "100%",
     //        "bInfo":false,
     //        "bFilter":false,
     //        "bPaginate":false,
     //        "bLengthChange":false
            
     //      } );
     //     } );
	    // $(document).ready( function() {
     //      $('#mtable2').dataTable( {
     //        "sScrollX": "100%",
     //        "bInfo":false,
     //        "bFilter":false,
     //        "bPaginate":false,
     //        "bLengthChange":false
            
     //      } );
     //     } );
	    // $(document).ready( function() {
     //      $('#mtable3').dataTable( {
     //        "sScrollX": "100%",
     //        "bInfo":false,
     //        "bFilter":false,
     //        "bPaginate":false,
     //        "bLengthChange":false
            
     //      } );
     //     } );
	    // $(document).ready( function() {
     //      $('#mtable5').dataTable( {
     //        "sScrollX": "100%",
     //        "bInfo":false,
     //        "bFilter":false,
     //        "bPaginate":false,
     //        "bLengthChange":false
            
     //      } );
     //     } );
</script>
</div>
<div class="row-fluid">
  <div id="footer" class="2"> 2018 &copy;FOOTER-1. Powered by <a href="http://rightappsofficial.com/">RIGHT APPS Solution And Services !</a> </div>
</div>

<!--end-Footer-part-->
<script src="{{asset('js/jquery.min.js')}}"></script> 
<script src="{{asset('js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/matrix.login.js')}}"></script> 
<script src="{{asset('js/jquery.uniform.js')}}"></script> 
<script src="{{asset('js/select2.min.js')}}"></script> 

<script src="{{asset('js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('js/matrix.login.js')}}"></script> 
<script src="{{asset('js/matrix_02.js')}}"></script> 
<script src="{{asset('js/matrix.tables.js')}}"></script>
<script src="{{asset('js/matrix.calendar.js')}}"></script>

<script src="{{asset('js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('js/modal_script10.js')}}"></script> 
<script src="{{asset('js/bootstrap-colorpicker.js')}}"></script> 
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script> 
<script src="{{asset('js/masked.js')}}"></script> 
<script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{asset('js/matrix.form_common.js')}}"></script> 

@yield('footer')





</body>
</html>