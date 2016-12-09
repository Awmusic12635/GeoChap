@extends('layouts.app')
@section('content')
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Events</h3>
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
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Upcoming Events</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <p>Discover geocaching events in your local area!</p>

                                    <!-- start event list -->
                                    <table id="eventtable" class="table table-striped projects">
                                        <thead>
                                        <tr>
                                            <th style="width: 1%">#</th>
                                            <th style="width: 20%">Event Name</th>
                                            <th>Attending</th>
                                            <th>Short Description</th>
                                            <th>Event Time</th>
                                            <th style="width: 20%">Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#</td>
                                            <td>
                                                <a>Throwing eggs at Bob!</a>
                                                <br />
                                                <small>Created by admin</small>
                                            </td>
                                            <td>
                                                <ul class="list-inline">
                                                    <li>
                                                        <img src="images/user.png" class="avatar" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="images/user.png" class="avatar" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="images/user.png" class="avatar" alt="Avatar">
                                                    </li>
                                                    <li>
                                                        <img src="images/user.png" class="avatar" alt="Avatar">
                                                    </li>

                                                </ul>
                                            </td>
                                            <td class="project_progress">
                                                <small>Bob is a huge loser and we're gonna pelt him with eggs to make him cry. Also, geocaching.</small>
                                            </td>
                                            <td class="project_progress">
                                                <small>12/11/16 5:00 PM - 6:30 PM</small>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!-- end event list -->

                                </div>
                            </div>
                        </div>
                    </div>
            <!-- /page content -->
                    <!-- jQuery -->
                    <script src="/vendors/jquery/dist/jquery.min.js"></script>
                    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $('#eventtable').DataTable();
                            $('.clickable-row').click(function(){
                                window.location='/events/'+$(this).data('id');
                            });
                        });
                    </script>
@endsection