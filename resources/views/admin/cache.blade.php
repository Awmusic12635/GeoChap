@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Cache</h3>
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
                    <h2>Edit Cache Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/admin/caches/'.$cache->id) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="textbox" class="form-control" name="name" value="{{ $cache->name }}" required autofocus>
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
                                <input id="latitude" type="textbox" class="form-control" name="latitude" value="{{$cache->lat}}"required>
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
                                <input id="longitude" type="textbox" class="form-control" name="longitude" value="{{$cache->long}}" required>
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
                                <select id="size" name="size" class="form-control" required>
                                    <option @if($cache->size =="small") selected @endif value="small">Small</option>
                                    <option @if($cache->size =="medium") selected @endif value="medium">Medium</option>
                                    <option @if($cache->size =="large") selected @endif value="large">Large</option>
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
                                <select id="type" name="type" class="form-control" required>
                                    <option @if($cache->type =="traditional") selected @endif value="traditional">Traditional</option>
                                </select>
                            </div>
                            @if ($errors->has('type'))
                                <span class="help-block">
                    <strong>{{ $errors->first('type') }}</strong>
            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Status:</label>
                            <div class="col-md-6">
                                <select id="status" name="status" class="form-control" required>
                                    <option @if($cache->status =="good") selected @endif value="good">Good</option>
                                    <option @if($cache->status =="missing") selected @endif value="missing">Missing</option>
                                    <option @if($cache->status =="damaged") selected @endif value="damaged">Damaged</option>
                                </select>
                            </div>
                            @if ($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('approved') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Approved:</label>
                            <div class="col-md-6">
                                <select id="approved" name="approved" class="form-control" required>
                                    <option @if($cache->approved ==1) selected @endif value="true">True</option>
                                    <option @if($cache->approved ==0) selected @endif value="false">False</option>
                                </select>
                            </div>
                            @if ($errors->has('approved'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('approved') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
                            <label for="short_description" class="col-md-4 control-label">Short Description</label>
                            <div class="col-md-6">
                                <input id="short_description" type="textbox" class="form-control" name="short_description"
                                       value="{{$cache->short_description}}"required>
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
                      data-parsley-validation-threshold="10">{{$cache->long_description}}</textarea>
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
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection