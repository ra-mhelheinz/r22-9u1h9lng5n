@extends('_layout')
@section('content')
<div id="content">
	<div id="content-header">
		@php
	      $_bc = ['<a href="#">Temporary</a>', '<a href="#">Sample Report Forms</a>'];
	    @endphp
	    @include('layout.breadcrumbs')
	    <h1>Report Forms</h1>
	    <div class="user-menu">
	    </div>
	</div>
	<div class="container-fluid">
		<div class="widget-box">
			<div class="widget-content no padding">
				<h4><a href="{{url('temporary/transmital_letter')}}">Transmital Letter</a> <button type="button" onclick="PrintPage('{{url('temporary/transmital_letter')}}')">Print</button></h4>
			</div>
			
		</div>
	</div>
</div>

<script type="text/javascript">
	function PrintPage(page_location) {
		$("<iframe>")
        .hide()
        .attr("src", page_location)
        .appendTo("body");   
	}
</script>
@stop