@extends('layouts.admin')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Users</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                            <div class="well profile_view">
                                <div class="col-sm-12">
                                    <h4 class="brief"><i>
                                            @if($user->is_admin==true)
                                                Admin
                                            @else
                                                User
                                            @endif
                                        </i></h4>
                                    <div class="left col-xs-7">
                                        <h2>{{$user->username}}</h2>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-envelope"></i> Email: {{$user->email}}</li>
                                            <li><i class="fa fa-check-square"></i> Checkins: {{$user->checkins()->count()}}</li>
                                            <li><i class="fa fa-cubes"></i> Caches: {{$user->caches()->count()}}</li>
                                        </ul>
                                    </div>
                                    <div class="right col-xs-5 text-center">
                                        <img src="/images/user.png" alt="" class="img-circle img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-12 bottom text-center">
                                    <div class="col-xs-12 col-sm-6 emphasis">
                                        <button onclick="window.location='/admin/users/{{$user->id}}'" type="button" class="btn btn-primary btn-xs">
                                            <i class="fa fa-user"> </i> View Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection