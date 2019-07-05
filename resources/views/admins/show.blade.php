@extends('layouts.app')

@section('content')
    <h2>Account details</h2>
    <div>
        <strong>Name:</strong> {{ $user->name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $user->email }}
    </div>
    <div>
        <strong>Role:</strong> {{ $user->role->name }}
    </div>
    <div class="d-flex">
        <button class="btn btn-warning"><a href="/admins/{{ $user->id }}/edit">Edit</a></button>
        <form action="/admins/{{ $user->id }}" method="POST" class="pr-5">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endsection