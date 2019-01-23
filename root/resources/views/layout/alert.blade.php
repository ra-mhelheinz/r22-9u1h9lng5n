@if(Session::has('alert'))
	{!!Session::get('alert')!!}
@endif