@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Edit User</h3>
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
                    <h2>Edit User Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/admin/users/'.$user->id) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="textbox" class="form-control" name="username" value="{{ $user->username }}" required autofocus>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="textbox" class="form-control" name="email" value="{{$user->email}}"required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('is_admin') ? ' has-error' : '' }}">
                            <label for="is_admin" class="col-md-4 control-label">Admin:</label>
                            <div class="col-md-6">
                                <select id="is_admin" name="is_admin" class="form-control" required>
                                    <option @if($user->is_admin ==true) selected @endif value="True">Yes</option>
                                    <option @if($user->is_admin ==false) selected @endif value="False">No</option>
                                </select>
                            </div>
                            @if ($errors->has('is_admin'))
                                <span class="help-block">
                    <strong>{{ $errors->first('is_admin') }}</strong>
            </span>
                            @endif
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