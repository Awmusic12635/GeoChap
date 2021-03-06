@extends('layouts.admin')

@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Add New Cache</h3>
    </div>
</div>
<div class="clearfix"></div>
@if(! empty($success))
    <div class="alert alert-success" role="alert">{{$success}}</div>
@endif
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New Cache Form</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
<form class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/admin/caches') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
            <input id="name" type="textbox" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
        <label for="latitude" class="col-md-4 control-label">Latitude</label>
        <div class="col-md-6">
            <input id="latitude" type="textbox" class="form-control" name="latitude" value="{{old('latitude')}}"required>
            @if ($errors->has('latitude'))
                <span class="help-block">
                    <strong>{{ $errors->first('latitude') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
        <label for="longitude" class="col-md-4 control-label">Longitude</label>
        <div class="col-md-6">
            <input id="longitude" type="textbox" class="form-control" name="longitude" value="{{old('longitude')}}" required>
            @if ($errors->has('longitude'))
                <span class="help-block">
                    <strong>{{ $errors->first('longitude') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
        <label for="size" class="col-md-4 control-label">Size:</label>
        <div class="col-md-6">
            <select id="size" name="size" class="form-control" value="{{old('size')}}"required>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        @if ($errors->has('size'))
            <span class="help-block">
                    <strong>{{ $errors->first('size') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        <label for="type" class="col-md-4 control-label">Type:</label>
        <div class="col-md-6">
            <select id="type" name="type" class="form-control" value="{{old('type')}}" required>
                <option value="traditional">Traditional</option>
            </select>
        </div>
        @if ($errors->has('type'))
            <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
        <label for="short_description" class="col-md-4 control-label">Short Description</label>
        <div class="col-md-6">
            <input id="short_description" type="textbox" class="form-control" name="short_description"
                   value="{{old('short_description')}}"required>
            @if ($errors->has('short_description'))
                <span class="help-block">
                    <strong>{{ $errors->first('short_description') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('long_description') ? ' has-error' : '' }}">
        <label for="long_description" class="col-md-4 control-label">Long Description (20 chars min, 200 max):</label>
        <div class="col-md-6">
            <textarea id="long_description" required="required" class="form-control" name="long_description"
                      data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="200"
                      data-parsley-minlength-message="Come on! You need to enter at least a 20 character
                      long description.."
                      data-parsley-validation-threshold="10" value="{{old('long_description')}}"></textarea>
            @if ($errors->has('long_description'))
                <span class="help-block">
                    <strong>{{ $errors->first('long_description') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="/vendors/jquery/dist/jquery.min.js"></script>
<script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
@endsection