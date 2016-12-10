@extends('layouts.admin')
@section('content')
    <!-- page content -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Event Details</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{$event->name}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <ul class="stats-overview">
                                    <li>
                                        <span class="name"> Attendees </span>
                                        <span class="value text-success"> {{$checkins->count()}} </span>
                                    </li>
                                    <li>
                                        <span class="name"> Start Date </span>
                                        <span class="value text-success"> {{$event->start_date}} </span>
                                    </li>
                                    <li class="hidden-phone">
                                        <span class="name"> End Date </span>
                                        <span class="value text-success"> {{$event->end_date}} </span>
                                    </li>
                                </ul>
                                <br />

                                <div id="mainb"></div>

                                <div>

                                    <h4>Attendees</h4>

                                    <div class="row">
                                        @foreach($checkins as $checkin)
                                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                            <div class="well profile_view">
                                                <div class="col-sm-12">
                                                    <!--<h4 class="brief"><i>{{$checkin->user->username}}</i></h4>-->
                                                    <div class="left col-xs-7">
                                                        <h2>{{$checkin->user->username}}</h2>
                                                        <p><strong>Status: </strong> Coming </p>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fa fa-building"></i> Total Checkins: {{$checkin->user->checkins->count()}}</li>
                                                            <li><i class="fa fa-phone"></i> Total Caches: {{$checkin->user->caches->count()}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="right col-xs-5 text-center">
                                                        <img src="/images/user.png" alt="" class="img-circle img-responsive">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center">
                                                    <div class="col-xs-12 col-sm-6 emphasis">
                                                        <button onclick="window.location='/users/{{$checkin->user->id}}'" type="button" class="btn btn-primary btn-xs">
                                                            <i class="fa fa-user"> </i> View Profile
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- end of user messages -->


                                </div>


                            </div>

                            <!-- start event-detail sidebar -->
                            <div class="col-md-3 col-sm-3 col-xs-12">

                                <section class="panel">

                                    <div class="x_title">
                                        <h2>Event Description</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">

                                        <p>{{$event->description}}</p>
                                        <br />

                                        <div class="project_detail">

                                            <p class="title">Organized By</p>
                                            <p>{{$event->user->username}}</p>
                                        </div>

                                        <br />
                                        <h5>Details</h5>
                                        <ul class="list-unstyled project_files">
                                            <li><a href=""><i class="fa fa-file-word-o"></i> <strong>Start Time:</strong> {{$event->start_date}}</a>
                                            </li>
                                            <li><a href=""><i class="fa fa-file-pdf-o"></i> <strong>End Time:</strong> {{$event->end_date}}</a>
                                            </li>
                                            <li><a href=""><i class="fa fa-mail-forward"></i> <strong>Location:</strong> {{$event->location}}</a>
                                            </li>
                                        </ul>
                                        <br />

                                        <div class="text-center mtop20">
                                            @if($attending)
                                                <a href="/events/{{$event->id}}/join" class="btn btn-sm btn-primary">Attend</a>
                                            @else
                                                <a href="#" class="btn btn-sm btn-primary">Attending</a>
                                            @endif
                                        </div>
                                    </div>

                                </section>

                            </div>
                            <!-- end project-detail sidebar -->

                        </div>
                    </div>
                </div>
            </div>

    <!-- /page content -->
    <!-- jQuery -->
    <script src="/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
@endsection