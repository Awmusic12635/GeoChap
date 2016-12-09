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
                                <span class="value text-success"> 2300 </span>
                            </li>
                            <li>
                                <span class="name"> Comments </span>
                                <span class="value text-success"> 2000 </span>
                            </li>
                            <li class="hidden-phone">
                                <span class="name"> Events </span>
                                <span class="value text-success"> 20 </span>
                            </li>
                        </ul>
                        <br />

                        <div id="mainb" style="height:350px;"></div>

                        <div>

                            <h4>Recent Activity</h4>

                            <!-- end of user messages -->
                            <ul class="messages">
                                <li>
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
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
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
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
                                    <img src="images/img.jpg" class="avatar" alt="Avatar">
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

                                    <p class="title">Client Company</p>
                                    <p>Deveint Inc</p>
                                    <p class="title">Project Leader</p>
                                    <p>Tony Chicken</p>
                                </div>

                                <br />
                                <h5>Project files</h5>
                                <ul class="list-unstyled project_files">
                                    <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                                    </li>
                                    <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                    </li>
                                </ul>
                                <br />

                                <div class="text-center mtop20">
                                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                                </div>
                            </div>

                        </section>

                    </div>
                    <!-- end project-detail sidebar -->

                </div>
            </div>
        </div>
    </div>


@endsection