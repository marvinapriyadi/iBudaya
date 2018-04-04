@extends('layouts.app')

@section('content')
<h1>Home</h1>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>
@endsection

@section('sidebar')
    @parent
    <p>Akan meniban yang di app.blade</p>
@endsection