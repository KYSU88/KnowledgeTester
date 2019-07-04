@extends('layouts.app')

@section('content')
<div class="container">
    @if( auth()->user()->role->name === "guest")
        guest
    @endif
    @if( auth()->user()->role->name === "admin")
        admin
    @endif
</div>
@endsection
