@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="col-4">
                <h4>Guest</h4>
                @foreach($users as $user)
                    @if( $user->role->name == 'guest')
                        <a href="/admins/{{ $user->id }}">
                            {{ $user->name }}
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="col-4">
                <h4>Teacher</h4>
                @foreach($users as $user)
                    @if ($user->role->name == 'teacher')
                        <a href="/admins/{{ $user->id }}">
                            {{ $user->name }}
                        </a>
                    @endif
                @endforeach
            </div>
        <div class="col-4">
            <h4>Student</h4>
            @foreach($users as $user)
                @if ($user->role->name == 'student')
                    <a href="/admins/{{ $user->id }}">
                        {{ $user->name }}
                    </a>
                @endif
            @endforeach
        </div>
    </div>
@endsection