@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-4 col-12">
        <div class="box pull-up">
            <div class="box-body">
                <div id="spark1"></div>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-lg-4 col-12">
        <div class="box pull-up">
            <div class="box-body">
                <div id="spark2"></div>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-lg-4 col-12">
        <div class="box pull-up">
            <div class="box-body">
                <div id="spark3"></div>
            </div>
        </div>
    </div>
    <!-- /.col -->
</div>
<div class="row">
    <div class="col-xl-4 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h5 class="box-title">User activity</h5>
            </div>
            <div class="box-body p-0">
                <div class="media-list media-list-hover media-list-divided">
                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/1.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Maryam Amiri</strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time>
                            </p>
                            <p>Updated his profile picture.</p>
                        </div>
                    </div>

                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/2.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Hossein Shams</strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">2 hours ago</time>
                            </p>
                            <p>Joined a conference at San Francisco.</p>
                        </div>
                    </div>

                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/3.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Ashley Hank</strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">5 hours ago</time>
                            </p>
                            <p>Created a <a href="#">changelog</a> page in the wiki.</p>
                        </div>
                    </div>

                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/4.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Frank Camly</strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">Yesterday</time>
                            </p>
                            <p>Got a 3 hours off from work.</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/1.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Amanda Amiri</strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time>
                            </p>
                            <p>Updated his profile picture.</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/1.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Ema Amiri</strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time>
                            </p>
                            <p>Updated his profile picture.</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="align-self-center" href="#"><img class="avatar" src="../images/avatar/1.jpg" alt="..."></a>
                        <div class="media-body">
                            <p>
                                <a class="hover-primary" href="#"><strong>Maryam </strong></a>
                                <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time>
                            </p>
                            <p>Updated his profile picture.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-8">
        <!-- interactive chart -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Web Traffic</h4>
            </div>
            <div class="box-body">
                <div id="flotRealtime2" style="height: 360px;"></div>
            </div>
            <!-- /.box-body-->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body bg-primary pull-up">
            <div class="font-size-18 flexbox align-items-center">
                <span>Users</span>
                <i class="ion ion-ios-person-outline"></i>
            </div>

            <div class="progress progress-xxs mt-10 mb-0">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="font-weight-300 mb-5">6,568</small>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body bg-danger pull-up">
            <div class="font-size-18 flexbox align-items-center">
                <span>Activity</span>
                <span>6,568</span>
            </div>

            <div class="progress progress-xxs mt-10 mb-0">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="font-weight-300 mb-5"><i class="fa fa-sort-down text-danger mr-1"></i> %18 decrease from last month</small>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body bg-info pull-up">
            <div class="font-size-18 flexbox align-items-center">
                <span>Flow</span>
                <span>6,568</span>
            </div>

            <div class="progress progress-xxs mt-10 mb-0">
                <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-right"><small class="font-weight-300 mb-5"><i class="fa fa-sort-up text-success mr-1"></i> %6 up</small></div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box box-body bg-warning pull-up">
            <div class="font-size-18 flexbox align-items-center">
                <span>Orders</span>
            </div>

            <div class="progress progress-xxs mt-10 mb-0">
                <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="flexbox">
                <strong>135</strong>
                <span class="font-weight-300 mb-5"><i class="fa fa-sort-up text-success mr-1"></i> %6 up</span>
            </small>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-12">
        <div class="box">

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="box-body">
                        <h4><a href="#">Sample Listing Blog Post</a></h4>
                        <p class="time">October 16, 2017</p>

                        <p>Holisticly maximize team building ROI via next-generation resources. Enthusiastically promote team driven customer service and error-free solutions. Dynamically myocardinate vertical leadership for synergistic "outside the box" thinking. Efficiently extend global.</p>

                        <div class="flexbox align-items-center mt-3">
                            <a class="btn btn-primary" href="#">Read more</a>

                            <div class="gap-items-4">
                                <a class="text-muted" href="#">
                                    <i class="fa fa-heart mr-1"></i> 12
                                </a>
                                <a class="text-muted" href="#">
                                    <i class="fa fa-comment mr-1"></i> 3
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 bg-img d-none d-md-block" style="background-image: url(../images/gallery/thumb/13.jpg)"></div>
            </div>
        </div>
    </div>
</div>
@endsection
