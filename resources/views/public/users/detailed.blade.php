@extends('layouts.admin')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>User Profile</h3>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>User Report <small>Activity report</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="img-responsive avatar-view" src="/images/user.png" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                    <h3>{{$user->username}}</h3>

                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope"></i> Email: {{$user->email}}
                        </li>

                        <li>
                            <i class="fa fa-check-square"></i> Checkins: {{$user->checkins->count()}}
                        </li>
                        <li>
                            <i class="fa fa-cubes"></i> Caches: {{$user->caches->count()}}
                        </li>

                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Events</a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Caches</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                <!-- start recent activity -->
                                <ul class="messages">
                                    @foreach($user->checkins->reverse() as $checkin)
                                    <li>
                                        <img src="/images/user.png" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-info">{{$checkin->created_at->day}}</h3>
                                            <p class="month">{{substr(date("F", mktime(0, 0, 0, $checkin->created_at->month, 1)),0,5)}}</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">{{$checkin->cache->name}}</h4>
                                            <blockquote class="message">{{$checkin->comment->message}}</blockquote>
                                            <br />
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- end recent activity -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                <!-- start events -->
                                <table class="data table table-striped no-margin">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Event Name</th>
                                        <th>Description</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->eventCheckins as $eventCheckin)
                                        <tr>
                                            <td>{{$eventCheckin->event->id}}</td>
                                            <td>{{$eventCheckin->event->name}}</td>
                                            <td>{{$eventCheckin->event->short_description}}</td>
                                            <td class="vertical-align-mid">
                                                <button onclick="window.location='/events/{{$eventCheckin->event->id}}'" type="button" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-user"> </i> View Event
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- end events -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                                <!-- start caches -->
                                <table class="data table table-striped no-margin">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Cache</th>
                                        <th>Description</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->caches as $cache)
                                        <tr>
                                            <td>{{$cache->id}}</td>
                                            <td>{{$cache->name}}</td>
                                            <td>{{$cache->short_description}}</td>
                                            <td class="vertical-align-mid">
                                                <button onclick="window.location='/caches/{{$cache->id}}'" type="button" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-user"> </i> View Cache
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- end caches -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- jQuery -->
<script src="/vendors/jquery/dist/jquery.min.js"></script>
<script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
@endsection
