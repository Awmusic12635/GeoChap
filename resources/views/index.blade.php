@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Home</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div style="height:350px;width:100%;" id="map">{!! Mapper::render() !!}</div>
            <div class="x_panel">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Newest Caches <small>Latest 10</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @foreach($caches as $cache)
                    <article class="media event">
                        <a class="pull-left date">
                            <p class="month">{{date("F", mktime(0, 0, 0, $cache->created_at->month, 1))}}</p>
                            <p class="day">{{$cache->created_at->day}}</p>
                        </a>
                        <div class="media-body">
                            <a class="title" href="/cache/{{$cache->id}}">{{$cache->name}}</a>
                            <p>{{$cache->short_description}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection


