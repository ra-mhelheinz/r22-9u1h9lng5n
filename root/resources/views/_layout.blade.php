@include('layout.header')

@php
	$link = "#";
	// $_footer = "";
	$_bc = [];
@endphp

@include('layout.alert')
@yield('content')

@php
	// dd($_footer);
@endphp

@isset($_footer)
@switch($_footer)
    @case($_footer == 1)
        @include('layout.footer')
        @break

@case($_footer == 2)
        @include('layout.calendar_footer')
        @break

    @default
        @include('layout.footer')
@endswitch
@else
@include('layout.footer')
@endisset

