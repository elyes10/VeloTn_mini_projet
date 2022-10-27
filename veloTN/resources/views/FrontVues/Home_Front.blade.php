@extends('layouts.FrontMainLayout')
@section('title', 'Home')
<div>
    @section('navbar')
        @parent
    @endsection
</div>

<div>

    @section('content')
        <img src="{{ asset('storage/front') }}/images/veloback.jpg" alt="logo" height="700px"/>

    @endsection
</div>


