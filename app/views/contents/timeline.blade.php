<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>时间轴</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Basic Styles-->
     {{ HTML::style('common/css/bootstrap.css') }}
     {{ HTML::style('contents/css/font-awesome.min.css') }}
     {{ HTML::style('contents/css/beyond.min.css') }}
</head>
<body>
    <div class="page-body">
                    <ul class="timeline">
                        <li class="timeline-node">
                            <a class="btn btn-palegreen">NOW</a>
                        </li>
                        <li>
                            <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                            </div>
                            <div class="timeline-badge blue">
                                <i class="fa fa-tag"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Today</span>
                                            -
                                            <span class="timeline-time">8:19</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Purchased new stationary items for head office</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                            </div>
                            <div class="timeline-badge darkorange">
                                <i class="fa fa-map-marker font-120"></i>
                            </div>
                            <div class="timeline-panel bordered-right-3 bordered-orange">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Today</span>
                                            -
                                            <span class="timeline-time">3:10</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                    <p>
                                        <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-node">
                            <a class="btn btn-yellow">YESTERDAY</a>
                        </li>
                        <li>
                            <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                            </div>
                            <div class="timeline-badge sky">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="timeline-panel bordered-top-3 bordered-azure">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Yesterday</span>
                                            -
                                            <span class="timeline-time">8:19</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                    </p>
                                    Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                            </div>
                            <div class="timeline-badge sky">
                                <img src="assets/img/avatars/Sergey-Azovskiy.jpg" class="badge-picture" />
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="">Sergey Azovskiy</a> has commented on your <a href="">status</a>
                                    </span>
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Yesterday</span>
                                            -
                                            <span class="timeline-time">6:08</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                            </div>
                            <div class="timeline-badge danger">
                                <i class="fa fa-exclamation font-120"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Yesterday</span>
                                            -
                                            <span class="timeline-time">7:00</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                            </div>
                            <div class="timeline-badge">
                                <i class="fa fa-picture-o darkpink"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-header bordered-bottom bordered-blue">
                                    <p class="timeline-datetime">
                                        <small class="text-muted">
                                            <i class="glyphicon glyphicon-time">
                                            </i>
                                            <span class="timeline-date">Yesterday</span>
                                            -
                                            <span class="timeline-time">3:09</span>
                                        </small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                    <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                        <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                    </div>
                                    <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-node">
                            <a class="btn btn-info">11 DECEMBER</a>
                        </li>
                    </ul>
                </div>
</body>
</html>