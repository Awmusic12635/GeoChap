@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Cache Checkin</h3>
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
                    <h2>Cache Checkin Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" role="form" method="POST" action="{{ url('/caches/'.$cacheId.'/checkIn')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comment (200 max):</label>
                            <div class="col-md-6">
            <textarea id="comment" required="required" class="form-control" name="comment"
                      data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="200"
                      data-parsley-minlength-message="Come on! You need to enter at least a 20 character
                      long description.."
                      data-parsley-validation-threshold="10">{{old('comment')}}</textarea>
                                @if ($errors->has('comment'))
                                    <span class="help-block">
                    <strong>{{ $errors->first('comment') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button type="submit" class="btn btn-success">Checkin</button>
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