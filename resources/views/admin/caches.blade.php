@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Caches</h3>
        </div>
    </div>
    <div class="clearfix"></div>
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
            @foreach($caches as $cache)
            <tr style="cursor:pointer" class="clickable-row" data-id="{{$cache->id}}" onclick="window.location='/admin/caches/{{$cache->id}}'">
                <td>{{$cache->name}}</td>
                <td>{{$cache->lat}}</td>
                <td>{{$cache->long}}</td>
                <td>{{$cache->status}}</td>
                <td>{{$cache->size}}</td>
                <td>{{$cache->type}}</td>
                <td>
                    @if($cache->approved == 0)
                        False
                    @else
                        True
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function(){
            $('#cachetable').DataTable();
            $('.clickable-row').click(function(){
                window.location='/admin/cache/'+$(this).data('id');
            });
        });
    </script>
@endsection