@extends('layouts.app')
@section("title", 'Success')
@section('content')
<div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection