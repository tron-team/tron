@extends('widget.base')
@section('body')


    @include('widget.header')
    <div role="main" class="main">
        @yield('content')
    </div>
    @include('widget.footer')



@stop