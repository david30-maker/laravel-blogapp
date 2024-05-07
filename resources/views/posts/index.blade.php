@extends('layouts.app')
@section('content')
<div class="container">
    <div class="titlebar">
        <h1 class="title">Blog list</h1>
    </div>
    <hr>
    <p> The Blog 1 - {{ $post }} </p>
</div>
@endsection