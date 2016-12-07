@extends('layouts.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <table id="cachetable">
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
            @foreach($caches as $cache)
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
</div>
@endsection