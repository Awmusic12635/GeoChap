@extends('layouts.admin')

@section('content')
    <table id="cachetable" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Lat</th>
            <th>Long</th>
            <th>Status</th>
            <th>Size</th>
            <th>Type</th>
            <th>Approved</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pendingCaches as $cache)
            <tr>
                <td>{{$cache->name}}</td>
                <td>{{$cache->lat}}</td>
                <td>{{$cache->long}}</td>
                <td>{{$cache->status}}</td>
                <td>{{$cache->size}}</td>
                <td>{{$cache->type}}</td>
                <td>{{$cache->approved}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        $('#cachetable').DataTable();
    </script>
@endsection