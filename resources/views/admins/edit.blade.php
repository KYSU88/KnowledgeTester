@extends('layouts.app')

@section('content')
    <form action="/admins/{{ $user->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-12">
                <h1>Edit details for {{ $user->name }}</h1>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Name</label>

            <div class="form-group pb-2">
                <input type="text" name="name" id="name" value="{{ old('name') ?? $user->name}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>

            <div class="form-group pb-2">
                <input type="text" name="email" id="email" value="{{ old('email') ?? $user->email}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="role_id">Role</label>

            <select name="role_id" id="role_id" class="form-control">
                <option value="">Select user role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}"}}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection