@extends('_layout')

@section('header')
<style>
	/*custom style*/
	body {
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
		margin-bottom: 15px;
	}

	.dataTables_filter {
	display: none; 
	}
	.dataTables_length {
	display: none; 
	}

</style>
@stop

@section('content')
@php
	$_footer = 2;
@endphp
<body>
	<div id="content">
	  	<div id="content-header">
		    @php
		      $_bc = ['<a href="'.url('parts/calendar-parts').'" class="current">Calendar</a>'];
		    @endphp
		    @include('layout.breadcrumbs')
		    <h1>Calendar</h1>
		  </div>
	  	<div class="container-fluid">
	  	<hr/>
	  	<div class="row-fluid">
	  		<div class="span8">
				<div class="widget-box">
		          <div class="widget-content">
					<div id='calendar'></div>
				  </div>
				</div>
			</div>
			<div class="span4" >
				<div class="widget-box">
		          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
		            <h5>Event Details</h5>
		          </div>
		          <div class="widget-content nopadding">
					<div class="table table-responsive" style="height: 555px;">
						<div style="overflow-y:auto;">
			            <table class="table table-bordered data-table">
			              <thead>
			                <tr>
			                  <th></th>
			                  <th>Trans. Code</th>
			                  <th>Customer</th>
			                  <th>Outlet</th>
			                  <th>Cancel</th>
			                  <th>Ord. Date</th>
			                  <th>Ord Amount</th>
			                  <th>Disc Amount</th>
			                  <th>Total Amount</th>
			                  <th>NET Amount</th>
			                  <th>Payment</th>
			                  <th>Amount Due</th>
			                  <th>Stock Location</th>
			                  <th>Pay Code</th>
			                  <th>Cashier</th>
			                  <th>Agent ID</th>
			                  <th>Market ID</th>
			                  <th>Rep. ID</th>
			                  <th>Servex No.</th>
			                  <th>Reference</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr class="gradeX">
			                <td><input type="radio" /></td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
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
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
			                  <td class="center">---</td>
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
			                
			                 

			                
			               
			              </tbody>
			              </table>
			              </div>
			            </div>

				  </div>
				</div>
			</div>
		</div>
		</div>
	</div>

</body>
@stop

@section('footer')
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'title',
				right: 'prev,today,next'
			},
			
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-11-01',
				},
				{
					title: 'All Day Event',
					start: '2017-11-01',
				},
				{
					title: 'Long Event',
					start: '2017-11-07',
					end: '2017-11-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-11-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-11-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-11-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-11-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-11-11',
					end: '2017-11-13'
				},
				{
					title: 'Meeting',
					start: '2017-11-12T10:30:00',
					end: '2017-11-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-11-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-11-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-11-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-11-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-11-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-11-28'
				}
			]
		});
		
	});

</script>
@stop
