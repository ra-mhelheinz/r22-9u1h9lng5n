		<div id="breadcrumb">
			<a href="{{route('home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
			@if(count($_bc) != 0)
			{{-- <a href="#" class="current">LINK_NAME</a> --}}
			@for($i=0;$i<count($_bc);$i++)
			{!!$_bc[$i]!!}
			@endfor
			@endif
		</div>