@extends('layouts.admin')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>User Profile</h3>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
            </div>
        </div>
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
                            <img class="img-responsive avatar-view" src="/images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                    </div>
                    <h3>Samuel Doe</h3>

                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope"></i> Email:
                        </li>

                        <li>
                            <i class="fa fa-check-square"></i> Checkins:
                        </li>
                        <li>
                            <i class="fa fa-cubes"></i> Caches:
                        </li>

                        <br />
                        <a class="btn btn-success margin-top: 10px"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                        <br />

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
                            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                <!-- start recent activity -->
                                <ul class="messages">
                                    <li>
                                        <img src="/images/user.png" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-info">24</h3>
                                            <p class="month">May</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">Desmond Davison</h4>
                                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                            <br />
                                            <p class="url">
                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/images/user.png" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-error">21</h3>
                                            <p class="month">May</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">Brian Michaels</h4>
                                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                            <br />
                                            <p class="url">
                                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                <a href="#" data-original-title="">Download</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/images/user.png" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-info">24</h3>
                                            <p class="month">May</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">Desmond Davison</h4>
                                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                            <br />
                                            <p class="url">
                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="/images/user.png" class="avatar" alt="Avatar">
                                        <div class="message_date">
                                            <h3 class="date text-error">21</h3>
                                            <p class="month">May</p>
                                        </div>
                                        <div class="message_wrapper">
                                            <h4 class="heading">Brian Michaels</h4>
                                            <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                            <br />
                                            <p class="url">
                                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                <a href="#" data-original-title="">Download</a>
                                            </p>
                                        </div>
                                    </li>

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
                                    <tr>
                                        <td>1</td>
                                        <td>First Event</td>
                                        <td>sdfasdfasdfasdfasdf</td>
                                        <td class="vertical-align-mid">
                                            <button onclick="window.location='/events/1'" type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Event
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Second Event</td>
                                        <td>dafsdfsdf</td>
                                        <td class="vertical-align-mid">
                                            <button onclick="window.location='/events/1'" type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Event
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Third Event</td>
                                        <td>sdfasdfsd</td>
                                        <td class="vertical-align-mid">
                                            <button onclick="window.location='/events/1'" type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Event
                                            </button>
                                        </td>
                                    </tr>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Cache</td>
                                        <td>sdfasdfasdfasdfasdf</td>
                                        <td class="vertical-align-mid">
                                            <button onclick="window.location='/caches/1'" type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Cache
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Cache</td>
                                        <td>sdfasdfasdfasdfasdf</td>
                                        <td class="vertical-align-mid">
                                            <button onclick="window.location='/caches/1'" type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Cache
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Cache</td>
                                        <td>sdfasdfasdfasdfasdf</td>
                                        <td class="vertical-align-mid">
                                            <button onclick="window.location='/caches/1'" type="button" class="btn btn-primary btn-xs">
                                                <i class="fa fa-user"> </i> View Cache
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- end caches -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                <p>PROFILE INFO HERE!</p>
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
