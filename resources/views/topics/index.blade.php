@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Topics and Participants</h1>
    @foreach ($users as $user)
        <div class="card mb-3">
            <div class="card-header">{{ $user->name }} - {{ $user->position }} at {{ $user->company }}</div>
            <div class="card-body">
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">View Profile</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
