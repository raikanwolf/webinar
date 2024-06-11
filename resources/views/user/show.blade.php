@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ $user->name }}</div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Company:</strong> {{ $user->company }}</p>
            <p><strong>Position:</strong> {{ $user->position }}</p>
            <!-- Aquí puedes añadir más detalles y enlaces a su currículum -->
        </div>
    </div>
</div>
@endsection
