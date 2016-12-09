@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Cache</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{$cache->name}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                        <ul class="stats-overview">
                            <li>
                                <span class="name"> Checkins </span>
                                <span class="value text-success"> {{$checkins->count()}} </span>
                            </li>
                            <li>
                                <span class="name"> Comments </span>
                                <span class="value text-success"> {{$checkins->count()}} </span>
                            </li>
                            <li class="hidden-phone">
                                <span class="name"> Events </span>
                                <span class="value text-success"> 20 </span>
                            </li>
                        </ul>
                        <br />
                        <div style="height:350px;width:100%;" id="mainb">{!! Mapper::render() !!}</div>
                        <div id="mainb"></div>
                        <div>
                            <h4>Recent Activity</h4>

                            <!-- end of user messages -->
                            <ul class="messages">
                                @if(!empty($checkins))
                                    @for($i = 0; $i < ($checkins->count() > 4 ? 4 :$checkins->count()); $i++)
                                    <li>
                                        <img src="images/user.png" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-info">{{$checkin[$i]->created_at->day}}</h3>
                                            <p class="month">{{date("F", mktime(0, 0, 0, $checkin[$i]->created_at->month, 1))}}</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">{{$checkin[$i]->user->username}}</h4>
                                            <blockquote class="message">{{$checkin->comment->message}}</blockquote>
                                            <br />
                                        </div>
                                    </li>
                                    @endfor
                                @else
                                    <p>No Activity Yet</p>
                                @endif
                            </ul>
                            <!-- end of user messages -->
                        </div>


                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                        <section class="panel">

                            <div class="x_title">
                                <h2>Cache Description</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">

                                <p>{{$cache->long_description}}</p>
                                <br />

                                <div class="project_detail">

                                    <p class="title">Created By</p>
                                    <p>{{$cache->user->username}}</p>
                                    <p class="title">Status</p>
                                    <p>{{$cache->status}}</p>
                                </div>

                                <br />
                                <h5>Details</h5>
                                <ul class="list-unstyled project_files">
                                    <li><a href=""><i class="fa fa-file-word-o"></i> <strong>Lat: </strong>{{$cache->lat}}</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-file-pdf-o"></i> <strong>Long: </strong>{{$cache->long}}</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-mail-forward"></i> <strong>Type: </strong>{{$cache->type}}</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-picture-o"></i> <strong>Size: </strong>{{$cache->size}}</a>
                                    </li>
                                </ul>
                                <br />
                                @if(Auth::check())
                                <div class="text-center mtop20">
                                    <a href="/cache/{{$cache->id}}/checkIn" class="btn btn-sm btn-primary">Checkin</a>
                                </div>
                                @endif
                            </div>

                        </section>

                    </div>
                    <!-- end project-detail sidebar -->

                </div>
            </div>
        </div>
    </div>


@endsection