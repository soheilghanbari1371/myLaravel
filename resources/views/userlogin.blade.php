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

<body class="login-cover">

<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Tabbed form -->
                <div class="tabbable panel login-form width-400">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#basic-tab1" data-toggle="tab"><h6><i class="icon-checkmark3 position-left"></i> عضو هستید؟</h6></a></li>
                        <li><a href="#basic-tab2" data-toggle="tab"><h6><i class="icon-plus3 position-left"></i> ایجاد حساب کاربری</h6></a></li>
                    </ul>

                    <div class="tab-content panel-body">
                        <div class="tab-pane fade in active" id="basic-tab1">
                            <form method="post" action="{{url('/check_user')}}">
                                @csrf
                                <div class="text-center">
                                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                    <h5 class="content-group">ورود به حساب کاربری <small class="display-block">اطلاعات خود را وارد کنید</small></h5>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="نام کاربری" name="email" required="required">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="کلمه عبور" name="password" required="required">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group login-options">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="remember_me" class="styled" checked="checked">
                                                مرا بخاطر بسپار
                                            </label>
                                        </div>

                                        <div class="col-sm-6 text-right">
                                            <a href="login_password_recover.html">فراموشی کلمه عبور</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn bg-blue btn-block">ورود <i class="icon-arrow-left13 position-right"></i></button>
                                </div>
                            </form>

                            <div class="content-divider text-muted form-group"><span>یا ورود با</span></div>
                            <ul class="list-inline form-group list-inline-condensed text-center">
                                <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
                                <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
                                <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
                                <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
                            </ul>

                        </div>

                        <div class="tab-pane fade" id="basic-tab2">
                            <form method="post" action="{{url('/user_register')}}">
                                @csrf
                                <div class="text-center">
                                    <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                    <h5 class="content-group">ایجاد حساب کاربری <small class="display-block">تمامی فیلد ها ضروری هستند</small></h5>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" name="password" class="form-control" placeholder="کلمه عبور">
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" name="email" class="form-control" placeholder="ایمیل">
                                    <div class="form-control-feedback">
                                        <i class="icon-mention text-muted"></i>
                                    </div>
                                </div>


                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" name="phone" class="form-control" placeholder="شماره همراه">
                                    <div class="form-control-feedback">
                                        <i class="icon-mobile text-muted"></i>
                                    </div>
                                </div>

                                <div class="content-divider text-muted form-group"><span>دیگر</span></div>

                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            عضویت در خبرنامه
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            دریافت پیام مدیران
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="styled">
                                            <a href="#">قبول قوانین</a>
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-indigo-400 btn-block">عضویت <i class="icon-circle-left2 position-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /tabbed form -->


                <!-- Footer -->
                <div class="footer text-white">
                    &copy; ۲۰۱۶. <a href="#">فارسی و راستچین شده</a> توسط <a href="http://codecanyons.ir" target="_blank">کدکانیونز</a>
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
