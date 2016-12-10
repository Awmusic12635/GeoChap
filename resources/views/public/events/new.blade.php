@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Create Event</h3>
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
                    <h2>Create Event Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/events')}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="textbox" class="form-control" name="name" value="{{old('name')}}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label for="start_date" class="col-md-4 control-label">Start Date</label>
                            <div class="col-md-6">
                                <input id="start_date" type="textbox" placeholder="12/16/2016" class="form-control" name="start_date" value="{{old('start_date')}}" required autofocus>
                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('start_date') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <label for="end_date" class="col-md-4 control-label">Start Date</label>
                            <div class="col-md-6">
                                <input id="end_date" type="textbox" placeholder="12/17/2016" class="form-control" name="end_date" value="{{old('end_date')}}" required autofocus>
                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('end_date') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
                            <label for="short_description" class="col-md-4 control-label">Short Description</label>
                            <div class="col-md-6">
                                <input id="short_description" type="textbox" class="form-control" name="short_description" value="{{old('short_description')}}" required>
                                @if ($errors->has('short_description'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('short_description') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="col-md-4 control-label">Long Description (20 chars min, 200 max):</label>
                                    <div class="col-md-6">
            <textarea id="description" required="required" class="form-control" name="description"
                      data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="200"
                      data-parsley-minlength-message="Come on! You need to enter at least a 20 character
                      long description.."
                      data-parsley-validation-threshold="10">{{old('description')}}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                                        @endif
                                    </div>
                                </div>
                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Location</label>
                            <div class="col-md-6">
                                <input id="location" type="textbox" class="form-control" name="location" value="{{old('location')}}" required>
                                @if ($errors->has('location'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('location') }}</strong>
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
    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
@endsection