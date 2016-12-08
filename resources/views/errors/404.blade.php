@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>404 - {{$exception->getMessage()}}</h3>
        </div>
    </div>
@endsection