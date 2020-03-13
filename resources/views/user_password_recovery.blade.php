<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>قالب مدیریتی اساک</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/login.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body class="pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(-100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> رفتن به وبسایت</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> تماس با مدیر</span>
                </a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <span class="visible-xs-inline-block position-right"> آپشن</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container" style="min-height:349px">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Password recovery -->
                <form action="{{url('user/send/password/recovery/email')}}" method="post">
                    @csrf
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
                            <h5 class="content-group">بازیابی کلمه عبور <small class="display-block"></small></h5>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="email" name="email" class="form-control" placeholder="ایمیل">
                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                        </div>

                        <button type="submit" class="btn bg-blue btn-block">بازیابی کلمه عبور <i class="icon-arrow-left13 position-right"></i></button>
                    </div>
                </form>
                <!-- /password recovery -->


                <!-- Footer -->
                <div class="footer text-muted">
                    © ۲۰۱۶. <a href="#">فارسی و راستچین شده</a> توسط <a href="http://codecanyons.ir" target="_blank">کدکانیونز</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->



</body>
</html>

