@extends('_layout')

@section('content')
<div id="content">
	<p>404 - Page Not Found.</p>
	<a href="{{URL::current()}}">{{URL::current()}}</a>
</div>
@stop