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


@endsection


